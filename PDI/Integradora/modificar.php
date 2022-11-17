<?php

$conn = new mysqli("localhost","root","","integradora");

$id_empleado = $_GET['id'];

//buscamos el empleado con el legado recibido
$buscar = "SELECT * FROM informacion WHERE Legajo = '$id_empleado'";

//ejecutamos la consulta
$query = mysqli_query($conn,$buscar);

//recorremos los resultados y cargamos el form
foreach($query as $res){



?>

<!-- creamos un form para mostrar los datos -->

<html>
    <body>
<form action="actualizar.php" method="post">
        <label for="apellido_nombre">Apellido y Nombres:</label>
        <input type="text" name="apellido_nombre" value="<?php echo($res['Nombre_Apellido']);?>">
        
        <br>
        <label for="Puesto">Puesto:</label>
        <select name="puesto">
        <option value="1">Mozo</option>
            <option value="2">Chef</option>
            <option value="3">Cocinero</option>
            <option value="4">Cajero</option>
            <option value="5">Gerente</option>
        </select>
        <br>
        <label for="fecha_ing">Fecha de Ingreso:</label>
        <input type="date" name="fecha_ing" value="<?php echo($res['Fecha_ingreso']);?>">
        <br>
        <input type="hidden" name = 'Legajo' value='<?php echo($id_empleado);?>'>
        <input type="submit" value="Actualizar">

    </form>

</body>
    </html>


<?php

}
?>