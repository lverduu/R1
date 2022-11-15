<?php
$conn = new mysqli("localhost","root","","integradora");
$id_empleado = $_GET['id'];

//consulta para eliminar empleado

$baja = "DELETE FROM informacion WHERE Legajo = '$id_empleado'";

//ejecutar baja

$query = mysqli_query($conn, $baja);
if($query){
    echo("Se ha dado de baja correctamente.");
}
  
?>
<br><br>
<a href="index.html"><input type="button" value="Inicio"></a>