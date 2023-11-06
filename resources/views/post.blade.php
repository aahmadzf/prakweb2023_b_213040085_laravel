@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>

            <p>By. <a href="/applications/coba-laravel/public/posts/{{ $post->author->user }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/applications/coba-laravel/public/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            {!! $post->body !!}

            <a href="/applications/coba-laravel/public/posts" class="text-decoration-none mt-3 d-block"> Back to posts</a>
        </div>
    </div>
</div>



@endsection
