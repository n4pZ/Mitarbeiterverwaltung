<?php

namespace App\Models;

use Database;

class User
{
    public string $email;
    public string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function searchUser(string $email): bool
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT 1 FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch() !== false;
    }
    public function loginUser($email, $password): void {}

    public function registerUser($email, $password): void
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":password", $password);
        try {
            $stmt->execute();
            echo "Benutzer erfolgreich registiert!";
        } catch (\PDOException $e) {
            echo "Fehler: ", $e->getMessage();
        }
    }
}
