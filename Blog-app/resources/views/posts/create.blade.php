@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>
    
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection