<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', function () {
    return view('main');
})->name('start');

Route::get('policy', function () {
    return view('policy');
})->name('policy');

Route::get('support', function () {
    return view('support');
})->name('support');

Route::get('vacation', function () {
    return view('vacation');
})->name('vacation');

Route::post( '/api/contactForm', [ContactController::class, 'contactForm'] );

Route::get('secret', function () {
    $name = 'Felix Wetell';
    $email = config('mail.from.address');
    $text = "please save me";

    return new App\Mail\Contact($name, $email, $text);
})->name('secret');