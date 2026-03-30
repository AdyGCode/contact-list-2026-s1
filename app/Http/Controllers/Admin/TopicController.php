<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics = Topic::orderBy('name')
            ->with('messages')
            ->paginate(3);

        return view('admin.topics.index')
            ->with('topics', $topics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * http://DOMAIN/admin/topics/create
     */
    public function create()
    {
        return view('admin.topics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $validated = $request->validated();

        Topic::create($validated);

        return redirect(route('admin.topics.index'))
            ->with('status', 'Topic Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        return view('admin.topics.show')
            ->with('topic', $topic)
            ->with('messages');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        return view('admin.topics.edit')
            ->with('topic', $topic)
            ->with('messages');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopicRequest $request, Topic $topic)
    {
        $validated = $request->validated();
        $topic->update($validated);
        return redirect(route('admin.topics.index'))
            ->with('message','updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        $oldTopic = $topic;
        $topic->delete();

        return redirect(route('admin.topics.index'))
            ->with('massage','deleted');
    }
}
