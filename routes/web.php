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

Route::get( '/secret', function ()
{
    return view( 'secret' );
});

Route::get( '/terms', function ()
{
    return view( 'terms' );
});

Route::post( '/contactForm', 'ContactController@contactForm' );
