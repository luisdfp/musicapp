<?php

use App\Song;
use App\Artist;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/songs', function () {
    return Song::with('artist')->get();
});

Route::get('/artist/{id}', function($id) {
    return Artist::with('songs')->find($id);
});
