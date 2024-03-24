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
        <ul class="text-white" style="list-style-type:disc;list-style-position:inside;">
            <li>Reservation Code: <b>{{$reservation->reservation_code}}</b></li>
            <li>Full Name: <b>{{$reservation->name}}</b></li>
            <li>Full Email: <b>{{$reservation->email}}</b></li>
            <li>Full Room: <b>{{$reservation->room}}</b></li>
            <li>Check-in Date: <b>{{$checkin_date}}</b></li>
            <li>Check-out Date/Time: <b>{{$checkout_date}}</b></li>
            <li>Lighting Preference: <b>{{$reservation->lighting}}</b></li>
            <li>Bedspread Preference: <b>{{$reservation->bedspread}}</b></li>
            <li>Heater: <b>{{$reservation->heater}}</b></li>
            <li>Air Condition: <b>{{$reservation->air_condition}}</b></li>
            <li>Total Amount: <b>£{{$reservation->total_amount}}</b></li>
            <li>Time Created: <b>{{$timeCreated}}</b></li>
        </ul>

    </header>   



</section>