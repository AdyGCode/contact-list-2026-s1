<x-admin-layout>

    {{-- Header indicating the area of administration --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Topics Admin') }}
        </h2>
    </x-slot>

    <section class="py-4 mx-8 space-y-4 ">
        <header class="flex justify-between">
            <h3 class="text-2xl font-bold text-zinc-700">
                Topic Details
            </h3>

            <x-primary-link-button href="{{ route('admin.topics.create') }}">Add Topic</x-primary-link-button>
        </header>

        <div class="overflow-x-auto rounded bg-white border border-gray-300
                    shadow-sm w-full sm:w-1/2 lg:w-1/3 p-4 sm:p-8
                    sm:flex flex-col sm:justify-between sm:gap-2 lg:gap-4">

            <header class="bg-gray-200 -m-8 mb-0 p-4">
                <h3 class="text-xl font-medium text-pretty text-gray-900">
                    {{ $topic->name }}
                </h3>
            </header>

            <p class="mt-4 line-clamp-2 text-pretty text-gray-700">
                @empty($topic->description)
                    n/a
                @else
                    {{ $topic->description }}
                @endempty
            </p>

            <div class="flex items-center gap-2">
                <p class="text-gray-700">
                    Added:
                </p>
                <p class="text-gray-700">{{ $topic->created_at }}</p>
            </div>
            </dl>

            <footer class="mt-2 gap-2 flex justify-end content-between">
                <x-primary-link-button href="{{ route('admin.topics.index') }}"
                                       class="hover:bg-green-800!">
                    <i class="fa-solid fa-eye"></i>
                    <span class="sr-only">All</span>
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
            </footer>
        </div>
    </section>
</x-admin-layout>
