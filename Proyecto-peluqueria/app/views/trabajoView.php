<?php
class TrabajoView
{
    public function showTrabajos($clients)
    {
        require_once './templates/trabajos.phtml';
    }

    public function showClient($client)
    {
        require_once './templates/client.phtml';
    }
}
