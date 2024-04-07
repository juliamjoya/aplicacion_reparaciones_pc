<?php
class Recepcion extends Conectar{
    public function get_recepcion(){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM registro_recepcion";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function get_recepcion_id($id_recepcion){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM registro_recepcion WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_recepcion);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function delete_recepcion_id($id_recepcion){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "DELETE FROM registro_recepcion WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id_recepcion);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insert_recepcion($numero_recibido,$estado_pc,$marca_pc,$nombre_cliente,$telefono_cliente,$codigo_operario){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO registro_recepcion(numero_recibido, estado_pc, marca_pc, nombre_cliente, telefono_cliente, codigo_operario) VALUES (?,?,?,?,?,?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $numero_recibido);
        $sql->bindValue(2, $estado_pc);
        $sql->bindValue(3, $marca_pc);
        $sql->bindValue(4, $nombre_cliente);
        $sql->bindValue(5, $telefono_cliente);
        $sql->bindValue(6, $codigo_operario);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function update_recepcion($id_recepcion,$numero_recibido,$estado_pc,$marca_pc,$nombre_cliente,$telefono_cliente,$codigo_operario){
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE registro_recepcion SET numero_recibido=?, estado_pc=?, marca_pc=?, nombre_cliente=?, telefono_cliente=?, codigo_operario=? WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $numero_recibido);
        $sql->bindValue(2, $estado_pc);
        $sql->bindValue(3, $marca_pc);
        $sql->bindValue(4, $nombre_cliente);
        $sql->bindValue(5, $telefono_cliente);
        $sql->bindValue(6, $codigo_operario);
        $sql->bindValue(7, $id_recepcion);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
?>