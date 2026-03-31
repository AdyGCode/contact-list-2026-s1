<div class="flex h-screen flex-col justify-between border-e border-zinc-100 bg-white">
    <div class="px-0 py-0">
        <a class="block group hover:bg-zinc-700 border-0 border-b border-zinc-700 transition duration-350"
           href="{{route('home')}} ">
            <p class="grid py-2 w-full place-content-center text-xs text-zinc-600">
                <span class="sr-only">Home</span>

                <x-application-logo
                    class="w-14 h-14 fill-current text-zinc-700 group-hover:text-white transition duration-350"
                />
            </p>
        </a>

        <section class="mt-4 space-y-1">

            <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <i class="fa-solid fa-house group-hover:text-zinc-500"></i>
                {{ __('Home') }}
            </x-side-nav-link>

            <x-side-nav-link :href="route('dashboard')" :active="request()->routeIs('home')">
                <i class="fa-solid fa-dashboard group-hover:text-zinc-500"></i>
                {{ __('Dashboard') }}
            </x-side-nav-link>

            <x-side-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.*')">
                <i class="fa-solid fa-cog group-hover:text-zinc-500"></i>
                {{ __('Admin Home') }}
            </x-side-nav-link>

            <hr class="text-zinc-300">

            <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary
                    class="flex cursor-pointer items-center justify-between px-4 py-2
                         text-zinc-500 hover:text-zinc-700
                         hover:bg-zinc-200
                          border-0 border-l-4 border-transparent hover:border-zinc-400
                         transition duration-250"
                >
                        <span class="text-sm font-medium hover:text-zinc-500 transition duration-250">
                            <i class="fa-solid fa-users"></i>
                            {{ __('Users') }}
                        </span>

                    <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                          <i class="fa-solid fa-chevron-down text-sm"></i>
                        </span>
                </summary>

                <section class="mt-2 space-y-1">

                    <x-side-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.*')" class="px-10 py-2">
                        {{ __('Accounts') }}
                    </x-side-nav-link>

                    <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')" class="px-10 py-2">
                        {{ __('Unverified') }}
                    </x-side-nav-link>

                    <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')" class="px-10 py-2">
                        {{ __('Suspended') }}
                    </x-side-nav-link>

                    <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')" class="px-10 py-2">
                        {{ __('Banned') }}
                    </x-side-nav-link>

                </section>

            </details>

            <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <i class="fa-solid fa-laugh group-hover:text-zinc-500"></i>
                {{ __('Jokes') }}
            </x-side-nav-link>

            <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <i class="fa-solid fa-cat group-hover:text-zinc-500"></i>
                {{ __('Categories') }}
            </x-side-nav-link>

            <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <i class="fa-solid fa-list group-hover:text-zinc-500"></i>
                {{ __('ToDos') }}
            </x-side-nav-link>

            <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <i class="fa-solid fa-passport group-hover:text-zinc-500"></i>
                {{ __('Passengers') }}
            </x-side-nav-link>

            <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <i class="fa-solid fa-plane-arrival group-hover:text-zinc-500"></i>
                {{ __('Another Link') }}
            </x-side-nav-link>

            <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <i class="fa-solid fa-plane-departure group-hover:text-zinc-500"></i>
                {{ __('Another Link') }}
            </x-side-nav-link>


            <hr class="text-zinc-300">


            <details  class="group [&_summary::-webkit-details-marker]:hidden">
                <summary
                    class="flex cursor-pointer items-center justify-between px-4 py-2
                         text-zinc-500 hover:text-zinc-700
                         hover:bg-zinc-200
                          border-0 border-l-4 border-transparent hover:border-zinc-400
                         transition duration-250"
                >
                        <span class="text-sm font-medium hover:text-zinc-500 transition duration-250">
                            <i class="fa-solid fa-shield"></i>
                            {{ __('Security') }}
                        </span>

                    <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                          <i class="fa-solid fa-chevron-down text-sm"></i>
                        </span>
                </summary>

                <section class="mt-2 space-y-1">
                    <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')" class="px-10 py-2">
                        {{ __('Roles') }}
                    </x-side-nav-link>

                    <x-side-nav-link :href="route('home')" :active="request()->routeIs('home')" class="px-10 py-2">
                        {{ __('Permissions') }}
                    </x-side-nav-link>
                </section>

            </details>

        </section>
    </div>

    <section class="sticky inset-x-0 bottom-0 border-t border-zinc-200">

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a
                class="block px-4 py-2 [text-align:_inherit] text-sm font-medium text-zinc-500 hover:bg-zinc-100 hover:text-zinc-700"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                <i class="fa-solid fa-sign-out group-hover:text-zinc-500"></i>

                {{ __('Sign Out') }}
            </a>
        </form>

        <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-zinc-50">
            <div
                class="bg-zinc-500 text-zinc-300 w-10 h-10 rounded-lg flex items-center justify-center font-bold text-md">
                AIM
            </div>

            <div>
                <p class="text-xs">
                    <strong class="block font-medium">
                        {{ auth()->user()->name }}
                    </strong>

                    <span>{{ auth()->user()->email }}</span>
                </p>
            </div>
        </a>
    </section>
</div>
