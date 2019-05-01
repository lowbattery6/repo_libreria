<?php

//Se recibe el id de la lista enviada en el link.
$idLista = $_GET['idLista'];

    
include 'conexion2.php';
 
$consulta="Update lista set estado = 'Creada' where idLista = '$idLista'";
        
$resultado= mysqli_query($conexion, $consulta);
    
//Se almacenan el número de registros de la consulta (filas) en la variable fila
$fila=mysqli_fetch_array($resultado);

$consulta2="select id, stock, cantidad from producto pro, contiene con, lista lis where pro.id = con.idProducto AND lis.idLista = con.idLista and con.idLista='$idLista'";
$resultado2= mysqli_query($conexion, $consulta2);
while($fila2=mysqli_fetch_array($resultado2))
            {
                

                $id=$fila2['id'];
                $stock=$fila2['stock'];
                $cantidad=$fila2['cantidad'];
                $stockTotal = $cantidad;
    
                $consulta3="UPDATE producto SET stock = stock + '$stockTotal' WHERE id='$id'";
        
                $resultado3= mysqli_query($conexion, $consulta3);
                
}

//Se valida si se encuentra por nombre, de lo contrario muestra un popup de error.
	if(!$fila) 
	{
		echo '<script>
             alert("Lista cancelada");
              window.history.go(-1);
              </script>';

	}


	else
    {
        
        echo '<script>
             alert("La lista no se pudo marcar como cancelada");
              window.history.go(-2);
              </script>';
    }
msql_close();
?>