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
            foreach ($resultado_iniciar_sesion as $datos) {
                $resultado_bd["id_usuario"] = $datos["id_usuario"];
                $resultado_bd["nombre_usuario"] = $datos["nombre_usuario"];
                $resultado_bd["nombres"] = $datos["nombres"];
                $resultado_bd["apellidos"] = $datos["apellidos"];
                $resultado_bd["email"] = $datos["email"];
                $resultado_bd["id_role"] = $datos["id_role"];
            }
            echo json_encode($resultado_bd);
            // Inicio de sesión exitoso
            session_start();
            $_SESSION['usuario'] = $resultado_iniciar_sesion;
            header("Location: ../view/registro_operacion.php");
        } else {
            // Inicio de sesión fallido
            header("Location: ../view/inicio_sesion.php?error=1");
        }
        break;
}
?>
