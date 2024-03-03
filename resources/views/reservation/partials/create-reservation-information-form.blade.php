<style>
    select option[value=""][disabled] {
        color: #ccc;
    }

    .cs-input{
        padding: 10px 10px;
    }

    .cs-select, .cs-input {
        background-color: #111827;
        color: white;
        border-radius: 5px;
        border: 1px solid rgba(255, 255, 255, 0.2)
    }
</style>
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <u>{{ __('Customer Information') }}</u>
        </h2>

    </header>   

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="mt-6 space-y-6">
        <div class="mt-1 block w-full text-white">
            Name
            <div class="cs-input">{{$user->first_name}} {{$user->last_name}}</div>
        </div>
        <div class="mt-1 block w-full text-white">
            Email: 
            <div class="cs-input">{{$user->email}}</div>
        </div>
    </div>

    <div class="mt-6 space-y-6">

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <u>{{ __('Reservation Details') }}</u>
        </h2>

            

        <div>  
            <x-input-label for="room" :value="__('Room')" />
            <select id="room" name="room" class="cs-select mt-1 block w-full" required autofocus>
                <option value="" disabled selected>Select a room</option>
                <option value="Room 1">Room 1</option> 
                <option value="Room 2">Room 2</option>
                <option value="Room 3">Room 3</option>
                <option value="Room 4">Room 4</option>
                <option value="Room 5">Room 5</option>
                <option value="Room 6">Room 6</option>
                <option value="Room 7">Room 7</option>
                <option value="Room 8">Room 8</option>
                <option value="Room 9">Room 9</option>
                <option value="Room 10">Room 10</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('room')" />
        </div>

        <div>
            <x-input-label for="checkin_date" :value="__('Check-in Date')" />
            <x-text-input id="checkin_date" name="checkin_date" type="date" class="mt-1 block w-full" :value="old('name', $user->checkin_date)" required autofocus/>
            <x-input-error class="mt-2" :messages="$errors->get('checkin_date')" />
        </div>

        <div>
            <x-input-label for="days" :value="__('Number of Days to Spend')" />
            <select id="days" name="days" class="cs-select mt-1 block w-full" required autofocus>
                <option value="" disabled selected>Select number of days to lodge</option>
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('days')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </div>
</section>
