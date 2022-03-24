<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucía Iramain">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Colegio Apostol Pablo</title>
</head>
<body>
    <main>
        <section class="container">
        <h1 class="display-3 py-5 text-center">Registrate</h1>
            <form action="php/altaUsuarioBack.php" method="POST">
                <div class="mb-3">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" autocomplete="off" class="form-control w-100" required>
                </div>
                <div class="mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control w-100" required>
                </div>
                <div class="mb-3">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" class="form-control w-100" required>
                </div>
                <div class="mb-3">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control w-100" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control w-100" required>
                </div>
                <div class="mb-3">
                    <label for="fechaAlta">Fecha:</label>
                    <input type="date" id="fechaAlta" name="fecha_alta" class="form-control w-100" required>
                </div>
                <div class="mb-3">
                    <label for="tipo">Tipo:
                        <select name="tipo" id="tipo" class="select">
                            <option value="administrador">Administrador</option>
                            <option value="administrativo">Administrativo</option>
                            <option value="alumno">Alumno</option>
                            <option value="docente">Docente</option>
                            <option value="padres">Padre</option>
                        </select>
                    </label>
                </div>
                <div class="mb-3">
                <input type="submit" value="Enviar" class="btn btn-success w-25">
                <input type="reset" value="Limpiar" class="btn btn-success w-25">
                </div>
            </form>
        </section>
    </main>
<?php
    include 'php/footer.php';
?>