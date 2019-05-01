<?php
session_start();
require_once ('mpdf60/mpdf.php');
include 'conexion2.php';

$idLista = $_GET["idLista"];


    $consulta="select nombre, marca, detalle, precioContiene, nombreLista, cantidad, precioTotal, detalleCompra, idProducto, imagen from producto pro, contiene con, lista lis where pro.id = con.idProducto AND lis.idLista = con.idLista and con.idLista='$idLista'";
    
    $resultado1= mysqli_query($conexion,$consulta);
    $resultadoFinal = 0;
    $imagenNueva = "img/ProductoNuevo.png";
    //Antigua forma de sumar el total de la lista (Realizaba la suma desde la BD y traía el resultado con una consulta.)
    //$consultaTotal = "Select sum(precioTotal) from contiene where idLista='$idLista'";
    //$resultado4= mysqli_query($conexion,$consultaTotal);
    //$precioFinal= mysqli_fetch_row($resultado4);


   
    $consultaDetalles = "Select telefono, direccion, detalleLista, faltante from lista where idLista='$idLista'";
    $resultadoDetalles= mysqli_query($conexion,$consultaDetalles);


//Todo el html va acá
$html = '<header class="clearfix">
      <div id="logo">
        <img src="img/fotologo.png">
      </div>
      <h1>Cotización</h1>
      <div id="company" class="clearfix">
        <div><b>Librería Capullito<b></div>
        <div>Valdivia<br /> Para consultas llamar o escribir a :</div>
        <div>+(569) 54171360</div>
        <div><a href="mailto:libreriacapullito@gmail.com">libreriacapullito@gmail.com</a></div>
      </div>
      </div>
    </header>
   <div id="notices">
   <div>NOTA:</div>
    <div class="notice">  -Todos los precios incluyen IVA.</div>
    <div class="notice">  -Imágenes sólo referenciales.</div>
     </div>
     <br>
    <main>';
    
    while($fila1=mysqli_fetch_array($resultado1))
    {
        
                    
            $nombreProducto= $fila1['nombre'];
            $marca= $fila1['marca'];
            $detalle = $fila1['detalle'];
            $cantidad = $fila1['cantidad'];
            $precio= $fila1['precioContiene'];
            $precioTotal= $fila1['precioTotal'];
            $resultadoFinal = $resultadoFinal + $precioTotal;
            $detalleCompra= $fila1['detalleCompra'];
            $idProducto = $fila1['idProducto'];
            $imagen = $fila1['imagen'];

            $precio = floatval($precio);
            $precio = number_format($precio, 0, '', '.');

            $precioTotal = floatval($precioTotal);
            $precioTotal = number_format($precioTotal, 0, '', '.');

            if($imagen==="")
            {
              $imagen = $imagenNueva;
            }
        
            
     $html .='<table>
        <thead>
          <tr>
            <th class="service">Imagen</th>
            <th class="desc">Nombre de Producto</th>
            <th>Marca</th>
            <th>Detalle</th>
            <th>Precio unitario</th>
            <th>Cantidad</th>
            <th>Precio total</th>
          </tr>
        </thead>
        <tbody><tr>
            <td><img name ="imagen" id="<?php echo $idProducto; ?>" src="http://www.libreriacapullito.cl/'.$imagen.'" class="img-sm" style="width: 90px;
            max-height: 120px;
            object-fit: cover;"><span style="font-size: 7px; margin-top: 6px;">**Imagen sólo referencial**</span></td>
            <td>'.$nombreProducto.'</td>
            <td>'.$marca.'</td>
            <td>'.$detalle.'</td>
            <td>$'.$precio.'</td>
            <td>'.$cantidad.'</td>
            <td>$'.$precioTotal.'</td>
          </tr>
        </tbody>
      </table>';
    }
     $resultadoFinal = floatval($resultadoFinal);
     $resultadoFinal = number_format($resultadoFinal, 0, '', '.');
      $html .='
      <br>
      <br>
      <table>
       <tbody>

          <tr>
            <td class="grand total">Total</td>
            <td class="total">$'.$resultadoFinal.'</td>
          </tr>
        </tbody>
      </table>
      <br>';
        while($fila2=mysqli_fetch_array($resultadoDetalles)){

            $telefono= $fila2['telefono'];
            $direccion = $fila2['direccion'];
            $detalleLista = $fila2['detalleLista'];
            $faltante = $fila2['faltante'];


         $html .='
       <table>
            <tr>
                <td>Detalles de la lista</td>
                <td><textarea cols="50" rows="30" name="tareaDetalle" id="tareaDetalle" style="border-color: Transparent">'.$detalleLista.'</textarea></td>
            </tr>
            <tr>
                <td>Productos faltantes</td>
                <td><textarea cols="50" rows="30" name="tareaFaltantes" id="tareaFaltantes" style="border-color: Transparent">'.$faltante.'</textarea></td>
            </tr>
            </table>
            ';
    }
      $html .='
            <br>
    </main>';
$mpdf = new mPDF('c','A4');
$css = file_get_contents('css/style.css');
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);
$mpdf->output('lista.pdf','I');



?>