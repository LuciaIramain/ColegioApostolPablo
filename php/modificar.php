<?php
session_start();
include 'header.php';
include 'menu.php';
?>

<main class="container">
    <?php
    include 'conexion.php';
    $conn = conectar();
    if ($conn && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $consulta = 'SELECT * FROM usuarios WHERE id = \'' . $id . '\'';
        $resultado = mysqli_query($conn, $consulta);
        desconectar($conn, $consulta);
        if (mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_array($resultado);
    ?>
            <section>
                <h1 class="display-3 text-center my-5">Actualizar datos</h1>
                <form action="registroModificado.php" method="POST">
                    <div class="mb-3">
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" value="<?php echo $fila['usuario'] ?>" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $fila['nombre'] ?>" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" value="<?php echo $fila['apellido'] ?>" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo $fila['email'] ?>" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="fechaAlta">Fecha:</label>
                        <input type="date" id="fechaAlta" name="fecha_alta" value="<?php echo $fila['fecha_alta'] ?>" class="form-control w-100">
                    </div>
                    <div class="mb-3">
                        <label for="rol">Rol:
                            <select name="rol" id="rol" class="select" value="<?php echo $fila['rol'] ?>">
                                <option value="administrador">Administrador</option>
                                <option value="administrativo">Administrativo</option>
                                <option value="alumno">Alumno</option>
                                <option value="docente">Docente</option>
                                <option value="padres">Padre</option>
                            </select>
                        </label>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <input type="submit" value="Actualizar" class="btn btn-success">
                        <a href="./listadoUsuarios.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </section>
    <?php
        }
    } else {
        echo '<p class="mensaje">No se pudo modificar</p>';
        header('refresh:5;url=listadoUsuarios.php');
    }
    ?>
</main>

<?php
include 'footer.php';
?>