@extends('layouts.main')

@section('content')
    <h1>{{ $heading }}</h1>

    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}...</p>
        </article>
    @endforeach
@endsection