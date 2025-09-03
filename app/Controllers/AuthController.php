<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function login(): void
    {
        include __DIR__ . "/../Views/auth/login.php";
    }

    public function register(): void
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $data = json_decode(file_get_contents("php://input"));

            $email = $data->email;
            $password = $data->password;

            $user = new User($email, $password);

            if ($user->searchUser($email) === true) {
                echo "Ein Account mit dieser E-Mail Adresse existiert bereits";
            } else {
                $user->registerUser($email, $password);
            }
        } else {
            include __DIR__ . "/../Views/auth/register.php";
        }
    }
}
