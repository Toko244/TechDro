<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return redirect('/login');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

/*
|--------------------------------------------------------------------------
| Check if user is auth
|--------------------------------------------------------------------------
*/
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
// 	Lfm::routes();
// });
Route::middleware(['auth.check'])->group(function () {
    require __DIR__.'/web/admin/subscribers.php';
    require __DIR__.'/web/admin/users.php';
    require __DIR__.'/web/admin/profile.php';
    require __DIR__.'/web/admin/admin.php';
    require __DIR__.'/web/admin/form.php';
    require __DIR__.'/web/admin/filemanager.php';
    require __DIR__.'/web/admin/banner.php';
    require __DIR__.'/web/admin/section.php';
    require __DIR__.'/web/admin/posts.php';
    require __DIR__.'/web/admin/submissions.php';
    require __DIR__.'/web/admin/general.php';
    require __DIR__.'/web/admin/components.php';
    require __DIR__.'/web/admin/componentable.php';
    require __DIR__.'/web/admin/filemanager.php';
});

require __DIR__.'/web/user/routes.php';
