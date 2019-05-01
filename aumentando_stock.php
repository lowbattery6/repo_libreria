<?php

//Se recibe el id de la lista enviada en el link.
$codigoProducto = $_POST['txtCodigoProducto'];
$cantidadAumentar = $_POST['txtStock'];

    
include 'conexion2.php';
    
//Se almacenan el número de registros de la consulta (filas) en la variable fila

$consulta3="UPDATE producto SET stock = stock + '$cantidadAumentar' WHERE codigoTienda='$codigoProducto'";        
$resultado3= mysqli_query($conexion, $consulta3);
                
//Se valida si se encuentra por nombre, de lo contrario muestra un popup de error.
	if(!$resultado3) 
	{
        echo '<script>
        alert("No se pudo aumentar stock");
         window.history.go(-2);
         </script>';
    
	}


	else
    {
        ?>
        <script type="text/javascript">

        var codigo = "<?php echo $codigoTienda; ?>";
        var cantidad = "<?php echo $cantidadAumentar; ?>";

        alert("Producto "codigo "aumentado en "cantidad "unidades");
        window.history.go(-2);


        </script>
        <?php
    }
msql_close();
?>
