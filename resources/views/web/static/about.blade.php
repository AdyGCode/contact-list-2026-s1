<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight">
            {{ __('About') }} {{ config('app.name', 'Laravel') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-8">

            <section class="border border-zinc-100 grow h-full shadow-md rounded-lg space-y-2 overflow-hidden">

                <h2 class="text-xl text-zinc-50 font-semibold bg-zinc-700 p-4 pb-6 mb-6 ">
                    The Team
                </h2>

                <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-3 xl:grid-cols-4">

                        <div class="shadow rounded-lg p-2 pb-3">
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-zinc-900">Student's Name</h3>
                                    <p class="mt-0.5 text-sm text-zinc-700">Lead Developer</p>
                                </div>

                                <a href="https://github.com/" target="_blank" rel="noreferrer"
                                   class="text-github-500 transition-color hover:text-github-800">
                                    <i class="fa-brands fa-github text-4xl"></i>
                                </a>
                            </div>
                            <p class="mt-0.5 text-sm text-zinc-700">More details here</p>
                        </div>

                        <div class="shadow rounded-lg p-2 pb-3">
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-zinc-900">Supervisor's Name</h3>
                                    <p class="mt-0.5 text-sm text-zinc-700">Supervisor's Position</p>
                                </div>

                                <a href="https://github.com/" target="_blank" rel="noreferrer"
                                   class="text-github-500 transition-color hover:text-github-800">
                                    <i class="fa-brands fa-github text-4xl"></i>
                                </a>
                            </div>
                            <p class="mt-0.5 text-sm text-zinc-700">More details here</p>
                        </div>

                        <div class="shadow rounded-lg p-2 pb-3">
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-zinc-900">Team Member's Name</h3>
                                    <p class="mt-0.5 text-sm text-zinc-700">Role in Team</p>
                                </div>

                                <a href="https://github.com/" target="_blank" rel="noreferrer"
                                   class="text-github-500 transition-color hover:text-github-800">
                                    <i class="fa-brands fa-github text-4xl"></i>
                                </a>
                            </div>
                            <p class="mt-0.5 text-sm text-zinc-700">More details here</p>
                        </div>

                        <div class="shadow rounded-lg p-2 pb-3">
                            <div class="mt-4 flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-lg/tight font-semibold text-zinc-900">Team Member's Name</h3>
                                    <p class="mt-0.5 text-sm text-zinc-700">Role in Team</p>
                                </div>

                                <a href="https://github.com/" target="_blank" rel="noreferrer"
                                   class="text-github-500 transition-color hover:text-github-800">
                                    <i class="fa-brands fa-github text-4xl"></i>
                                </a>
                            </div>
                            <p class="mt-0.5 text-sm text-zinc-700">More details here</p>
                        </div>

                    </div>
                </div>

            </section>

            <section class=" grow h-full shadow-md p-4 pb-8 rounded-lg space-y-2 overflow-hidden">

                <h2 class="text-xl text-zinc-50 bg-zinc-700 p-4 pb-6 mb-6 -mx-4 -mt-4 rounded-t">
                    Technologies & Products
                </h2>

                <div class="flex space-x-6 flex-wrap text-zinc-600">

                    <p>
                        <a href="#" class="hover:text-php-500 flex align-middle gap-1">
                            <span class="min-w-8 h-6 mr-0.5">
                                <i class="fa-brands fa-php text-2xl inline-block"></i>
                            </span>
                            <span>
                                PHP
                            </span>
                        </a>
                    </p>

                    <p>
                        <a href="#" class="hover:text-laravel-500 flex align-middle gap-1">
                            <span class="min-w-8 h-6 mr-0.5">
                                <i class="fa-brands fa-laravel text-2xl inline-block"></i>
                            </span>
                            <span>
                                Laravel
                            </span>
                        </a>
                    </p>

                    <p>
                        <a href="#" class="hover:text-zinc-700 flex align-middle gap-1">
                            <span class="min-w-8 h-6 mr-0.5">
                                <i class="fa-brands fa-livewire text-2xl inline-block"></i>
                            </span>
                            <span>
                                Livewire
                            </span>
                        </a>
                    </p>

                    <p>
                        <a href="#" class="hover:text-zinc-700 flex align-middle gap-1">
                            <span class="min-w-8 h-6 mr-0.5">
                                <i class="fa-solid fa-s text-2xl inline-block"></i>
                            </span>
                            <span>
                                Spatie Permissions
                            </span>
                        </a>
                    </p>

                    <p>
                        <a href="#" class="hover:text-zinc-700 flex align-middle gap-1">
                            <span class="min-w-8 h-6 mr-0.5">
                                <i class="fa-brands fa-tailwind text-2xl inline-block"></i>
                            </span>
                            <span>
                                TailwindCSS
                            </span>
                        </a>
                    </p>

                    <p>
                        <a href="#" class="hover:text-zinc-700 flex align-middle gap-1">
                            <span class="min-w-8 h-6 mr-0.5">
                                <i class="fa-brands fa-font-awesome text-2xl inline-block"></i>
                            </span>
                            <span>
                                FontAwesome
                            </span>
                        </a>
                    </p>

                    <p>
                        <a href="#" class="hover:text-zinc-700 flex align-middle gap-1">
                            <span class="min-w-8 h-6 mr-0.5">
                                <i class="fa-brands fa-jetbrains text-2xl inline-block"></i>
                            </span>
                            <span>
                                PhpStorm
                            </span>
                        </a>
                    </p>

                    <p>
                        <a href="#" class="hover:text-zinc-700 flex align-middle gap-1">
                            <span class="min-w-8 h-6 mr-0.5">
                                <i class="fa-brands fa-microsoft text-2xl inline-block"></i>
                            </span>
                            <span>
                                VSCode
                            </span>
                        </a>
                    </p>

                </div>

            </section>

            <div class="bg-white overflow-hidden shadow-sm rounded-lg">

                <h2 class="text-xl p-6 font-semibold bg-zinc-700 text-white">
                    Demo Users
                </h2>

                <div class="p-6 text-zinc-700">
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                        <div class="col-span-1 space-y-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-zinc-100 p-3 text-zinc-700 dark:bg-zinc-800 dark:text-zinc-200 ">
                                    <i class="fa-solid fa-user-secret"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-zinc-900">
                                        supervisor@example.com
                                    </h3>

                                    <p class="mt-1 text-zinc-700 dark:text-zinc-200">
                                        Password1
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-zinc-100 p-3 text-zinc-700 dark:bg-zinc-800 dark:text-zinc-200 ">
                                    <i class="fa-solid fa-user-shield"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-zinc-900">
                                        admin@example.com
                                    </h3>

                                    <p class="mt-1 text-zinc-700 dark:text-zinc-200">
                                        Password1
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-zinc-100 p-3 text-zinc-700 dark:bg-zinc-800 dark:text-zinc-200 ">
                                    <i class="fa-solid fa-user-tie"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-zinc-900">
                                        staff@example.com
                                    </h3>

                                    <p class="mt-1 text-zinc-700 dark:text-zinc-200">
                                        Password1
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-1 space-y-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-zinc-100 p-3 text-zinc-700 dark:bg-zinc-800 dark:text-zinc-200 ">
                                    <i class="fa-solid fa-user"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-zinc-900">
                                        client@example.com
                                    </h3>

                                    <p class="mt-1 text-zinc-700 dark:text-zinc-200">
                                        Password1
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-zinc-100 p-3 text-zinc-700 dark:bg-zinc-800 dark:text-zinc-200 ">
                                    <i class="fa-solid fa-user"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-zinc-900">
                                        client2@example.com
                                    </h3>

                                    <p class="mt-1 text-zinc-700 dark:text-zinc-200">
                                        Password1
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="shrink-0 rounded-lg bg-zinc-100 p-3 text-zinc-700 dark:bg-zinc-800 dark:text-zinc-200 ">
                                    <i class="fa-solid fa-user"></i>
                                </div>

                                <div>
                                    <h3 class="text-lg font-semibold text-zinc-900">
                                        client3@example.com
                                    </h3>

                                    <p class="mt-1 text-zinc-700 dark:text-zinc-200">
                                        Password1
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
