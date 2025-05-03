@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    
    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            @if($post->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->title }}" width="100">
                    <p class="text-muted">Current image</p>
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection