<?php
require_once("../config/conexion.php");
require_once("../model/modelo_inicio_sesion.php");

$sesion = new Sesion();

switch ($_GET["op"]) {
    case 'iniciar_sesion':
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $resultado_iniciar_sesion = $sesion->inicio_sesion($usuario, $contrasena);
        
        if (is_array($resultado_iniciar_sesion) == true && count($resultado_iniciar_sesion) > 0) {
            $resultado_bd = array(
                "id_usuario" => $resultado_iniciar_sesion["id_usuario"],
                "nombre_usuario" => $resultado_iniciar_sesion["nombre_usuario"],
                "nombres" => $resultado_iniciar_sesion["nombres"],
                "apellidos" => $resultado_iniciar_sesion["apellidos"],
                "email" => $resultado_iniciar_sesion["email"],
                "id_role" => $resultado_iniciar_sesion["id_role"],
                "nombre_rol" => $resultado_iniciar_sesion["nombre_rol"]
            );
            // Inicio de sesión exitoso
            //session_start();
            //$_SESSION['usuario'] = $resultado_iniciar_sesion;
            
            // Enviar respuesta exitosa en formato JSON
            echo json_encode(array("status" => "success", "data" => $resultado_bd));
        } else {
            // Enviar respuesta de error en formato JSON
            echo json_encode(array("status" => "error", "message" => "Nombre de usuario o contraseña incorrectos"));
        }
        break;
}
?>
