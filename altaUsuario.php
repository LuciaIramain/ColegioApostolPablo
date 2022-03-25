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
    <header class="d-flex flex-column align-items-center col-md-12 bg-light">
        <img src="img/colegio-apostol-pablo.png" alt="logo del colegio" class="logo">
        <h1 class="text-center">Apostol Pablo</h1>
    </header>
    <section class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-danger" aria-current="page" href="index.php"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" aria-current="page" href="error404.php"><b>Propuesta educativa</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" aria-current="page" href="error404.php"><b>Familia y colegio</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="error404.php"><b>Nuestro colegio</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="login.php"><b>Iniciar Sesión</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
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
                    <label for="roles">Rol:
                        <select name="rol" id="roles" class="select">
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