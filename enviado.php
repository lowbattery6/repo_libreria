
<?php

//Se recibe el id de la lista enviada en el link.
$idLista = $_GET['idLista'];

    
include 'conexion2.php';
 
$consulta="Update lista set estado = 'Enviada' where idLista = '$idLista'";
        
$resultado= mysqli_query($conexion, $consulta);
    
//Se almacenan el número de registros de la consulta (filas) en la variable fila
$fila=mysqli_fetch_array($resultado);

//Se valida si se encuentra por nombre, de lo contrario muestra un popup de error.
	if(!$fila) 
	{
		echo '<script>
             alert("Lista marcada como enviada");
              window.history.go(-1);
              </script>';

	}


	else
    {
        
        echo '<script>
             alert("Lista no se pudo marcar como enviada");
              window.history.go(-2);
              </script>';
    }
msql_close();
?>
