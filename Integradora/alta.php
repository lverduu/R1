<?php
// recibimos los datos enviados por el formulario HTML

$nombre = $_POST['nya'];
$puesto = $_POST['select'];
$fecha = $_POST['fecha'];


// nos conectamos a la base de datos
// servidor, usuario, clave, nombre de base de datos
$conexion = new mysqli("localhost","root","","integradora");


// creamos la consulta(query) mysql

$alta = "INSERT INTO informacion(Nombre_Apellido,Puesto,Fecha_ingreso) VALUES('$nombre','$puesto','$fecha')";

//ejecutamos la consulta. En este paso se produce el alta en la bd

if($query = mysqli_query($conexion,$alta)){
    echo("Se ha dado de alta a un nuevo usuario");
    echo("");
}
else{
    echo("Se ha producido un error.");
}



?>

<br><br>
<a href="index.html"><input type="button" value="Inicio"></a>