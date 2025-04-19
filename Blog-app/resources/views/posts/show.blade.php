@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Post Details</h1>
        <div>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to All Posts</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @if($post->image)
                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->title }}" class="img-fluid mb-4" style="max-height: 300px;">
            @endif
            
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{{ $post->content }}</p>
            
            <div class="text-muted mt-4">
                <small>Created: {{ $post->created_at->format('M d, Y H:i') }}</small>
                <br>
                <small>Last updated: {{ $post->updated_at->format('M d, Y H:i') }}</small>
            </div>
        </div>
    </div>
@endsection