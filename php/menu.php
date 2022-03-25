<?php
if (!empty($_SESSION['usuario']) && isset($_SESSION['usuario'])) {
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand text-danger" href="listadoUsuarios.php"><img src="../img/colegio-apostol-pablo.png" alt="logo del colegio" class="logoNav"><b> Colegio Apostol Pablo</b></a>
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-danger" aria-current="page" href="alumnos.php"><b>Alumnos</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" aria-current="page" href="docentes.php"><b>Docentes</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" aria-current="page" href="padres.php"><b>Padres</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="administrativo.php"><b>Administración</b></a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b>' . $_SESSION['usuario'] . '</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-danger" href="cerrarSesion.php"><b>Cerrar sesión</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>';
} else {
    header('refresh:0;url=../index.php');
}
