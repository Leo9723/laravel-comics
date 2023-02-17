<div class="blue-footer">
        <div class="ico-cont">
                @foreach ($footerMenu as $element)
                        <div class="element">
                                <div class="element-img">
                                        <img src="../img/{{ $element['img'] }}" alt="">
                                </div>
                                <div class="element-text">
                                        {{ $element['name'] }}
                                </div>
                        </div>
                @endforeach
        </div>
</div>
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
<div class="gray-footer">
        
</div>
<style lang="scss" scoped>
        .blue-footer {
                background-color: blue;
                color: white;
        }
        .ico-cont{
                width: 80%;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                height: 100px;
        }
        .element{
                padding: 20px;
                display: flex;
        }
        .list-cont{
                display: flex;
        }
</style>
