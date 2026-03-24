<?php

//use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TopicController;
//use App\Http\Controllers\Admin\UserManagementController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function () {

        // http://HOSTNAME/admin/topics
        // admin.topics.*
        Route::resource('topics',TopicController::class)
            ->except(['show','edit','update','destroy']);

});

//Route::middleware(['auth', 'verified'])
//    ->prefix('admin')
//    ->name('admin.')
//    ->group(function () {
//        Route::get('/', [AdminController::class, 'index'])
//            ->name('index');
//
//        Route::resource('users', UserManagementController::class);
//    });
