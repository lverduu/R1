<a href="index.html"><input type="button" value="Volver"></a>
<br><br>

<?php
$conn = new mysqli("localhost","root","","integradora");

//consulta para hacer la busqueda de empleados
$buscar = "SELECT * FROM informacion";

//ejecutamos la busqueda
$query = mysqli_query($conn,$buscar);

//foreach recorre todos los resultados obtenidos
foreach($query as $res){
    echo("<br>Legajo:". $res['Legajo']);
    echo("<br>Apellido y Nombres:". $res['Nombre_Apellido']);
    echo("<br>Puesto: ".$res['Puesto']);
    echo("<br>Fecha de ingreso. ".$res['Fecha_ingreso']);
    echo("<hr>");
    
    $leg = $res['Legajo'];
    echo("<br><a href='modificar.php?id=".$leg."'>Modificar</a>");
    echo(" <a href='eliminar.php?id=".$leg."'>Eliminar</a>");
    echo("<hr>");

}
?>