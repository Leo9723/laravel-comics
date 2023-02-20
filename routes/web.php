<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as PageController;
use App\Http\Controllers\ComicController as ComicController;




Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::get('/fumetti', [ComicController::class, 'index'])->name('comics');

Route::get('/fumetti/{id}', [ComicController::class, 'show'])->name('detail-fumetti');

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

/* Route::get('/', function () {

    return view('home');
}); */
//Route::get('/', 'PageController@index')->name('homepage');

//oppure

/* Route::get('/fumetti', function () {

    $comics = config('comics');

    return view('fumetti', compact('comics'));
})->name('comics');
 */

/* route::get('/fumetti/{param}', function ($param){


    $comics = config('comics'); */

/*       $comic = array_filter($comics, function($item) use($param){
      return $item['title'] == $param;
    }); */

/*    $single = $comics[$param];

    return view('detail_comic', compact('single'));
})->name('detail-comic');
 */