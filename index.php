<!DOCTYPE html>
<html lang="es">

<head>

    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon_php.ico" type="image/x-icon">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Bootstrap CSS v5.2.1 -->

    <!-- cdn icnonos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- cdn icnonos-->

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

    <div class="container mt-5">
        <div class="row justify-content-center">

            <!-- Tabla donde se muestar los registros -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Lista de vehiculos
                    </div>
                    <div class="p-4">
                        <table class="table table-striped aling-middle">
                            <thead>
                                <tr>
                                    <th class="col1">#</th>
                                    <th class="col1">Marca</th>
                                    <th class="col1">Modelo</th>
                                    <th class="col1">Año</th>
                                    <th class="col1">CV</th>
                                    <th class="col1">Precio</th>
                                    <th class="col1" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Printar resultados -->
                                <?php
                                    # Inicio la session
                                    session_start();

                                    # Compruebo si hay registros
                                    if (isset($_SESSION['Coche']) && count($_SESSION['Coche']) > 0) {

                                        # Reordeno el array por si hay alguna posició intermedia borrada
                                        sort($_SESSION['Coche']);

                                        # Itero el array numerico
                                        for ($i = 0; $i < count($_SESSION['Coche']); $i++) {
                                            echo "<tr><td>" . $i + 1 . "</td>";
                                            
                                            # Itero el array asociativo
                                            foreach ($_SESSION['Coche'][$i] as $key => $value) {
                                                echo "<td>" . $value . "</td>";
                                            }

                                            # Printo un boton con un enlace para editar el registro, este enlace envia el indice del array que corresponde con el registro por $_GET
                                            echo '<td><a class="text-success" href="edit_record.php?id='. $i .'"><i class="bi bi-pencil-square"></i></a></td>';

                                            # Compruebo si el regitro es el unico del array.
                                            if (count($_SESSION['Coche']) == 1) {
                                                # En caso de ser el unico registro del array, el boton de eliminar borra todas las variables de $_SESSION
                                                echo '<td><a class="text-danger" href="clear_records.php"><i class="bi bi-trash"></i></a></td></tr>';
                                            } else {
                                                # En caso de haber más de un registro en el array, el boton de eliminar solo borra la posición del array que corresponda con el registro marcado
                                                echo '<td><a class="text-danger" href="delete_record.php?id='. $i .'"><i class="bi bi-trash"></i></a></td></tr>';
                                            }
                                        }
                                    }
                                ?>
                                <!-- Printar resultados -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Tabla donde se muestar los registros -->

            <!-- Formulario para recoger los datos -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Ingresar datos
                    </div>
                    <form id="form_vehiculo" class="p-4" method="POST" action="insert_record.php">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Marca" name="Marca" required autocomplete="off">
                            <label>Marca</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Modelo" name="Modelo" required autocomplete="off">
                            <label>Modelo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Año" name="Año" required autocomplete="off">
                            <label>Año</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="CV" name="CV" required autocomplete="off">
                            <label>CV</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Precio" name="Precio" required autocomplete="off">
                            <label>Precio</label>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Formulario para recoger los datos -->

            <!-- Opciones -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Opciones
                    </div>
                    <form class="p-4" method="POST" action="clear_records.php">
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary" form="form_vehiculo"
                                data-bs-toggle="tooltip" data-placement="right" title="Registrar los datos">Registrar</button>
                        </div>
                        <div class="mb-3 d-grid">
                            <button type="reset" class="btn btn-warning" form="form_vehiculo"
                                data-bs-toggle="tooltip" data-placement="right" title="Limpiar los campos del formulario">Limpiar los
                                campos</i></button>
                        </div>
                        <div class="d-grid">
                            <button onclick="return confirm('¿Seguro que quieres eliminar todos los registros?');" type="submit" class="btn btn-danger" data-bs-toggle="tooltip"
                                data-placement="right" title="Borrar todos los registros">Borrar los registros</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Opciones -->

        </div>
    </div>

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