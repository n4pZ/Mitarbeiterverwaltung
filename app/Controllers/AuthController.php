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
            $email = $_POST["email"];
            $password = $_POST["password"];

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

//there seems to be some kind of issue with the data transfer via js.