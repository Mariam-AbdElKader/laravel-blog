<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.posts.index');
});

Route::prefix('admin/auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login', [AuthController::class, 'authenticate'])->name('login.submit');
    });
    Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', function () {
        return redirect()->route('admin.posts.index');
    })->name('dashboard');
    Route::resource('posts', AdminPostController::class);
    Route::resource('posts.comments', AdminCommentController::class)->except(['index', 'create', 'show']);
});
