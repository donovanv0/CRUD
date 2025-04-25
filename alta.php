<?php
include("conexion.php");

$nombres =$_POST['nombres'];
$paterno = $_POST['apellidoP'];
$materno = $_POST['apellidoM'];


$sql = "INSERT INTO usuario(nombres, ApellidoP, ApellidoM) VALUES('$nombres', '$paterno', '$materno')";

if(mysqli_query($con, $sql)){
    echo '<script languaje="javascript">';
    echo 'alert ("Nuevo usuario agregado");';
    echo 'window.location="home.php";';
    echo '</script>';
}else{
    echo '<script languaje="javascript">';
    echo 'alert ("Usuario duplicado");';
    echo 'window.location="home.php";';
    echo '</script>';
}
?>