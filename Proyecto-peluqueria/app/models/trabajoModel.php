<?php
require_once 'model.php';

class TrabajoModel extends Model
{

    public function getTrabajos()
    {
        // $stmt = $this->db->prepare('SELECT trabajos.*, Clientes.nombre AS nombreCliente FROM Trabajos JOIN Clientes ON Trabajos.cliente_id = Clientes.cliente_id WHERE Trabajos.cliente_id = Clientes.cliente_id');
        $stmt = $this->db->prepare('SELECT DISTINCT c.nombre AS NombreCliente, t.fecha_trabajo, t.trabajo_realizado, t.descripcion, t.cliente_id
        FROM Trabajos t
        JOIN Clientes c ON t.cliente_id = c.cliente_id');
        // $stmt = $this->db->prepare('SELECT * FROM trabajos');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
