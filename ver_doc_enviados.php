<?php

include 'conexion2.php';
session_start();
   
?>

<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link href='estilos.css' rel='stylesheet' type='text/css' />
</head>
<body style="background-color:#f5f5f5">

    <header class="HeaderListas">

            <a href="bienvenido.php" class="volverMenuListas">
            <span>Volver al menú</span>
            <a href="ver_lista.php" class="volverMenuListas">
            <span>Volver a listas</span>
             </a>


    <nav class="navListas">
        <ul>
            <li><a href="verConfirmadas.php">Ver confirmados</a></li>
            <li><a href="verEntregadas.php">Ver entregados</a></li>
        </ul>
    </nav>


    </header>
    <div class="contiene">
<title>Listas</title>
<div align="center" name="Titulo"><h1>Listas ya enviadas</h1></div>

<div name="TablaListas" align="center">
    <?php
    
    $consulta="select nombreLista, nombreInteresado, tipoLista, idLista from lista where estado = 'Enviada'";
    $resultado= mysqli_query($conexion,$consulta);
    
    
        while($fila=mysqli_fetch_array($resultado))
        {
                    
            $nombreLista= $fila['nombreLista'];
            $nombreInteresado= $fila['nombreInteresado'];
            $tipoLista= $fila['tipoLista'];
            $idLista = $fila['idLista'];
    ?>
    
    <table class ="table">

	<tr>
        <th><h5>Opciones</h5></th>
		<th><h5>Nombre de la Lista</h5></th>
        <th><h5>Nombre del interesado</h5></th>
        <th><h5>Tipo de lista</h5></th>

	</tr>
        
        <tr>
	
        <td><a href="ver_lista_especifica.php?idLista=<?php echo $idLista; ?>&nombreLista=<?php echo $nombreLista; ?>&nombreInteresado=<?php echo $nombreInteresado; ?>&tipoLista=<?php echo $tipoLista; ?>">Ver lista | </a>  <a href="guardando_producto.php?idLista=<?php echo $idLista; ?>&nombreLista=<?php echo $nombreLista; ?>&nombreInteresado=<?php echo $nombreInteresado; ?>&tipoLista=<?php echo $tipoLista; ?>">  Agregar productos | </a>  <a href="editar_detalles.php?idLista=<?php echo $idLista; ?>&nombreLista=<?php echo $nombreLista; ?>&nombreInteresado=<?php echo $nombreInteresado; ?>&tipoLista=<?php echo $tipoLista; ?>"> Editar detalles </a> | Eliminar</td>
        
        <td><input type="text" size="35" name="nombreLista" id="nombreLista" value="<?php echo $nombreLista; ?>"></td>
        
        <td><input type="text" size="20" name="nombreInteresado" id="nombreInteresado" value="<?php echo $nombreInteresado; ?>"></td>
        
		<td><input type="text" size="15" name="tipoLista" id="tipoLista" value="<?php echo $tipoLista;  
            ?>"></td>
            
        </tr>
    </table>
    <?php
        }

mysqli_close($conexion);
    
?>
</div>
</div>
</body>
</html>