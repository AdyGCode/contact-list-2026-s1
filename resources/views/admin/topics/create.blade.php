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
                  method="post"
                  class="flex flex-col p-4 bg-white">

                @csrf

                <div class="p-4 w-1/2">
                    <x-input-label for="name">
                        Name:
                    </x-input-label>

                    <x-text-input id="name"
                                  name="name"
                                  type="text"
                                  placeholder="Name of topic"
                                  value="{{ old('name')??'' }}"
                                  autocomplete="name"
                                  class="w-full"
                    />

                    <x-input-error :messages="$errors->first('name')"
                                   class="my-2"/>
                </div>

                <div class="p-4 w-1/2">
                    <x-input-label for="description">
                        Description:
                    </x-input-label>

                    <x-textarea id="description"
                                name="description"
                                type="text"
                                placeholder="Name of topic"
                                value="{{ old('name')??'' }}"
                                autocomplete="description"
                    />

                    <x-input-error :messages="$errors->first('description')"
                                   class="my-2"/>
                </div>

                <div class="p-4 w-1/2">
                    <x-input-label for="">
                        Available:
                    </x-input-label>

                    <label for="available"
                           class="relative block h-8 w-14 rounded-full bg-gray-300
                                  transition-colors [-webkit-tap-highlight-color:transparent]
                                  has-checked:bg-green-500">
                        <input type="checkbox"
                               value="1"
                               id="available"
                               name="available"
                               class="peer sr-only">
                        <span
                            class="absolute inset-y-0 inset-s-0 m-1 size-6 rounded-full
                                   bg-white transition-[inset-inline-start]
                                   peer-checked:start-6"></span>
                    </label>
                </div>

                <div class="p-4 w-1/2 flex gap-4">
                    <x-primary-button type="submit"
                                      class="px-12">
                        Save
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
