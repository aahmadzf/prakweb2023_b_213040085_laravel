@extends('layout.main')

@section('container')

    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action="/posts/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search...." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3 text-center">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                    <p>
                        <small>By. <a href="/posts?author={{ $posts[0]->author->username }}"
                                class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                                href="/posts?category={{ $posts[0]->category->slug }}"
                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read
                        more</a>
            </div>
        </div>

        <div class="pagination justify-content-center">
            {{ $posts->links() }}
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute bg-dark px-3 py-2 text-light"
                                style="background-color: rgba(0, 0, 0, 0.8)"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-light text-decoration-none">{{ $post->category->name }}"</a></div>
                            <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small>By. <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $posts[0]->author->name }}</a>{{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

@endsection
