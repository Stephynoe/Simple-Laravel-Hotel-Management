<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hotel Management Customer Dashboard') }}

        </h2>
    </x-slot>

    @if( count($reservations) < 1 )

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">You do not have any reservation</h2>
                    </div>
                </div>
            </div>
        </div>
    @else

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">You have {{count($reservations)}} reservation(s)</h2>
                    </div>
                </div>
            </div>
        </div>

        

        @foreach ($reservations as $reservation)
            @php
                $checkin_date = date("l d-m-Y", strtotime($reservation->checkin_date));
                $checkout_date = date("l d-m-Y h:i A", strtotime($reservation->checkout_date ));
                
            @endphp
            <a href="/reservation/detail/{{ $reservation->reservation_code }}">
                <div class="py-2">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="border: #6a6c6d 1px solid">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <b>{{ $reservation->room }}</b> from <b>{{ $checkin_date }}</b> to <b>{{ $checkout_date }}</b>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-top:1em">{{ $reservations->links() }}</div>

    @endif

   
</x-app-layout>
