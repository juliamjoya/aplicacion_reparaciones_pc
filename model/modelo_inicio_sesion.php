<?php
class Sesion extends Conectar {
    // Método para verificar el inicio de sesión
    public function inicio_sesion($usuario, $contrasena) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT *, (select nombre_rol from roles r where u.id_role = r.id_rol) as nombre_rol FROM usuarios u WHERE (nombre_usuario = ? OR email = ?) AND contrasena = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario);
        $sql->bindValue(2, $usuario);
        $sql->bindValue(3, $contrasena);
        $sql->execute();
        $resultado = $sql->fetch();
        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }
}
?>
