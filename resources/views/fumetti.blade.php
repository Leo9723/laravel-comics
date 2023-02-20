@extends('layouts.app')

@section('content')

<div class="main-cont">
   @foreach ($comics as $key => $comic)
   <a href="{{ route('detail-comic', ['id' => $comic['id']]) }}">
      <div class="card">
         <div class="thumb">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
         </div>
         <div class="title">
            {{ $comic['title'] }}
         </div>
      </div>
   </a>
   @endforeach
</div>
@endsection('content')

<style lang="scss">
   .main-cont{
      width: 80%;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      padding: 100px 0px;
      
   }
   a{
      width: calc(100% / 7);
      margin: 10px;
   }
   .card img{
      width: 100%;

   }
   .main-cont a {
      text-decoration: none;
      color: black;
   }
</style>