<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\UserManagementController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])
    ->prefix('admin')
            ->name('admin.')
            ->group(function () {

        // URL base: http://HOSTNAME/admin/topics
        // Route Names: admin.topics.*
        Route::resource('topics', TopicController::class)
            ->except(['edit', 'update', 'destroy']);

        Route::get('/', [AdminController::class, 'index'])
            ->name('index');

        Route::resource('users', UserManagementController::class);
    });
