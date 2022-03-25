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
                <img src="../img/alumnos2.webp" class="d-block w-100" alt="niños en el aula">
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
            <h1 class="display-3 text-center my-5">Bienvenidos alumnos al ciclo lectivo 2022</h1>
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
        <div class="accordion w-75" id="propuesta">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Educación integral / Fortalecer la autoestima:
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#propuesta">
                    <div class="accordion-body">
                        <p class="lead">Lograr el desarrollo integral, que comprende la inteligencia, la voluntad, la afectividad y la dimensión corporal y sensorial, trascendiendo el propio yo para encontrarse con los demás y con Dios, contribuye al fortalecimiento de una autoestima sana, al autoconocimiento, a la valoración de todas sus posibilidades y talentos y al desafío que le presentan las propias limitaciones.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Educación para Liderar / Aprender a pensar
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#propuesta">
                    <div class="accordion-body">
                    <p class="lead">Llevar sus ideas creativas a la práctica comprometidos con los valores asumidos. Valorar los vínculos y los aportes de los otros, trabajando en equipo para el bien común, viviendo con generosidad y espíritu de servicio.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Educación en Virtudes / Aprender a querer:
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#propuesta">
                    <div class="accordion-body">
                        <p class="lead">El ejercicio de las virtudes humanas enriquece la vida intelectual y afectiva, para aprender a poner el corazón en su obrar y en su querer, en sus afectos y sentimientos, en las relaciones con los demás.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
include 'footer.php';
?>