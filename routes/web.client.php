<?php

declare(strict_types=1);

use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->name('dashboard');
});

Route::middleware('auth')->group(function (): void {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// Route::get('/contacts/{$id}', [ContactController::class, 'show'])
//    ->name('web.contacts.show');
