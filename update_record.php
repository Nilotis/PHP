<!-- Actualizar el registro -->

<?php

    session_start();

    # Recojo el indice del array enviado por $_GET
    $i = $_GET['id'];

    # Recojo las variables enviadas por $_POST a traves del formulario de edición
    $marca = $_POST['Marca'];
    $modelo = $_POST['Modelo'];
    $año = $_POST['Año'];
    $cv = $_POST['CV'];
    $precio = $_POST['Precio'];

    # Miro que las variables a insertar existan y no este vacias, lo cual no podria ser porque los campos del formulario tienen la propiedad required pero asi aumento la fiabilidad
    if (isset($marca) && !empty($marca) && isset($modelo) && !empty($modelo) && isset($año) && !empty($año) && isset($cv) && !empty($cv) && isset($precio) && !empty($precio)) {

        # Asigno los valores de las variables a cada una de las posiciones del array
        $_SESSION["Coche"][$i]["Marca"] = $marca;
        $_SESSION["Coche"][$i]["Modelo"] = $modelo;
        $_SESSION["Coche"][$i]["Año"] = $año;
        $_SESSION["Coche"][$i]["CV"] = $cv;
        $_SESSION["Coche"][$i]["Precio"] = $precio;

        # Vuelvo al index.php
        header("Location: index.php");
    }

?>

<!-- Actualizar el registro -->