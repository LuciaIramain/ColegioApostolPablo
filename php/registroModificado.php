<?php
    session_start();
    include 'header.php';
    require_once 'conexion.php';
    include 'menu.php';
    $conn = conectar();
    if ($conn && isset($_POST['id'])) {
        $consulta = 'UPDATE usuarios SET ';
        foreach ($_POST as $clave => $valor) {
            if (!empty($valor) && $clave != 'id') {
                $consulta .= $clave . '= \'' . $valor . '\' , ';
            }
        }
        if (!empty($_POST['password'])) {
            $clave = sha1(trim($_POST['password']));
            $consulta .= ' password = \'' . $clave . '\', ';
        }
        $id = $_POST['id'];
        $consulta .= 'WHERE id = ' . $id . ';';
        $consulta = str_replace(", WHERE", " WHERE", $consulta);
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            echo '<p class="alert alert-success" role="alert">Actualización exitosa!</p>';
            header('refresh:2;url=listadoUsuarios.php');
        } else {
            echo '<p class="alert alert-danger" role="alert">No se pudo modificar</p>';
            header('refresh:3;url=listadoUsuarios.php');
        }
    }
    desconectar($conn);
    include 'footer.php';
?>