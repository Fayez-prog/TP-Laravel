@extends('layouts.app')

@section('title', $category->name)

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">{{ $category->name }}</h1>
            
            @if($category->description)
                <p class="lead">{{ $category->description }}</p>
            @endif
            
            <hr>
            
            <h3 class="mt-5">Produits dans cette catégorie</h3>
            
            @if($products->count() > 0)
                <div class="row mt-4">
                    @foreach($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                                    <p class="h5 text-primary">{{ number_format($product->price, 2, ',', ' ') }} €</p>
                                </div>
                                <div class="card-footer bg-white">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">
                                        Voir détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="d-flex justify-content-center mt-4">
                    {{ $products->links() }}
                </div>
            @else
                <div class="alert alert-info mt-4">
                    Aucun produit disponible dans cette catégorie.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection