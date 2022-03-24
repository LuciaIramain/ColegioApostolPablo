
           <?php
            if (!empty($_SESSION['usuario']) && isset($_SESSION['usuario'])) {
                echo '
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Colegio Apostol Pablo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Nuestro colegio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contáctanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Galeria de fotos</a>
                            </li>
                        </ul>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ' . $_SESSION['usuario'] . '
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="cerrarSesion.php">Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </nav>
                ';

                echo '';
            } else {
                header('refresh:0;url=../index.php');
            }
            echo '<hr>';
            ?>
