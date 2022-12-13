<!-- Anidar registros -->

<?php

    session_start();

    # Recojo los datos del formulario en varibles a través de $_POST
    $marca = $_POST['Marca'];
    $modelo = $_POST['Modelo'];
    $año = $_POST['Año'];
    $cv = $_POST['CV'];
    $precio = $_POST['Precio'];

    # Comprubo si las variables de $_SESSION existen
    if(!isset($_SESSION['Coche']) && !isset($_SESSION['i'])){
        # Creo un contador de $_SESSION
        $_SESSION['i'] = 0;
        # Creo la variable de $_SESSION
        $_SESSION['Coche'] = array();
        # A este array de $_SESSION le inserto otro array
        $_SESSION['Coche'][$_SESSION['i']] = array();

        # Si las variables ya existen, es decir que ya hay algun registro insertado:
    } elseif (isset($_SESSION['Coche']) && isset($_SESSION['i'])) {
        # Incremento el contador de $_SESSION
        $_SESSION['i']++;
        # Y a esa nueva posición del array de $_SESSION le vuelvo a insertar otro array para guardar otro registro
        $_SESSION['Coche'][$_SESSION['i']] = array();
    }

    # Miro que las variables a insertar existan y no este vacias, lo cual no podria ser porque los campos del formulario tienen la propiedad required pero asi aumento la fiabilidad
    if (isset($marca) && !empty($marca)  && isset($modelo) && !empty($modelo) && isset($año) && !empty($año) && isset($cv) && !empty($cv) && isset($precio) && !empty($precio)){
        # Asigno los valores de las variables a cada una de las posiciones del array
        $_SESSION["Coche"][$_SESSION['i']]["Marca"] = $marca;
        $_SESSION["Coche"][$_SESSION['i']]["Modelo"] = $modelo;
        $_SESSION["Coche"][$_SESSION['i']]["Año"] = $año;
        $_SESSION["Coche"][$_SESSION['i']]["CV"] = $cv;
        $_SESSION["Coche"][$_SESSION['i']]["Precio"] = $precio;
    }

    # Vuelvo al index.php
    header("Location: index.php");

?>

<!-- Anidar registros -->