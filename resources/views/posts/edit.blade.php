@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $post->id }}">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $post->title }}">
          @error('title')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="editor" class="form-control" placeholder="Body Text">{{ $post->body }}</textarea>
            @error('body')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="file" name="cover_image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>  
      </form>
      <a href="/posts" class="btn btn-outline-dark mt-2">Go back</a>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection