<?php
class Database {
    private static $host = 'localhost';
    private static $db_name = 'tp_php_mvc';
    private static $username = 'postgres';
    private static $password = 'root';
    public static $conn;

    public static function connect() {
        if (self::$conn == null) {
            try {
                self::$conn = new PDO("pgsql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}

