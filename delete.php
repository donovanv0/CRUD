<?php
include("conexion.php");


$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id = '$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    echo '<script languaje="javascript">';
    echo 'alert ("Usuario eliminado");';
    echo 'window.location="home.php";';
    echo '</script>';
} else {
    echo '<script languaje="javascript">';
    echo 'alert ("Error al eliminar el usuario");';
    echo 'window.location="home.php";';
    echo '</script>';
}

?>
