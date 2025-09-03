<?php

namespace App\Models;

use App\Core\Database;

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
        $stmt->execute(["email" => $email]);
        return $stmt->fetch() !== false;
    }
    public function loginUser($email, $password): void
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        try {
            $stmt->execute(["email" => $email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user["password"])) {
                //hier cookie erstellen und setzen
                echo json_encode(["message" => "Login erfolgreich!", "success" => true]);
            }
        } catch (\PDOException $e) {
            echo json_encode(["message" => "Fehler: " . $e->getMessage()]);
        }
    }

    public function registerUser($email, $password): void
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":password", $password);
        try {
            $stmt->execute();
            echo json_encode(["message" => "Benutzer erfolgreich registiert!"]);
        } catch (\PDOException $e) {
            echo json_encode(["message" => "Fehler: " . $e->getMessage()]);
        }
    }
}
