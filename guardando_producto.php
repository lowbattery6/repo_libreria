<?php
include 'conexion2.php';
session_start();
$idLista = $_GET["idLista"];
$idLista2 = $idLista;
$nombreLista = $_GET["nombreLista"];
$nombreInteresado = $_GET["nombreInteresado"];

$identificadorPrecio = 0;

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
    
<div class="contenedor">
    <div id="formBusqueda" class="divBusqueda">
        <ul>
                <li>
                    <a href="bienvenido.php"><span>Bienvenido</span></a>
                </li>
                <li>
                    <a href="ver_lista.php"><span>Listas</span></a>
                </li>
            </ul>
        <form id="form5" name="form5" method="post" action="guardando_producto.php?idLista=<?php echo $idLista2 ?>" align="center">
            Buscar
            <input  type="text" name="nombreBuscado" id="txt" value="<?php $nombreBuscado=$_POST['nombreBuscado']; echo $nombreBuscado; ?>">
            <input  type="submit" name="Buscar" id="buscar">


            <label><input type="checkbox" id="checkbox" value="Bajo" name="grupo[]">Bajo</label>
            <label><input type="checkbox" id="checkbox/Bajo" value="Medio/Bajo" name="grupo[]">Medio/Bajo</label>
            <label><input type="checkbox" id="checkbox" value="Medio" name="grupo[]">Medio</label>
            <label><input type="checkbox" id="checkbox/Alto" value="Medio/Alto" name="grupo[]">Medio/Alto</label>
            <label><input type="checkbox" id="checkbox" value="Alto" name="grupo[]">Alto</label>
        </form>
    </div>
    <div id="header" class="header"></div>
    <div class="divTitulo"><h1><?php echo $nombreLista; ?></h1>
        <h3><?php echo $nombreInteresado; ?></h3>
     
    <title>Agregar producto</title>
    </div>
    <script type="text/javascript"> 
    $(document).ready(function(){
        $(".contenedor").hide();
        $(".contenedor").show(400);
        $(".table").mouseover(function(){
            $(this).css("background-color","DDDDDD");
            
        });
        $(".table").mouseout(function(){
            $(this).css("background-color","ffffff");
        });
        
                       
         
         if (!!$('.divBusqueda').offset()) { // make sure ".sticky" element exists
        
          var stickyTop = $('.divBusqueda').offset().top; // returns number 
        
          $(window).scroll(function(){ // scroll event
        
          var windowTop = $(window).scrollTop(); // returns number 
        
          if (stickyTop < windowTop){
              $('.divBusqueda').css({ position: 'fixed', top: 0 });
          }else {
              $('.divBusqueda').css('position','static');
          }
         });
        
         }
        
  
        
        
    });
    </script>
    <?php
        //?idLista=<?php echo $idLista2 
    //Recibo el id de la lista para poder guardar los productos en ésta.

     // Se recibe el nombre desde el buscar.php y se guarda en variable $nombreBuscado

    $nombreBuscado=$_POST['nombreBuscado']; 
    $consulta = "SELECT * from producto where match(nombre,marca) against ('$nombreBuscado')";
    $cont=0;

        if(isset($_POST['Buscar']))
        {
            $length = count($_POST['grupo']);

            for($i=0;$i<$length;$i++)
            {
                 $consulta .= "AND grupo IN ('".implode("','",$_POST["grupo"])."')"; 
            }
        }

    //Se inicializa variable de precio total
    $precioTotal=0;

    // Se ejecuta la consulta y se guarda éste en la variable $resultado

    $resultado= mysqli_query($conexion, $consulta);

    //Se almacenan el número de registros de la consulta (filas) en la variable $n2
    $n2=mysqli_num_rows($resultado);
    ?>
    <?php
    //Se valida si se encuentra por nombre, de lo contrario muestra un popup de error.
        if($n2==0)
        {
            //Aviso sale aunque no pase por acá

        }
        else
        {
         ?>


    <div id="tablaProductos">
            <?php
            //Si es que se encuentra se comienza a llenar la tabla desde el array 
            while($fila=mysqli_fetch_array($resultado))
            {
                
                $stock = $fila ['stock'];
                $codigoTienda=$fila['codigoTienda'];
                $nombre=$fila['nombre'];
                $marca=$fila['marca'];
                $precioNeto=$fila['precioNeto'];
                $precio=$fila['precio'];
                $porcentajeUtilidad=$fila['porcentajeUtilidad'];
                $unidad=$fila['unidad'];
                $cantidad=$fila['cantidad'];
                $grupo=$fila['grupo'];
                $color=$fila['color'];
                $detalle=$fila['detalle'];
                $link=$fila['link'];
                $id=$fila['id'];
                $precioTramo2=$fila['precioTramo2'];
                $precioTramo3=$fila['precioTramo3'];

                if($porcentajeUtilidad>0)
                {
                ?>
        <form method="post" name="form4" action="producto_guardado.php?idLista=<?php echo $idLista2; ?>&idProducto=<?php echo $id; ?>"> 
            <table class="table">

                <thead>
                    <th><h5>Código</h5></th>
                    <th><h5>Stock</h5></th>
                    <th><h5>Agregar</h5></th>
                    <th><h5>¿Cu&aacute;ntos?</h5></th>
                    <th><h5>% de descuento?</h5></th>
                    <th><h5>Comentario</h5></th>
                    <th><h5>Nombre</h5></th>
                    <th><h5>Marca</h5></th>
                    <th><h5>Costo</h5></th>
                    <th><h5>Utilidad</h5></th>
                    <th><h5>Precio</h5></th>
                    <th><h5>Unidad</h5></th>
                    <th><h5>Grupo</h5></th>
                    <th><h5>Color</h5></th>
                    <th><h5>Detalle</h5></th>
                    <th><h5>Link</h5></th>

                </thead>

                <tbody>
                <tr>
                    <td><input type="text" size="5" name="codigo" id="codigo" value="<?php echo $codigoTienda; ?>"></td>
                    
                    <?php 
                    if($stock<12)
                    {
                        ?>
                      <td><input type="text" size="3" name="txtStock" id="txtStock" class ="cantidadMala" value ="<?php echo $stock; ?>"></td>  
                    <?php    
                    }
                    else
                    {
                        ?>
                      <td><input type="text" size="3" name="txtStock" id="txtStock" class ="cantidadBuena" value ="<?php echo $stock; ?>"></td>   
                    <?php
                    }
                    ?>
                    
                    

                    <td><input type=submit value="Agregar" name="btnAgregar" id="btnAgregar"></td>

                    <td><input type="text" size="3" name="txtCantidad" id="txt"></td>
                    
                    <td><input type="text" size="3" name="txtDescuento" id="txt" value="0"></td>

                    <td><input type="text" size="15" name="txtComentario" id="txt"></td>

                    <?php
                    if(stripos($link,'prisur'))
                       {
                           ?>
                                  <td><input type="text" size="35" name="nombre" id="nombre" class ="TxtNombrePrisur" value="<?php echo $nombre; ?>"></td> 
                    <?php
                       }
                        elseif(stripos($link,'prinorte'))
                       {
                           ?>
                                  <td><input type="text" size="35" name="nombre" id="nombre" class ="TxtNombrePrinorte" value="<?php echo $nombre; ?>"></td> 
                    <?php 
                       }
                            else{

                                ?>

                                <td><input type="text" size="35" name="nombre" id="nombre" value="<?php echo $nombre; ?>"></td>
                    <?php 
                            }
                    ?>


                    <td><input type="text" size="8" name="marca" id="marca" value="<?php echo $marca; ?>"></td>

                    <td><input type="text" size="3" name="txtPrecio" id="txtPrecio" value="$<?php 
 
                            $precioTotal= round($precioNeto+($precioNeto*0.19));
                            //$precioContiene = round($precioTotal+($precioTotal*$porcentajeUtilidad));
                            echo $precioTotal;
                        
                       

                    ?>"></td>

                    <td><input type="text" size="3" name="txtPorcentajeUtilidad" id="txtPorcentajeUtilidad" value="<?php echo $porcentajeUtilidad; ?>"></td>

                    <td>
                        <select name="option">
                            <option value="<?php

                            $precioTotal = $precioNeto+($precioNeto*0.19);
                            $precioSinIva = $precioTotal+($precioTotal*$porcentajeUtilidad);

                            echo round($precioSinIva+($precioSinIva*0.19));
                        
                        ?>">
                                <?php

                            $precioTotal = $precioNeto+($precioNeto*0.19);
                            $precioSinIva = $precioTotal+($precioTotal*$porcentajeUtilidad);
                            $precioTodo = round($precioSinIva+($precioSinIva*0.19));
                            $float = floatval($precioTodo);
                            echo number_format($float, 0, '', '.');
                            
                    
                        ?>
                            </option>
                            <option value="<?php echo $precioTramo2; ?>"> <?php echo $precioTramo2 ?></option>
                            <option value="<?php echo $precioTramo3; ?>"> <?php echo $precioTramo3 ?></option>
                        </select></td>


                    <td><input type="text" size="1" name="unidad" id="unidad" value="<?php echo $unidad; ?>"></td>       

                    <td><input type="text" size="7" name="grupo" id="grupo" value="<?php echo $grupo; ?>"></td>

                    <td><input type="text" size="10" name="color" id="color" value="<?php echo $color; ?>"></td>

                    <td><input type="text" name="detalle" id="detalle" size ="10"value="<?php echo $detalle; ?>"></td>

                    <td><a href='<?php echo $link; ?>' target="_blank"><input size="7"type="text" name="link" id="link" value="<?php echo $link; ?>"></a></td>

                </tr>
                </tbody>
            </table>
        </form>  


        <?php


                } 

            }


            ?>

    <?php
        }



    ?>

    </div>
</div>
<br>
<br>
</body>
   
</html>