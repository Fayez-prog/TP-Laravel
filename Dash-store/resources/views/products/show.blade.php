@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
            </div>
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            
            <div class="mb-3">
                <span class="badge bg-primary">{{ $product->category->name }}</span>
            </div>
            
            <h3 class="text-primary">{{ number_format($product->price, 2, ',', ' ') }} €</h3>
            
            <p class="lead mt-4">{{ $product->description }}</p>
            
            <div class="mt-5">
                <button class="btn btn-primary btn-lg">
                    <i class="fas fa-cart-plus"></i> Ajouter au panier
                </button>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Produits similaires</h3>
            <div class="row">
                @foreach($relatedProducts as $related)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <img src="{{ $related->image_url }}" class="card-img-top" alt="{{ $related->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $related->name }}</h5>
                                <p class="text-primary">{{ number_format($related->price, 2, ',', ' ') }} €</p>
                            </div>
                            <div class="card-footer bg-white">
                                <a href="{{ route('products.show', $related->id) }}" class="btn btn-sm btn-primary">
                                    Voir détails
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection