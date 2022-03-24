<?php
    function conectar()
    {
        $servidor = 'localhost';
        $usuario = 'root';
        $clave = '';
        $db = 'colegioapostolpablo';
        $conn = mysqli_connect($servidor, $usuario, $clave, $db);
        if (!$conn) {
            echo '<p class="mensaje">Error al conectar</p>';
        } else {
            return($conn);
        }
    }

    function desconectar($conn) 
    {
        if ($conn) {
            mysqli_close($conn);
        } else {
            echo '<p>No se puede desconectar, no existe conexión</p>';
        }
    }
?>