@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-dark mb-4">Go back</a>
    <h1>{{ $post->title }}</h1>
    @if($post->cover_image)
    <img style="width: 300px" src="/storage/cover_images/{{ $post->cover_image }}">
    @endif
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <hr>
    
    @auth
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-secondary">Edit</a>

            <form action="/posts/{{ $post->id }}/delete" method="POST" class="mt-2">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger">Delete</button>
            </form>
        @endif
    @endauth
@endsection
