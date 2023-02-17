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
    $list = [
      'characters',
      'comics',
      'movies',
      'tv',
      'games',
      'collectibles',
      'videos',
      'fans',
      'news',
      'shop'
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
    return view('home', compact('menu', 'footerMenu', 'list'));
});

Route::get('/fumetti', function () {
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
  $list = [
    'characters',
    'comics',
    'movies',
    'tv',
    'games',
    'collectibles',
    'videos',
    'fans',
    'news',
    'shop'
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
    return view('fumetti', compact('comics', 'menu', 'footerMenu', 'list'));
})->name('comics');


route::get('/fumetti/{param}', function ($param){

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
  $list = [
    'characters',
    'comics',
    'movies',
    'tv',
    'games',
    'collectibles',
    'videos',
    'fans',
    'news',
    'shop'
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

/*       $comic = array_filter($comics, function($item) use($param){
      return $item['title'] == $param;
    }); */

    foreach($comics as $comic){
      if($comic['title'] == $param){
         $single = $comic;
      }
    } 

    return view('detail_comic', compact('single', 'menu', 'footerMenu', 'list'));
})->name('detail-comic');
