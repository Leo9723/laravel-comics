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
    $menu = [
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'NEWS',
        'SHOP'
    ];
    $footerMenu = [
        [
           'img' => 'buy-comics-digital-comics.png',
           'name' => 'DIGITAL COMICS' 
        ],
        [
            'img' => 'buy-comics-merchandise.png',
            'name' => 'DC MERCHANDISE' 
         ],
         [
            'img' => 'buy-comics-subscriptions.png',
            'name' => 'SUBSCRIPTION' 
         ],
         [
            'img' => 'buy-comics-shop-locator.png',
            'name' => 'COMIC SHOP LOCATOR' 
         ],
         [
            'img' => 'buy-dc-power-visa.svg',
            'name' => 'DC POWER VISA' 
         ]
    ];
    $comics = config('comics');
    return view('home', compact('comics', 'menu', 'footerMenu'));
});

/* Route::get('/fumetti', function () {
    $comic = config('comics');
    return view('fumetti', compact('comic'));
}); */

