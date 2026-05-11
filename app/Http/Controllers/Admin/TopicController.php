<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DestroyTopicRequest;
use App\Http\Requests\Admin\StoreTopicRequest;
use App\Http\Requests\Admin\UpdateTopicRequest;
use App\Models\Topic;

final class TopicController extends Controller
{
    /**
     * Display a listing of the topic.
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
     * Show the form for creating a new topic.
     *
     * http://DOMAIN/admin/topics/create
     */
    public function create()
    {
        return view('admin.topics.create');
    }

    /**
     * Store a newly created topic in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $validated = $request->validated();

        Topic::create($validated);

        return redirect(route('admin.topics.index'))
            ->with('status', 'Topic Created');
    }

    /**
     * Display the specified topic.
     */
    public function show(Topic $topic)
    {
        return view('admin.topics.show')
            ->with('topic', $topic)
            ->with('messages');
    }

    /**
     * Show the form for editing the specified topic.
     */
    public function edit(Topic $topic)
    {
        return view('admin.topics.edit')
            ->with('topic', $topic)
            ->with('messages');
    }

    /**
     * Update the specified topic in storage.
     */
    public function update(UpdateTopicRequest $request, Topic $topic)
    {
        $validated = $request->validated();
        $topic->update($validated);

        return redirect(route('admin.topics.index'))
            ->with('message', 'updated');
    }

    /**
     * Remove the specified topic from storage.
     */
    public function destroy(DestroyTopicRequest $request, Topic $topic)
    {
        $oldTopic = $topic;
        $topic->delete();

        return redirect(route('admin.topics.index'))
            ->with('message', 'deleted');
    }

    /**
     * Confirm topic deletion
     */
    public function delete(Topic $topic)
    {
        return view('admin.topics.delete')
            ->with('topic', $topic)
            ->with('messages');
    }
}
