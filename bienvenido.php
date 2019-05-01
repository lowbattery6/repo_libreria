<?php
session_start();
?>
<html>
<head>
<title>Bienvenido</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=yes">
<link href='estilos.css' rel='stylesheet' type='text/css' />
<script src=”prefixfree.min.js” type="text/javascript"></script>
</head>
<body class="bodyBienvenido">
  <?php 
    if(isset($_SESSION['admin']))
    {
      ?>
      <h2 id="tituloBienvenido">¿Qué deseas hacer?</h2>
      <div class="hover11 column">
            <div>
                <h3>Ver Productos</h3>
              <a href="consulta_producto_its.php"><figure class="figureBienvenido"><img src="/img/verProductos.jpg"  /></figure></a>
              <span>hover</span>
            </div>
            <div>
              <h3>Agregar Stock</h3>
              <a href="agregar_stock.php"><figure class="figureBienvenido"><img src="/img/stock.jpg" /></figure></a>
              <span>Agregar Stock</span>
            </div>
            <div>
               <h3>Crear Lista</h3>
              <a href="crear_lista.php"><figure class="figureBienvenido"><img src="/img/cotizarLista.jpg" /></figure></a>
              <span>Cotizar lista</span>
            </div>
            <div>
              <h3>Ver Listas</h3>
              <a href="ver_lista.php"><figure class="figureBienvenido"><img src="/img/verListas.jpg" /></figure></a>
              <span>Ver listas</span>
            </div>
      </div>
      <?php
    }
    else
    {
      ?>
        <script type="text/javascript">
            alert("Debe iniciar sesión para acceder a esta función");
            window.location.href="index.php";
        </script>
        <?php
    }
    ?>
</body>
</html>