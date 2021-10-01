@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body bg-light mb-3">
                <div class="row">
                    @if($post->cover_image)
                    <div class="col-md-4 col-sm-4">
                        <a href="/posts/{{ $post->id }}">
                        <img style="width: 100px" src="/storage/cover_images/{{ $post->cover_image }}">
                    </a>
                    </div>
                    @endif

                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Wrietten on {{ $post->created_at }} by {{ $post->user->name }}</small>  
                    </div>
                </div>                
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif
@endsection