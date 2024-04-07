<?php
require_once("../config/conexion.php");
require_once("../model/modelo_recepcion.php");
$recepcion = new Recepcion();

switch ($_GET["op"]) {
    case 'listar_recepcion':
        $datos = $recepcion->get_recepcion();
        $data = Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] =  $row['id'];
            $sub_array[] =  $row['numero_recibido'];
            $sub_array[] =  $row['estado_pc'];
            $sub_array[] =  $row['marca_pc'];
            $sub_array[] =  $row['nombre_cliente'];
            $sub_array[] =  $row['telefono_cliente'];
            $sub_array[] =  $row['codigo_operario'];
            $sub_array[] =  $row['fecha_recepcion'];
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

    case 'guardar_editar_registro_recepcion':
        $datos = $recepcion -> get_recepcion_id($_POST['id']);
        //if(empty($_POST['id'])){
            if(is_array($datos) == true && count($datos) == 0) {
                echo "Esta llegando a la insercion";
                $recepcion -> insert_recepcion($_POST['numero_recibido'], $_POST['estado_pc'], $_POST['marca_pc'], $_POST['nombre_cliente'], $_POST['telefono_cliente'], $_POST['codigo_operario']);
            }else{
                echo "Esta llegando a la actualizacion";
                $recepcion -> update_recepcion($_POST['id'], $_POST['numero_recibido'], $_POST['estado_pc'], $_POST['marca_pc'], $_POST['nombre_cliente'], $_POST['telefono_cliente'], $_POST['codigo_operario']);
            }
        //}
    break;

    case 'consultar_registro_recepcion':
        $datos = $recepcion -> get_recepcion_id($_POST['id']);
        if(is_array($datos)==true && count($datos) > 0) {
            foreach ($datos as $row) {
                $resultado["id"] = $row["id"];
                $resultado["numero_recibido"] = $row["numero_recibido"];
                $resultado["estado_pc"] = $row["estado_pc"];
                $resultado["marca_pc"] = $row["marca_pc"];
                $resultado["nombre_cliente"] = $row["nombre_cliente"];
                $resultado["telefono_cliente"] = $row["telefono_cliente"];
                $resultado["codigo_operario"] = $row["codigo_operario"];
            }
            echo json_encode($resultado);
        }
    break;

    case 'eliminar_registro_recepcion':
        $recepcion -> delete_recepcion_id($_POST['id']);
    break;
}
?>