<?php
namespace App\Controllers;

class AuthController
{
    public function login()
    {
        include __DIR__ . "/../Views/auth/login.php";
    }
}