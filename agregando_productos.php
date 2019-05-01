<?php 

include 'conexion2.php';

$precio = $_POST['txtPrecioInicial'];
$cantidad = $_POST['cantidad'];
$idProducto = $_POST['idProducto'];
$idLista = $_POST['idLista'];


echo $precio, $cantidad, $idProducto, $idLista;
?>
<script type="text/javascript">

    var precio = "<?php echo $precio; ?>";
    var cantidad = "<?php echo $cantidad; ?>";
    var idProducto = "<?php echo $idProducto; ?>";
    var idLista = "<?php echo $idLista; ?>";

    alert("no junciona");
</script>