<?php

include 'conexion2.php';

$idLista = $_GET["idLista"];
$telefono= $_POST["txtTelefono"];
$direccion= $_POST["txtDireccion"];
$detalleLista= $_POST["tareaDetalles"];
$faltante= $_POST["tareaFaltantes"];
$tipoPago= $_POST["txtTipoPago"];
$detallePago= $_POST["tareaDetallesPago"];

    $update = "UPDATE `lista` SET `telefono` = '$telefono', direccion = '$direccion', detalleLista = '$detalleLista', faltante = '$faltante', tipoPago = '$tipoPago', detallePago = '$detallePago' WHERE `lista`.`idLista` = '$idLista'";
    $resultado2= mysqli_query($conexion, $update);

if(!$resultado2)
{
        echo '<script>
            alert("Error al editar lista");
             window.history.go(-1);
              </script>';
}
else{
    echo '<script>
            alert("Lista editada exitosamente");
             window.history.go(-2);
              </script>';
}

mysqli_close($conexion);
?>

