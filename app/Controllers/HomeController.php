<?php
namespace App\Controllers;

class HomeController
{
    public function index()
    {
        include __DIR__ . "/../Views/employees/list.php";
    }
}
