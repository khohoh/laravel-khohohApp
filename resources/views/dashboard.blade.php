@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="d-flex justify-content-between">
                        <h3>Your Blog Posts</h3>
                        <a href="/posts/create" class="btn btn-outline-primary btn-sm pt-2">Create Post</a>
                    </div>

                    @if(count($posts) > 0)
                        <table class="table mt-3">
                            <tr class="bg-dark text-white">
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-secondary">Edit</a></td>
                                    <td>
                                        <form action="/posts/{{ $post->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        
                        {{ $posts->links() }}
                    @else
                        <h3 class="mt-4">You have no posts</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
