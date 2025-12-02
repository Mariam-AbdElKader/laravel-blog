<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.posts.index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', function () {
        return redirect()->route('admin.posts.index');
    })->name('dashboard');
    Route::resource('posts', AdminPostController::class);
    Route::resource('posts.comments', AdminCommentController::class)->except(['index', 'create', 'show']);
});
