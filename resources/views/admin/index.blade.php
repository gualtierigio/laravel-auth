@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @forelse ($comics as $comic)

        <div class="col-4">

        </div>
            
        @empty

        <h2>No more comics, sorry.</h2>
            
        @endforelse

    </div>
</div>

@endsection