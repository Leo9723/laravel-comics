<?php
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
?>
<div class="blue-footer">
        <div class="ico-cont">
                @foreach ($footerMenu as $element)
                        <div class="element">
                                <div class="element-img">
                                        <img src="/img/{{ $element['img'] }}" alt="">
                                </div>
                                <div class="element-text">
                                        {{ $element['name'] }}
                                </div>
                        </div>
                @endforeach
        </div>
</div>

<div class="gray-footer">
        <div class="list-cont">
                <ul class="footer-ul">
                        <li class="main-list-item">DC COMICS</li>
                        @foreach($list as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                </ul>
                <ul class="footer-ul">
                        <li class="main-list-item">SHOP</li>
                        @foreach($list as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                </ul>
                <ul class="footer-ul">
                        <li class="main-list-item">DC</li>
                        @foreach($list as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                </ul>
                <ul class="footer-ul">
                        <li class="main-list-item">SITES</li>
                        @foreach($list as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                </ul>
        </div>
        <div class="logo-footer">

        </div>
        
</div>
<style lang="scss" scoped>
        .blue-footer {
                background-color: blue;
                color: white;
                height: 200px;
        }
        .blue-footer img {
                height: 50px;
                width: 50px;
                margin-right: 20px;
        }
        .ico-cont{
                width: 80%;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                height: 100px;
                height: 100%;
        }
        .element{
                padding: 20px;
                display: flex;
                align-items: center;
        }
        .list-cont{
                display: flex;
                width: 50%;
        }
        .gray-footer{
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 400px;
                background-image: url(/img/footer-bg.jpg);
        }
        .logo-footer {
                background-image: url(/img/dc-logo-bg.png);
                height: 100%;
                width: 30%;
        }
        footer li {
                margin: 10px;
        }
        footer ul {
                list-style-type: none;
                margin-left: 40px;
                color: white;
        }
        .main-list-item{
                font-weight: bold;
        }
</style>
