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
                        <input type="text" class="form-control" name="" id="" value="'.$nombre.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Marca : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="" value="'.$marca.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Precio neto : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="" value="'.$precioNeto.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6">
                        <h1>Porcentaje de utilidad : </h1>
                    </div>
                    <div class="md-6">
                        <input type="text" class="form-control" name="" id="" value="'.$porcentajeUtilidad.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Link : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="" value="'.$link.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Precio Tramo 2 : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="" value="'.$precioTramo2.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Precio tramo 3 : </h1>
                    </div>
                    <div class="md-6 ">
                        <input type="text" class="form-control" name="" id="" value="'.$precioTramo3.'">
                    </div>
                </div>

                <div class="row">
                    <div class="md-6 ">
                        <h1>Stock : </h1>
                    </div>
                    <div class="md-6">
                        <input type="text" class="form-control" name="" id="" value="'.$stock.'">
                    </div>
                </div>
        </div>
        ';

        echo $output;

     
    }

    
?>