<?php

include 'conexion2.php';
session_start();
   
?>

<html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link href='estilos.css' rel='stylesheet' type='text/css'/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Listas</title>
</head>
<body style="background-color : #f5f5f5">

    <header class="HeaderListas">

            <a href="bienvenido.php" class="volverMenuListas">
            <span>Volver al menú</span>
             </a>

    <nav class="navListas">
        <ul>
            <li><a href="ver_doc_enviados.php">Ver enviados</a></li>
            <li><a href="verConfirmadas.php">Ver confirmados</a></li>
            <li><a href="verEntregadas.php">Ver entregados</a></li>
        </ul>
    </nav>


    </header>
    <div class="contiene">
<div name="Titulo" class="text-center"><h1>Listas cotizadas por clientes</h1></div>

<div name="TablaListas">
    <?php
    
    $consulta="select nombreLista, nombreInteresado, tipoLista, idLista from lista where estado = 'Cotizada'";
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
	
        <td><a href="ver_lista_especifica.php?idLista=<?php echo $idLista; ?>&nombreLista=<?php echo $nombreLista;
        ?>&nombreInteresado=<?php echo $nombreInteresado; ?>&tipoLista=<?php echo $tipoLista; 
        ?>">Ver lista</a> | <a href="guardando_producto.php?idLista=<?php echo $idLista; 
        ?>&nombreLista=<?php echo $nombreLista; ?>&nombreInteresado=<?php echo $nombreInteresado; 
        ?>&tipoLista=<?php echo $tipoLista; ?>">  Agregar productos</a> | <a href="editar_detalles.php?idLista=<?php echo $idLista; 
        ?>&nombreLista=<?php echo $nombreLista; ?>&nombreInteresado=<?php echo $nombreInteresado; ?>&tipoLista=<?php echo $tipoLista; 
        ?>"> Editar detalles</a> | <button onclick="eliminar_lista(<?php echo $idLista; ?>)">Eliminar</button></td>
        
        <td><input type="text" size="45" name="nombreLista" id="nombreLista" value="<?php echo $nombreLista; ?>"></td>
        
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
    <script type="text/javascript">
        function eliminar_lista(idLista)
        {
            var option = confirm("Realmente desea eliminar esta lista");

            if(option==true)
            {
                alert("lista eliminada");
                window.location.href=`eliminar_lista.php?idLista=${idLista}`;
            }
        }
    </script>
</body>
</html>