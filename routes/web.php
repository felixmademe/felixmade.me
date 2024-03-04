<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main');
})->name('start');

Route::get('/policy', function () {
    return view('policy');
})->name('policy');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/vacation', function () {
    return view('vacation');
})->name('vacation');

Route::post( '/contactForm', 'ContactController@contactForm' );

Route::get('/secret', function () {
    $name = 'Felix Wetell';
    $email = config('mail.from.address');
    $text = "please save me";

    return new App\Mail\Contact($name, $email, $text);
})->name('secret');


Route::get('/board', 'ShowNotes')->name('board');
if(config('app.env') === 'local') {
    Route::post('/board/post', 'CreateNote')->name('board.post')
    ->middleware('throttle:1,5');
} else {
    Route::post('/board/post', 'CreateNote')->name('board.post')
        ->middleware('throttle:1,60');
}


Route::prefix('games')->group(function () {
    Route::get('/', 'ShowGames')->name('games');

    Route::get('/recnuob', function () {
        return view('games.recnuob');
    })->name('games.recnuob');

    Route::get('/tutorial', function () {
        return view('games.tutorial');
    })->name('games.tutorial');
});
