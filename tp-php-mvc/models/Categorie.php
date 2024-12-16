<?php
require_once '../configs/database.php';

class Categorie {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($libelle) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO categories (libelle) VALUES (?)");
        $stmt->execute([$libelle]);
    }

    public static function update($id, $libelle) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE categories SET libelle = ? WHERE id = ?");
        $stmt->execute([$libelle, $id]);
    }

    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM categories WHERE id = ?");
        $stmt->execute([$id]);
    }
}
