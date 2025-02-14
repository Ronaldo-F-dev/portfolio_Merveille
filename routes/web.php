<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;

Route::match(['get', 'post'], '/', [FormController::class, 'index'])->name('form.index');
Route::get('/success', function () {
    return view('success');
})->name('success');
