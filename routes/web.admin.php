<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TopicController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Admin\UserManagementController;

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function (): void {

        // URL base: http://HOSTNAME/admin/topics
        // Route Names: admin.topics.*
        Route::post('/topics/{topic}/delete', [TopicController::class, 'delete'])
            ->name('topics.delete-confirm');
        Route::get('/topics/{topic}/delete', [TopicController::class, 'delete'])
            ->name('topics.delete-confirm');
        Route::resource('topics', TopicController::class);

        Route::get('/', [AdminController::class, 'index'])
            ->name('index');

        Route::resource('users', AdminController::class);
        //        Route::resource('users', UserManagementController::class);
    });
