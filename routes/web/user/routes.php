<?php

use App\Http\Controllers\Website\HomePageController;
use App\Http\Controllers\Website\PagesController;
use App\Http\Controllers\Website\RoutesController;
use App\Http\Controllers\Website\SearchController;
use Illuminate\Support\Facades\Route;

Route::post('/submission', [PagesController::class, 'submission'])->name('submission');
Route::post('/subscribe', [PagesController::class, 'subscribe'])->name('subscribe');
Route::any('/search', [SearchController::class, 'index'])->name('search');
Route::any('/', [HomePageController::class, 'homePage']);
Route::any('/{all}', [RoutesController::class, 'index'])->where('all', '.*');

Route::get('/front', function () {
    return view('website.front');
});

Route::get('/photo', function () {
    return view('website.photo');
});
// Route::get('/search', function(){
//     return view('website.search');
// });
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/text-page', function () {
    return view('website.text-page');
});

// Routes for Davita
Route::get('/home-page', function () {
    return view('website.home');
});
