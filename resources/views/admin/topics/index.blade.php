<x-admin-layout>

    {{-- Header indicating the area of administration --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Topics Admin') }}
        </h2>
    </x-slot>

    {{-- Main body section showing the table of topics --}}
    <section class="py-4 mx-8 space-y-4 ">
        <header class="flex justify-between">
            <h3 class="text-2xl font-bold text-zinc-700">
                Topics
            </h3>

            <x-primary-link-button href="{{ route('admin.topics.create') }}">Add Topic</x-primary-link-button>
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
                        <td class="px-3 py-2 whitespace-nowrap">{{ $loop->index+1 }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $topic->name }}</td>
                        <td class="px-3 py-2 whitespace-nowrap w-full">{{ $topic->description }}</td>
                        <td class="px-3 py-2 whitespace-nowrap flex gap-2 shrink">
                            <x-primary-link-button href="{{ route('admin.topics.index', $topic) }}"
                                                   class="hover:bg-green-800!">
                                <i class="fa-solid fa-eye"></i>
                                <span class="sr-only">Show</span>
                            </x-primary-link-button>
                            <x-primary-link-button href="{{ route('admin.topics.index', $topic) }}"
                                                   class="hover:bg-amber-800!">
                                <i class="fa-solid fa-edit"></i>
                                <span class="sr-only">Edit</span>
                            </x-primary-link-button>
                            <form action="{{ route('admin.topics.index', $topic) }}"
                                  method="post">
                                @csrf
                                @method('delete')
                                <x-secondary-button class="hover:bg-red-800! hover:text-white!">
                                    <i class="fa-solid fa-trash"></i>
                                    <span class="sr-only">Delete</span></x-secondary-button>
                            </form>
                        </td>
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
