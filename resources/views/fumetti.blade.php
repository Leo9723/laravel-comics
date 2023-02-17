@extends('layouts.app')

@section('content')

<div class="main-cont">
   @foreach ($comics as $comic)
   <a href="{{ route('detail-comic', ['param' => $comic['title']]) }}">
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
   }
   a{
      width: calc(100% / 6);
   }
</style>