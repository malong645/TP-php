<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil - Application de Gestion</title>

    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Lien vers le fichier CSS personnalisé (optionnel) -->
    <style>
        body {
            padding-top: 50px;
        }
        .container {
            max-width: 960px;
        }
    </style>
</head>
<body>

    <!-- Navbar (barre de navigation) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Application de Gestion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="views/index.php?controller=User&action=index">Gestion des utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/index.php?controller=Produit&action=index">Gestion des produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/index.php?controller=Categorie&action=index">Gestion des catégories</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container mt-5 d-flex flex-column align-items-center gap-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Bienvenue dans l'application de gestion</h1>
            <p class="lead">Sélectionnez une fonctionnalité à gérer :</p>
            <hr class="my-4">
            <p>Vous pouvez gérer les utilisateurs, les produits et les catégories de cette application.</p>
        </div>

        <div class=" d-flex flex-row gap-5">

            <!-- Section Gestion des utilisateurs -->
            <div id="users" class="mb-5">
                <h2>Gestion des utilisateurs</h2>
                <p>Ajoutez, modifiez et supprimez des utilisateurs.</p>
                <a href="views/index.php?controller=User&action=index" class="btn btn-primary">Accéder à la gestion des utilisateurs</a>
            </div>

            <!-- Section Gestion des produits -->
            <div id="products" class="mb-5">
                <h2>Gestion des produits</h2>
                <p>Ajoutez, modifiez et gérez les produits.</p>
                <a href="views/index.php?controller=Produit&action=index" class="btn btn-success">Accéder à la gestion des produits</a>
            </div>

            <!-- Section Gestion des catégories -->
            <div id="categories" class="mb-5">
                <h2>Gestion des catégories</h2>
                <p>Ajoutez et gérez les catégories de produits.</p>
                <a href="views/index.php?controller=Categorie&action=index" class="btn btn-warning">Accéder à la gestion des catégories</a>
            </div>

        </div>

    </div>

    <!-- Lien vers les scripts JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
