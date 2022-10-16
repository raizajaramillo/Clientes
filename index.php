<?php
include "base_de_datos.php";
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title> Color Palette </title>
</head>

<body>


    <!---------------------------Encabezado------------------------>
    <header class="container-fluid bg-primary d-flex justify-content-center">
        <span id="boot-icon" class="bi bi-whatsapp" style="font-size: 30px; color: rgb(255, 255, 255);"></span>
        <p class="text-light mb-0 p-2 fs-6"> Contáctenos +57 300 526 5058</p>
    </header>

    <!-------------------------Navbar------------------------------------>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3" id="menu">
        <div class="container-fluid">
            <img src="Imagenes\imagen4.jpeg" class="img-fluid" alt="Responsive image" style="max-width: 98px;max-height: 98px ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"> Inicio </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pagina.php"> Contáctenos </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#papeleria"> Papeleria</a></li>
                            <li><a class="dropdown-item" href="#elementosdeoficina"> Elementos de oficina </a></li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="#elementostecnologicos"> Elementos tecnologicos </a></li>
                            <li><a class="dropdown-item" href="#tintas"> Tintas </a></li>
                            <li><a class="dropdown-item" href="#mantenimientos"> Mantenimientos </a></li>
                            <li><a class="dropdown-item" href="#ergonomia "> Ergonomia </a></li>
                            <li><a class="dropdown-item" href="#ferreteria"> Ferreteria </a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			  </li> -->
                </ul>
                <form method="post" action="login.php" class="d-flex">
                    <div class="d-flex">
                        <input id="correro" name="correo" class="form-control me-2" type="text" placeholder="Correo electrónico" aria-label="email">
                    </div>
                    <div class="d-flex">
                        <input id="password" name="password" class="form-control me-2" type="password" placeholder="Contraseña" aria-label="password">
                    </div>
                    <input id="btn" name="ingresar" class="btn btn-primary btn-primary-outline-success" type="submit" />

                </form>
            </div>
        </div>
    </nav>

    <!---------------------------Slider/Carrusel de imagenes------------------------>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="3000">
                <img src="Imagenes\imagen1.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="Imagenes\imagen2.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="Imagenes\imagen3.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="Imagenes\imagen14.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <img src="Imagenes\imagen15.jpg" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!---------------------------Intro------------------------>

    <section class="seccion1 w-50 mx-auto text*center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3 text-center"> Su Papeleria de confianza y muchos más! <br><span class="text-primary text-center"> Color Palette </span></h1>
        <p class="p-3 fs-4"><span class="text-primary "> Color Palette S.A.S. </span> Somos un outsourcing con amplia trayectoria y
            reconocimiento en el sector empresarial, en cuanto a distribución de productos de papelería, consumibles, medios de
            almacenamiento, tecnología, ferretería y mantenimientos. soportamos la gran mayoría de las necesidades de nuestros clientes,
            destacándonos por nuestro excelente servicio, variedad de productos y precios competitivos. </p>
    </section>

    <!---------------------------Categorias ------------------------>

    <sectio class="container-fluid">
        <div class="row w-75 mx-auto categorias-fila">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
                <img src="Imagenes\imagen5.jpg" alt="categorias" width="180" height="160">
                <div>
                    <h3 id="papeleria" class="fs-5 mt-4 px-4 pb-1"> Papelería </h3>
                    <p class="px-4">Resmas de papel para impresión, papel kraf, cartulina, papel mantequilla, papel crepe, cuadernos
                        argollados, cuadriculados, rayados…. etc.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
                <img src="Imagenes\imagen6.jpg" alt="categorias" width="180" height="160">
                <div>
                    <h3 id="elementosdeoficina" class="fs-5 mt-4 px-4 pb-1"> Elementos de oficina </h3>
                    <p class="px-4">Esferos, click, grapas, grapadoras, lapiz, sellos, marcadores permanentes y borrables, borradores
                        de tablero, borrador de nata, tijeras, saca gancho, cartuchera az.. etc.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
                <img src="Imagenes\imagen7.jpg" alt="categorias" width="180" height="160">
                <div>
                    <h3 id="elementostecnologicos" class="fs-5 mt-4 px-4 pb-1"> Elementos tecnologicos </h3>
                    <p class="px-4">Computadores, calculadoras, portatilies, tablets, impresoras, multicopiadoras, multifuncionales,
                        de alto y bajo trafico, camaras fotograficas, camaras de videos, memorias usb, .. tecnologicos en general.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
                <img src="Imagenes\imagen8.jpg" alt="categorias" width="180" height="160">
                <div>
                    <h3 id="mantenimientos" class="fs-5 mt-4 px-4 pb-1"> Mantenimientos </h3>
                    <p class="px-4">Revisión mantenimientos tecnologicos venta de repuestos en general.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
                <img src="Imagenes\imagen9.jpg" alt="categorias" width="180" height="160">
                <div>
                    <h3 id="tintas" class="fs-5 mt-4 px-4 pb-1"> Tintas </h3>
                    <p class="px-4">Tintas, toner, repuestos genericos y originales de todas las marcas y para todos lo usos.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
                <img src="Imagenes\imagen10.jpg" alt="categorias" width="180" height="160">
                <div>
                    <h3 id="ergonomia" class="fs-5 mt-4 px-4 pb-1"> Ergonomia </h3>
                    <p class="px-4">Sillas, puestos de trabajo, escritorios, posa pies, estantes, estantes rodantes.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
                <img src="Imagenes\imagen11.jpg" alt="categorias" width="180" height="160">
                <div>
                    <h3 id="ferreteria" class="fs-5 mt-4 px-4 pb-1"> Ferreteria </h3>
                    <p class="px-4">Destornilladores, tornillos, martillos, tuercas, herramientas en general, manuales y
                        electricos, pinturas. etc</p>
                </div>
            </div>
        </div>
        </section>


        <!---------------------------MISIÓN ------------------------>

        <section class="seccion2">
            <div class="w-50 m-auto text-center" id="equipo">
                <h1 class="mb-5 fs-2"> Misión <span class="text-primary"></span></h1>
                <p class="fs-4">Color Palette S.A.S. Es una empresa de Outsourcing de insumos de papelería, consumibles, tecnología,
                    ferretería y mantenimientos. Contamos con un personal integro capaz de brindar a nuestro cliente un excelente
                    servicio, ofreciéndoles productos de las mejores marcas y a precios justos. La calidad de nuestro servicio y la
                    satisfacción del cliente es responsabilidad de todos, destacándonos en nuestra dedicación y continúo compromiso
                    en el desarrollo personal del equipo de trabajo. Dentro de los principales beneficios que ofrecemos se encuentra:
                    precios competitivos, productos garantizados, recepción de solicitud en diversos medios de comunicación, envió de
                    la mercancía hasta el centro de costos solicitado y con productos de tecnología de última generación para nuestros
                    clientes. Trabajamos de la mano con nuestros proveedores quienes se han convertido en grandes socios de negocios</p>
            </div>
            <div class="mt-5 text-center"><img class="img-fluid" src="Imagenes\imagen12.jpg" alt="equipo"></div>

        </section>

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-white text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span> Contáctenos por redes sociales </span>
                </div>
            </section>

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-3">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-2">
                                <i class="fas fa-gem me-3 text-secondary"></i> Color Palette SAS
                            </h6>
                            <div class="mt-2 text-left"><img class="img-fluid" src="Imagenes\imagen13.PNG" alt="mapa"></div>
                        </div>


                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-3">

                            <h6 class="text-uppercase fw-bold mb-3">
                                Hipervínculo
                            </h6>
                            <p>
                                <i class="bi bi-facebook"></i>
                                <a class="fab fa-facebook-f"> Facebook </a>
                            </p>
                            <p>
                                <i class="bi bi-twitter"></i>
                                <a class="fab fa-twitter"> Twitter </a>
                            </p>
                            <p>
                                <i class="bi bi-instagram"></i>
                                <a class="fab fa-instagram"> Instagram </a>
                            </p>
                            <p>
                                <i class="bi bi-google"></i>
                                <a class="fab fa-google"> Google </a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-3">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-3"> Contáctenos </h6>
                            <p><i class="fas fa-home me-1 text-secondary"></i>Calle 150 #45 - 18 oficina 309 <br> Bogotá, Colombia </p>
                            <p>
                                <i class="fas fa-envelope me-1 text-secondary"></i>
                                Correo Electrónico: suministroscolorpalette@gmail.com
                            </p>
                            <p><i class="fas fa-phone me-1 text-secondary"></i>whatsapp: +57 300 526 5058 </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                © 2022 Copyright:
                <a class="text-reset fw-bold"> Raiza Jaramillo </a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->









        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>