<?php
$id = $_POST['id'];

include 'conexion2.php';

session_start();

$consulta = "SELECT * FROM producto WHERE id = '".$_POST["id"]."'"; 
$resultado = mysqli_query ($conexion, $consulta);

while($fila = mysqli_fetch_array($resultado))
    {

        $stock = $fila ['stock'];
        $codigoTienda = $fila ['codigoTienda'];
        $nombre=$fila['nombre'];
        $marca=$fila['marca'];
        $precioNeto=$fila['precioNeto'];
        $porcentajeUtilidad=$fila['porcentajeUtilidad'];
        $cantidad=$fila['cantidad'];
        $grupo=$fila['grupo'];
        $color=$fila['color'];
        $detalle=$fila['detalle'];
        $link=$fila['link'];
        $precioTramo2=$fila['precioTramo2'];
        $precioTramo3=$fila['precioTramo3'];
        $imagen=$fila['imagen'];
        $tipo = $fila['tipo'];
        $tags = $fila['tags'];

        if($imagen=="")
        {
            $imagen = "sin imagen";
        }
        else
        {
            $imagen = $fila['imagen'];
        }
        
        $precioTotal = $precioNeto+($precioNeto*0.19);
        $precioSinIva = $precioTotal+($precioTotal*$porcentajeUtilidad);
        $precioTodo = round($precioSinIva+($precioSinIva*0.19));
        $float = floatval($precioTodo);
        $precioFinal2 = number_format($float, 0, '', '.');

        $output .='<div class="modal-header">
        <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
        <h3 class="modal-title" style ="margin: 0 auto;">Producto a editar</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        
                <div class="row">
                    <div class="md-6">
                        <h1>nombre : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="idNombre" value="'.$nombre.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Marca : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="idMarca" value="'.$marca.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Precio neto : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="idPrecioNeto" value="'.$precioNeto.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6">
                        <h1>Porcentaje de utilidad : </h1>
                    </div>
                    <div class="md-6">
                        <input type="text" class="form-control" name="" id="idPorcentajeUtilidad" value="'.$porcentajeUtilidad.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Precio Tramo 2 : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="idPrecioTramo2" value="'.$precioTramo2.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Precio tramo 3 : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="idPrecioTramo3" value="'.$precioTramo3.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Stock : </h1>
                    </div>
                    <div class="md-6">
                        <input type="text" class="form-control" name="" id="idStock" value="'.$stock.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Imagen url : </h1>
                    </div>
                    <div class="md-6">
                        <input type="text" class="form-control" name="" id="idImagen" value="'.$imagen.'">
                    </div>
                </div>
                <div class="row">
                    <div class="md-6 ">
                        <h1>Tipo : </h1>
                    </div>
                    <div class="md-6">
                        <input type="text" class="form-control" name="" id="idTipo" value="'.$tipo.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Tags : </h1>
                    </div>
                    <div class="md-6">
                        <input type="text" class="form-control" name="" id="idTags" value="'.$tags.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-12 text-center">
                        <input type="submit" onclick="ajax_post();" value="Editar" />
                    </div>
                </div>

                <div id="resultado" class="alert alert-success" role="alert"></div>
        </div>
        ';

        echo $output;

        ?>

            <script>
            function ajax_post()
            {

                var xmlhttp;

                if(window.XMLHttpRequest)
                {
                    xmlhttp = new XMLHttpRequest();
                }
                else{
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                
                var resultado = document.getElementById("resultado");

                var nombre = document.getElementById("idNombre").value;
                var marca = document.getElementById("idMarca").value;
                var precioNeto = document.getElementById("idPrecioNeto").value;
                var porcentajeUtilidad = document.getElementById("idPorcentajeUtilidad").value;
                var precioTramo2 = document.getElementById("idPrecioTramo2").value;
                var precioTramo3 = document.getElementById("idPrecioTramo3").value;
                var stock = document.getElementById("idStock").value;
                var tipo = document.getElementById("idTipo").value;
                var tags = document.getElementById("idTags").value;
                var id = "<?php echo $id; ?>";
                var informacion = "nombre="+ nombre +"&marca=" + marca +"&precioNeto=" + precioNeto + "&porcentajeUtilidad=" + porcentajeUtilidad + "&precioTramo2=" + precioTramo2 + "&precioTramo3=" + precioTramo3 + "&stock=" + stock + "&id=" + id + "&tipo=" + tipo + "&tags=" + tags;

                xmlhttp.onreadystatechange = function() 
                {
                    if(xmlhttp.readyState === 4 && xmlhttp.status === 200)
                    {
                        var mensaje = xmlhttp.responseText;
                        resultado.innerHTML = "Producto editado";
                    }
                }

                xmlhttp.open("POST", "editando_producto.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send(informacion);
                $('.alert').alert();
                //document.location.reload();

            }

            </script>

        <?php
     
    }

    
?>