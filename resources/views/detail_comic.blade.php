@extends('layouts.app')

@section('content')
<div class="blue-row">

</div>
<div class="img-cont">

    <img class="thumb-img" src="{{ $single['thumb'] }}" alt="{{ $single['title'] }}">
</div>
<div class="cont">
    <div class="right-part">
        <h3>{{ $single['title'] }}</h3>
        <div class="green-part">
            <div class="sell">
                <div class="price">
                U.S Price: {{ $single['price'] }}
                </div>
                <div class="shop">
                AVAILABLE
                </div>
            </div>
            <div class="disponibility">
            Check Availability
            </div>
        </div>
        <p>{{ $single['description'] }}</p>
    </div>
    <div class="left-part">
        <img src="/img/advisor.jpg" alt="">
    </div>

</div>

@endsection

<style>
    .blue-row{
        height: 50px;
        background-color: blue;
    }
    .left-part {
        height: 100px;
    }
    .cont{
        display: flex;
        width: 80%;
        margin: 0 auto;
        padding: 150px 0px;
    }
    .green-part{
        display: flex;
        background-color: green;
    }
    .sell{
        display: flex;
        width: 80%;
        justify-content: space-around;
    }
    .img-cont{
        position: relative;
        height: 10px;
    }
    .thumb-img{
        position: absolute;
        bottom: 290%;
        left: 10%;
    }
</style>