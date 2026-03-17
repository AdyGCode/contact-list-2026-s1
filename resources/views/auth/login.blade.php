<x-app-layout>

    <form method="POST" action="{{ route('login') }}"
          class="w-full sm:max-w-md mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
    >
        @csrf

        <h2 class="text-2xl font-semibold bg-zinc-700 text-zinc-200 px-6 py-4 -mx-6 -mt-4 mb-6">
            {{ __('Sign In') }}
        </h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>



        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')"/>
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded border-zinc-300 text-sky-600 shadow-sm focus:ring-sky-500" name="remember">
                <span class="ms-2 text-sm text-zinc-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-zinc-600 hover:text-zinc-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Sign In') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
