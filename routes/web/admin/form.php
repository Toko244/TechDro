<?php

use App\Http\Controllers\Admin\FormController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['role:Administrator']], function () {
    Route::get('forms', [FormController::class, 'index'])->name('forms.index');
    Route::get('forms/create', [FormController::class, 'create'])->name('forms.create');
    Route::post('forms/store', [FormController::class, 'store'])->name('forms.store');
    Route::get('forms/edit/{form}', [FormController::class, 'edit'])->name('forms.edit');
    Route::put('forms/update/{form}', [FormController::class, 'update'])->name('forms.update');
    Route::delete('forms/destroy/{form}', [FormController::class, 'destroy'])->name('forms.destroy');
    Route::get('forms/destroy/{formField}', [FormController::class, 'destroyFormField'])->name('forms.destroy.formField');
    Route::post('forms/arrange', [FormController::class, 'arrange']);
});
