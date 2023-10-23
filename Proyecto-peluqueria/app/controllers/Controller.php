<?php
require_once 'app/models/clienteModel.php';
require_once 'app/models/trabajoModel.php';
require_once 'app/views/trabajoView.php';

class Controller
{
    private $modelClient;
    private $modelJob;
    private $view;

    function __construct()
    {
        $this->modelClient = new ClienteModel();
        $this->modelJob = new TrabajoModel();
        $this->view = new TrabajoView();
    }

    function arrayObjectsClient()
    {
        $clients = $this->modelClient->getClient();
        $clientData = [];

        foreach ($clients as $client) {
            $jobs = $this->modelJob->getJobsByClient($client->cliente_id);
            $clientData[] = [
                'cliente' =>  $client,
                'trabajos' => $jobs,
            ];
        }

        return $clientData;
    }

    public function showTrabajos()
    {
        $clientData = $this->arrayObjectsClient();

        $this->view->showTrabajos($clientData);
    }

    public function showClient($id)
    {
        $data = $this->arrayObjectsClient();
        $clientData = $data[$id];

        $this->view->showClient($clientData);
    }
}
