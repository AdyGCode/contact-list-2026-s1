<?php

namespace App\Http\Controllers\StaticPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('static-pages.index');
    }

    public function thankyou()
    {
        return view('static-pages.thank-you');
    }
}
