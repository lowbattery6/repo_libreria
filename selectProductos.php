<?php
    $_POST["id"];

    include 'conexion2.php';
    session_start();
    $output = "";
    $consulta = "SELECT * FROM producto WHERE id = '".$_POST["id"]."'"; 
    $resultado = mysqli_query ($conexion, $consulta);

    ISSET($_SESSION['admin']) ?  $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];

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
        
            '<div class="modal-header">
                        <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                        <h3 class="modal-title" style ="margin: 0 auto;">'.$nombre.'</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 product_img">
                            <img src="'.$imagen.'" class="img-thumbnail mx-auto d-block" style="border:none; max-height: 400px; ">
                            </div>
                            <form class="col-md-6 product_content" action="producto_guardado.php?idProducto='.$_POST['id'].'&idLista='.$_SESSION['idLista'].'&correo='.$correo.'" method="post">
                                <h4>Código: <span>'.$codigoTienda.'</span></h4>
                                <hr>
                                <p>'.$detalle.'</p>
                                <hr>
                                <h3 class="cost"><span class="glyphicon glyphicon-usd"></span>';
                                //Sólo para uso interno de la empresa
                                if ($stock<=0)
                                {
                                    $output .= '<p><small class ="text-danger"> Este producto se encuentra fuera de stock</small></p>
                                                <small class="text-muted ">Costo: $'.$costo.'</small>
                                                <small class ="text-muted">Utilidad: '.$porcentajeUtilidad.'%</small>';   
                                }
                                else{

                                $output .= '<small class="text-muted ">Costo: $'.$costo.'</small>
                                            <small class ="text-muted">Utilidads: '.$porcentajeUtilidad.'%</small>';
                                }
                                $output .='
                                <h3 class="cost"><span class="glyphicon glyphicon-usd"></span>$'.$precioFinal2.'<small class="text-muted"> IVA incluido.</small></p>
                                <!-- Para hacer ofertas da tachado el precio anterior<small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 900</small></h3> -->
                                <div class="row">
                                    
                                
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                    Otros precios:
                                    <select class="form-control" name="txtPrecio" id="txtPrecio">
                                            <option selected "" value="'.$precioTodo.'">'.$precioTodo.'</option>
                                            <option value="'.$precioTramo2.'">'.$precioTramo2.'</option>
                                            <option value="'.$precioTramo3.'">'.$precioTramo3.'</option>
                                        </select>
                                    </div>
                                    <input type="text" id="cantidad" name="cantidad" size="1" value="1">
                                    <!-- end col -->
                                </div>
                                <hr>';
                                if ($stock<=10)
                                {
                                    $output .= '<small class ="text-danger">Stock: '.$stock.' unidades disp.</small>';   
                                }
                                else{

                                $output .= '<small class="text-primary"><p>Stock: '.$stock.' unidades disp.</p></small>';

                                }
                                $output .='

                                <div class="space-ten"></div>
                                <div class="btn-ground">
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro</button>
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Compartir</button>       
                        </form>

                        <form action="img/acuarela proarte 16853.png" method="POST">
                            <button type="button" id="'.$id.'" class="btn btn-primary view_data" data-dismiss="modal" data-toggle="modal" ><span class="glyphicon glyphicon-heart"></span> Modificar</button>
                        </form>
                            
                        </div>
                        
                    </div>
            ';

            echo $output;
            ?>

            <div class="modal fade product_view" id="product_view">
                <div class="modal-dialog">
                    <div class="modal-content" id="prueba">
                    </div>
                </div>
            </div>

            <script>
                $('.view_data').click(function(){  
                var id = $(this).attr("id");  
                    $.ajax({  
                        url:"modal_editar_producto.php",  
                        method:"post",  
                        data:{id:id},  
                        success:function(data){  
                            $('#prueba').html(data);  
                            $('#product_view').modal("show");  
                        }  
                    });  
                });
            </script>
            <?php
    }
    ?>