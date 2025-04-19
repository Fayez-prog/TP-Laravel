<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero-section {
            background-color: #f8f9fa;
            padding: 5rem 0;
            margin-bottom: 3rem;
            border-radius: 0.5rem;
        }
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #0d6efd;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Gestion Produits</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Catégories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produits.index') }}">Produits</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="hero-section text-center">
            <h1 class="display-4">Bienvenue sur notre système de gestion</h1>
            <p class="lead">Gérez facilement vos catégories et produits</p>
            <div class="mt-4">
                <a href="{{ route('categories.index') }}" class="btn btn-primary btn-lg mx-2">Voir les catégories</a>
                <a href="{{ route('produits.index') }}" class="btn btn-outline-primary btn-lg mx-2">Voir les produits</a>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="feature-icon">
                    <i class="bi bi-collection"></i>
                </div>
                <h3>Catégories</h3>
                <p>Organisez vos produits en catégories pour une meilleure gestion.</p>
                <a href="{{ route('categories.create') }}" class="btn btn-outline-primary">Ajouter une catégorie</a>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="feature-icon">
                    <i class="bi bi-box-seam"></i>
                </div>
                <h3>Produits</h3>
                <p>Gérez tous vos produits avec photos, descriptions et prix.</p>
                <a href="{{ route('produits.create') }}" class="btn btn-outline-primary">Ajouter un produit</a>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="feature-icon">
                    <i class="bi bi-graph-up"></i>
                </div>
                <h3>Rapports</h3>
                <p>Visualisez vos données avec des rapports clairs et précis.</p>
                <a href="#" class="btn btn-outline-primary">Voir les rapports</a>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">© 2023 Gestion des Produits - Tous droits réservés</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css"></script>
</body>
</html>
