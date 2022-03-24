<?php
    session_start();
    include 'header.php';
    include 'conexion.php';
    include 'menu.php';
    $conn = conectar();

    if ($conn && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $consulta = 'DELETE FROM usuarios WHERE id = \'' .$id . '\'';
        $resultado = mysqli_query($conn, $consulta);
        desconectar($conn);
        if ($resultado) {
            echo '<p class="alert alert-success" role="alert">Eliminación exitosa!</p>';
            header('refresh:2;url=administradorSistema.php');
        } else {
            echo '<p class="alert alert-danger" role="alert">No se pudo eliminar!</p>';
            header('refresh:2;url=administradorSistema.php');
        }
    } else {
        echo '<p class="alert alert-danger" role="alert">Canceló la eliminación</p>';
        header('refresh:2;url=administradorSistema.php');
    }

    include 'footer.php';
?>