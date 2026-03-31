<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Administration') }} {{ __("Dashboard") }}
        </h2>
    </x-slot>

    <section class="my-6 mx-12 space-y-4">

        <header>
            <h3 class="text-sm lg:text-2xl font-bold text-zinc-700">
                {{__('Statistics')}}
            </h3>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4 ">

            <x-stats-card title="{{ __('Contacts') }}"
                          value="{{ $contact_count }}"
                          bg="bg-rose-700"
                          icon="fa-solid fa-contact-card"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Topics') }}"
                          value="{{ $topic_count }}"
                          bg="bg-pink-700"
                          icon="fa-solid fa-tag"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Messages') }}"
                          value="{{ $message_count }}"
                          bg="bg-fuchsia-700"
                          icon="fa-solid fa-message"
                          icon-color="text-white"/>


            <div class="col-span-1 md:col-span-3 2xl:col-span-4"></div>

            <x-stats-card title="{{ __('Unique Visitors') }}"
                          value="{{ $visitor_count }}"
                          bg="bg-zinc-700"
                          icon="fa-solid fa-arrow-trend-up"
                          icon-color="text-white"/>

        </div>
    </section>

    <section class="my-6 mx-12 space-y-4">

        <header>
            <h3 class="text-sm lg:text-2xl font-bold text-zinc-700">
                {{__('Users')}}
            </h3>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4 ">

            <a href="{{ route('admin.users.index') }}">
                <x-stats-card icon="fa-solid fa-person"
                              title="{{ __('Users') }}"
                              value="{{ $user_count }}"
                              bg="bg-purple-700"
                              icon-color="text-white"/>
            </a>

            <x-stats-card icon="fa-solid fa-person-walking"
                          title="{{ __('Signed In') }}"
                          value="{{ $user_logged_in_count }}"
                          bg="bg-green-700"
                          icon-color="text-white"/>

            <div class="col-span-1 2xl:col-span-2"></div>

            <x-stats-card title="{{ __('Suspended') }}"
                          value="{{ $user_suspended_count }}"
                          bg="bg-amber-700"
                          icon="fa-solid fa-person-circle-exclamation"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Unverified') }}"
                          value="{{ $user_unverified_count }}"
                          bg="bg-orange-700"
                          icon="fa-solid fa-person-circle-question"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Banned') }}"
                          value="{{ $user_banned_count }}"
                          bg="bg-red-700"
                          icon="fa-solid fa-person-circle-xmark"
                          icon-color="text-white"/>

        </div>

    </section>


    <section class="my-6 mx-12 space-y-4">

        <header>
            <h3 class="text-sm lg:text-2xl font-bold text-zinc-700">
                {{__('System')}}
            </h3>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4 ">

            <x-stats-card icon="fa-solid fa-info-circle"
                          title="{{ __('Version') }}"
                          value="{{ config('app.version', 'development') }}  {{ config('app.codename', '') }}"
                          value-class="text-xl text-zinc-900"
                          bg="bg-slate-700"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-square-binary"
                          title="{{ __('Environment') }}"
                          value="{{ config('app.env', 'Unknown') }} {{ config('app.debug',0)?'debug':'' }}"
                          bg="bg-slate-700"
                          icon-color="text-white"/>

            <div class="col-span-1 2xl:col-span-2"></div>

            <x-stats-card icon="fa-brands fa-laravel"
                          title="{{ __('Laravel') }}"
                          value="{{ app()->version() }}"
                          bg="bg-laravel-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-brands fa-php"
                          title="{{ __('PHP') }}"
                          value="{{ phpversion() }}"
                          bg="bg-php-500"
                          icon-color="text-white"/>

        </div>

    </section>



</x-admin-layout>
