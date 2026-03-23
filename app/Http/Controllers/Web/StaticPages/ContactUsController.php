<?php

namespace App\Http\Controllers\Web\StaticPages;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Models\Message;
use App\Models\Topic;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        // Get the topics
        $topics = Topic::all();
        // return the contact-us view with the topics
        return view('web.static.contact-us')
            ->with('topics', $topics);
    }

    public function thankyou()
    {
        return view('web.static.thank-you');
    }

    public function store(StoreContactUsRequest $request)
    {
        // Validate data
        $validated = $request->validated();


        // Store contact message
        Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'topic_id' => $validated['topic'],
        ]);

        return redirect()->route('static.thank-you');
    }
}
