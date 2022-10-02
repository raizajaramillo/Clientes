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

<header class="container-fluid bg-primary d-flex justify-content-center">
    <span id="boot-icon" class="bi bi-whatsapp" style="font-size: 30px; color: rgb(255, 255, 255);"></span>
    <p class="text-light mb-0 p-2 fs-6"> Contáctenos +57 300 526 5058</p>
</header>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title> Clientes </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 bg-primary text-white">
        Clientes
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
                    <button type="submit" class="btn btn-success" name="submit"> Guardar </button>
                    <a href="index.php" class="btn btn-danger"> Cancelar </a>
                </div>
        </form>
    </div>
    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>



</body>

</html>