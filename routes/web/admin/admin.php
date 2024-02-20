<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
});

