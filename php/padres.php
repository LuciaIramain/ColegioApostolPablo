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
            <img src="../img/patio.jpg" class="d-block w-100" alt="chicos jugando en el patio">
        </div>
        <div class="carousel-item">
            <img src="../img/aula.jpg" class="d-block w-100" alt="el aula de la institución">
        </div>
        <div class="carousel-item">
            <img src="../img/alumnos1.jpg" class="d-block w-100" alt="niña con mascarilla en el aula">
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
            <h1 class="display-3 text-center my-5">Bienvenidos padres al ciclo lectivo 2022</h1>
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
                        Primero los Padres / Colegio de Familias:
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#propuesta">
                    <div class="accordion-body">
                        <p class="lead">Partiendo de la concepción cristiana de la familia, los padres son los protagonistas, a quienes corresponde por naturaleza el derecho irrenunciable y la responsabilidad de la educación de sus hijos. La institución es colaboradora y complemento para los padres en esta tarea. Solo es posible una educación de calidad cuando los padres y la institución comparten valores y principios educativos.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Educación y libertad / Buscar la verdad:
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#propuesta">
                    <div class="accordion-body">
                    <p class="lead">Crecer en autonomía, partiendo de conocerse a sí mismo y la verdad de las cosas y así aprender a tomar decisiones haciéndose responsable de sus acciones.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Identidad Cristiana / Buenos hijos de Dios : Junto a las familias
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#propuesta">
                    <div class="accordion-body">
                        <p class="lead">Nos proponemos transmitir a los alumnos la fe y el amor a Jesús, afianzando en ellos una sólida identidad cristiana que se manifiesta en la vida de piedad filial, el amor a la verdad y el ejercicio de la caridad con todas las personas, en especial con los más necesitados. Aprenden así a forjar una sólida unidad de vida, de modo que, con libertad y responsabilidad, se reflejen en su conducta las enseñanzas del Evangelio.</p>
                    </div>
                </div>
            </div>
        </div>
        <article class="text-center my-5 bg-light border-light rounded-3 p-5">
            <h2 class="display-6 text-success">¿Desea coordinar una entrevista para el próximo ciclo lectivo?</h2>
            <h5 class="lead">¡NOS ENCANTARÍA RECIBIRTE!</h5>
            <p class="lead">¡Vení a conocernos así te contamos todo lo que hacemos!</p>
            <p class="lead">Agenda una entrevista mandando un mensaje o llamando a +54 381 5856932 </p>
        </article>
    </section>
</main>

<?php 
    include 'footer.php';
?>