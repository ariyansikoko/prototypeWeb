@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <article class="mb-3">
                    <h2>{{ $post->title }}</h2>
                    <p>By: <a href="/posts?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a> in
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="text-decoration-none">{{ $post->category->name }}</a>
                    </p>

                    <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i
                            class="bi bi-pencil-square"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3"
                        alt="{{ $post->category->name }}" class="img-fluid">

                    <article class="my-3">
                        {!! $post->body !!}
                    </article>

                </article>
            </div>
        </div>
    </div>
@endsection
