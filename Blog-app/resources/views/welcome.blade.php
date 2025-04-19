<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Blog</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .hero-section {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 5rem 0;
            margin-bottom: 3rem;
            border-radius: 0.3rem;
        }
        .post-card {
            transition: transform 0.3s ease;
            height: 100%;
        }
        .post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .post-image {
            height: 200px;
            object-fit: cover;
        }
        .text-ellipsis {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .feature-card {
            height: 100%;
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
            border-radius: 0.3rem;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel Blog') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}"><i class="fas fa-list"></i> All Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.create') }}"><i class="fas fa-plus-circle"></i> New Post</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Welcome to Our Blog</h1>
            <p class="lead">Discover our latest articles and tutorials</p>
            <div class="mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-light btn-lg mx-2">
                    <i class="fas fa-book-open"></i> View All Posts
                </a>
                <a href="{{ route('posts.create') }}" class="btn btn-outline-light btn-lg mx-2">
                    <i class="fas fa-pen"></i> Create Post
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card feature-card">
                    <div class="card-body text-center">
                        <i class="fas fa-edit fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Create Posts</h5>
                        <p class="card-text">Add new blog posts with titles, content and images.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card">
                    <div class="card-body text-center">
                        <i class="fas fa-book-reader fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Read Posts</h5>
                        <p class="card-text">View all your blog posts in one place.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card">
                    <div class="card-body text-center">
                        <i class="fas fa-cogs fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Update & Delete</h5>
                        <p class="card-text">Edit or remove posts as needed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Posts Section -->
    <div class="container my-5">
        <h2 class="text-center mb-5">Latest Articles</h2>
        
        @if(isset($posts) && $posts->count() > 0)
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($posts as $post)
                    <div class="col">
                        <div class="card post-card h-100">
                            @if($post->image)
                                <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top post-image" alt="{{ $post->title }}">
                            @else
                                <div class="card-img-top post-image bg-secondary d-flex align-items-center justify-content-center">
                                    <i class="fas fa-image fa-3x text-white"></i>
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text text-ellipsis">{{ $post->content }}</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <small class="text-muted">Published on {{ $post->created_at->format('d/m/Y') }}</small>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-outline-primary float-end">
                                    Read <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-book-open"></i> View All Articles
                </a>
            </div>
        @else
            <div class="alert alert-info text-center">
                <h4><i class="fas fa-info-circle"></i> No Articles Available</h4>
                <p>Why not create the first article?</p>
                <a href="{{ route('posts.create') }}" class="btn btn-info">
                    <i class="fas fa-plus"></i> Create Article
                </a>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>{{ config('app.name', 'Laravel Blog') }}</h5>
                    <p>A modern blog built with Laravel</p>
                </div>
                <div class="col-md-6 text-end">
                    <p>&copy; {{ date('Y') }} All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>