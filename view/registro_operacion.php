<!doctype html>
<html lang="es">

<head>
    <!-- Plantilla links CSS -->
    <?php require_once("../config/links_css.php");?>

    <title>App Reparaciones PC</title>
</head>

<body>
    <!-- Plantilla cabecera -->
    <?php require_once("../config/app_cabecera.php");?>

    <div class="container">
        <div class="row">
            <div class="mt-4 mb-4 p-4 bg-primary text-white rounded">
                <h1 class="text-center">Registro Operación</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registro Operación</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <button type="button" class="btn btn-success" id="btn_nuevo_registro_operacion" data-bs-toggle="modal"
                    data-bs-target="#modal_registro_operacion">Nuevo
                    Registro</button>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col table-responsive">
                <table class="table table-bordered table-striped" id="listaRegistrosOperacion">
                    <thead class="table-secondary">
                        <tr>
                            <th>ID</th>
                            <th>Número de recibido</th>
                            <th>Descripción fallos encontrados</th>
                            <th>Repuestos a utilizar</th>
                            <th>Fecha de revisión</th>
                            <th>Editar registro</th>
                            <th>Eliminar Registro</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- Plantilla pie pagina -->
    <?php require_once("../config/app_pie_pagina.php"); ?>

    <!-- Agrega el modal -->
    <?php require_once("modal_registro_operacion.php"); ?>

    <!-- Plantilla links JavaScript -->
    <?php require_once("../config/links_js.php"); ?>

    <!-- Scripts JS -->
    <script src="../config/js/operacion.js"></script>
</body>

</html>