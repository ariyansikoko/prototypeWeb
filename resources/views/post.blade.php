@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <article class="mb-3">
                    <h2>{{ $post->title }}</h2>
                    <p>By: <a href="/authors/{{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a> in
                        <a href="/categories/{{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                    </p>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->category->name }}" class="img-fluid">

                    <article class="my-3">
                        {!! $post->body !!}
                    </article>

                </article>
                <a href="/posts" class="text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection