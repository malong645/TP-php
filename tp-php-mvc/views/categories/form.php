<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une catégorie</title>

    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Container principal pour centrer le contenu -->
    <div class="container mt-5">

        <!-- Titre de la page -->
        <h1 class="text-center mb-4">Ajouter une catégorie</h1>

        <!-- Formulaire d'ajout d'une catégorie avec validation -->
        <form method="POST" class="needs-validation" novalidate>

            <!-- Champ Libellé -->
            <div class="mb-3">
                <label for="libelle" class="form-label">Libellé</label>
                <input type="text" class="form-control" id="libelle" name="libelle" required>
                <div class="invalid-feedback">
                    Le libellé est requis.
                </div>
            </div>

            <!-- Bouton d'enregistrement -->
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="index.php?controller=Categorie&action=index" class="btn btn-secondary ms-3">Retour à la liste des catégories</a>
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
