@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier le produit</h1>
    
    <form action="{{ route('produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" 
                   value="{{ old('nom', $produit->nom) }}" required>
            @error('nom')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>
                {{ old('description', $produit->description) }}
            </textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" step="0.01" class="form-control" id="prix" name="prix" 
                   value="{{ old('prix', $produit->prix) }}" required>
            @error('prix')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="categorie_id" class="form-label">Catégorie</label>
            <select class="form-control" id="categorie_id" name="categorie_id" required>
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}" 
                        {{ $categorie->id == old('categorie_id', $produit->categorie_id) ? 'selected' : '' }}>
                        {{ $categorie->nom }}
                    </option>
                @endforeach
            </select>
            @error('categorie_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
            @if($produit->photo)
                <div class="mt-2">
                    <img src="{{ asset('images/'.$produit->photo) }}" width="100">
                    <p class="text-muted">Photo actuelle</p>
                </div>
            @endif
            @error('photo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('produits.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection