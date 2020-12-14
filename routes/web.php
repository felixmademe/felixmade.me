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
});

Route::get('policy', function () {
    return view('policy');
})->name('policy');

Route::post( '/contactForm', 'ContactController@contactForm' );

Route::get('/mail', function () {
    $name = 'Felix Wetell';
    $email = 'felix.wetell@gmail.com';
    $text = "Please save me";

    return new App\Mail\Contact($name, $email, $text);
});
