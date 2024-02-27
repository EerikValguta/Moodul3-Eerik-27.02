<!-- resources/views/articles/show.blade.php -->

@extends('partials.layout')

@section('content')
    <div class="container mx-auto w-1/2">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h1>{{ $article->title }}</h1>
                <p>{{ $article->body }}</p>
                <!-- Add more details of the article as needed -->
            </div>
        </div>
    </div>
@endsection
