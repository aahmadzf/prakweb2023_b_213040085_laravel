@extends('layout.main')

@section('container')

<article>

    <h2>{{ $post->title }}</h2>

    <p>By. <a href="/applications/coba-laravel/public/posts/{{ $posts->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

</article>

<a href="/applications/coba-laravel/public/posts" class="text-decoration-none"> Back to posts</a>

@endsection
