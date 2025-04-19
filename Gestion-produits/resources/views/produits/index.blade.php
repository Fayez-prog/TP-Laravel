@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Produits</h1>
    <a href="{{ route('produits.create') }}" class="btn btn-primary mb-3">Ajouter un produit</a>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
            <tr>
                <td>{{ $produit->id }}</td>
                <td>{{ $produit->nom }}</td>
                <td>{{ $produit->prix }} €</td>
                <td>{{ $produit->categorie->nom }}</td>
                <td>
                    @if($produit->photo)
                        <img src="{{ asset('images/'.$produit->photo) }}" width="50" height="50">
                    @endif
                </td>
                <td>
                    <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection