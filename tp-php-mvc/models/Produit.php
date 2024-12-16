<?php
require_once '../configs/database.php';

class Produit {
    public static function getAll() {
        $db = Database::connect();
        $stmt = $db->query("SELECT produit.*, categories.libelle AS categorie 
                            FROM produit 
                            LEFT JOIN categories ON produit.id_categorie = categories.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($nom, $description, $prix, $stock, $id_categorie) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO produit (nom, description, prix, stock, id_categorie) 
                               VALUES (?, ?, ?, ?, ?)");        
        $stmt->execute([$nom, $description, $prix, $stock, $id_categorie]);
    }

    public static function update($id, $nom, $description, $prix, $stock, $id_categorie) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE produit SET nom = ?, description = ?, prix = ?, stock = ?, id_categorie = ? 
                               WHERE id = ?");
        $stmt->execute([$nom, $description, $prix, $stock, $id_categorie, $id]);
    }

    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM produit WHERE id = ?");
        $stmt->execute([$id]);
    }
}
