<?php
$controller = $_GET['controller'] ?? 'User';
$action = $_GET['action'] ?? 'index';

require_once "../controllers/{$controller}Controller.php";

$controllerName = $controller . 'Controller';
$controllerInstance = new $controllerName();

if (method_exists($controllerInstance, $action)) {
    if (isset($_GET['id'])) {
        $controllerInstance->$action($_GET['id']);
    } else {
        $controllerInstance->$action();
    }
} else {
    echo "Action introuvable.";
}