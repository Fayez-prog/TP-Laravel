@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Catégories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Ajouter une catégorie</a>
    
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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $categorie)
            <tr>
                <td>{{ $categorie->id }}</td>
                <td>{{ $categorie->nom }}</td>
                <td>
                    <a href="{{ route('categories.show', $categorie->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" style="display:inline;">
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