<?php
// require_once './app/controllers/trabajocontroller.php';
require_once './app/controllers/Controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'trabajos';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'trabajos':
        $controller = new Controller();
        $controller->showTrabajos();
        break;
    case 'client':
        $controller = new Controller();
        $controller->showClient($params[1]);
        break;
}
