<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>

    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Container principal pour centrer le contenu -->
    <div class="container mt-5">

        <!-- Titre de la page -->
        <h1 class="text-center mb-4">Liste des utilisateurs</h1>

        <!-- Bouton Ajouter un utilisateur -->
        <div class="text-end mb-3">
            <a href="index.php?controller=User&action=create" class="btn btn-primary">Ajouter un utilisateur</a>
        </div>

        <!-- Tableau des utilisateurs avec les classes Bootstrap -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nom'] ?></td>
                    <td><?= $user['prenom'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <!-- Bouton Supprimer avec Bootstrap -->
                        <a href="index.php?controller=User&action=delete&id=<?= $user['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</a>
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
