@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un nouveau produit</h1>
    
    <form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" step="0.01" class="form-control" id="prix" name="prix" required>
        </div>
        
        <div class="mb-3">
            <label for="categorie_id" class="form-label">Catégorie</label>
            <select class="form-control" id="categorie_id" name="categorie_id" required>
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>
        
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('produits.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection