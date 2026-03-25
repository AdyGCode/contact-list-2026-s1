<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Topics Admin') }}
        </h2>
    </x-slot>

    <section class="py-4 mx-8 space-y-4 ">
        <header>
            <h3 class="text-2xl font-bold text-zinc-700">
                Add New Topic
            </h3>
        </header>

        <div class="overflow-x-auto rounded border border-gray-300 shadow-sm">

            <form action="{{ route('admin.topics.store') }}"
                  method="post">

                @csrf

                <div>
                    <x-input-label for="name">Name:</x-input-label>

                    <x-text-input id="name"
                                  name="name"
                                  type="text"
                                  placeholder="Name of topic"
                                  value="{{ old('name')??'' }}"
                                  autocomplete="name"
                    />

                    <x-input-error messages="{{ $errors->get('name')[0]??'' }}"
                                   class="mt-2"/>
                </div>

                <x-primary-button type="submit">Save</x-primary-button>

            </form>

        </div>
    </section>

</x-admin-layout>
