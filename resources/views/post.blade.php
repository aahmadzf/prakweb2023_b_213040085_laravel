@extends('layout.main')

@section('container')

<article>

    <h2>{{ $post->title }}</h2>

    <p>By Ahmad in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

</article>

<a href="/applications/coba-laravel/public/posts"> Back to posts</a>

@endsection
