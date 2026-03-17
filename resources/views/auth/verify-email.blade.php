<x-app-layout>

    <div class="mt-4 flex flex-col items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}"
              class="w-full sm:max-w-md mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >

            <h2 class="text-2xl font-semibold bg-zinc-700 text-zinc-200 px-6 py-4 -mx-6 -mt-4 mb-4">
                {{ __('Verify Email') }}
            </h2>

            <div class="mb-4 text-zinc-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}"
              class="w-full sm:max-w-md mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @csrf

            <x-secondary-button type="submit"
                    class="underline text-sm text-zinc-600 hover:text-zinc-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                {{ __('Sign Out') }}
            </x-secondary-button>
        </form>
    </div>
</x-app-layout>
