<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basededatos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Fallo la conexion " . mysqli_connect_error());
}
// echo "Conexion exitosa";
