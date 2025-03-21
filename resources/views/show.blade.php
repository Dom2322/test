@extends('layout')

@section('title', $newsItem['title'])

@section('content')
<div class="container">
    <h1>{{ $newsItem['title'] }}</h1>
    <p>{{ $newsItem['content'] }}</p>
    <a href="{{ route('projekty.index') }}" class="btn">Powrót</a>
</div>
@endsection
