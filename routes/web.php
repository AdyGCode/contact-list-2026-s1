<?php

use App\Http\Controllers\StaticPages\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', [ContactUsController::class, 'index'])
    ->name('static.contact-us');

Route::post('contact-us', [ContactUsController::class, 'store'])
    ->name('static.contact-us.store');

Route::get('thank-you', [ContactUsController::class, 'thankyou'])
    ->name('static.thank-you');
