@extends('layouts.app')

@section('content')

    <a href="{{ route('admin.comics.index') }}">Back to comics</a>

    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <h3>{{ $comic->author }}</h3>
        <img src="{{ $comic->url }}" alt="">
        <p>{{ $comic->description }}</p>
    </div>

@endsection