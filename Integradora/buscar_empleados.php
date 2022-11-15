<?php
$conn = new mysqli("localhost","root","","integradora");
$buscar = $_POST['buscar'];



//consulta para hacer la busqueda de empleados
$buscar = "SELECT informacion.Legajo, informacion.Nombre_Apellido, informacion.Fecha_ingreso,puestos.puesto as 'verPuesto',puestos.sueldo FROM informacion, puestos WHERE informacion.Puesto = puestos.id AND informacion.Nombre_Apellido LIKE '%$buscar%'
AND informacion.puesto = puestos.id";

//ejecutamos la busqueda
$query = mysqli_query($conn,$buscar);

//foreach recorre todos los resultados obtenidos
foreach($query as $res){
    echo("<br>Legajo:". $res['Legajo']);
    echo("<br>Apellido y Nombres:". $res['Nombre_Apellido']);
    echo("<br>Puesto: ".$res['verPuesto']);
    echo("<br>Sueldo: $ ". $res['sueldo']);
    echo("<br>Fecha de ingreso. ".$res['Fecha_ingreso']);
    
    $leg = $res['Legajo'];

    echo("<br><a href='modificar.php?id=".$leg."'>Modificar</a>");
    echo(" <a href='eliminar.php?id=".$leg."'>Eliminar</a>");
    echo("<hr>");

}
?>
