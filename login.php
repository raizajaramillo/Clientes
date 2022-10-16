<?php
include "base_de_datos.php";

if (isset($_POST['ingresar'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
}


$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND password ='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    header("Location: ingreso.php");
} else {
    echo '<script>
    window.location.href = "index.php";
    alert("Fallo. Contraseñ o Correo Invalido")
    </script>';
}
