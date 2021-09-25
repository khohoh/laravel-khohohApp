@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Title">
          @error('title')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="editor" class="form-control" placeholder="Body Text" rows="10"></textarea>
            @error('body')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="file" name="cover_image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>  
      </form>
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