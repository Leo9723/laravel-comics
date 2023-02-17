
   <div class="header-cont">
       <h1>LOGO</h1>
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
        }
        .header-ul{
            list-style-type: none;
            display: flex;
            justify-content: space-between;
        }
        li{
            padding: 10px;
        }
        </style>