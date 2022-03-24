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

<main class="container">
    <section class="row">
        <h1 class="text-center my-5">Colegio Apostol Pablo</h1>
        <div class="col-md-12 w-25 formLogin">
            <h4 class="mt-4">Inicie Sesión</h2>
            <hr>
            <form action="php/validacionUsuario.php" method="POST">
                <div class="mb-3">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" required class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" required class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" class="btn btn-primary w-100" value="Iniciar Sesión">
                    <hr>
                    <a href="altaUsuario.php">¿No tienes una cuenta? ¡Registrate!</a>
                </div>
            </form>
        </div>
    </section>
</main>

<?php
    include 'php/footer.php';
?>