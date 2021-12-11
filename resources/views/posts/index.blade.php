@extends('layouts.app')

@section('content')
    <div class="d-flex flex-row mb-3">
        <div>
            <h1>All Posts</h1>
        </div>
        <div>
            <a href="/posts/create" class="btn btn-outline-primary btn-md ml-4 pt-2">Create Post</a>
        </div>
    </div>

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
                        <div class="col-md-1 col-sm-1">
                            <a href="/posts/{{ $post->id }}">
                                <img style="width: 60px" src="/storage/cover_images/{{ $post->cover_image }}">
                            </a>
                        </div>
                    @endif

                    <div class="col-md-11 col-sm-11">
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