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
                <h1 class="text-center">Registro Recepción</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registro Recepción</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <button type="button" class="btn btn-success" id="btn_nuevo_registro_recepcion" data-bs-toggle="modal"
                    data-bs-target="#modal_registro_recepcion">Nuevo
                    Registro</button>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col table-responsive">
                <table class="table table-bordered table-striped" id="listaRegistrosRecepcion">
                    <thead class="table-secondary">
                        <tr>
                            <th>ID</th>
                            <th>Número de recibido</th>
                            <th>Estado del ordenador</th>
                            <th>Marca del ordenador</th>
                            <th>Nombre del cliente</th>
                            <th>Telefono del cliente</th>
                            <th>Codigo del operario</th>
                            <th>Fecha de recepción</th>
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
    <?php require_once("modal_registro_recepcion.php"); ?>

    <!-- Plantilla links JavaScript -->
    <?php require_once("../config/links_js.php"); ?>

    <!-- Scripts JS -->
    <script src="../config/js/recepcion.js"></script>
</body>

</html>