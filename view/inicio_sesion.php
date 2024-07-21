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
        <div class="row">
            <div class="mt-4 mb-4 p-4 bg-primary text-white rounded">
                <h1 class="text-center">Inventario Reparaciones PC</h1>
                <p class="text-center">En esta aplicacion permite registra la información de los equipos de computo que
                    ingresan
                    a la empresa para
                    ser reparados.</p>
                <p class="text-center">De acuerdo a su perfil profesional, a continuación ingrese por alguna de las
                    siguientes opciones:</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6 d-flex justify-content-center">
                <div class="card" style="width: 23rem;">
                    <img src="../config/img/secretario.png" class="card-img-top" alt="Registro Recepción" height="256">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registro Recepción</h5>
                        <p class="card-text">Click en el boton "Registrar Recepción" para ingresar al inventario
                            de
                            recepción</p>
                        <div class="text-center">
                            <a href="view/registro_recepcion.php" class="btn btn-success">Registrar Recepción</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <div class="card" style="width: 23rem;">
                    <img src="../config/img/ordenador-personal.png" class="card-img-top" alt="Registro Operador"
                        height="256">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registro Operador</h5>
                        <p class="card-text">Click en el boton "Registrar" para ingresar al inventario de
                            operación</p>
                        <div class="text-center">
                            <a href="view/registro_operacion.php" class="btn btn-success">Registrar Operación</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plantilla pie pagina -->
    <?php require_once("../config/app_pie_pagina.php");?>

    <!-- Plantilla links JavaScript -->
    <?php require_once("../config/links_js.php");?>
</body>

</html>