<?php
include "base_de_datos.php";

if (isset($_POST['submit'])) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO `clientes`(`id`, `nombres`, `apellidos`, `email`, `genero`)
    VALUES (NULL, '$nombres','$apellidos','$email','$genero')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Nuevo record creado exitosamente");
    } else {
        echo "Fallo: " . mysqli_error($conn);
    }
}



?>





<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../carpeta css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    </nav>
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

                </ul>



            </div>
        </div>
    </nav>






    <div class="container">
        <div class="text-center mb-4">
            <h3> Agregar Nuevo Cliente </h3>
            <p class="text-muted"> Complete el formulario para agregar un nuevo cliente</p>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="POST" style="width: 50vw; min-width: 300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label"> Nombres </label>
                    <input type="text" class="form-control" name="nombres" placeholder="Nombres">
                </div>
                <div class="col">
                    <label class="form-label"> Apellidos </label>
                    <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
                </div>

                <div class="mb-3">
                    <label class="form-label"> Correo </label>
                    <input type="text" class="form-control" name="email" placeholder="nombre@ejemplo.com">
                </div>

                <div class="form-group mb-3">
                    <label> Genero: </label> &nbsp;

                    <input type="radio" class="form-check-input" name="genero" id="masculino" value="masculino">
                    <label for="masculino" class="form-input-label"> Masculino </label> &nbsp;

                    <input type="radio" class="form-check-input" name="genero" id="femenina" value="femenina">
                    <label for="femenina" class="form-input-label"> Femenina </label>
                </div>
                <div>
                    <button id="btn" name="submit" class="btn btn-primary btn-primary-outline-success" type="submit"> Guardar </button>
                    <button href="ingreso.php" class="btn btn-danger"> Cancelar </button>
                </div>
        </form>
    </div>
    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>



</body>

</html>