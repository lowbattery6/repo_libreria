<?php

include 'conexion2.php';
session_start();

$idLista = $_GET['idLista'];
$idProducto= $_GET['idProducto'];
$precioContiene = $_POST['txtPrecio'];
$cantidad = $_POST['cantidad'];
$precioContiene2 = $_POST['option'];
$utilidad = $_POST['txtPorcentajeUtilidad'];
$cantidad2 = $_POST['txtCantidad'];
$descuento = $_POST['txtDescuento'];

isset($_SESSION['admin']) ? $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];

$consulta2 = "Select * from lista where idLista = '$idLista' and correoUsuario = '$correo'";
$resultado2 = mysqli_query($conexion, $consulta2);

if(isset($_SESSION['admin']) or mysqli_num_rows($resultado2)>0)
    {

?>
<script type="text/javascript">
    var variable = "<?php echo $precioContiene; ?>";
    //alert(variable);
</script>
<?php 

if($descuento>0)
{
$precioFinalSinIva = ($precioContiene/1.19);
$precioFinalConIva = $precioFinalSinIva/$descuento;
$precioFinal = ($precioFinalConIva*0.19)+$precioFinalConIva;
$precioTotal= $precioFinal*$cantidad; 
}
else{
    $precioTotal = $precioContiene*$cantidad;
    $precioTotal2 = $precioContiene2*$cantidad2;
}

$detalleCompra = $_POST['txtComentario'];

if($idLista=="")
{
    ?>
    <script type="text/javascript">
        alert("Debe ingresar a una lista para poder agregar productos");
        window.location.href="mis_listas.php";
    </script>
    <?php
}
else
{

    if($cantidad==null)
    {
        if($cantidad2>0)
        {
            $verificarCantidad = "select cantidad from contiene where idProducto ='$idProducto' and idLista='$idLista'";
            $resultadoCantidad= mysqli_query($conexion,$verificarCantidad);
            $n=mysqli_num_rows($resultadoCantidad);

            if($n>0)
            {
                $update = "UPDATE contiene SET cantidad = cantidad+'$cantidad2', precioTotal = precioTotal+'$precioTotal2', detalleCompra = '$detalleCompra' WHERE idProducto='$idProducto' and idLista='$idLista'";
                $resultado2= mysqli_query($conexion,$update);
                echo '<script>
                        alert("Producto agregado");
                        window.location.href=`consulta_producto_its.php?idLista=${'.$idLista.'}`;
                        </script>';
            }
            else
            {
                    $agregar = "INSERT INTO contiene (idProducto, idLista, precioContiene, cantidad, precioTotal, detalleCompra) VALUES ('$idProducto', '$idLista', '$precioContiene2','$cantidad2','$precioTotal2','$detalleCompra')";

                    $resultado= mysqli_query($conexion,$agregar);

                    if(!$resultado)
                    {
                            echo '<script>
                                alert("Error al crear agregar el producto");
                                window.location.href=`consulta_producto_its.php?idLista=${'.$idLista.'}`;
                                </script>';
                    }
                    else
                    {
                        echo '<script>
                                alert("Producto agregado");
                                window.location.href=`consulta_producto_its.php?idLista=${'.$idLista.'}`;
                                </script>';
                    }
            }
        }
        else
        {
            ?>
            <script type="text/javascript">
                var variable = "<?php echo $idLista; ?>";
                alert("Debe agregar la cantidad");
                
            </script>
                    
            <?php
        }
        
    }
    else
    {

    $verificarCantidad = "select cantidad from contiene where idProducto ='$idProducto' and idLista='$idLista'";
    $resultadoCantidad= mysqli_query($conexion,$verificarCantidad);
    $n=mysqli_num_rows($resultadoCantidad);

    if($n>0)
    {
        $update = "UPDATE contiene SET cantidad = cantidad+'$cantidad', precioTotal = precioTotal+'$precioTotal', detalleCompra = '$detalleCompra' WHERE idProducto='$idProducto' and idLista='$idLista'";
        $resultado2= mysqli_query($conexion,$update);
        echo '<script>
                alert("Producto agregado");
                window.location.href=`consulta_producto_its.php?idLista=${'.$idLista.'}`;
                </script>';
    }
    else{
    $agregar = "INSERT INTO contiene (idProducto, idLista, precioContiene, cantidad, precioTotal, detalleCompra) VALUES ('$idProducto', '$idLista', '$precioContiene','$cantidad','$precioTotal','$detalleCompra')";

    $resultado= mysqli_query($conexion,$agregar);

    if(!$resultado)
    {
            echo '<script>
                alert("Error al crear agregar el producto");
                window.location.href=`consulta_producto_its.php?idLista=${'.$idLista.'}`;
                </script>';
    }
    else{
        echo '<script>
                alert("Producto agregado");
                window.location.href=`consulta_producto_its.php?idLista=${'.$idLista.'}`;
                </script>';
    }
        }
        }
}
    }
    else
    {
        echo '<script>
        alert("Error al crear agregar el producto");
        window.location.href=`consulta_producto_its.php?idLista=${'.$idLista.'}`;
        </script>';
    }

mysqli_close($conexion);

?>