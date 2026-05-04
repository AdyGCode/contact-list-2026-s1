<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Topics Admin') }}
        </h2>
    </x-slot>

    <section class="py-4 mx-8 space-y-4 ">
        <header>
            <h3 class="text-2xl font-bold text-zinc-700">
                Confirm Delete Topic
            </h3>
        </header>

        <div class="overflow-x-auto rounded border border-gray-300 shadow-sm">

            <form action="{{ route('admin.topics.destroy', $topic) }}"
                  method="post"
                  class="flex flex-col p-4 bg-white">

                @csrf
                @method('DELETE')

                <p class="my-2">
                    Enter <strong class="font-mono text-red-500">{{ $topic->name }}</strong> below to confirm deletion.
                </p>


                <div class="p-4 w-1/2">
                    <x-input-label for="confirmation_name">
                        Confirm Topic Name:
                    </x-input-label>

                    <x-text-input id="confirmation_name"
                                  name="confirmation_name"
                                  type="text"
                                  placeholder="Enter name here"
                                  autocomplete="name"
                                  class="w-full"
                    />

                    <x-input-error :messages="$errors->first('confirmation_name')"
                                   class="my-2"/>
                </div>


                <div class="p-4 w-1/2 flex gap-4">
                    <x-primary-button type="submit"
                                      class="px-12">
                        Delete
                    </x-primary-button>
                    <x-secondary-link-button href="{{ route('admin.topics.index') }}"
                                             class="px-8">
                        Cancel
                    </x-secondary-link-button>
                </div>

            </form>

        </div>
    </section>

</x-admin-layout>
