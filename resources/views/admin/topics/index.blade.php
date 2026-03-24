<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Topics Admin') }}
        </h2>
    </x-slot>

    <section class="py-4 mx-8 space-y-4 ">
        <header>
            <h3 class="text-2xl font-bold text-zinc-700">
                Topics
            </h3>
        </header>

        <div class="overflow-x-auto rounded border border-gray-300 shadow-sm">
        <table class="min-w-full divide-y-2 divide-gray-200 bg-white">
            <thead class="ltr:text-left rtl:text-right bg-gray-700 dark:bg-gray-800">
            <tr class="*:font-medium  text-gray-200 dark:text-gray-300 ">
                <th class="px-3 py-2 whitespace-nowrap">#</th>
                <th class="px-3 py-2 whitespace-nowrap">Name</th>
                <th class="px-3 py-2 whitespace-nowrap">Description</th>
                <th class="px-3 py-2 whitespace-nowrap">Actions</th>
            </tr>
            </thead>
            <tbody class="bg-white *:hover:bg-gray-50">

            @foreach($topics as $topic)
            <tr class="*:text-gray-900 *:first:font-medium">
                <td class="px-3 py-2 whitespace-nowrap">#</td>
                <td class="px-3 py-2 whitespace-nowrap">{{ $topic->name }}</td>
                <td class="px-3 py-2 whitespace-nowrap">{{ $topic->description }}</td>
                <td class="px-3 py-2 whitespace-nowrap">Show Edit Delete</td>
            </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <td colspan="4" class="px-3 py-2 whitespace-nowrap">
                    {{ $topics->links() }}
                </td>
            </tr>
            </tfoot>
        </table>

        </div>
    </section>

</x-admin-layout>
