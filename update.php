<?php
include("conexion.php");

$nombres =$_POST['nombres'];
$paterno =$_POST['paterno'];
$materno =$_POST['materno'];
$id =$_POST['id'];

$sql = "UPDATE usuario Set Nombres= '$nombres', ApellidoP='$paterno', ApellidoM='$materno' WHERE id = '$id'";

if(mysqli_query($con, $sql)){
    echo '<script language="javascript">';
    echo 'alert("Registro actualizao correctamente");';
    echo 'window.location="vistaTabla.php";';
    echo '</script>';
}else{
    echo '<script language="javascript">';
    echo 'alert("Error al actualizar el registro");';
    echo 'window.location="usuario_update.php";';
    echo '</script>';
}