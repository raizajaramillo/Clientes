<?php
include "base_de_datos.php";

if (isset($_POST['submit'])) {
    $correo = $_POST['correo'];
    $texto = $_POST['texto'];

    $sql = "INSERT INTO `contactenos`(`id`, `correo`, `texto`)
    VALUES (NULL, '$correo','$texto')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: pagina.php?msg=Nuevo record creado exitosamente");
    } else {
        echo "Fallo: " . mysqli_error($conn);
    }
}



?>



<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/paginastyle.css">
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
            <img src="Imagenes\imagen4.jpeg" class="img-fluid" alt="Responsive image" style="max-width: 98px;max-height: 90px ">
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

    <!-------------------------Vision---------------------------------------------->

    <section class="seccion1 w-50 mx-auto text*center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3 text-center"> Visión <span class="text-primary "> </span></h1>
        <p class="p-3 fs-6"><span class="text-primary"> Color Palette S.A.S. </span> será en el 2027 una de las 10 empresa más
            reconocidas en el sector de suministros de oficina, líder en el suministro de insumos para sistemas y oficina a
            través de outsourcing empresarial, ofreciendo procedimientos más simples y asesorías más completas que faciliten el
            proceso de compra a nuestros Clientes. Nuestro compromiso será contar con un equipo humano especializado y
            armonizado con los objetivos de calidad, buscando siempre la excelencia en nuestro servicio. Todo esto dentro de
            estándares de creatividad, calidad, competitividad, excelencia de atención al cliente, agilidad en el servicio
            de entrega, y mejoramiento continuo, que nos permita crecer y contribuir al desarrollo regional y nacional.</p>
    </section>


    <!-------------------------Principios y Valores Corporativos---------------------------------------------->
    <section class="w-50 mx-auto text*center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3 text-center"> Principios y Valores Corporativos <span class="text-primary "> </span></h1>
        <p> Calidad de servicio al cliente: Todos los procesos realizados por el personal de Color Palette SAS. Incluidos en nuestro objeto social (asesoría, logística,
            precios, legalidad, documentación, crédito), se encuentran enmarcados dentro del principio de eficiencia, teniendo
            como prioridad la satisfacción de nuestros clientes desde todos los servicios ofrecidos. </p>
        <p> Equipo con calidad: En la organización, la calidad en los procesos se ve como resultado de un trabajo en equipo bien
            coordinado, el cual se basa en el compromiso personal de los integrantes de cada área que cumple con eficiencia y
            eficacia sus funciones, todo esto en virtud del beneficio que pueda recibir el cliente, quien evalúa el resultado
            de sus operaciones con nosotros.</p>
        <p> Respeto, honestidad y ética: Educación, urbanidad, sinceridad, moderación, transparencia en los procesos es lo que
            brindamos a todos nuestros clientes y proveedores con el firme propósito de recibir un trato en igualdad de
            condiciones</p>
        <p> Compromiso con la innovación: Dado que nuestra actividad se basa en el comportamiento del mercado y en las
            invenciones a nivel mundial en cuanto a tecnología, la compañía (en especial el área comercial y de asesoría
            al cliente) tiene un amplio compromiso de estar a la vanguardia en cuanto a la información pertinente acerca
            de los productos comercializados, es decir, está en constante capacitación para ofrecer una mejor asesoría a
            nuestros clientes.</p>

    </section>




    <!-- Formulario contactenos -->

    <Section class="seccion2 w-50 mx-auto text*center pt-5">
        <h1 class="text-justify text-center p-3 fs-2 border-top border-3"> Contáctenos <span class="text-primary "> Color Palette </span></h1>
        <form action="pagina.php" method="POST" class="w-50 m-auto text-center ">
            <div class="form-group">
                <label for="exampleFormControlInput1"> Email/Correo de Contacto </label>
                <input name="correo" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@gmail.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"> Pregunta/Cotización </label>
                <textarea name="texto" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button id="btn" name="submit" class="btn btn-primary btn-primary-outline-success" type="submit"> Enviar </button>
            </div>
        </form>

    </Section>








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