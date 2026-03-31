<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Administration Dashboard Controller
     *
     * @return View
     */
    public function index()
    {
        $topic_count = Topic::count();
        $contact_count = 1;
        $message_count = 1;
        $visitor_count = 1;
        $user_logged_in_count = 1;
        $user_suspended_count = 0;
        $user_banned_count = 0;
        $user_unverified_count = 0;
        $user_count = User::count();

        return view('admin.index')
            ->with('topic_count', $topic_count)
            ->with('contact_count', $contact_count)
            ->with('message_count', $message_count)
            ->with('visitor_count', $visitor_count)
            ->with('user_logged_in_count', $user_logged_in_count)
            ->with('user_suspended_count', $user_suspended_count)
            ->with('user_banned_count', $user_banned_count)
            ->with('user_unverified_count', $user_unverified_count)
            ->with('user_count', $user_count);
    }
}
