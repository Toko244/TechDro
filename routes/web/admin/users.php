<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator']], function () {
    //Profile ------------------------------------->
    Route::get('users', [UsersController::class, 'index'])->name('users.index');
    Route::get('users/add', [UsersController::class, 'create']);
    Route::post('users/add', [UsersController::class, 'store']);
    Route::get('users/edit/{id}', [UsersController::class, 'edit']);
    Route::get('users/show/{id}', [UsersController::class, 'show']);
    Route::get('users/logs/{id}', [UsersController::class, 'logs']);
    Route::post('users/edit/{id}', [UsersController::class, 'update']);
    Route::get('/users/{user}/authentication-logs', [UsersController::class, 'showAuthenticationLogs'])
        ->name('authentication.logs');
    Route::get('users/destroy/{id}', [UsersController::class, 'destroy']);

    // Route::post('/resetpassword/{id}', [UsersController::class , 'resetpassword'])->name('resetpassword');
    // Route::post('/giveadmin/{id}', [UsersController::class , 'giveadmin'])->name('giveadmin');
});
