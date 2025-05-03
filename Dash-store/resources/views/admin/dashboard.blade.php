@extends('admin.layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Tableau de bord</h2>
    
    <!-- Cartes de statistiques -->
    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Utilisateurs</h5>
                    <p class="card-text fs-3">{{ $userCount }}</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Produits</h5>
                    <p class="card-text fs-3">{{ $productCount }}</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Catégories</h5>
                    <p class="card-text fs-3">{{ $categoryCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des utilisateurs récents avec pagination -->
    <div class="card">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Derniers utilisateurs inscrits</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Date d'inscription</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentUsers as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Aucun utilisateur trouvé</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <!-- Affichage de la pagination -->
            {{ $recentUsers->links() }}
        </div>
    </div>
</div>
@endsection