<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>

    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Container principal pour centrer le contenu -->
    <div class="container mt-5">

        <!-- Titre de la page -->
        <h1 class="text-center mb-4">Liste des produits</h1>

        <!-- Bouton Ajouter un produit -->
        <div class="text-end mb-3">
            <a href="index.php?controller=Produit&action=create" class="btn btn-primary">Ajouter un produit</a>
        </div>

        <!-- Tableau des produits avec les classes Bootstrap -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['nom'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><?= $product['prix'] ?> €</td>
                    <td><?= $product['stock'] ?></td>
                    <td><?= $product['categorie'] ?></td>
                    <td>
                        <!-- Bouton Supprimer avec Bootstrap -->
                        <a href="index.php?controller=Produit&action=delete&id=<?= $product['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

         <!-- Bouton Retour à l'accueil -->
         <div class="text-center mt-4">
            <a href="/tp-php-mvc/acceuil.php" class="btn btn-secondary">Retour à l'accueil</a>
        </div>


    </div>

    <!-- Lien vers les scripts JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
