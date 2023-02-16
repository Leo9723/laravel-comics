
   <div class="header-cont">
       <h1>LOGO</h1>
        <ul>
            @foreach($menu as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
        <input type="search" name="" id="" placeholder="search">

   </div>

    <style lang="scss" scoped>
        .header-cont{
            display: flex;
            justify-content: space-around;
        }
        ul{
            list-style-type: none;
            display: flex;
            justify-content: space-between;
        }
        li{
            padding: 10px;
        }
        </style>