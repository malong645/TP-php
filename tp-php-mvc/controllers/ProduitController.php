<?php
require_once '../models/Produit.php';
require_once '../models/Categorie.php';

class ProduitController {
    public function index() {
        $products = Produit::getAll();
        require_once '../views/produits/list.php';
    }

    public function create() {
        $categories = Categorie::getAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Produit::create(nom: $_POST['nom'], description: $_POST['description'], prix: $_POST['prix'], stock: $_POST['stock'], id_categorie: $_POST['id_categorie']);
            header(header: 'Location: ../views/index.php?controller=Produit&action=index');
        } else {
            require_once '../views/produits/form.php';
        }
    }

    public function delete($id) {
        Produit::delete($id);
        header('Location: ../views/index.php?controller=Produit&action=index');
    }
}
?>
