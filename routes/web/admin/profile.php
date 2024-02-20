 <?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {
    //Profile ------------------------------------->
    Route::get('profile', [UsersController::class, 'editProfile'])->name('asdasdsa');
    Route::post('profile', [UsersController::class, 'updateProfile']);
    Route::post('update_profile', [UsersController::class, 'updateProfile'])->name('updateProfile');
});
