<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>

    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Container principal pour centrer le contenu -->
    <div class="container mt-5">

        <!-- Titre de la page -->
        <h1 class="text-center mb-4">Ajouter un produit</h1>

        <!-- Formulaire d'ajout d'un produit avec validation -->
        <form method="POST" class="needs-validation" novalidate>

            <!-- Champ Nom -->
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
                <div class="invalid-feedback">
                    Le nom est requis.
                </div>
            </div>

            <!-- Champ Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                <div class="invalid-feedback">
                    La description est requise.
                </div>
            </div>

            <!-- Champ Prix -->
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" step="0.01" required>
                <div class="invalid-feedback">
                    Le prix est requis et doit être un nombre valide.
                </div>
            </div>

            <!-- Champ Quantité -->
            <div class="mb-3">
                <label for="stock" class="form-label">Quantité</label>
                <input type="number" class="form-control" id="stock" name="stock" min="1" required>
                <div class="invalid-feedback">
                    La quantité est requise et doit être supérieure ou égale à 1.
                </div>
            </div>

            <!-- Champ Catégorie -->
            <div class="mb-3">
                <label for="id_categorie" class="form-label">Catégorie</label>
                <select class="form-select" id="id_categorie" name="id_categorie" required>
                    <option value="">Sélectionnez une catégorie</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['libelle'] ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    La catégorie est requise.
                </div>
            </div>

            <!-- Bouton d'enregistrement -->
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="index.php?controller=Produit&action=index" class="btn btn-secondary ms-3">Retour à la liste des produits</a>
        </form>

    </div>

    <!-- Lien vers les scripts JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Validation de formulaire Bootstrap -->
    <script>
        // Activation de la validation personnalisée du formulaire
        (function () {
            'use strict'
            // Récupérer tous les formulaires auxquels vous souhaitez appliquer une validation
            var forms = document.querySelectorAll('.needs-validation')

            // Boucle sur tous les formulaires et empêche l'envoi s'ils ne sont pas validés
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
