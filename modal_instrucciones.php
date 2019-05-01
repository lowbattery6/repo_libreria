<?php
include 'conexion2.php';
$cont=0;


$consulta = "SELECT tipo from producto where  id ='$idProducto1'";
$resultado = mysqli_query ($conexion, $consulta);
?>
<div class="bg-white">
<h1 class="text-center font-weight-bold mt-2"> Cambiando Producto</h1>
<?php
while($fila= mysqli_fetch_array($resultado))
{
    $tipo = $fila['tipo'];

    $consulta2 = "select * from producto where id not in(SELECT idProducto from contiene where idLista = '$idLista') and tipo = '$tipo' and porcentajeUtilidad>0";
    $resultado2 = mysqli_query($conexion, $consulta2);
    ?>
    <div class="container col-12">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card mt-2" style="border:none;">
                    <div class="row bg-light" style="height: 50px;">
                        <div class="col-md-6 text-center">
                            <dt class= "text-muted">Producto</dt>
                        </div>
                        <div class="col-md-2">
                            <dt class= "text-muted">Precio</dt>
                        </div>
                        <div class="col-md-2">
                            <dt class= "text-muted">Total</dt>
                        </div>
                        <div class="col-md-2">
                            <dt class= "text-muted">Acción</dt>
                        </div>
                    </div>
                    <br>
                                            <?php
                                            //Si es que se encuentra se comienza a llenar la tabla desde el array 
                                            while($fila2=mysqli_fetch_array($resultado2))
                                            {
                                                
                                                $porcentajeUtilidad = $fila2 ['porcentajeUtilidad'];
                                                $total=$fila2['precioTotal'];
                                                $idProducto2=$fila2['id'];
                                                $precioNeto=$fila2['precioNeto'];
                                                $imagen=$fila2['imagen'];
                                                $nombreProducto=$fila2['nombre'];
                                                $codigoTienda = $fila2['codigoTienda'];
                                                $marca = $fila2['marca'];
                                                $idContiene = $fila2['idContiene'];
                                                $precioIVA = $precioNeto + ($precioNeto*0.19);
                                                $precioPorcentajeUtilidad = $precioIVA+($precioIVA*$porcentajeUtilidad); 
                                                $precioFinal = round($precioPorcentajeUtilidad+($precioPorcentajeUtilidad*0.19));
                                                $total = $precioFinal*$cantidad;

                                                ?>

                                                <div class="row">
                                                        <h6 class="title text-muted float-left ml-1" style="font-size: 15px;"><b><?php echo $nombreProducto ?></b></h6>
                                                    </div>
                                                <div class="row mt-3"><!-- Comienza div row de las cartas -->
                                                    <div class="col-md-6"> <!-- Comienza div col de producto y foto -->
                                                        <figure class="media" style="margin-right: 1rem;">
                                                        <div class="img-wrap"><img src="<?php if($imagen=="")
                                                                {
                                                                    echo "https://blog.gtk.com.co/hubfs/descripcion-de-un-producto-nuevo-ecommerce.jpg?t=1492545485693";
                                                                }
                                                                else{
                                                                    echo $imagen;
                                                                } ?>" class="img-sm" style="width: 90px;
                                                        max-height: 120px;
                                                        object-fit: cover; margin-right: 2rem;"></div>
                                                        <figcaption class="media-body">
                                                            <dl class="param param-inline small">
                                                            <dt class= "text-muted">Marca </dt>
                                                            <dd><?php echo $marca ?></dd>
                                                            </dl>
                                                            <dl class="param param-inline small">
                                                            <dt class= "text-muted">Código </dt>
                                                            <dd><?php echo $codigoTienda ?></dd>
                                                            </dl>
                                                            </figcaption>
                                                        </figure> 
                                                    </div><!-- Termina div col de producto y foto -->

                                                    <div class="col-md-2">
                                                        <a class="text-muted">$</a><a class="text-muted" value="<?php echo $precioFinal ?>" id="precioInicial<?php echo $i; ?>" name="namePrecioInicial"><?php $float = floatval($precioFinal); echo number_format($float, 0, '', '.'); ?></a> 
                                                    </div><!-- Termina div col de precio unidadd -->

                                                    <div class="col-md-2"><!-- Comienza div col de precio Total -->
                                                        <div class="price-wrap" style="color: #007bff;
                                                                font-size: 18px;
                                                                font-weight: bold;
                                                                margin-right: 5px;
                                                                display: block;"> 
                                                        <a class="text-muted">$</a><a class="text-muted" id="precioTotal<?php echo $i; ?>" name ="precioTotal" value = "<?php echo $total; ?>" style="font-size: 17px;"><?php $float = floatval($total); echo number_format($float, 0, '', '.'); ?></a></div><a class="text-muted">IVA incluido</a> 
                                                    </div><!-- Termina div col de precio Total -->

                                                    <form class="col-md-2" method="post" action="cambiar_producto.php?idProducto1=<?php echo $idProducto1; ?>&idProducto2=<?php echo $idProducto2; ?>&idLista=<?php echo $idLista; ?>&precioContiene=<?php echo $precioFinal; ?>"><!-- Comienza div col de acciones -->
                                                        <div class="row ">
                                                        <div class="col-sm-8 md-6">
                                                        <button type="submit" class="btn btn-warning text-white font-weight-bold view_data" style="font-size: 15px;">Cambiar  <i class="fa fa-pencil-square-o"></i></button> </div>
                                                        </div>
                                                    </form><!-- Termina div col de acciones -->

                                                </div><!--termina row de las cartas -->
                                                <hr>
                                                <?php
                                                $i++;
                                            }//Termina el while
                                            

}

?>
</div>

