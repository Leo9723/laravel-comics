@extends('layouts.app')

@section('content')

<div class="maincont">
@foreach ($comics as $key => $comic)
<div class="cardContainer">
   <div class="carta">
            <a href="{{ route('detail-comic', ['param' => $key]) }}">
            <div class="thumb">
               <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            <div class="title">
               {{ $comic['title'] }}
            </div>
         </a>
         </div>

</div>
   @endforeach
  </div>
    <div class="button">
      <button>LOAD MORE</button>
    </div>
@endsection('content')