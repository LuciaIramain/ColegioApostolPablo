<?php
    session_start();
    include 'header.php';
    include 'conexion.php';
    $conn = conectar();
    
    if ($conn && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $consulta = 'SELECT * FROM usuarios WHERE id= \'' . $id . '\'';
        $resultado = mysqli_query($conn, $consulta);
        desconectar($conn);
        if (mysqli_num_rows($resultado)>0) {
            $fila = mysqli_fetch_array($resultado);
            include 'menu.php';
            echo '<section class="container my-5">';
            echo '<p class="display-5 text-center">¿Está seguro de querer eliminar al usuario <b>'. $fila['usuario'] .'</b>?</p>';
            echo '<div class="my-5 d-flex justify-content-center">
                    <a href="borrar.php?id='. $id .'" class="btn btn-success me-2 w-25">Aceptar</a>
                    <a href="administradorSistema.php" class="btn btn-danger w-25">Cancelar</a>
                  </div>';
            echo '</section>';
        }
    }

    include 'footer.php';
?>