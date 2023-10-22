<?php
require_once './app/controllers/trabajocontroller.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'clientList';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'trabajos':
        $showTrabajo = new TrabajoController();
        $showTrabajo->showTrabajos();
        break;
}
