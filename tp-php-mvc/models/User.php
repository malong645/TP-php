<?php
require_once '../configs/database.php';

class User {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($nom, $prenom, $email, $mot_de_passe) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO users (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nom, $prenom, $email, password_hash($mot_de_passe, PASSWORD_BCRYPT)]);
    }

    public static function update($id, $nom, $prenom, $email) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE users SET nom = ?, prenom = ?, email = ? WHERE id = ?");
        $stmt->execute([$nom, $prenom, $email, $id]);
    }

    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
    }
}
