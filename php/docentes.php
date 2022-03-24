<?php 
    session_start();
    include 'header.php';
    include 'menu.php';
?>

<main>
    <div id="carouselApostolPablo" class="carousel slide container" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselApostolPablo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselApostolPablo" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselApostolPablo" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/carousel2.jpg" class="d-block w-100" alt="el regreso a clase de los niños con su maestra en el aula">
        </div>
        <div class="carousel-item">
            <img src="../img/alumnos1.jpg" class="d-block w-100" alt="niña con mascarilla en el aula">
        </div>
        <div class="carousel-item">
        <img src="../img/padres1.jpg" class="d-block w-100" alt="protocolo para la vuelta a clase presencial">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselApostolPablo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselApostolPablo" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
    </div>
    <h1 class="display-3 text-center my-5">Bienvenidos docentes al ciclo lectivo 2022</h1>
    <h3 class="text-center my-5">Listado de los docentes año 2022</h3>

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
                            <td><a href="modificar.php?id='.$fila['id'].'"><img src="../img/edit_pencil.png" alt="" class="imagen-tabla"></a> </td> 
                                <td><a href="confirmar_borrado.php?id='.$fila['id'].'"><img src="../img/trash_empty.png" alt="" class="imagen-tabla2"></a> </td>
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