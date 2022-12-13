<!-- Borrar el registro seleccionado -->

<?php
    session_start();

    # Recojo el indice del array por $_GET
    $i = $_GET['id'];

    # Borro la posición del array recogida por $_GET 
    unset($_SESSION['Coche'][$i]);

    # Vuelvo al index.php
    header("Location: index.php");
?>

<!-- Borrar el registro seleccionado -->