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

            <x-stats-card title="{{ __('Jokes') }}"
                          value="{{ $joke_count }}"
                          bg="bg-rose-700"
                          icon="fa-solid fa-laugh-squint"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Products') }}"
                          value="{{ $product_count }}"
                          bg="bg-pink-700"
                          icon="fa-solid fa-boxes-stacked"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Categories') }}"
                          value="{{ $category_count }}"
                          bg="bg-fuchsia-700"
                          icon="fa-solid fa-cat"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Passengers') }}"
                          value="{{ $passenger_count }}"
                          bg="bg-purple-700"
                          icon="fa-solid fa-passport"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('ToDos') }}"
                          value="{{ $category_count }}"
                          bg="bg-violet-700"
                          icon="fa-solid fa-list-check"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Books') }}"
                          value="{{ $book_count }}"
                          bg="bg-sky-700"
                          icon="fa-solid fa-book"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Cars') }}"
                          value="{{ $car_count }}"
                          bg="bg-blue-700"
                          icon="fa-solid fa-car"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Sales') }}"
                          value="{{ $sales_total }}"
                          bg="bg-sky-700"
                          icon="fa-solid fa-chart-line"
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

            <x-stats-card icon="fa-solid fa-person-military-pointing"
                          title="{{ __('Roles') }}"
                          value="{{ $role_count }}"
                          bg="bg-violet-700"
                          icon-color="text-white"/>

            <div class="col-span-1 2xl:col-span-1"></div>


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
                          value="{{ config('app.env', 'Unknown') }}"
                          bg="bg-slate-700"
                          icon-color="text-white"/>

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

    <section class="my-6 mx-12 space-y-4">

        <header>
            <h3 class="text-sm lg:text-2xl font-bold text-zinc-700">
                {{__('Tailwind Built In Colours')}}
            </h3>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4 ">

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Rose"
                          bg="bg-rose-700"
                          icon="fa-solid fa-shrimp"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Pink"
                          bg="bg-pink-700"
                          icon="fa-solid fa-apple-whole"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Fuchsia"
                          bg="bg-fuchsia-700"
                          icon="fa-solid fa-brain"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Purple"
                          bg="bg-purple-700"
                          icon="fa-solid fa-cloud-sun-rain"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Violet"
                          bg="bg-violet-700"
                          icon="fa-solid fa-clock"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="sky"
                          bg="bg-sky-700"
                          icon="fa-solid fa-shop"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Blue"
                          bg="bg-blue-700"
                          icon="fa-solid fa-virus"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Sky"
                          bg="bg-sky-700"
                          icon="fa-solid fa-piggy-bank"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Cyan"
                          bg="bg-cyan-700"
                          icon="fa-solid fa-earth-oceania"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Teal"
                          bg="bg-teal-700"
                          icon="fa-solid fa-feather"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Emerald"
                          bg="bg-emerald-700"
                          icon="fa-solid fa-chess"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Green"
                          bg="bg-green-700"
                          icon="fa-solid fa-seedling"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Lime"
                          bg="bg-lime-700"
                          icon="fa-solid fa-compass"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Yellow"
                          bg="bg-yellow-700"
                          icon="fa-solid fa-meteor"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Amber"
                          bg="bg-amber-700"
                          icon="fa-solid fa-dice-d6"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Orange"
                          bg="bg-orange-700"
                          icon="fa-solid fa-mug-hot"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Red"
                          bg="bg-red-700"
                          icon="fa-solid fa-fire"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Slate"
                          bg="bg-slate-700"
                          icon="fa-solid fa-hand-scissors"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="zinc"
                          bg="bg-zinc-700"
                          icon="fa-solid fa-hand-spock"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Zinc"
                          bg="bg-zinc-700"
                          icon="fa-solid fa-hand-fist"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Neutral"
                          bg="bg-neutral-700"
                          icon="fa-solid fa-hand"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Stone"
                          bg="bg-stone-700"
                          icon="fa-solid fa-hand-lizard"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Taupe"
                          bg="bg-taupe-700"
                          icon="fa-solid fa-earth-africa"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Mauve"
                          bg="bg-mauve-700"
                          icon="fa-solid fa-fish"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Mist"
                          bg="bg-mist-700"
                          icon="fa-solid fa-spray-can-sparkles"
                          icon-color="text-white"/>

            <x-stats-card title="{{ __('Tailwind Colour') }}"
                          value="Olive"
                          bg="bg-olive-700"
                          icon="fa-solid fa-bottle-droplet"
                          icon-color="text-white"/>


        </div>
    </section>

    <section class="my-6 mx-12 space-y-4">

        <header>
            <h3 class="text-sm lg:text-2xl font-bold text-zinc-700">
                {{__('Custom Tailwind Colours')}}
            </h3>
            <p>Find these in the <code>resources/css/app.css</code> file</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4 ">

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="MariaDB Fir Green"
                          value-class="text-xl"
                          bg="bg-mariadb-900"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="Node.JS Olive Green"
                          value-class="text-xl"
                          bg="bg-nodejs-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="Laravel Red"
                          value-class="text-xl"
                          bg="bg-laravel-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="PHP Lilac"
                          value-class="text-xl"
                          bg="bg-php-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="Signal Purple"
                          value-class="text-xl"
                          bg="bg-signal-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="WhatsApp Purple"
                          value-class="text-xl"
                          bg="bg-whatsapp-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="Telegram Sky Blue"
                          value-class="text-xl"
                          bg="bg-telegram-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="Discord Blurple"
                          value-class="text-xl"
                          bg="bg-telegram-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="Facebook Blue Pale"
                          value-class="text-xl"
                          bg="bg-telegram-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="LinkedIn Dusky Blue"
                          value-class="text-xl"
                          bg="bg-linkedin-500"
                          icon-color="text-white"/>

            <x-stats-card icon="fa-solid fa-swatchbook"
                          title="Custom Colour"
                          value="GitHub Grey"
                          value-class="text-xl"
                          bg="bg-github-500"
                          icon-color="text-white"/>

        </div>

    </section>

</x-admin-layout>
