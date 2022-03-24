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
        <img src="../img/alumnos1.jpg" class="d-block w-100" alt="niña con mascarilla en el aula">
        </div>
        <div class="carousel-item">
        <img src="../img/carousel2.jpg" class="d-block w-100" alt="el regreso a clase de los niños con su maestra en el aula">
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
    <h1 class="display-3 text-center my-5">Bienvenidos alumnos al ciclo lectivo 2022</h1>
   
</main>


<?php 
    include 'footer.php';
?>