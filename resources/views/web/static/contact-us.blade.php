<x-app-layout>
<h1 class="text-4xl text-blue-500">
    Contact Us
</h1>

<form action="{{ route('web.static.contact-us.store') }}"
      method="post"
      class="mx-auto max-w-md space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6">
    @csrf
    <div>
        <x-input-label for="name">Name</x-input-label>

        <x-text-input class="block mt-1 w-full bg-white"
               id="name"
               name="name"
               type="text"
               placeholder="Your name" />
        <div data-lastpass-icon-root=""
             style="position: relative !important; height: 0px !important; width: 0px !important; display: initial !important; float: left !important;"></div>
    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
    </div>

    <div>
        <x-input-label  for="email">Email</x-input-label>

        <x-text-input class="block mt-1 w-full bg-white"
               id="email"
               name="email"
               type="email"
               placeholder="Your email" />
    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
    </div>

    <div>
        <x-input-label for="topic">Topic</x-input-label>

        <select class="block mt-1 w-full bg-white"
                id="topic"
                name="topic">
            <option value="-1">Select a topic</option>
            @foreach($topics as $topic)
                <option value="{{ $topic->id }}">
                    {{ $topic->name }}
                </option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('topic')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="subject">Subject</x-input-label>

        <x-text-input class="block mt-1 w-full bg-white"
               id="subject"
               name="subject"
               type="text"
               placeholder="Message subject" />
        <x-input-error :messages="$errors->get('subject')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="message">Message</x-input-label>

        <textarea
            class="bg-white p-1 mt-1 w-full resize-none rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
            id="message"
            name="message"
            rows="4"
            placeholder="Your message"></textarea>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
    </div>

    <button
        class="block w-full rounded-lg border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600"
        type="submit">
        Send Message
    </button>
</form>

<a href="{{ route('web.static.thank-you') }}"
   class="text-xl p-1 bg-blue-100">Thank You Test Link</a>

</x-app-layout>
