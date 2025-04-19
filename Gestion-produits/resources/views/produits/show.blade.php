@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails du produit</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $produit->nom }}</h5>
            <p class="card-text">{{ $produit->description }}</p>
            <p class="card-text"><strong>Prix:</strong> {{ $produit->prix }} €</p>
            <p class="card-text"><strong>Catégorie:</strong> {{ $produit->categorie->nom }}</p>
            
            @if($produit->photo)
                <img src="{{ asset('images/'.$produit->photo) }}" class="img-fluid" style="max-width: 300px;">
            @endif
            
            <div class="mt-4">
                <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-warning">Modifier</a>
                
                <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" 
                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit?')">
                        Supprimer
                    </button>
                </form>
                
                <a href="{{ route('produits.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection