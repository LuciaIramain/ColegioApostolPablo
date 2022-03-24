<?php
    session_start();
    include 'header.php';
    require_once 'conexion.php';
    $conn = conectar();
    if($conn && !empty($_POST['usuario']) && !empty($_POST['password'])) {
        $consulta = 'SELECT usuario FROM usuarios
        WHERE usuario = \'' . $_POST['usuario'] . '\' AND password = \'' . sha1(trim($_POST['password'])) . '\'';
        $resultado = mysqli_query($conn, $consulta);
        $numeroFilas = mysqli_num_rows($resultado);
        if ($numeroFilas == 1) {
            $fila = mysqli_fetch_array($resultado);
            $_SESSION['usuario'] = $fila['usuario'];
            header('refresh:0;url=administradorSistema.php');
        } else {
            echo '<p class="alert alert-danger" role="alert">Usuario o contraseña incorrecta</p>';
            header('refresh:3;url=../index.php');
        }
        desconectar($conn);
    } else {
        echo '<p>Faltan datos para controlar ingreso</p>';
    }

    include 'footer.php';
?>