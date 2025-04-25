<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.html">
    <input type="submit" value="volver">
<?php
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>Actualizar</th>
<th>Eliminar</th>
</tr>";
$sql = "SELECT id, Nombres, ApellidoP, ApellidoM 
FROM usuario";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['Nombres'] . "</td>";
echo "<td>" . $row['ApellidoP'] . "</td>";
echo "<td>" . $row['ApellidoM'] . "</td>";
echo "<td><a href='usuario_update.php?id=".$row['id']."'>EDITAR</a></td>";
echo "<td><a href='delete.php?id=".$row['id']."'>ELIMINAR</a></td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>