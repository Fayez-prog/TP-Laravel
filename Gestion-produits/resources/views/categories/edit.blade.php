@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier la catégorie</h1>
    
    <form action="{{ route('categories.update', $categorie->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" 
                   value="{{ old('nom', $categorie->nom) }}" required>
            @error('nom')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection