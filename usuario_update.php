<?php
include("conexion.php");
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar Usuario</title>
    </head>
<body>
<form action="update.php" method="POST">
    <?php
    $result = mysqli_query($con, "SELECT * FROM usuario WHERE id = '$id'");
    while ($row = mysqli_fetch_array($result)) {
        echo '<input type="hidden" name="id" value="'.$row['id'].'">';
        echo '<label for="nombres">nombres:</label>';
        echo '<input type="text" name="nombres" id="nombres" value="'.$row['nombres'].'">';
        echo '<br>';  
         
        echo '<label for="paterno">Apellido paterno:</label>';
        echo '<input type="text" name="paterno" id="paterno" value="'.$row['ApellidoP'].'">';
        echo '<br>';
        
        echo '<label for="materno">Apellido materno:</label>';
        echo '<input type="text" name="materno" id="materno" value="'.$row['ApellidoM'].'">';
        echo '<br>';
    }
    ?>
    <input type="submit" value="GUARDAR">
</form>
</body>
</html>
