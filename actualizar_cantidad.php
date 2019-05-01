<?php
include 'conexion2.php';
$cantidad = $_POST['cantidad'];
$precioInicial = $_POST['txtPrecioInicial'];
$idProducto = $_POST['idProducto'];
$idLista = $_POST['idLista'];



$consulta = "update contiene set cantidad = '$cantidad' where idLista = $idLista and idProducto = $idProducto";
$resultado = mysqli_query($conexion, $consulta);
?>
<script>
    window.location.href=`ver_lista_usuario.php?idLista=${idLista}&nombreLista=Mi Lista`;
</script>