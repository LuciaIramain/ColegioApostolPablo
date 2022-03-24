<?php
    session_start();
    if (!empty($_SESSION['usuario']) && isset($_SESSION['usuario'])) {
        session_destroy();
        header('refresh:0; ../index.php');
    } else {
        echo '<h2>No inició sesión</h2>';
        header('refresh:1; ../index.php');
    }
?>