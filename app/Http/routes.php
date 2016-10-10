<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('support.home');
});

Route::get('/lobby', function () {
    return view('support.lobby');
});

Route::get('/recinto', function () {
    return view('support.recinto');
});

Route::get('/digesto1', function () {
    return view('support.digesto1');
});
Route::get('/digesto2', function () {
    return view('support.digesto2');
});
Route::get('/digesto3', function () {
    return view('support.digesto3');
});
Route::get('/digesto4', function () {
    return view('support.digesto4');
});
Route::get('/digesto5', function () {
    return view('support.digesto5');
});