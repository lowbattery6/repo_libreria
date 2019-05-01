<!DOCTYPE html>
<?php

include 'conexion2.php';

$idLista = $_GET["idLista"];
$nombreLista = $_GET["nombreLista"];
$nombreInteresado = $_GET["nombreInteresado"];
$tipoLista = $_GET["tipoLista"];
?>
<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body style="background-color:#BDDEAF">
    <title>Crear lista</title>
    <a href="ver_lista.php">Volver a listas</a>
    <br>
    <h1 align="center"><?php echo $nombreLista; ?></h1>
    <h3 align="center"> <?php echo $nombreInteresado; ?></h3>
    <br>
        <?php
    
    $consulta="select telefono, direccion, detalleLista, faltante, tipoPago, detallePago from lista where idLista = '$idLista'";
    $resultado= mysqli_query($conexion,$consulta);
    
    
        while($fila=mysqli_fetch_array($resultado))
        {
                    
            $telefono= $fila['telefono'];
            $direccion= $fila['direccion'];
            $detalleLista= $fila['detalleLista'];
            $faltante = $fila['faltante'];
            $tipoPago = $fila['tipoPago'];
            $detallePago = $fila['detallePago'];
        
    ?>
    <div align="center">
        <form if="form1" method="post" action="editando_detalles.php?idLista=<?php echo $idLista; ?>">
                <table>
                <tr>
                    <td>Ingrese teléfono</td>
                    <td><input type="text" name="txtTelefono" value="<?php echo $telefono; ?>"></td>
                </tr>
                <tr>
                    <td>Ingrese dirección</td>
                    <td><input type="text" name="txtDireccion" value="<?php echo $direccion; ?>"></td>
                </tr>
                <tr>
                    <td>Ingrese detalles de lista</td>
                    <td><textarea cols="40" rows="20" name="tareaDetalles" id="tareaDetalles"><?php echo $detalleLista; ?></textarea></td>
                </tr>
                <tr>
                    <td>Ingrese los productos faltantes</td>
                    <td><textarea cols="40" rows="20" name="tareaFaltantes" id="tareaFaltantes"><?php echo $faltante; ?></textarea></td>
                </tr>
                <tr>
                    <td>Ingrese tipo de pago</td>
                    <td><input type="text" name="txtTipoPago" value="<?php echo $tipoPago; ?>"></td>
                </tr>
                <tr>
                    <td>Ingrese los detalles del pago</td>
                    <td><textarea cols="50" rows="2" name="tareaDetallesPago" id="tareaDetallesPago"><?php echo $detallePago; ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="btnCrear" value="Guardar"></td>
                </tr>
                </table>
            </form> 
        <?php 
        }
    ?>
    </div>
</body>
</html>
