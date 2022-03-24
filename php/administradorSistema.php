<?php 
    session_start();
    include 'header.php';
    include 'menu.php';
?>

<main>
    <h1 class="display-3 text-center my-5">Bienvenido Administrador</h1>
    <h3 class="text-center my-5">Listado de los usuarios año 2022</h3>

    <?php
    include_once 'conexion.php';
    $conn = conectar();
    $consulta = 'SELECT * FROM usuarios';
    $resultado = mysqli_query($conn, $consulta);

    desconectar($conn);

    $numFilas = mysqli_num_rows($resultado);
    if ($numFilas > 0 ) {
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        setlocale(LC_ALL, 'spanish');
        echo '<div class="table-responsive container">
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tipo</th>
                </tr>
                </thead>
                <tbody>';
                while ($fila = mysqli_fetch_array($resultado)) {
                    $fecha = strtotime ($fila['fecha_alta']);
                    $fecha = strftime ('%d-%m-%Y', $fecha);
                    echo '<tr>
                            <td>' . $fila['usuario'] . '</td> 
                            <td>' . $fila['nombre'] . '</td>
                            <td>' . $fila['apellido'] . '</td>
                            <td>' . $fila['email'] . '</td> 
                            <td>' . $fecha . '</td> 
                            <td>' . $fila['tipo'] . '</td>
                            <td><a href="modificar.php?id='.$fila['id'].'"><img src="../img/edit_pencil.png" alt="imagen de un lapiz" class="imagen-tabla"></a> </td> 
                                <td><a href="confirmar_borrado.php?id='.$fila['id'].'"><img src="../img/trash_empty.png" alt="imagen de un tacho de basura" class="imagen-tabla2"></a> </td>
                        </tr>';
                }
                
               echo '</tbody>
                </table>
                </div>';
    }
    ?>
</main>

<?php 
    include 'footer.php';
?>