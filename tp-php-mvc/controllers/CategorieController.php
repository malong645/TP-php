<?php
require_once '../models/Categorie.php';

class CategorieController {
    public function index() {
        $categories = Categorie::getAll();
        require_once '../views/categories/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Categorie::create($_POST['libelle']);
            header('Location: ../views/index.php?controller=Categorie&action=index');
        } else {
            require_once '../views/categories/form.php';
        }
    }

    public function delete($id) {
        Categorie::delete($id);
        header('Location: ../views/index.php?controller=Categorie&action=index');
    }
}
?>
