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
            <img src="../img/secretaria.jpg" class="d-block w-100" alt="caricatura de una secretaria en sus labores">
        </div>
        <div class="carousel-item">
            <img src="../img/secretaria2.jpg" class="d-block w-100" alt="computadora">
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
    <section class="container">
        <article>
            <h1 class="display-3 text-center my-5">Bienvenidos personal de administración al ciclo lectivo 2022</h1>
            <h2 class="display-6 text-center my-5 text-success"><b>PROPUESTA EDUCATIVA</b></h2>
            <p>El Colegio Apostol Pablo es una institución educativa, que cuenta con primario y secundario.
                Ofrece a sus alumnos una formación integral de calidad, que atiende todas las dimensiones de la persona: intelectual,
                afectiva, artística, deportiva, social, ética y espiritual.</p>
            <p> El Apostol Pablo cuenta con:</p>
            <ul>
                <li>Nivel Primario.</li>
                <li>Nivel Secundario.</li>
            </ul>
            <p>El colegio es de escolaridad simple.</p>
            <p>Los horarios son: </p>
            <ul>
                <li><b>Horario de entrada: 08:00hs.</b></li>
                <li><b>Horario de salida: 13:00hs.</b></li>
            </ul>
        </article>
        <article class="my-5">
            <img src="../img/aula.jpg" alt="unas de las aulas del colegio" class="aula">
        </article>
        <article class="text-center my-5 bg-light border-light rounded-3 p-5">
            <h2 class="display-6 text-success">Horarios de atención</h2>
            <p class="lead">De lunes a viernes de 08 a 13hs</p>
        </article>
    </section>
</main>


<?php 
    include 'footer.php';
?>