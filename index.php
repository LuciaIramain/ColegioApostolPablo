<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucía Iramain">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/colegio-apostol-pablo.png" type="image/x-icon">
    <title>Colegio Apostol Pablo</title>
</head>
<body>
<main class="row d-flex flex-column align-items-center col-md-12">
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
    <section class="col-md-12 bg-light">
        <img src="img/alumnos2.webp" alt="los alumnos en hora de clase" class="w-100 imagenIndex">
        <div class="text-center textoImagen">
            <h2>EDUCACIÓN PERSONALIZADA</h2>
            <p class="lead texto">Desarrollamos una educación de calidad centrada en promover capacidades y habilidades en nuestros estudiantes.</p>
        </div>
    </section>
    <section class="col-md-12 bg-light py-5">
        <article class="row container text-center grilla">
            <div class="col-md-12 col-lg-4">
                <h4>INGLÉS INTENSIVO</h4>
                <p>Nuestros estudiantes rinden exámenes internacionales del Trinity Collage.</p>
                <h4 class="mt-5">PERSONALIZADA</h4>
                <p>Ofrecemos una educación personalizada. Los docentes acompañan a los estudiantes para que puedan descubrir sus fortalezas y su potencial contribución dentro y fuera del Apostol Pablo.</p>
            </div>
            <div class="col-md-12 col-lg-4">
                <h4>AMBIENTE FAMILIAR</h4>
                <p>Trabajamos junto a los padres ofreciendo un ambiente de formación continua. Generamos una red de familias con valores compartidos.</p>

                <h4 class="mt-5">INNOVAR PARA EDUCAR</h4>
                <p>Desarrollamos una educación con enfoque competencial que promueva la adquisición de capacidades y habilidades.</p>
            </div>
        </article>
    </section>
    <section class="col-md-12 text-center my-4">
        <h4 class="display-6 text-danger">Convenios</h4>
        <img src="img/universidadaustralencordoba-1.jpg" alt="universidad austral">
        <img src="img/unsta.png" alt="unsta">
    </section>
</main>

<?php
    include 'php/footer.php';
?>