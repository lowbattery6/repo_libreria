<?php
session_start();
$idProducto1 = $_GET['idProducto1'];
$idProducto2 = $_GET['idProducto2'];
$idLista = $_GET['idLista'];
$precioContiene = $_GET['precioContiene'];
$nombreLista = $_POST['txtNombreLista'];
include "conexion2.php";


$consulta = "update contiene set idProducto = $idProducto2, precioContiene = $precioContiene where idProducto = $idProducto1 and idLista = $idLista";
$resultado = mysqli_query($conexion, $consulta);

?>
<script type="text/javascript">
    var idLista = "<?php echo $idLista; ?>";
    var nombreLista = "<?php echo $nombreLista; ?>";
    window.location.href=`ver_lista_usuario.php?idLista=${idLista}&nombreLista=${nombreLista}`;
</script>