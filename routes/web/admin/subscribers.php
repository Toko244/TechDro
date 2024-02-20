<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator']], function () {
    //Profile ------------------------------------->
    Route::get('subscribers/export', [UsersController::class, 'exportSubscribers']);
    Route::get('subscribers', [UsersController::class, 'subscribers']);
    Route::get('subscribers/delete/{id}', [UsersController::class, 'deletesubsctiber']);
});
