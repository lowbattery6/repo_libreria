<?php

session_start();
include 'conexion2.php';

$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$precioNeto = $_POST['precioNeto'];
$color = $_POST['color'];
$detalle = $_POST['detalle'];
$link = $_POST['link'];
$codigoTienda = $_POST['codigoTienda'];
$imagenURL = $_POST['imagenURL'];
$tags = $_POST['tags'];
$tipo = $_POST['tipo'];
$porcentajeUtilidad = $_POST['porcentajeUtilidad'];
$precioTramo2 = $_POST['precioTramo2'];
$precioTramo3 = $_POST['precioTramo3'];
$stock = $_POST['stock'];
?>
<script>
    var nombre = "<?php echo $nombre; ?>";
    console.log(nombre)
</script>
<?php

//$consulta1 = "Select * from producto where link = '$link'";
//$resultado = mysqli_query($conexion, $consulta1);

/*if(empty($nombre) || empty($marca) || empty($precioNeto) || empty($color) || empty($detalle) || empty($link) || empty($codigoTienda) || empty($imagenURL) || empty($tags) || empty($tipo) || empty($porcentajeUtilidad) || empty($precioTramo2) || empty($precioTramo3) || empty($stock))
{
    echo "Por favor debe ingresar todos los parámetros. Si no cuenta con un parámetro ingrese un 0 en la caja de texto";
}
else
{
    */
    if(empty($nombre) || empty($marca) || empty($precioNeto) || empty($porcentajeUtilidad)|| empty($color))
    {
        echo "Debe ingresar todos los parámetros";
    }
    else
    {

    
    $consulta = "INSERT INTO `producto`(`nombre`, `marca`, `precioNeto`, `precio`, `porcentajeUtilidad`, `unidad`, `grupo`, `color`, `detalle`, `link`, `codigoTienda`, `id`, `stock`, `precioTramo2`, `precioTramo3`, `imagen`, `tipo`, `tags`) VALUES ('$nombre','$marca','$precioNeto','0','$porcentajeUtilidad','1','Medio','$color','$detalle','$link','$codigoTienda','0','$stock','$precioTramo2','$precioTramo3','$imagenURL','$tipo','$tags')";
    $resultado = mysqli_query($conexion, $consulta);
    echo "Producto creado";
    }
    
//}
?>