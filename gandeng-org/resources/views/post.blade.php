@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h5>Category: {{ $post->category->name }}</h5>

    {!! $post->body !!}
@endsection