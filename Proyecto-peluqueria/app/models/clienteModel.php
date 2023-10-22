<?php
require_once 'model.php';

class ClienteModel extends Model
{

    public function getCliente()
    {
        $stmt = $this->db->prepare('SELECT * FROM clientes');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
}
