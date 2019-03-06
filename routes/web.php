<?php

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

Route::get( '/', function ()
{
    return view( 'main' );
});

Route::get( '/index.php', function ()
{
    return Redirect::to( '/', 301 );
});

Route::get( '/secret', function ()
{
    return view( 'secret' );
});

Route::get( '/privacy-policy', function ()
{
    return view( 'policy' );
})->name( 'policy' );

Route::post( '/contactForm', 'ContactController@contactForm' );
