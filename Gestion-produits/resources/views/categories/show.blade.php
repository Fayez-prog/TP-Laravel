@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de la catégorie</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $categorie->nom }}</h5>
            
            <div class="mt-4">
                <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-warning">Modifier</a>
                
                <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" 
                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie?')">
                        Supprimer
                    </button>
                </form>
                
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
    
    <h4 class="mt-4">Produits dans cette catégorie</h4>
    @if($categorie->produits->count() > 0)
        <ul class="list-group">
            @foreach($categorie->produits as $produit)
                <li class="list-group-item">
                    <a href="{{ route('produits.show', $produit->id) }}">{{ $produit->nom }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun produit dans cette catégorie.</p>
    @endif
</div>
@endsection