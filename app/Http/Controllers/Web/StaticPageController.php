<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class StaticPageController extends Controller
{
    /**
     * Display the Site Welcome / Index page
     */
    public function home(): View
    {
        return view('web.static.welcome');
    }

    public function about(): View
    {
        return view('web.static.about');
    }

    public function contact(): View
    {
        return view('web.static.contact-us');
    }

    public function privacy(): View
    {
        return view('web.static.privacy');
    }

    public function terms(): View
    {
        return view('web.static.terms');
    }
}
