<style>

</style>
<section>

    <header>
        @php
            $checkin_date = date("l d-m-Y", strtotime($reservation->checkin_date));
            $checkout_date = date("l d-m-Y h:i A", strtotime($reservation->checkout_date ));
            $timeCreated = date("l d-m-Y h:i A", strtotime($reservation->reservation_created_at ));
            
        @endphp
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
            <u>{{ __('Reservation Details') }}</u>
        </h2>
        <ul class="text-gray-500 dark:text-gray-400" style="list-style-type:disc;list-style-position:inside;">
            <li>Reservation Code: <b>{{$reservation->reservation_code}}</b></li>
            <li>Full Name: <b>{{$reservation->name}}</b></li>
            <li>Email: <b>{{$reservation->email}}</b></li>
            <li>Room: <b>{{$reservation->room}}</b></li>
            <li>Check-in Date: <b>{{$checkin_date}}</b></li>
            <li>Check-out Date/Time: <b>{{$checkout_date}}</b></li>
            <li>Lighting Preference: <b>{{$reservation->lighting}}</b></li>
            <li>Bedspread Preference: <b>{{$reservation->bedspread}}</b></li>
            <li>Heater: <b>{{$reservation->heater}}</b></li>
            <li>Air Condition: <b>{{$reservation->air_condition}}</b></li>
            <li>Total Amount: <b>£{{$reservation->total_amount}}</b></li>
            <li>Time Created: <b>{{$timeCreated}}</b></li>
        </ul>
        @if ($is_admin == 1)
            <form id="delete-form" action="{{ route('reservation.delete', $reservation->reservation_code) }}" method="POST" style="">
                @csrf
                @method('DELETE')
                <x-danger-button class="mt-4">
                    {{ __('Delete Reservation') }}
                </x-danger-button>
            </form>
        @else
            <p class="text-gray-500 dark:text-gray-400 mt-4 text-danger" style="color:red"><b>Want to cancel reservation? Call +1234567890<b></p>
        @endif
    </header>   



</section>