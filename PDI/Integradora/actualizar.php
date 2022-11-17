<?php

$conn = new mysqli("localhost","root","","integradora");

//recibimos los datos del form
$ape_nom = $_POST['apellido_nombre'];
$puesto = $_POST['puesto'];
$fecha_ingreso = $_POST['fecha_ing'];
$legajo = $_POST['Legajo'];

//consulta para hacer update
$actualizar = "UPDATE informacion SET Nombre_Apellido = '$ape_nom',Puesto = '$puesto',Fecha_ingreso = '$fecha_ingreso' WHERE Legajo = '$legajo'";

//ejecutamos consulta

$query = mysqli_query($conn, $actualizar);

if($query){
    echo("Se han actualizado correctamente los datos....");
}
  
?>