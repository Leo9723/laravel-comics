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
    $num = 10;
    return view('home', compact('num'));
});
Route::get('/fumetti', function() {
    $comic = config('comics');
    return view('fumetti', compact('comic'));
});