<?php
class Operacion extends Conectar{
    public function get_operacion(){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM registro_operacion";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function get_operacion_id($id_operacion){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM registro_operacion WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_operacion);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function delete_operacion_id($id_operacion){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "DELETE FROM registro_operacion WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_operacion);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insert_operacion($numero_recibido,$descripcion_fallos_pc,$repuestos_reparacion){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO registro_operacion(numero_recibido, descripcion_fallos_pc, repuestos_reparacion) VALUES (?,?,?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $numero_recibido);
        $sql->bindValue(2, $descripcion_fallos_pc);
        $sql->bindValue(3, $repuestos_reparacion);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function update_operacion($id_operacion,$numero_recibido,$descripcion_fallos_pc,$repuestos_reparacion){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE registro_operacion SET numero_recibido=?, descripcion_fallos_pc=?, repuestos_reparacion=? WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $numero_recibido);
        $sql->bindValue(2, $descripcion_fallos_pc);
        $sql->bindValue(3, $repuestos_reparacion);
        $sql->bindValue(4, $id_operacion);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
?>