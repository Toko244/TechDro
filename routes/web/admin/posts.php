<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator|Content Manager']], function () {
    //Post ------------------------------------->
    Route::get('section/{sec}/posts', [PostController::class, 'index'])->name('post.list');
    // fetch post to component select section //
    Route::get('section/fetching-posts', [PostController::class, 'fetching'])->name('post.fetching');
    //
    Route::get('section/{section_id}/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::get('component/{component_id}/posts/create', [PostController::class, 'create'])->name('component.post.create');
    Route::post('section/{section_id}/posts/create', [PostController::class, 'store'])->name('post.store');
    Route::get('section/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::post('section/posts/{post}/edit', [PostController::class, 'update'])->name('post.update');
    Route::get('section/posts/{post}/delete', [PostController::class, 'destroy'])->name('post.destroy');
    Route::delete('section/posts/delete-image/{id}', [PostController::class, 'deleteImage'])->name('post.delete-image');
    Route::delete('section/posts/delete-image-lang/{id}', [PostController::class, 'deleteImagelang'])->name('post.delete-image-lang');
    Route::delete('section/posts/delete-image-multiple/{id}', [PostController::class, 'deleteImagemulti'])->name('delete-image-multiple');
    Route::delete('section/posts/DeleteFile/{que}', [PostController::class, 'DeleteFile'])->name('post.DeleteFile');
    // In routes/web.php
    Route::get('section/posts/display-image/{post_id}', [PostController::class, 'displayImage'])->name('display-image');
    Route::post('section/posts/delete-pin/{id}', [PostController::class, 'deletepin'])->name('post.delete-pin');
});
