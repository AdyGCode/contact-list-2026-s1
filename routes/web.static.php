<?php

use App\Http\Controllers\Web\StaticPageController;
use App\Http\Controllers\Web\StaticPages\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'home'])
    ->name('home');

Route::name('web.static.')->group(function () {
    Route::get('/about', [StaticPageController::class, 'about'])
        ->name('about');

    Route::get('/contact', [StaticPageController::class, 'contact'])
        ->name('contact');

    Route::get('/privacy', [StaticPageController::class, 'privacy'])
        ->name('privacy');

    Route::get('/terms-and-conditions', [StaticPageController::class, 'terms'])
        ->name('terms-and-conditions');

    Route::get('contact-us', [ContactUsController::class, 'index'])
        ->name('contact-us');

    Route::post('contact-us', [ContactUsController::class, 'store'])
        ->name('contact-us.store');

    Route::get('thank-you', [ContactUsController::class, 'thankyou'])
        ->name('thank-you');

});
