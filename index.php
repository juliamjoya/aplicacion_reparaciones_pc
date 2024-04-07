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
                    <img src="config/img/secretario.png" class="card-img-top" alt="Registro Recepción" height="256">
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
                    <img src="config/img/ordenador-personal.png" class="card-img-top" alt="Registro Operador"
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
    <footer>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1 mx-auto">Developer By Ing. Julian Joya - 2024</span>
            </div>
        </nav>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>