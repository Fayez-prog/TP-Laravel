@extends('layouts.home')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card sidebar mb-4">
            <div class="card-header bg-white">
                <h5 class="mb-0">Categories</h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <a href="{{ route('index') }}" 
                       class="list-group-item list-group-item-action {{ !isset($current_category) ? 'active' : '' }}">
                        All Categories
                    </a>
                    @foreach($categories as $category)
                    <a href="{{ route('category.products', $category->id) }}" 
                       class="list-group-item list-group-item-action {{ isset($current_category) && $current_category->id == $category->id ? 'active' : '' }}">
                        {{ $category->name }}
                        <span class="badge bg-primary rounded-pill float-end">
                            {{ $category->products_count ?? $category->products->count() }}
                        </span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-10">
        <div class="row">
            @forelse($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card product-card h-100">
                    <div class="position-absolute top-0 end-0 p-2">
                        <span class="badge bg-success">{{ $product->category->name }}</span>
                    </div>
                    <img src="{{ asset('storage/uploads/'.$product->image) }}" 
                         class="card-img-top product-image p-3" 
                         alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($product->description, 50) }}</p>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="h5 mb-0">${{ number_format($product->price, 2) }}</span>
                            <span class="badge bg-{{ $product->stock > 0 ? 'info' : 'danger' }}">
                                {{ $product->stock }} in stock
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info">No products found.</div>
            </div>
            @endforelse
        </div>
        
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection