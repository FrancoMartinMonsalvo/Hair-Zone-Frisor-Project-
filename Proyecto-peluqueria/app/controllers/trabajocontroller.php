<?php
require_once 'models/trabajoModel.php';
require_once 'views/trabajoView.php';

class TrabajoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new TrabajoModel();
        $this->view = new TrabajoView();
    }

    public function obtenerTrabajos() {
        return $this->model->obtenerTrabajos();
    }
}

$controller = new TrabajoController();

?>