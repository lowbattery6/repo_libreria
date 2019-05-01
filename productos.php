<?php

    $host = "mysql.hostinger.com.ar";
    $usuario ="u456209797_low";
    $contraseña ="trivium12";
    $basedatos ="u456209797_libre";

    $conexion = new mysqli($host, $usuario, $contraseña, $basedatos);
    
    if($conexion -> connect_errno)
    {
        die("Fallo de conexión: (".$conexion -> mysqli_connect_errno().")".$conexion->mysqli_connect_errno());
    }


    $tabla = "";
    $query = "Select nombre, marca, precioNeto, link, stock from producto where porcentajeUtilidad>0";

    if (isset($_POST['producto']))
    {
        $q= $conexion->real_escape_string($_POST['producto']);
        $query= "Select * from producto where concat(nombre,marca) LIKE '%$q%' and porcentajeUtilidad>0";
        
    }

    $buscarProductos = $conexion->query($query);
    if($buscarProductos->num_rows > 0)
    {
        $tabla.= '<table class ="table table-bordered">
                    <tr>
                        <td>Codigo Tienda </td>
                        <td>stock</td>
                        <td>Nombre</td>
                        <td>Marca</td>
                        <td>Costo</td>
                        <td>Utilidad</td>
                        <td>Precio</td>
                        <td>Color</td>
                        <td>Detalle</td>
                        <td>Link</td>
                        
                    </tr>';
        
        while($filaProductos = $buscarProductos->fetch_assoc())
        {
            $precioTotal = round($filaProductos['precioNeto'] + $filaProductos['precioNeto']*0.19);
            $porcentajeUtilidad = $filaProductos['porcentajeUtilidad'];
            $precioSinIva = round($precioTotal+($precioTotal*$porcentajeUtilidad));
            $precioFinal = round($precioSinIva+($precioSinIva*0.19));
            $tabla.= '<tr>
                        <td>'.$filaProductos['codigoTienda'].'</td>
                        <td>'.$filaProductos['stock'].'</td>
                        <td>'.$filaProductos['nombre'].'</td>
                        <td>'.$filaProductos['marca'].'</td>
                        <td>'.$precioTotal.'</td>
                        <td>'.$porcentajeUtilidad.'</td>    
                        <td><select name="option" id ="option" onchange ="getSelectedValue();">
                            <option value="'.$precioFinal.'">'.$precioFinal.'
                            <option value="'.$filaProductos['precioTramo2'].'"> '.$filaProductos['precioTramo2'].'</option>
                            <option value="'.$filaProductos['precioTramo3'].'"> '.$filaProductos['precioTramo3'].'</option>
                            </select></td>
                        <td>'.$filaProductos['color'].'</td>
                        <td>'.$filaProductos['detalle'].'</td>
                        <td>'.$filaProductos['link'].'</td>
                    </tr>';
        }
        
        $tabla.='</table>';
        
    }
    else
    {
        $tabla = "No se encontraron productos.";
        
    }

    echo $tabla;

?>