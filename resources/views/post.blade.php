@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <article class="mb-3">
                    <h2>{{ $post->title }}</h2>
                    <p>By: <a href="/posts?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a> in
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                    </p>
                    @if ($post->image)
                        <div class="text-center" style="text-align: center; overflow:auto">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                alt="{{ $post->category->name }}" style="max-height: 400px; width:auto">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->category->name }}">
                    @endif

                    <article class="my-3">
                        {!! $post->body !!}
                    </article>

                </article>
                <a href="/posts" class="text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
