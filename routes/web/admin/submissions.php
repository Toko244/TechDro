<?php

use App\Http\Controllers\Admin\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator']], function () {
    //Banners -------------------------------------->        // Admin\UploadFilesController
    Route::get('submissions', [SubmissionController::class, 'index']);
    Route::get('submission/{submission}', [SubmissionController::class, 'show']);
    Route::get('submission/destroy/{submission}', [SubmissionController::class, 'destroy']);
});
