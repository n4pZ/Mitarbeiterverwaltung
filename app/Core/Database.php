<?php
class Database
{
    private static $pdo;

    public static function getConnection(): PDO
    {
        if (!self::$pdo) {
            self::$pdo = new PDO(
                "mysql:host=localhost:dbname=Mitarbeiterverwaltung;charset=utf8mb4",
                "amedeo",
                "blackcat1"
            );
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        return self::$pdo;
    }
}