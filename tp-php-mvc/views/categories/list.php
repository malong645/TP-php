<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des catégories</title>

    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Container principal pour centrer le contenu -->
    <div class="container mt-5">

        <!-- Titre de la page -->
        <h1 class="text-center mb-4">Liste des catégories</h1>

        <!-- Bouton Ajouter une catégorie -->
        <div class="text-end mb-3">
            <a href="index.php?controller=Categorie&action=create" class="btn btn-primary">Ajouter une catégorie</a>
        </div>

        <!-- Tableau des catégories avec les classes Bootstrap -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Libellé</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $category['id'] ?></td>
                    <td><?= $category['libelle'] ?></td>
                    <td>
                        <!-- Bouton Supprimer avec Bootstrap -->
                        <a href="index.php?controller=Categorie&action=delete&id=<?= $category['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">Supprimer</a>
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
