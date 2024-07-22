<?php
class Sesion extends Conectar {
    // Método para verificar el inicio de sesión
    public function inicio_sesion($usuario, $contrasena) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM usuarios WHERE usuario = ? AND contrasena = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario);
        $sql->bindValue(2, $contrasena);
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
