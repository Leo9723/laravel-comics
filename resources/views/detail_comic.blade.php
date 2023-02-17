@extends('layouts.app')

@section('content')

<h1>{{ $single['title'] }}</h1>

<p>{{ $single['description'] }}</p>

<img src="{{ $single['thumb'] }}" alt="{{ $single['title'] }}">

@endsection