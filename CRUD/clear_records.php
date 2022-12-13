<!-- Borrar todos los registros -->

<?php
    session_start();

    # Borro las variables de $_SESSION
    unset($_SESSION['Coche']);
    unset($_SESSION['i']);
    
    # Vuelvo al index.php
    header("Location: index.php");
?>

<!-- Borrar todos los registros -->