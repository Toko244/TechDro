<?php

use App\Http\Controllers\Admin\UploadFilesController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    //Banners -------------------------------------->        // Admin\UploadFilesController
    Route::post('/upload/image', [UploadFilesController::class, 'uploadImage'])->name('image.upload');
    Route::post('/upload/image/delete', [UploadFilesController::class, 'deleteImage'])->name('image.del');
    Route::get('/upload/image/delete', [UploadFilesController::class, 'clearChache'])->name('image.clear');

});
