<?php
// Se incluye el archivo php de conexión a la BD
include 'conexion2.php';
session_start();

//Se valida si se está registrado con alguna sesión.

?>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<h1>Librería</h1>
Bienvenido <?php  
//Recibo el nombre de usuario desde login.php puesto para iniciar sesión para poder saludar.  
$nombreUsuario=$_POST['nombreUsuario'];
echo $nombreUsuario; ?>
	
    <tittle><h3>Buscar por nombre o marca</h3></tittle>
	<form id="form3" name="form3" method="post" action="consulta_producto_its.php">
		<input  type="text" name="nombreBuscado">
		<input  type="submit" name="Buscar" value="Buscar">
	</form>
	

</body>
</html>