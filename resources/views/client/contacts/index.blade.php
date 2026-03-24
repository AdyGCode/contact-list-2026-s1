<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-8 grid grid-cols-1 space-y-4 max-w-7xl mx-auto">
        <div class="grow w-full sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-zinc-900">
                    Contact actions (add, search/filter)
                </div>
            </div>

            <!-- repeat for each contact -->

            <!-- contact card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-zinc-900">
                    Contact Card here
                </div>
            </div>
            <!-- /contact card -->

            <!-- end repeat -->

        </div>
    </div>
</x-app-layout>
