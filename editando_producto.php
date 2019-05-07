<?php

session_start();
include 'conexion2.php';

$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$precioNeto = $_POST['precioNeto'];
$porcentajeUtilidad = $_POST['porcentajeUtilidad'];
$precioTramo2 = $_POST['precioTramo2'];
$precioTramo3 = $_POST['precioTramo3'];
$stock = $_POST['stock'];
$id = $_POST['id'];
$tipo = $_POST['tipo'];
$tags = $_POST['tags'];


 echo $id;
if(empty($nombre) || empty($marca))
{
    echo "Por favor debe ingresar todos los parámetros";
}
else
{
    $consulta = "UPDATE producto SET nombre = '$nombre', marca = '$marca', precioNeto = '$precioNeto', porcentajeUtilidad = '$porcentajeUtilidad', precioTramo2 = '$precioTramo2', precioTramo3 = '$precioTramo3', stock = '$stock', tipo = '$tipo', tags = '$tags' WHERE producto.id = '$id'";
    $resultado = mysqli_query($conexion, $consulta);
    
}
?>