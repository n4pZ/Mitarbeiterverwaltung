<?php
session_start();
require_once __DIR__ . "/../vendor/autoload.php";

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$routes = [
  "/" => "HomeController@index",
  "/home" => "HomeController@index",
  "/login" => "AuthController@login",
  "/register" => "AuthController@register",
];

$safeRoutes = [
  "/login",
  "/register"
];

if (array_key_exists($uri, $routes)) {
    list($controllerName, $method) = explode("@", $routes[$uri]);
    $controllerClass = "\\App\\Controllers\\$controllerName";
    $controller = new $controllerClass;

    if (!in_array($uri, $safeRoutes)) {
        if (!isset($_SESSION["user_id"])) {
            header("Location: /login");
            exit;
        }
    }

    if (($uri === "/login" || $uri === "/register") && isset($_SESSION["user_id"])) {
      header("Location: /home");
    }

    $controller->$method();
} else {
    header("HTTP/1.0 404 Not Found");
    echo "Seite nicht gefunden";
}
