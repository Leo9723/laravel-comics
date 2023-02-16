<div class="blue-footer">
        <div class="ico-cont">
                @foreach ($footerMenu as $element)
                        <div class="element">
                                <div class="element-img">
                                        <img src="../../../public/img/{{ $element['img'] }}" alt="">
                                </div>
                                <div class="element-text">
                                        {{ $element['name'] }}
                                </div>
                        </div>
                @endforeach
        </div>
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
</style>
