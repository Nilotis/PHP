<!DOCTYPE html>
<html lang="es">

<head>

    <title>Editar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon_php.ico" type="image/x-icon">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Bootstrap CSS v5.2.1 -->

</head>

<body class="bg-light">

    <!-- Header -->
    <header class="container-fluid bg-success">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                    <h3 class="text-center text-white">Concesionario de coches</h3>
                </header>
            </div>
        </div>
    </header>
    <!-- Header -->

    <!-- Recoger id del registro -->
    <?php
        session_start();

        # Recojo el indice del array por $_GET y printo sus datos en los campos del formulario
        $i = $_GET['id']
    ?>
    <!-- Recoger id del registro -->

    <!-- Formulario para editar el registro -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Modificar datos de <?php echo $_SESSION['Coche'][$i]['Marca'] . " " . $_SESSION['Coche'][$i]['Modelo'] ?>
                    </div>
                    <form id="form_vehiculo" class="p-4" method="POST" action="update_record.php?id=<?php echo $i?>">
                        <div class="mb-3">
                            <label class="form-label">Marca: </label>
                            <input type="text" class="form-control" name="Marca" required autocomplete="off"
                                value="<?php echo $_SESSION['Coche'][$i]['Marca'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Modelo: </label>
                            <input type="text" class="form-control" name="Modelo" required autocomplete="off"
                                value="<?php echo $_SESSION['Coche'][$i]['Modelo'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Año: </label>
                            <input type="text" class="form-control" name="Año" required autocomplete="off"
                                value="<?php echo $_SESSION['Coche'][$i]['Año'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">CV: </label>
                            <input type="text" class="form-control" name="CV" required autocomplete="off"
                                value="<?php echo $_SESSION['Coche'][$i]['CV'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio: </label>
                            <input type="text" class="form-control" name="Precio" required autocomplete="off"
                                value="<?php echo $_SESSION['Coche'][$i]['Precio'] ?>">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary bg-primary border-0" data-toggle="tooltip"
                                data-placement="right" title="Editar">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Formulario para editar el registro -->

    <!-- Footer -->
    <footer class="container-fluid bg-success fixed-bottom">
        <div class="row">
            <div class="col-md text-light text-center py-3">
                Nil Carmona Quesada - 2n ASIX - IAW
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"> </script>
</body>

</html>