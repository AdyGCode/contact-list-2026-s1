<x-app-layout>

    <form method="POST" action="{{ route('password.confirm') }}"
          class="w-full sm:max-w-md mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg flex flex-col gap-2"
    >

        <h2 class="text-2xl font-semibold bg-zinc-700 text-zinc-200 px-6 py-4 -mx-6 -mt-4">
            {{ __('Confirm Password') }}
        </h2>

        <div class="mb-4 text-zinc-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
