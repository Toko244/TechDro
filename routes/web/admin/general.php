<?php

use App\Http\Controllers\Admin\DirectoryController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator']], function () {
    //Settings ---------------------------
    Route::get('settings/edit', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::post('settings/edit', [SettingsController::class, 'update'])->name('settings.update');
    //Directory ---------------------------
    Route::get('directories/{type}', [DirectoryController::class, 'index'])->name('directory.list');
    Route::get('directories/{type}/create', [DirectoryController::class, 'create'])->name('directory.create');
    Route::post('directories/{type}/create', [DirectoryController::class, 'store'])->name('directory.store');
    Route::get('directories/{directory}/edit', [DirectoryController::class, 'edit'])->name('directory.edit');
    Route::post('directories/{directory}/edit', [DirectoryController::class, 'update'])->name('directory.update');
    Route::get('directories/{directory}/delete', [DirectoryController::class, 'destroy'])->name('directory.destroy');
    Route::post('directories/arrange', [DirectoryController::class, 'arrange']);
    //Language ---------------------------
    Route::get('languages/edit', [LanguageController::class, 'edit'])->name('languages.edit');
    Route::post('languages/edit', [LanguageController::class, 'update'])->name('languages.update');
});
