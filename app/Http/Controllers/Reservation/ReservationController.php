<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Reservation;
use Illuminate\Support\Facades\Redirect;

class ReservationController extends Controller
{
    public function dashboard()
    {
        $email = auth()->user()->email;
        $reservations = Reservation::where('email', $email)->orderByDesc('id')->paginate(10);

        return view('dashboard', ['reservations' => $reservations]);
    }

    public function generateUniqueCode()
    {
        $uniqueCode = Str::random(12); // Generates a random string of 8 characters

        // Optionally, you can add a prefix or suffix to the code
        $uniqueCode = 'RESERVATION-' . $uniqueCode;

        // Check if the code already exists in the database
        $existingCode = Reservation::where('reservation_code', $uniqueCode)->first();

        if ($existingCode) {
            // If the code already exists, generate a new one
            return $this->generateUniqueCode();
        }

        return $uniqueCode;
    }

    /**
     * Count the number of reservations where a given start or end date is between the check-in and check-out dates for a specific room.
     *
     * @param string $startDate
     * @param string $endDate
     * @param int $roomId
     * @return int
     */
    public function countReservationsForDateRangeAndRoom($startDate, $endDate, $roomId)
    {
        $startDate = Carbon::parse($startDate);
        $endDate = Carbon::parse($endDate);
    
        return Reservation::where('room', $roomId)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('checkin_date', [$startDate, $endDate->endOfDay()])
                    ->orWhereBetween('checkout_date', [$startDate->startOfDay(), $endDate->endOfDay()])
                    ->orWhere(function ($subQuery) use ($startDate, $endDate) {
                        $subQuery->where('checkin_date', '<=', $startDate->startOfDay())
                            ->where('checkout_date', '>=', $endDate->endOfDay());
                    });
            })
            ->count();
    }


    /**
     * Get the reservations where a given start or end date is between the check-in and check-out dates for a specific room.
     *
     * @param string $startDate
     * @param string $endDate
     * @param int $roomId
     * @return void
     */
    public function getReservationsForDateRangeAndRoom($startDate, $endDate, $roomId)
    {
        $startDate = Carbon::parse($startDate);
        $endDate = Carbon::parse($endDate);

        $reservations = Reservation::where('room', $roomId)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('checkin_date', [$startDate, $endDate->endOfDay()])
                    ->orWhereBetween('checkout_date', [$startDate->startOfDay(), $endDate->endOfDay()])
                    ->orWhere(function ($subQuery) use ($startDate, $endDate) {
                        $subQuery->where('checkin_date', '<=', $startDate->startOfDay())
                            ->where('checkout_date', '>=', $endDate->endOfDay());
                    });
            })
            ->get(['room', 'checkin_date', 'checkout_date']);


        
        foreach ($reservations as $reservation) {
            $checkin_date = Carbon::parse($reservation->checkin_date);$checkin_date = $checkin_date->format('l d-m-Y');
            $checkout_date = Carbon::parse($reservation->checkout_date);$checkout_date = $checkout_date->format('l d-m-Y');
            $startDate = $startDate->format('l d-m-Y');
            $endDate = $endDate->format('l d-m-Y');
            return "$reservation->room is not available between $startDate and $endDate, it has been booked from $checkin_date to $checkout_date";
        }
    }




    /**
     * Display the user's reservation form.
     */
    public function view(Request $request): View
    {
        return view('reservation.view', [
            'user' => $request->user()
        ]);
    }

    public function success(Request $model)
    {
        //dd($model);
        //return redirect()->route('reservation.success', ['reservation'=>$serializedModel]);
        return view('reservation.success', ['Reservation' => $model]);
        
    }

    public function create(Request $reservation_data){
        
        //handling date
        $checkInDate = $reservation_data->checkin_date;
        $checkInDate = Carbon::parse($checkInDate);
        $lodge = intval($reservation_data->days);
        $checkout_DateTime = $checkInDate->addDays($lodge)->addHours(12); // Adding 7 days and 12 hours (7.5 days)
        $checkout_DateTime = Carbon::parse($checkout_DateTime);
        $checkout_DateTime = $checkout_DateTime->format('Y-m-d H:i');

        $currentDate = Carbon::now();
        $currentDate = $currentDate->format('Y-m-d');

        if (Carbon::parse($reservation_data->checkin_date)->lt($currentDate)) {
            
            return back()->withInput()->with('pastdate', 'The Check-in date you picked is in the past');

        } else {

            //checking if room is available
            $booked = $this->countReservationsForDateRangeAndRoom($reservation_data->checkin_date, $checkout_DateTime, $reservation_data->room);
            if ($booked <= 0) {

                //additional user data
                $first_name = auth()->user()->first_name;
                $last_name = auth()->user()->last_name;
                $name = $first_name.' '.$last_name;
                $email = auth()->user()->email;
                $total_amount = $lodge * 120;

                //generate unique reservation code
                $reservationCode = $this->generateUniqueCode();

                //generate the time created
                $currentDateTime = Carbon::now();
                $currentDateTime = $currentDateTime->format('Y-m-d H:i:s');

                if ($reservation_data->card_number == null || $reservation_data->card_expiration == null || $reservation_data->card_pin == null || $reservation_data->card_cvv == null){
                    return back()->withInput()->with('pay', "$reservation_data->room is avaialable, scroll down and make your payment");
                } else {
                    if ($reservation_data->card_number === "7662 4075 3842 0239" && $reservation_data->card_expiration === "11/27" && $reservation_data->card_pin === "8713" && $reservation_data->card_cvv === "736") {
                        
                        //set the data
                        $data = ([
                            'name' => $name,
                            'email' => auth()->user()->email,
                            'room' => $reservation_data->room,
                            'checkin_date' => $reservation_data->checkin_date,
                            'checkout_date' => $checkout_DateTime,
                            'lighting' => $reservation_data->lighting,
                            'bedspread' => $reservation_data->bedspread,
                            'heater' => $reservation_data->heater,
                            'air_condition' => $reservation_data->air_conditioner,
                            'reservation_code' => $reservationCode,
                            'total_amount' => $total_amount,
                            'reservation_created_at' => $currentDateTime,
                        ]);

                        $model = Reservation::create($data);
                        if ($model->id){
                            session()->flash('reservation_models', $model);
                            return redirect('/reservation/success');
                            //return redirect()->route('reservation.success', $model->reservation_code);
                        }

                    } else {

                        return back()->withInput()->with('incorrectcardpin', "There is an error in the card details you provided");
                    
                    }
                }


                
            } else {
                $reservation = $this->getReservationsForDateRangeAndRoom($reservation_data->checkin_date, $checkout_DateTime, $reservation_data->room);
                return back()->withInput()->with('booked', $reservation);
                
            }
            
        }

        

    }
}
