@extends('layout.main')

@section('container')

<article>

    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}

</article>

<a href="/applications/coba-laravel/public/posts"> Back to posts</a>

@endsection
