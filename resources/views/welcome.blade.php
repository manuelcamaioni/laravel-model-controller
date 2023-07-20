@extends('layouts.app')


@section('main-content')
    <div class="container d-flex flex-wrap justify-content-between">
        @foreach ($movies as $movie)
            <div class="card mb-3">
                <div class="title">
                    <h1 class="fs-5">{{ $movie->original_title }} - {{ $movie->title }}</h1>
                    <p>Nationality: {{ $movie->nationality }}</p>
                    <p>Vote: {{ $movie->vote }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
