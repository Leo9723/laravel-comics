<?php
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

?>
   <div class="header-cont">
       <img src="/img/dc-logo.png" alt="">
        <ul class="header-ul">
            @foreach($menu as $item)
            <li><a href="{{ route('comics') }}">{{ $item }}</a></li>
            @endforeach
        </ul>
        <input type="search" name="" id="" placeholder="search">
   </div>

    <style lang="scss" scoped>
        .header-cont{
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100px;
        }
        .header-cont img {
            height: 80px;
        }
        .header-ul{
            list-style-type: none;
            display: flex;
            justify-content: space-between;
        }
        header li{
            padding: 10px;
        }
        header a {
           text-decoration: none; 
           color: black;
        }
        input {
            height: 40px;
            border: none;
            border-bottom: 3px solid blue;
        }
        </style>