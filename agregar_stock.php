
<?php
// Se incluye el archivo php de conexión a la BD
include 'conexion2.php';
session_start();

//Se valida si se está registrado con alguna sesión.

?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='estilos.css' rel='stylesheet' type='text/css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <header class="HeaderListas">
            <title>Agregando stock</title>
            <a href="bienvenido.php" class="volverMenuListas">
            <span>Volver al menú</span>

             </a>
    </header>
    <div id="contenedor">
        <div id="headerInventario" name="headerInventario" class="headerInventario">
        <h1>Agregando Inventario</h1>
        </div>
        <!--
        <form name="formStock" action="aumentando_stock.php" method="post" id="formStock">
            <table>
            <td>Ingrese código de producto</td> 
            <td><input type="text" name="txtCodigoProducto"><td>
            <tr>
            <td>Ingrese cantidad de stock</td>
            <td><input type="text" name="txtStock"></td>
            </tr>
            <tr>
            <td colspan="2" style="align : center"><button type="button" class="btn btn-primary" name="aceptar" value="Aceptar">Aceptar</button></td>
            </tr>
            </table>
        </form>
    </div>
-->
 <form name="formStock" action="aumentando_stock.php" method="post" id="formStock">
  <div class="form-group">
    <label for="exampleInputEmail1">Ingrese código del producto</label>
    <input type="text" class="form-control" placeholder="Código" aria-label="Recipient's username" aria-describedby="basic-addon2" name="txtCodigoProducto">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ingrese la cantidad a aumentar</label>
    <input type="text" class="form-control form-control-sm" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2" name="txtStock">
  </div>
  <div class="form-group form-check">
  </div>
  <button type="submit" class="btn btn-primary"  name="aceptar" >Aceptar</button>
</form>
    

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>