<?php
require_once("../config/conexion.php");
require_once("../model/modelo_operacion.php");
$operacion = new Operacion();

switch ($_GET["op"]) {
    case 'listar_operacion':
        $datos = $operacion->get_operacion();
        $data = Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] =  $row['id'];
            $sub_array[] =  $row['numero_recibido'];
            $sub_array[] =  $row['descripcion_fallos_pc'];
            $sub_array[] =  $row['repuestos_reparacion'];
            $sub_array[] =  $row['fecha_revision'];
            $sub_array[] =  '<button type="button" onClick="editar('.$row["id"].')" id="'.$row["id"].'" class="btn btn-warning">Editar</button>';
            $sub_array[] =  '<button type="button" onClick="eliminar('.$row["id"].')" id="'.$row["id"].'" class="btn btn-danger">Eliminar</button>';
            $data[] = $sub_array;
        }

        $resultado = array(
            "sEcho"                => 1,
            "iTotalRecords"        => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData"               => $data

            // "draw"                => 1,
            // "recordsTotal"        => count($data),
            // "recordsTotalDisplay" => count($data),
            // "data"               => $data
        );
        echo json_encode($resultado);
    break;

    case 'guardar_editar_registro_operacion':
        $datos = $operacion -> get_operacion_id($_POST['id']);
        if(is_array($datos) == true && count($datos) == 0) {
            $operacion -> insert_operacion($_POST['numero_recibido'], $_POST['descripcion_fallos_pc'], $_POST['repuestos_reparacion']);
        }else{
            $operacion -> update_operacion($_POST['id'], $_POST['numero_recibido'], $_POST['descripcion_fallos_pc'], $_POST['repuestos_reparacion']);
        }
    break;

    case 'consultar_registro_operacion':
        $datos = $operacion -> get_operacion_id($_POST['id']);
        if(is_array($datos)==true && count($datos) > 0) {
            foreach ($datos as $row) {
                $resultado["id"] = $row["id"];
                $resultado["numero_recibido"] = $row["numero_recibido"];
                $resultado["descripcion_fallos_pc"] = $row["descripcion_fallos_pc"];
                $resultado["repuestos_reparacion"] = $row["repuestos_reparacion"];
            }
            echo json_encode($resultado);
        }
    break;

    case 'eliminar_registro_operacion':
        $recepcion -> delete_operacion_id($_POST['id']);
    break;
}
?>