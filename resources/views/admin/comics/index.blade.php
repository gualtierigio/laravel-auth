@extends('layouts.app')

@section('content')

<div class="container">
        @forelse ($comics as $comic)

        <ul>
            <li>
                <a href="{{ route('admin.comics.show', $comic->id) }}">
                    <h3>{{ $comic->title }}</h3>
                </a>
            </li>
        </ul>
        
            
        @empty

        <h2>No more comics, sorry.</h2>
            
        @endforelse
</div>

@endsection