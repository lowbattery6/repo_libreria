    <?php
        $_POST["id"];

        $output = "";
        include 'conexion2.php';
        $consulta = "SELECT * FROM producto WHERE id = '".$_POST["id"]."'"; 
        $resultado = mysqli_query ($conexion, $consulta);

        while ($fila = mysqli_fetch_array($resultado))
        {
                                            $stock = $fila ['stock'];
                                            $codigoTienda = $fila ['codigoTienda'];
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
                                            $imagen=$fila['imagen'];
                                            if($imagen=="")
                                            {
                                                $imagen = "https://blog.gtk.com.co/hubfs/descripcion-de-un-producto-nuevo-ecommerce.jpg?t=1492545485693";
                                            }
                                            else{
                                                $imagen = $fila['imagen'];
                                            }
                                            $precioTotal = $precioNeto+($precioNeto*0.19);
                                            $precioSinIva = $precioTotal+($precioTotal*$porcentajeUtilidad);
                                            $precioTodo = round($precioSinIva+($precioSinIva*0.19));
                                            $float = floatval($precioTodo);
                                            $precioFinal2 = number_format($float, 0, '', '.');

                                            $costo = round($precioNeto+($precioNeto*0.19));
            $output .=  
            
                    '
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header">
                            <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            <h3 class="modal-title" style ="margin: 0 auto;">'.$nombre.'</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        </div>
                        <div class="row modal-body">
                            <div class="col-md-6 product_img">
                                <img src="'.$imagen.'" class="mx-auto d-block img-thumbnail" style="border:none; max-height: 400px;">
                            </div>
                            <div class="col-md-6 product_content">
                                <h4>Código: <span>'.$codigoTienda.'</span></h4>
                                <hr>
                                <p>'.$detalle.'</p>
                                <hr>
                                <h3 class="cost"><span class="glyphicon glyphicon-usd"></span>
                                <h3 class="cost"><span class="glyphicon glyphicon-usd"></span>$'.$precioFinal2.'<small class="text-muted"> IVA incluido.</small></p>
                                <hr>
                                <!-- Para hacer ofertas da tachado el precio anterior<small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 900</small></h3> -->';
                                if ($stock<=10)
                                    {
                                    if($stock==0)
                                    {
                                        $output .= '<p class="text-danger">Sin unidades disponibles</p>';
                                    }
                                    else
                                    {
                                        $output .= '<p class="text-warning">Pocas unidades disponibles</p>';   
                                    }

                                    }
                                    else
                                    {
                                        $output .= '<p class="text-success">Unidades disponibles</p>';
                                    }
                                    $output .='
                                    <p class="text-muted"style="font-size: 13px;">*Stock se debe confirmar con cotización*</p>
                            </div>                
                        </div>
                    </div>';

                echo $output;
        }
        ?>