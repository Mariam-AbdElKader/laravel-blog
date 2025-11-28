<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', function () {
        return redirect()->route('admin.posts.index');
    })->name('dashboard');
    Route::resource('posts', AdminPostController::class);
});
