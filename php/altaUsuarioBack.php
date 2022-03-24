<?php
    if (!empty($_POST['usuario']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['password']) 
        && !empty($_POST['email']) && !empty($_POST['fecha_alta']) && !empty($_POST['tipo'])) {
        
        include 'conexion.php';
        include 'header.php';
        include 'menu.php';
        $conn = conectar();
        if ($conn) {
            $usuario = $_POST['usuario'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $password = sha1($_POST['password']);
            $email = $_POST['email'];
            $fecha = $_POST['fecha_alta'];
            $tipo = $_POST['tipo'];

            $consulta = 'INSERT INTO usuarios(usuario, nombre, apellido, password, email, fecha_alta, tipo) 
            VALUES (\'' . $usuario . '\' , \'' . $nombre . '\' , \'' . $apellido . '\', \'' . $password . '\' , \'' . $email . '\' , \'' . $fecha . '\' , \'' . $tipo . '\' )';
            $resultado = mysqli_query($conn, $consulta);
            
            if ($resultado) {
                echo '<p class="alert alert-success" role="alert">Alta exitosa</p>';
                header('refresh:5;url=../index.php');
            } else {
                echo '<p class="alert alert-danger" role="alert">No se pudo realizar el alta</p>';
            }
            desconectar($conn);
        } else {
            echo '<p class="alert alert-danger" role="alert">Debe ingresar datos en el formulario</p>';
            header('refresh:5;url=altaUsuario.php');
        }
        include './footer.php';
    }
?>
    