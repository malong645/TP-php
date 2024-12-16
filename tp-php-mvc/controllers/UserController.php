<?php
require_once '../models/User.php';

class UserController {
    public function index() {
        $users = User::getAll();
        require_once '../views/users/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            User::create($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mot_de_passe']);
            header('Location: ../views/index.php?controller=User&action=index');
        } else {
            require_once '../views/users/form.php';
        }
    }

    public function delete($id) {
        User::delete($id);
        header('Location: ../views/index.php?controller=User&action=index');
    }
}