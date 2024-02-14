<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{__('Create Post')}}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" class='textaction="{{ route('post.create') }}">
        @csrf

        <!-- Title -->
        <div>
            <label for="title">{{ 'Title'}} </label>
            <input id="email" class="block mt-1 w-full" type="text" name="title" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('submit') }} 
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
