<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M145.046 230.404H85.321a8.532 8.532 0 0 0-8.532 8.532v85.321a8.532 8.532 0 0 0 8.532 8.532h59.725a8.532 8.532 0 0 0 8.532-8.532v-85.321a8.532 8.532 0 0 0-8.532-8.532zm-8.532 85.321H93.853v-68.257h42.661v68.257zM290.091 230.404h-59.725a8.532 8.532 0 0 0-8.532 8.532v85.321a8.532 8.532 0 0 0 8.532 8.532h59.725a8.532 8.532 0 0 0 8.532-8.532v-85.321a8.532 8.532 0 0 0-8.532-8.532zm-8.532 85.321h-42.66v-68.257h42.66v68.257zM290.091 366.917h-59.725a8.532 8.532 0 0 0-8.532 8.532v85.321a8.532 8.532 0 0 0 8.532 8.532h59.725a8.532 8.532 0 0 0 8.532-8.532v-85.321a8.533 8.533 0 0 0-8.532-8.532zm-8.532 85.321h-42.66v-68.257h42.66v68.257zM426.605 230.404H366.88a8.532 8.532 0 0 0-8.532 8.532v85.321a8.532 8.532 0 0 0 8.532 8.532h59.725a8.532 8.532 0 0 0 8.532-8.532v-85.321a8.532 8.532 0 0 0-8.532-8.532zm-8.532 85.321h-42.66v-68.257h42.66v68.257zM145.046 366.917H85.321a8.532 8.532 0 0 0-8.532 8.532v85.321a8.532 8.532 0 0 0 8.532 8.532h59.725a8.532 8.532 0 0 0 8.532-8.532v-85.321a8.533 8.533 0 0 0-8.532-8.532zm-8.532 85.321H93.853v-68.257h42.661v68.257zM426.605 366.917H366.88a8.532 8.532 0 0 0-8.532 8.532v85.321a8.532 8.532 0 0 0 8.532 8.532h59.725a8.532 8.532 0 0 0 8.532-8.532v-85.321a8.533 8.533 0 0 0-8.532-8.532zm-8.532 85.321h-42.66v-68.257h42.66v68.257z" fill="#cf1717" opacity="1" data-original="#000000" class=""></path><path d="M477.798 494.899V204.807h8.532a8.532 8.532 0 0 0 8.532-8.532v-42.66a8.532 8.532 0 0 0-8.532-8.532h-8.532v-34.128a8.532 8.532 0 0 0-8.532-8.532h-17.064V8.569A8.532 8.532 0 0 0 443.67.037H68.257a8.532 8.532 0 0 0-8.532 8.532v93.853H42.661a8.532 8.532 0 0 0-8.532 8.532v34.128h-8.532a8.532 8.532 0 0 0-8.532 8.532v42.66a8.532 8.532 0 0 0 8.532 8.532h8.532v290.091H0v17.064h512v-17.064h-34.202zM76.789 17.101h358.348v85.321H76.789V17.101zM51.193 119.486h409.54v25.596H51.193v-25.596zm409.54 375.413H51.193V204.807h409.541v290.092zM42.661 187.743h-8.532v-25.596h443.669v25.596H42.661z" fill="#cf1717" opacity="1" data-original="#000000" class=""></path><path d="M242.858 46.292c-1.357-3.468-3.263-6.463-5.721-8.984-2.457-2.521-5.414-4.499-8.869-5.932-3.456-1.433-7.282-2.15-11.48-2.15s-8.031.71-11.499 2.131c-3.468 1.421-6.437 3.398-8.907 5.932-2.47 2.534-4.383 5.535-5.74 9.004-1.357 3.468-2.035 7.237-2.035 11.307s.678 7.839 2.035 11.307c1.357 3.468 3.27 6.469 5.74 9.004 2.47 2.534 5.439 4.511 8.907 5.932 3.468 1.421 7.301 2.131 11.499 2.131s8.024-.71 11.48-2.131c3.456-1.42 6.412-3.398 8.869-5.932 2.457-2.534 4.364-5.535 5.721-9.004 1.357-3.468 2.035-7.237 2.035-11.307 0-4.071-.679-7.84-2.035-11.308zm-9.772 19.504c-.806 2.419-1.965 4.467-3.475 6.143-1.51 1.677-3.347 2.963-5.51 3.859-2.163.896-4.601 1.344-7.314 1.344s-5.158-.448-7.333-1.344c-2.176-.896-4.025-2.182-5.548-3.859-1.523-1.677-2.694-3.724-3.513-6.143-.819-2.419-1.229-5.151-1.229-8.197s.41-5.778 1.229-8.197c.819-2.419 1.99-4.473 3.513-6.162s3.372-2.982 5.548-3.878c2.176-.896 4.62-1.344 7.333-1.344s5.151.448 7.314 1.344c2.163.896 3.999 2.189 5.51 3.878 1.51 1.689 2.668 3.743 3.475 6.162.806 2.419 1.209 5.151 1.209 8.197s-.402 5.778-1.209 8.197zM170.023 29.84v23.881h-26.031V29.84h-10.405v55.518h10.405V61.093h26.031v24.265h10.405V29.84zM350.017 76.834V29.84h-10.329v55.518h32.559v-8.524zM245.353 29.84v8.485h16.779v47.033h10.328V38.325h16.701V29.84zM330.743 38.056V29.84h-35.016v55.518h35.016v-8.255h-24.611V61.4h19.389v-7.948h-19.389V38.056z" fill="#cf1717" opacity="1" data-original="#000000" class=""></path></g></svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <img src="storage/{{Auth::user()->avatar}}" alt="" style="margin-right:1em; border-radius:10px; width:40px; height:40px;">
                            <div>
                                {{ Auth::user()->first_name }}
                            </div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('reservation.view')">
                            {{ __('Create Reservation') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <img src="storage/{{Auth::user()->avatar}}" alt="" style="margin-right:0.7em; border-radius:10px; width:40px; height:40px;"> <span style="margin-right:0.7em;">{{ Auth::user()->first_name }}</span>
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('reservation.view')">
                    {{ __('Create Reservation') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
