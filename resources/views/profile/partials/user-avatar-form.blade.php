<section>
    <img src="storage/{{Auth::user()->avatar}}" alt="" style="margin-right:0.7em; margin-bottom:1em; border-radius:10px; width:150px; height:150px;">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('User Avatar') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            @if (session('message'))
                {{ session('message') }}
            @else
                {{ __("Update or add user avatar.") }}
            @endif
        </p>
    </header>
    
    <!-- <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6"> -->
    <form method="post" action="{{ route('profile.avatar') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        
        @csrf
        @method('patch')
        

        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" required autofocus/>
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
