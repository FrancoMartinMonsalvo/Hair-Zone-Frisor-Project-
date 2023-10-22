<?php
require_once 'app/models/trabajoModel.php';
require_once 'app/views/trabajoView.php';

class TrabajoController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new TrabajoModel();
        $this->view = new TrabajoView();
    }

    public function showTrabajos()
    {
        $trabajos =  $this->model->getTrabajos();

        $this->view->showTrabajos($trabajos);
    }
}
