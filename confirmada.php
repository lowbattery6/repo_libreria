<?php

//Se recibe el id de la lista enviada en el link.
$idLista = $_GET['idLista'];

    
include 'conexion2.php';
 
$consulta="Update lista set estado = 'Confirmada' where idLista = '$idLista'";
        
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
    
                $consulta3="UPDATE producto SET stock = stock - '$stockTotal' WHERE id='$id'";
                $consulta4 = "UPDATE lista set correoUsuario = '' where idLista = '$idLista'";
        
                $resultado3= mysqli_query($conexion, $consulta3);
                $resultado4 = mysqli_query($conexion, $consulta4);
                
}

//Se valida si se encuentra por nombre, de lo contrario muestra un popup de error.
	if(!$fila) 
	{
		echo '<script>
             alert("Lista confirmada");
              window.history.go(-1);
              </script>';

	}


	else
    {
        
        echo '<script>
             alert("Lista no se pudo marcar como confirmada");
              window.history.go(-2);
              </script>';
    }
msql_close();
?>
