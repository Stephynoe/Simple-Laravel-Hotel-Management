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
    @if (session('pastdate'))
        <p style="color:red;font-weight:bold;margin-bottom:1em">
            {{session('pastdate')}}
        </p>
    @endif

    @if (session('booked'))
        <p style="color:red;font-weight:bold;margin-bottom:1em">
            {{session('booked')}}
        </p>
    @endif

    @if (session('incorrectcardpin'))
        <p style="color:red;font-weight:bold;margin-bottom:1em">
            {{session('incorrectcardpin')}}
        </p>
    @endif
    
    @if (session('pay'))
        <p style="color:green;font-weight:bold;margin-bottom:1em">
            {{session('pay')}}
        </p>
    @endif
    

    <header>

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            <u>{{ __('Customer Information') }}</u>
        </h2>

    </header>   


    <form id="ctreate-reservation" method="post" action="{{ route('reservation.create') }}">
        @csrf

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
                    <option value="Room 1" {{ old('room') == 'Room 1' ? 'selected' : '' }}>Room 1</option> 
                    <option value="Room 2" {{ old('room') == 'Room 2' ? 'selected' : '' }}>Room 2</option>
                    <option value="Room 3" {{ old('room') == 'Room 3' ? 'selected' : '' }}>Room 3</option>
                    <option value="Room 4" {{ old('room') == 'Room 4' ? 'selected' : '' }}>Room 4</option>
                    <option value="Room 5" {{ old('room') == 'Room 5' ? 'selected' : '' }}>Room 5</option>
                    <option value="Room 6" {{ old('room') == 'Room 6' ? 'selected' : '' }}>Room 6</option>
                    <option value="Room 7" {{ old('room') == 'Room 7' ? 'selected' : '' }}>Room 7</option>
                    <option value="Room 8" {{ old('room') == 'Room 8' ? 'selected' : '' }}>Room 8</option>
                    <option value="Room 9" {{ old('room') == 'Room 9' ? 'selected' : '' }}>Room 9</option>
                    <option value="Room 10" {{ old('room') == 'Room 10' ? 'selected' : '' }}>Room 10</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('room')" />
            </div>

            <div>
                <x-input-label for="checkin_date" :value="__('Check-in Date')" />
                <x-text-input id="checkin_date" name="checkin_date" type="date" class="mt-1 block w-full" value="{{ old('checkin_date') }}" required autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('checkin_date')" />
            </div>
            
            <div>
                <x-input-label for="days" :value="__('Number of Days to Spend')" />
                <select id="days" name="days" class="cs-select mt-1 block w-full" required autofocus>
                    <option value="" disabled selected>Select number of days to lodge</option>
                    <option value="1" {{ old('days') == '1' ? 'selected' : '' }}>1</option> 
                    <option value="2" {{ old('days') == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ old('days') == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ old('days') == '4' ? 'selected' : '' }}>4</option>
                    <option value="5" {{ old('days') == '5' ? 'selected' : '' }}>5</option>
                    <option value="6" {{ old('days') == '6' ? 'selected' : '' }}>6</option>
                    <option value="7" {{ old('days') == '7' ? 'selected' : '' }}>7</option>
                    <option value="8" {{ old('days') == '8' ? 'selected' : '' }}>8</option>
                    <option value="9" {{ old('days') == '9' ? 'selected' : '' }}>9</option>
                    <option value="10" {{ old('days') == '10' ? 'selected' : '' }}>10</option>
                    <option value="11" {{ old('days') == '11' ? 'selected' : '' }}>11</option>
                    <option value="12" {{ old('days') == '12' ? 'selected' : '' }}>12</option>
                    <option value="13" {{ old('days') == '13' ? 'selected' : '' }}>13</option>
                    <option value="14" {{ old('days') == '14' ? 'selected' : '' }}>14</option>
                    <option value="15" {{ old('days') == '15' ? 'selected' : '' }}>15</option>
                    <option value="16" {{ old('days') == '16' ? 'selected' : '' }}>16</option>
                    <option value="17" {{ old('days') == '17' ? 'selected' : '' }}>17</option>
                    <option value="18" {{ old('days') == '18' ? 'selected' : '' }}>18</option>
                    <option value="19" {{ old('days') == '19' ? 'selected' : '' }}>19</option>
                    <option value="20" {{ old('days') == '20' ? 'selected' : '' }}>20</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('days')" />
            </div>

        </div>

        <div class="mt-6 space-y-6">

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                <u>{{ __('Preferences') }}</u>
            </h2>        

            <div>  
                <x-input-label for="lighting" :value="__('Lighting')" />
                <select id="lighting" name="lighting" class="cs-select mt-1 block w-full" required autofocus>
                    <option value="" disabled selected>Select a lighting type</option>
                    <option value="Chandelier" {{ old('lighting') == 'Chandelier' ? 'selected' : '' }}>Chandelier</option> 
                    <option value="Pendant Light" {{ old('lighting') == 'Pendant Light' ? 'selected' : '' }}>Pendant Light</option>
                    <option value="Track Light" {{ old('lighting') == 'Track Light' ? 'selected' : '' }}>Track Light</option>
                    <option value="Cabinet Light" {{ old('lighting') == 'Cabinet Light' ? 'selected' : '' }}>Cabinet Light</option>
                    <option value="Ceiling Light" {{ old('lighting') == 'Ceiling Light' ? 'selected' : '' }}>Ceiling Light</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('lighting')" />
            </div>

            <div>  
                <x-input-label for="bedspread" :value="__('Bedspread')" />
                <select id="bedspread" name="bedspread" class="cs-select mt-1 block w-full" required autofocus>
                    <option value="" disabled selected>Select a preffered beadspread type</option>
                    <option value="Quilts,Coverlets,Blankets,Throwers,3-Pillows" {{ old('bedspread') == 'Quilts,Coverlets,Blankets,Throwers,3-Pillows' ? 'selected' : '' }}>Quilts,Coverlets,Blankets,Throwers,3-Pillows</option> 
                    <option value="Coverlets,Blankets,Throwers,3-Pillows" {{ old('bedspread') == 'Coverlets,Blankets,Throwers,3-Pillows' ? 'selected' : '' }}>Coverlets,Blankets,Throwers,3-Pillows</option>
                    <option value="Coverlets,Blankets,2-Pillows" {{ old('bedspread') == 'Coverlets,Blankets,2-Pillows' ? 'selected' : '' }}>Coverlets,Blankets,2-Pillows</option>
                    <option value="Coverlets,Throwers,3-Pillows" {{ old('bedspread') == 'Coverlets,Throwers,3-Pillows' ? 'selected' : '' }}>Coverlets,Throwers,3-Pillows</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('bedspread')" />
            </div>

            <div>  
                <x-input-label for="heater" :value="__('Heater')" />
                <select id="heater" name="heater" class="cs-select mt-1 block w-full" required autofocus>
                    <option value="" disabled selected>Do you want a heater?</option>
                    <option value="Yes" {{ old('heater') == 'Yes' ? 'selected' : '' }}>Yes</option> 
                    <option value="No" {{ old('heater') == 'No' ? 'selected' : '' }}>No</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('heater')" />
            </div>

            <div>  
                <x-input-label for="air_conditioner" :value="__('Air Conditioner')" />
                <select id="air_conditioner" name="air_conditioner" class="cs-select mt-1 block w-full" required autofocus>
                    <option value="" disabled selected>Do you want an Air Conditioner?</option>
                    <option value="Yes" {{ old('air_conditioner') == 'Yes' ? 'selected' : '' }}>Yes</option> 
                    <option value="No" {{ old('air_conditioner') == 'No' ? 'selected' : '' }}>No</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('air_conditioner')" />
            </div>

            <div id="Tcost" class="text-white mt-3"></div>
        </div>
        @if (session('pay') || session('incorrectcardpin'))

        
            <div class="mt-6 space-y-6">

                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    <u>{{ __('Payment') }}</u>
                </h2>

                <div>
                    <x-input-label for="card_number" :value="__('Card Number')" />
                    <input type="text" id="card_number" name="card_number" class="cs-select mt-1 block w-full" placeholder="xxxx xxxx xxxx xxxx" value="7662 4075 3842 0239" required autofocus>
                    <x-input-error class="mt-2" :messages="$errors->get('card_number')" />
                </div>

                <div>
                    <x-input-label for="card_expiration" :value="__('Card Expiration')" />
                    <input type="text" id="card_expiration" name="card_expiration" class="cs-select mt-1 block w-full" placeholder="mm/yy" value="11/27" required autofocus>
                    <x-input-error class="mt-2" :messages="$errors->get('card_expiration')" />
                </div>

                <div>
                    <x-input-label for="card_cvv" :value="__('Card CVV')" />
                    <input type="text" id="card_cvv" name="card_cvv" class="cs-select mt-1 block w-full" placeholder="xxxx" value="736" required autofocus>
                    <x-input-error class="mt-2" :messages="$errors->get('card_cvv')" />
                </div>

                <div>
                    <x-input-label for="card_pin" :value="__('Card PIN')" />
                    <input type="text" id="card_pin" name="card_pin" class="cs-select mt-1 block w-full" placeholder="xxxx" value="8713" required autofocus>
                    <x-input-error class="mt-2" :messages="$errors->get('card_pin')" />
                </div>
            </div>
        @endif

        <div class="flex items-center gap-4 mt-3">
            

            @if (session('pay'))
                <x-primary-button>{{ __('Pay') }}</x-primary-button>
            @else
                <x-primary-button>{{ __('Check Reservation') }}</x-primary-button>
            @endif
        </div>
    </form>
</section>


<script>

    // Get the references to the HTML elements
    const daysInput = document.getElementById("days");
    const costDiv = document.getElementById("Tcost");

    // Function to calculate and display the cost
    function calculateCost() {
    const daysValue = parseInt(daysInput.value);
    const cost = daysValue * 120;
    costDiv.textContent = `The total cost is £${cost}`;
    }

    // Call the calculateCost function initially
    calculateCost();

    // Add an event listener to the "days" input
    daysInput.addEventListener("change", calculateCost);

</script>
