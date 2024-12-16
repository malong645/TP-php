<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>

    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Container principal pour centrer le contenu -->
    <div class="container mt-5">

        <!-- Titre de la page -->
        <h1 class="text-center mb-4">Ajouter un utilisateur</h1>

        <!-- Formulaire d'ajout d'utilisateur -->
        <form method="POST" class="needs-validation" novalidate>

            <!-- Champ Nom -->
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
                <div class="invalid-feedback">
                    Le nom est requis.
                </div>
            </div>

            <!-- Champ Prénom -->
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
                <div class="invalid-feedback">
                    Le prénom est requis.
                </div>
            </div>

            <!-- Champ Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Un email valide est requis.
                </div>
            </div>

            <!-- Champ Mot de passe -->
            <div class="mb-3">
                <label for="mot_de_passe" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
                <div class="invalid-feedback">
                    Le mot de passe est requis.
                </div>
            </div>

            <!-- Bouton d'enregistrement -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="index.php?controller=User&action=index" class="btn btn-secondary">Retour à la liste des utilisateurs</a>
            </div>
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
