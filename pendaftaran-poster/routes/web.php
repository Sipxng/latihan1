<?php

use App\Http\Controllers\RegistrationController;

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::post('/register', [RegistrationController::class, 'store'])->name('register');
