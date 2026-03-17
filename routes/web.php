<?php

use App\Http\Controllers\Web\StaticPages\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.static.welcome');
})->name('home');

require __DIR__ . '/web.static.php';

require __DIR__ . '/web.client.php';

require __DIR__ . '/web.admin.php';

//require __DIR__.'/auth.php';
