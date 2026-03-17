<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8 grid grid-cols-1 space-y-4 max-w-7xl mx-auto">
        <div class="w-full sm:px-6 lg:px-8 hidden md:visible md:grid lg:grid-cols-3 gap-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <article class="m-4">
                    <img
                        src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?auto=format&amp;fit=crop&amp;q=80&amp;w=1160"
                        alt="" class="aspect-video rounded-lg object-cover">

                    <header class="mt-4">
                        <div class="flex items-center justify-between gap-4 text-pretty">
                            <div>
                                <h3 class="text-lg/tight font-semibold text-zinc-900">
                                    {{ auth()->user()->name }}
                                </h3>

                                <p class="mt-0.5 text-sm text-zinc-700">Product Designer</p>
                            </div>

                        </div>
                    </header>

                    <p class="mt-2 text-pretty text-zinc-800">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, placeat facere? Iste
                        nostrum odio magnam?
                    </p>

                    <dl class="mt-2 text-pretty text-zinc-600 grid grid-cols-1 md:grid-cols-4 ">
                        <dt class="col-span-1">Email</dt>
                        <dd class="col-span-1 md:col-span-3 font-medium">{{ auth()->user()->email }}</dd>

                        <dt class="col-span-1">Joined</dt>
                        <dd class="col-span-1 md:col-span-3 font-medium">{{ auth()->user()->created_at }}</dd>

                        <dt class="col-span-1">Last Login</dt>
                        <dd class="col-span-1 md:col-span-3 font-medium">{{ now() }}</dd>
                    </dl>

                    <footer class="mt-3 grid grid-cols-8">

                        <a href="#" target="_blank" rel="noreferrer"
                           class="text-zinc-500 hover:text-github-700 transition-colors ease-in-out duration-250">
                            <i class="fa-brands fa-github text-2xl"></i>
                            <span class="sr-only">GitHub</span>
                        </a>

                        <a href="#" target="_blank" rel="noreferrer"
                           class="text-zinc-500 hover:text-linkedin-500 transition-colors ease-in-out duration-250">
                            <i class="fa-brands fa-linkedin text-2xl"></i>
                            <span class="sr-only">Linked In</span>
                        </a>

                        <a href="#" target="_blank" rel="noreferrer"
                           class="text-zinc-500 hover:text-discord-500 transition-colors ease-in-out duration-250">
                            <i class="fa-brands fa-discord text-2xl"></i>
                            <span class="sr-only">Discord</span>
                        </a>

                        <a href="#" target="_blank" rel="noreferrer"
                           class="text-zinc-500 hover:text-facebook-500 transition-colors ease-in-out duration-250">
                            <i class="fa-brands fa-facebook text-2xl"></i>
                            <span class="sr-only">Facebook</span>
                        </a>

                        <a href="#" target="_blank" rel="noreferrer"
                           class="text-zinc-500 hover:text-telegram-500 transition-colors ease-in-out duration-250">
                            <i class="fa-brands fa-telegram text-2xl"></i>
                            <span class="sr-only">Telegram</span>
                        </a>

                        <a href="#" target="_blank" rel="noreferrer"
                           class="text-zinc-500 hover:text-whatsapp-500 transition-colors ease-in-out duration-250">
                            <i class="fa-brands fa-whatsapp text-2xl"></i>
                            <span class="sr-only">WhatsApp</span>
                        </a>


                        <a href="#" target="_blank" rel="noreferrer"
                           class="text-zinc-500 hover:text-signal-500 transition-colors ease-in-out duration-250">
                            <i class="fa-solid fa-comment text-2xl"></i>
                            <span class="sr-only">Signal</span>
                        </a>


                    </footer>
                </article>
            </div>

            <div class="grow bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-zinc-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div class="grow w-full sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-zinc-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
