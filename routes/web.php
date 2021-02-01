<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('start');

Route::get('/policy', function () {
    return view('policy');
})->name('policy');

Route::post( '/contactForm', 'ContactController@contactForm' );

Route::get('/secret', function () {
    $name = 'Felix Wetell';
    $email = config('mail.from.address');
    $text = "please save me";

    return new App\Mail\Contact($name, $email, $text);
})->name('secret');


Route::prefix('games')->group(function () {
    Route::get('/', function () {
        return view('games.index');
    })->name('games');

    Route::get('/recnuob', function () {
        return view('games.recnuob');
    })->name('games.recnuob');

    Route::get('/tutorial', function () {
        return view('games.tutorial');
    })->name('games.tutorial');
});
