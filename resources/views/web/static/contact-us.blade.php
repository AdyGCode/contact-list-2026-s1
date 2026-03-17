<x-app-layout>
<h1 class="text-4xl text-blue-500">
    Contact Us
</h1>

<form action="{{ route('static.contact-us.store') }}"
      method="post"
      class="mx-auto max-w-md space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6">
    @csrf
    <div>
        <label class="block text-sm font-medium text-gray-900" for="name">Name</label>

        <input class="bg-white p-1 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
               id="name"
               name="name"
               type="text"
               placeholder="Your name">
        <div data-lastpass-icon-root=""
             style="position: relative !important; height: 0px !important; width: 0px !important; display: initial !important; float: left !important;"></div>
    </div>


    <div>
        <label class="block text-sm font-medium text-gray-900" for="email">Email</label>

        <input class="bg-white p-1 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
               id="email"
               name="email"
               type="email"
               placeholder="Your email">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="topic">Topic</label>

        <select class="bg-white p-1 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
                id="topic"
                name="topic">
            <option value="">Select a topic</option>
            @foreach($topics as $topic)
                <option value="{{ $topic->id }}">
                    {{ $topic->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="subject">Subject</label>

        <input class="bg-white p-1 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
               id="subject"
               name="subject"
               type="text"
               placeholder="Message subject">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="message">Message</label>

        <textarea
            class="bg-white p-1 mt-1 w-full resize-none rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none"
            id="message"
            name="message"
            rows="4"
            placeholder="Your message"></textarea>
    </div>

    <button
        class="block w-full rounded-lg border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600"
        type="submit">
        Send Message
    </button>
</form>

<a href="{{ route('static.thank-you') }}"
   class="text-xl p-1 bg-blue-100">Thank You Test Link</a>

</x-app-layout>
