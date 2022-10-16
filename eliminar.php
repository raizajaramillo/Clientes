<?php
include "base_de_datos.php";
$id = $_GET['id'];
$sql = "DELETE FROM `clientes` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: ingreso.php?msg=Record eliminado exitosamente");
} else {
    echo "Fallo: " . mysqli_error($conn);
}
