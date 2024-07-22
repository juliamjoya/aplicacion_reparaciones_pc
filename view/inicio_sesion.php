<!doctype html>
<html lang="es">

<head>
    <!-- Plantilla links CSS -->
    <?php require_once("../config/links_css.php");?>
</head>

<body>
    <!-- Plantilla cabecera -->
    <?php require_once("../config/app_cabecera.php");?>

    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 50rem;">
                    <img src="../config/img/logo_reparaciones_jj.png" class="card-img-top" alt="Registro Recepción" height="256">
                    <div class="card-body">
                        <h3 class="card-title text-center">Inicio de Sesión</h3>
                        <form id="form_inicio_sesion" method="post">
                            <div class="mb-3 mt-3">
                              <label for="usuario" class="form-label">Usuario:</label>
                              <input type="text" class="form-control" id="usuario" placeholder="Digite Usuario" name="usuario">
                            </div>
                            <div class="mb-3">
                              <label for="contrasena" class="form-label">Contraseña:</label>
                              <input type="password" class="form-control" id="contrasena" placeholder="Digite Contraseña" name="contrasena">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" id="btn_iniciar_sesion">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plantilla pie pagina -->
    <?php require_once("../config/app_pie_pagina.php");?>

    <!-- Plantilla links JavaScript -->
    <?php require_once("../config/links_js.php");?>

    <!-- Scripts JS -->
    <script src="../config/js/inicio_sesion.js"></script>
</body>

</html>