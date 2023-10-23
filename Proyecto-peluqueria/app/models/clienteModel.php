<?php
require_once 'model.php';

class ClienteModel extends Model
{
    public function getClient()
    {
        $stmt = $this->db->prepare('SELECT * FROM clientes ORDER BY clientes.nombre ASC');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }
}
