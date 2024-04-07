<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- DataTable CSS CDN -->
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.3/datatables.min.css" rel="stylesheet">

    <title>App Reparaciones PC</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <!-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
                    <i class="bi bi-pc-display-horizontal"></i>
                    Aplicación Reparaciones PC
                </a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="mt-4 mb-4 p-4 bg-primary text-white rounded">
                <h1 class="text-center">Registro Operación</h1>
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
                    <!-- <tbody>
                        <tr>
                            <td>1</td>
                            <td>001</td>
                            <td>No arranca el ordenador</td>
                            <td>Disco Duro estado solido 512 GB</td>
                            <td>06/04/2024 09:20:18</td>
                            <td><button type="button" class="btn btn-warning">Editar</button></td>
                            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                        </tr>
                    </tbody> -->
                </table>
            </div>
        </div>
    </div>
    <footer>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1 mx-auto">Developer By Ing. Julian Joya - 2024</span>
            </div>
        </nav>
    </footer>

    <!-- Agrega el modal -->
    <?php require_once("modal_registro_operacion.php"); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- DataTable JS -->
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.3/datatables.min.js"></script>

    <!-- SweetAlert 2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Scripts JS -->
    <script src="../config/js/operacion.js"></script>
</body>

</html>