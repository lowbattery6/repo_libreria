
                        <?php
                        // Se incluye el archivo php de conexión a la BD
                        include 'conexion2.php';
                        session_start();
                        $usuario = $_SESSION['usuario'];
                        isset($_POST['idLista']) ? $idLista = $_POST['idLista'] : $idLista = $_GET['idLista'];
                        $tipoUsuario=0;
                        $cont=0;
                        $_SESSION['idLista'] = $idLista;

                        ISSET($_SESSION['admin']) ?  $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];

                        if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))
                        {
                            if(isset($_SESSION['admin']))
                            {
                                $tipoUsuario = 1;
                            }
                            else
                        {
                            $tipoUsuario=0;
                        }
                           
                        }
                        else
                        {
                            $tipoUsuario=3;
                        }
                

                        ?>
                        <script type="text/javascript">
                        </script>
                        <?php

                        //Se valida si se está registrado con alguna sesión.

                        ?>
                        <html>
                        <head>
                            <title>Consultando productos</title>
                            <link rel="stylesheet" type="text/css" href="estilos.css">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        </head>
                        <body>
                            <?php
                        //
                               // {
                                   // 
                                    
                                    
                                    ?>

                        <div class="container-fluid">
                        <div class="row bg-light container-fluid" style="height: auto; width: auto;">
                                <?php
                                if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))
                                    {
                                        ?>
                                    <div class="col-sm-6 col-xl-1">
                                        <p class="text-muted">Usuario:</p>
                                    </div> 
                                    <div class="col-sm-6 col-xl-9 text-muted"><p><b><?php echo $correo; ?></b></p>
                                    </div>
                                    <div class="col-sm-12 col-lg-2 mt-2"><a href="cerrar_sesion.php"><span>Cerrar sesión</span></a>
                                    </div>
                                    <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <!-- Aquí podría ir algo cuándo el usuario sea anónimo -->
                                        <?php
                                    }
                                    ?>
                                    
                                </div>

                                <div id="divTitulo">      

                                <div style="background: rgba(0,0,0,.25); width: auto;">
                                <?php 
                                if($nombreBuscado=="")
                                {
                                    ?>
                                    <p class="text-light"><b>Buscando Productos</b></p>
                                    <?php
                                    
                                }
                                else
                                {
                                    ?>
                                        <p class="text-light"><b><?php echo $nombreBuscado; ?></b></p>
                                    <?php
                                }
                                    ?>
                                    
                                </div>

                                </div>   
                                <nav class="row navbar-expand-sm navbar navbar-light bg-light sticky-top" id="navbarBusqueda">
                                                <div class="col col-sm-1 col-lg-8">
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                                <a class="navbar-brand" href=""></a>
                                                

                                        <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
                                            <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                            <a class="navbar-brand" href="index.php">Librería Capullito <span class="sr-only">(current)</span></a>
                                        </li>
                                            <?php
                                            if($idLista!="")
                                                {
                                                    ?>
                                                    <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Librería
                                                </a>
                                                <ul class="dropdown-menu" style="width: 400px;"aria-labelledby="navbarDropdownMenuLink">
                                                <div class="row">
                                                <div class="col-md-6">
                                                <a class="dropdown-item" value="Accesorios escolares" href="consulta_producto_its.php?tipo=Accesorios escolares">Accesorios escolares</a>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Adhesivos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Adhesivos en barra&idLista=<?php echo $idLista; ?>">En barra</a>
                                                    <a class="dropdown-item" value="adhesivos cinta" href="consulta_producto_its.php?tipo=Adhesivos en cinta&idLista=<?php echo $idLista; ?>">En cinta</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Adhesivos cola&idLista=<?php echo $idLista; ?>">En cola</a>
                                                    <a class="dropdown-item" value="adhesivos transparentes" href="consulta_producto_its.php?tipo=Adhesivos transparentes&idLista=<?php echo $idLista; ?>">Transparentes</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Blocks</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Apuntes&idLista=<?php echo $idLista; ?>">De apuntes</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Blocks de dibujo&idLista=<?php echo $idLista; ?>">De dibujo</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Cuadernos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Cuadernos college&idLista=<?php echo $idLista; ?>">Cuadernos college</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Cuadernos dobléz&idLista=<?php echo $idLista; ?>">Cuadernos doblez</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Forros&idLista=<?php echo $idLista; ?>">Forros para cuadernos</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Cuadernos universitarios&idLista=<?php echo $idLista; ?>">Cuadernos universitario</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Escritura</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Correctores&idLista=<?php echo $idLista; ?>">Correctores</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Destacadores&idLista=<?php echo $idLista; ?>">Destacadores</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Gomas de borrar&idLista=<?php echo $idLista; ?>">Gomas de borrar</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Lápices grafito&idLista=<?php echo $idLista; ?>">Lápices grafito</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Lápices pasta&idLista=<?php echo $idLista; ?>">Lápices de pasta</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Lápices tinta&idLista=<?php echo $idLista; ?>">Lápices de tinta y estilográficos</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Plumones permanentes&idLista=<?php echo $idLista; ?>">Plumones permanentes </a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Plumones pizarra&idLista=<?php echo $idLista; ?>">Plumones pizarra</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Estuche</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Destacadores&idLista=<?php echo $idLista; ?>">Destacadores</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Gomas de borrar&idLista=<?php echo $idLista; ?>">Gomas de borrar</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Lápices grafito&idLista=<?php echo $idLista; ?>">Lápices grafito</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Lápices pasta&idLista=<?php echo $idLista; ?>">Lápices de pasta</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Lápices tinta&idLista=<?php echo $idLista; ?>">Lápices de tinta</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Reglas&idLista=<?php echo $idLista; ?>">Reglas</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Sacapunas&idLista=<?php echo $idLista; ?>">Sacapuntas</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Tijeras y cartoneros&idLista=<?php echo $idLista; ?>">Tijeras y cartoneros</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Gomas evas</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Set gomas evas&idLista=<?php echo $idLista; ?>">Set de gomas eva</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Gomas evas acanaladas&idLista=<?php echo $idLista; ?>">Goma eva acanalada</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Gomas evas diseño&idLista=<?php echo $idLista; ?>">Goma eva diseño</a>
                                                    <a class="dropdown-item" value="Lápices de colores de palo" href="consulta_producto_its.php?tipo=Gomas evas lisas&idLista=<?php echo $idLista; ?>">Goma eva lisa</a>
                                                    <a class="dropdown-item" value="Lápices de colores de scripto" href="consulta_producto_its.php?tipo=Gomas evas glitter&idLista=<?php echo $idLista; ?>">Goma eva glitter</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Gomas evas tricolor&idLista=<?php echo $idLista; ?>">Goma eva tricolor</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Lápices de colores</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Lápices de colores de cera&idLista=<?php echo $idLista; ?>">Lápices de cera</a>
                                                    <a class="dropdown-item" value="Lápices de colores de palo" href="consulta_producto_its.php?tipo=Lápices de colores de palo&idLista=<?php echo $idLista; ?>">Lápices de palo</a>
                                                    <a class="dropdown-item" value="Lápices de colores de scripto" href="consulta_producto_its.php?tipo=Lápices de colores de scripto&idLista=<?php echo $idLista; ?>">Lápices scripto</a>
                                                    <a class="dropdown-item" value="Lápices de colores de scripto" href="consulta_producto_its.php?tipo=Lápices pastel&idLista=<?php echo $idLista; ?>">Lápices pastel</a>
                                                    </ul>
                                                </li>

                                                </div>
                                                <div class="col-md-6">
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Libros</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Caligrafix&idLista=<?php echo $idLista; ?>">Caligrafix</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Diccionarios&idLista=<?php echo $idLista; ?>">Diccionarios</a>
                                                    <a class="dropdown-item" value="Lápices de colores de palo" href="consulta_producto_its.php?tipo=Libros oficina&idLista=<?php echo $idLista; ?>">Libros, contabilidad y legales</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Modelado</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Gredas y arcillas&idLista=<?php echo $idLista; ?>">Gredas y arcillas</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Masas&idLista=<?php echo $idLista; ?>">Masas para modelar</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Plasticinas&idLista=<?php echo $idLista; ?>">Plasticinas</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Otros</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Borradores&idLista=<?php echo $idLista; ?>">Borradores</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Calculadoras&idLista=<?php echo $idLista; ?>">Calculadoras</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Corcheteras y perforadoras&idLista=<?php echo $idLista; ?>">Corcheteras y perforadoras</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Cumpleaños&idLista=<?php echo $idLista; ?>">Cumpleaños</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Elásticos&idLista=<?php echo $idLista; ?>">Elásticos</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Globos&idLista=<?php echo $idLista; ?>">Globos</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Manualidades&idLista=<?php echo $idLista; ?>">Manualidades</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Maquetería&idLista=<?php echo $idLista; ?>">Maquetería</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Notas adhesivas&idLista=<?php echo $idLista; ?>">Notas adhesivas</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Stickers&idLista=<?php echo $idLista; ?>">Stickers</a> 
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Papelería</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Carpeta de papelería" href="consulta_producto_its.php?tipo=Carpeta de papelería&idLista=<?php echo $idLista; ?>">Carpetas de papelería (Estuche, bolsón)</a>
                                                    <a class="dropdown-item" value="Hojas multiuso" href="consulta_producto_its.php?tipo=Hojas multiuso&idLista=<?php echo $idLista; ?>">Hojas multiuso</a>
                                                    <a class="dropdown-item" value="Papel lustre" href="consulta_producto_its.php?tipo=Papel lustre&idLista=<?php echo $idLista; ?>">Papel lustre</a>
                                                    <a class="dropdown-item" value="Pliego de papelería" href="consulta_producto_its.php?tipo=Pliego papelería&idLista=<?php echo $idLista; ?>">Pliegos de papelería y cartones</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Pinturas</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Caja de témperas&idLista=<?php echo $idLista; ?>">Caja de témpera</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Frascos de témpera&idLista=<?php echo $idLista; ?>">Frascos de témpera</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Pintura&idLista=<?php echo $idLista; ?>">Otros tipos de pinturas</a>
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Pinceles&idLista=<?php echo $idLista; ?>">Pinceles</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Sistemas de archivos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Accoclips&idLista=<?php echo $idLista; ?>">Accoclips o fasteners</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Archivadores&idLista=<?php echo $idLista; ?>">Archivadores</a>
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Carpetas&idLista=<?php echo $idLista; ?>">Carpetas</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Fundas y láminas&idLista=<?php echo $idLista; ?>">Fundas y láminas</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Separadores y visores&idLista=<?php echo $idLista; ?>">Separadores y visores</a>
                                                    
                                                    </ul>
                                                </li>
                                                </li>
                                                </div>
                                                </div>  
                                                </ul>
                                                </li>
                                                <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Oficina
                                                </a>
                                                <ul class="dropdown-menu" style="width: 200px;"aria-labelledby="navbarDropdownMenuLink">
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Adhesivos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Adhesivos en barra&idLista=<?php echo $idLista; ?>">En barra</a>
                                                    <a class="dropdown-item" value="adhesivos cinta" href="consulta_producto_its.php?tipo=Adhesivos en cinta&idLista=<?php echo $idLista; ?>">En cinta</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Adhesivos cola&idLista=<?php echo $idLista; ?>">En cola</a>
                                                    <a class="dropdown-item" value="adhesivos transparentes" href="consulta_producto_its.php?tipo=Adhesivos transparentes&idLista=<?php echo $idLista; ?>">Transparentes</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Cuadernos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Cuadernos college&idLista=<?php echo $idLista; ?>">Cuadernos college</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Cuadernos dobléz&idLista=<?php echo $idLista; ?>">Cuadernos doblez</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Forros&idLista=<?php echo $idLista; ?>">Forros para cuadernos</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Cuadernos universitarios&idLista=<?php echo $idLista; ?>">Cuadernos universitario</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Libros</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Caligrafix&idLista=<?php echo $idLista; ?>">Caligrafix</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Diccionarios&idLista=<?php echo $idLista; ?>">Diccionarios</a>
                                                    <a class="dropdown-item" value="Lápices de colores de palo" href="consulta_producto_its.php?tipo=Libros oficina&idLista=<?php echo $idLista; ?>">Libros, contabilidad y legales</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Otros</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Borradores&idLista=<?php echo $idLista; ?>">Borradores</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Calculadoras&idLista=<?php echo $idLista; ?>">Calculadoras</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Corcheteras y perforadoras&idLista=<?php echo $idLista; ?>">Corcheteras y perforadoras</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Elásticos&idLista=<?php echo $idLista; ?>">Elásticos</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Maquetería&idLista=<?php echo $idLista; ?>">Maquetería</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Notas adhesivas&idLista=<?php echo $idLista; ?>">Notas adhesivas</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Papelería</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Carpeta de papelería" href="consulta_producto_its.php?tipo=Carpeta de papelería&idLista=<?php echo $idLista; ?>">Carpetas de papelería (Estuche, bolsón)</a>
                                                    <a class="dropdown-item" value="Hojas multiuso" href="consulta_producto_its.php?tipo=Hojas multiuso&idLista=<?php echo $idLista; ?>">Hojas multiuso</a>
                                                    <a class="dropdown-item" value="Papel lustre" href="consulta_producto_its.php?tipo=Papel lustre&idLista=<?php echo $idLista; ?>">Papel lustre</a>
                                                    <a class="dropdown-item" value="Pliego de papelería" href="consulta_producto_its.php?tipo=Pliego papelería&idLista=<?php echo $idLista; ?>">Pliegos de papelería y cartones</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Sistemas de archivos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Accoclips&idLista=<?php echo $idLista; ?>">Accoclips o fasteners</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Archivadores&idLista=<?php echo $idLista; ?>">Archivadores</a>
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Carpetas&idLista=<?php echo $idLista; ?>">Carpetas</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Fundas y láminas&idLista=<?php echo $idLista; ?>">Fundas y láminas</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Separadores y visores&idLista=<?php echo $idLista; ?>">Separadores y visores</a>
                                                    
                                                    </ul>
                                                </li>
                                                </ul>
                                                </li>
                                                <?php
                                                }
                                            else
                                            {
                                                ?>
                                            <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Libreria
                                            </a>
                                            <ul class="dropdown-menu" style="width: 400px;"aria-labelledby="navbarDropdownMenuLink">
                                            <div class="row">
                                            <div class="col-md-6">
                                            <a class="dropdown-item" value="Accesorios escolares" href="consulta_producto_its.php?tipo=Accesorios escolares">Accesorios escolares</a>
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Adhesivos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Adhesivos en barra">En barra</a>
                                                    <a class="dropdown-item" value="adhesivos cinta" href="consulta_producto_its.php?tipo=Adhesivos en cinta">En cinta</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Adhesivos cola">En cola</a>
                                                    <a class="dropdown-item" value="adhesivos transparentes" href="consulta_producto_its.php?tipo=Adhesivos transparentes">Transparentes</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Blocks</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Apuntes">De apuntes</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Blocks de dibujo">De dibujo</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Cuadernos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Cuadernos college">Cuadernos college</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Cuadernos dobléz">Cuadernos doblez</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Forros">Forros para cuadernos</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Cuadernos universitarios">Cuadernos universitario</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Escritura</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Correctores">Correctores</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Destacadores">Destacadores</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Gomas de borrar ">Gomas de borrar</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Lápices grafito">Lápices grafito</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Lápices pasta">Lápices de pasta</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Lápices tinta">Lápices de tinta y estilográficos</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Plumones permanentes">Plumones permanentes </a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Plumones pizarra">Plumones pizarra</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Estuche</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Destacadores">Destacadores</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Gomas de borrar ">Gomas de borrar</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Lápices grafito">Lápices grafito</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Lápices pasta">Lápices de pasta</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Lápices tinta">Lápices de tinta</a>
                                                    <a class="dropdown-item" value="Lápices pasta" href="consulta_producto_its.php?tipo=Reglas">Reglas</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Sacapunas">Sacapuntas</a>
                                                    <a class="dropdown-item" value="Lápices tinta" href="consulta_producto_its.php?tipo=Tijeras y cartoneros">Tijeras y cartoneros</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Gomas evas</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Set gomas evas">Set de gomas eva</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Gomas evas acanaladas">Goma eva acanalada</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Gomas evas diseño">Goma eva diseño</a>
                                                    <a class="dropdown-item" value="Lápices de colores de palo" href="consulta_producto_its.php?tipo=Gomas evas lisas">Goma eva lisa</a>
                                                    <a class="dropdown-item" value="Lápices de colores de scripto" href="consulta_producto_its.php?tipo=Gomas evas glitter">Goma eva glitter</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Gomas evas tricolor">Goma eva tricolor</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Lápices de colores</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Lápices de colores de cera">Lápices de cera</a>
                                                    <a class="dropdown-item" value="Lápices de colores de palo" href="consulta_producto_its.php?tipo=Lápices de colores de palo">Lápices de palo</a>
                                                    <a class="dropdown-item" value="Lápices de colores de scripto" href="consulta_producto_its.php?tipo=Lápices de colores de scripto">Lápices scripto</a>
                                                    <a class="dropdown-item" value="Lápices de colores de scripto" href="consulta_producto_its.php?tipo=Lápices pastel">Lápices pastel</a>
                                                    </ul>
                                                </li>
          
                                                </div>
                                                <div class="col-md-6">
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Libros</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Caligrafix">Caligrafix</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Diccionarios">Diccionarios</a>
                                                    <a class="dropdown-item" value="Lápices de colores de palo" href="consulta_producto_its.php?tipo=Libros oficina">Libros, contabilidad y legales</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Modelado</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Gredas y arcillas">Gredas y arcillas</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Masas">Masas para modelar</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Plasticinas">Plasticinas</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Otros</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Borradores">Borradores</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Calculadoras">Calculadoras</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Corcheteras y perforadoras">Corcheteras y perforadoras</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Cumpleaños">Cumpleaños</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Elásticos">Elásticos</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Globos">Globos</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Manualidades">Manualidades</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Maquetería">Maquetería</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Notas adhesivas">Notas adhesivas</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Stickers">Stickers</a> 
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Papelería</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Carpeta de papelería" href="consulta_producto_its.php?tipo=Carpeta de papelería">Carpetas de papelería (Estuche, bolsón)</a>
                                                    <a class="dropdown-item" value="Hojas multiuso" href="consulta_producto_its.php?tipo=Hojas multiuso">Hojas multiuso</a>
                                                    <a class="dropdown-item" value="Papel lustre" href="consulta_producto_its.php?tipo=Papel lustre&idLista=<?php echo $idLista; ?>">Papel lustre</a>
                                                    <a class="dropdown-item" value="Pliego de papelería" href="consulta_producto_its.php?tipo=Pliego papelería">Pliegos de papelería y cartones</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Pinturas</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Caja de témperas">Caja de témpera</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Frascos de témpera">Frascos de témpera</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Pintura">Otros tipos de pinturas</a>
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Pinceles">Pinceles</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Sistemas de archivos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Accoclips">Accoclips o fasteners</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Archivadores">Archivadores</a>
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Carpetas">Carpetas</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Fundas y láminas">Fundas y láminas</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Separadores y visores">Separadores y visores</a>
                                                    
                                                    </ul>
                                                </li>
                                            </li>
                                        </div>
                                    </div>  
                                    </ul>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Oficina
                                                </a>
                                                <ul class="dropdown-menu" style="width: 200px;"aria-labelledby="navbarDropdownMenuLink">
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Adhesivos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Adhesivos en barra">En barra</a>
                                                    <a class="dropdown-item" value="adhesivos cinta" href="consulta_producto_its.php?tipo=Adhesivos en cinta">En cinta</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Adhesivos cola">En cola</a>
                                                    <a class="dropdown-item" value="adhesivos transparentes" href="consulta_producto_its.php?tipo=Adhesivos transparentes">Transparentes</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Cuadernos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Cuadernos college">Cuadernos college</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Cuadernos dobléz">Cuadernos doblez</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Forros">Forros para cuadernos</a>
                                                    <a class="dropdown-item" value="adhesivos cola" href="consulta_producto_its.php?tipo=Cuadernos universitarios">Cuadernos universitario</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Libros</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Caligrafix">Caligrafix</a>
                                                    <a class="dropdown-item" value="Adhesivos en barra" href="consulta_producto_its.php?tipo=Diccionarios">Diccionarios</a>
                                                    <a class="dropdown-item" value="Lápices de colores de palo" href="consulta_producto_its.php?tipo=Libros oficina">Libros, contabilidad y legales</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Otros</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Borradores">Borradores</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Calculadoras">Calculadoras</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Corcheteras y perforadoras">Corcheteras y perforadoras</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Elásticos">Elásticos</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Maquetería">Maquetería</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Notas adhesivas">Notas adhesivas</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Papelería</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Carpeta de papelería" href="consulta_producto_its.php?tipo=Carpeta de papelería">Carpetas de papelería (Estuche, bolsón)</a>
                                                    <a class="dropdown-item" value="Hojas multiuso" href="consulta_producto_its.php?tipo=Hojas multiuso">Hojas multiuso</a>
                                                    <a class="dropdown-item" value="Pliego de papelería" href="consulta_producto_its.php?tipo=Pliego papelería">Pliegos de papelería y cartones</a>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Sistemas de archivos</a>
                                                    <ul class="dropdown-menu">
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Accoclips">Accoclips o fasteners</a>
                                                    <a class="dropdown-item" value="Cajas de témpera" href="consulta_producto_its.php?tipo=Archivadores">Archivadores</a>
                                                    <a class="dropdown-item" value="Pinceles" href="consulta_producto_its.php?tipo=Carpetas">Carpetas</a>
                                                    <a class="dropdown-item" value="Frascos de témpera" href="consulta_producto_its.php?tipo=Fundas y láminas">Fundas y láminas</a>
                                                    <a class="dropdown-item" value="Pinturas" href="consulta_producto_its.php?tipo=Separadores y visores">Separadores y visores</a>
                                                    
                                                    </ul>
                                                </li>
                                                </ul>
                                            </li>
                                                <?php
                                            }
                                            ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Contacto</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-danger font-weight-bold">Listas escolares</span>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <?php 
                                                if(isset($_SESSION['usuario']) or isset($_SESSION['admin']))
                                                {
                                                    ?>
                                                    <a class="dropdown-item" href="mis_listas.php">Mis listas</a>
                                                    <a class="dropdown-item" href="crear_lista.php">Crear lista</a>
                                                    <a class="dropdown-item" href="ver_listas_plantillas.php">Listas plantillas</a>
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled text-success" href="mis_listas.php">Ver mis listas</a>
                                                    </li>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <a class="dropdown-item mis_listas" href="">Mis listas</a>
                                                    <a class="dropdown-item mis_listas" href="">Crear lista</a>
                                                    <a class="dropdown-item mis_listas" href="">Listas plantillas</a>

                                                    <li class="nav-item">
                                                        <a class="nav-link disabled mis_listas text-success" href="">Ver mis listas</a>
                                                    </li>
                                                    <script>
                                                    $('.mis_listas').click(function()
                                                    {
                                                        alert("Debe iniciar sesión");
                                                        event.preventDefault();

                                                        var id = $(this).attr("id");
                                                        var idProducto = $(this).attr('name');  
                                                        $.ajax({ 
                                                        url:"seleccionar_lista.php",
                                                        method:"post",
                                                        data:{name:idProducto, id:id},
                                                        success:function(data){  
                                                            $('#prueba2').html(data);  
                                                            $('#lista_view').modal("show");  
                                                        }  
                                                }); 
                                                    });
                                                    </script>
                                                    <?php
                                                }
                                                ?>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" href="#">Ofertas</a>
                                            </li>
                                            </ul>
                                        </div>
                                                </div>
                                            </div>
                                            <form class="col col-sm-3 col-lg-4 mt-3" id="form5" name="form5" method="post" action="consulta_producto_its.php?idLista=<?php echo $_SESSION['idLista']; ?>" align ="center">
                                                    <div class="row">
                                                        <div class="col col-sm-12 col-lg-6">
                                                            <input class="form-control" type="search" placeholder="Buscar producto" aria-label="Search"  name="nombreBuscado"  id="txt" onkeyup="listar_productos(this.value);" value="<?php $nombreBuscado=$_POST['nombreBuscado']; echo $nombreBuscado; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col col-sm-12 col-lg-6 text-center">
                                                            <button class="btn btn-success mt-2" type="submit" name="Buscar" id="buscar">Buscar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                    </nav>    

                                <?php
                                //Recibo el id de la lista para poder guardar los productos en ésta.

                                // Se recibe el nombre desde el buscar.php y se guarda en variable $nombreBuscado

                                if($nombreBuscado=="")
                                {
                                    $tipo=$_GET['tipo'];
                                    if($tipo!="")
                                    {
                                        $consulta = "SELECT * from producto where tipo like'%$tipo%' and porcentajeUtilidad>0";
                                        //"SELECT * from producto where match(nombre,marca) against ('$nombreBuscado')";
                                        $cont=0;
                                    }
                                    
                                }
                                else
                                {
                                    $nombreBuscado=$_POST['nombreBuscado']; 
                                    $consulta = "SELECT *, MATCH(nombre, marca, tags, tipo) AGAINST ('$nombreBuscado') AS relevance from `producto` WHERE MATCH(nombre, marca, tags, tipo) AGAINST ('$nombreBuscado') ORDER BY relevance DESC";
                                    //"SELECT * from producto where match(nombre,marca) against ('$nombreBuscado')";
                                    $cont=0;
                                }
                                
                                //Se inicializa variable de precio total
                                $precioTotal=0;

                                // Se ejecuta la consulta y se guarda éste en la variable $resultado

                                $resultado= mysqli_query($conexion, $consulta);

                                //Se almacenan el número de registros de la consulta (filas) en la variable $n2
                                $n2=mysqli_num_rows($resultado);
                                ?>
                                <div class="row mt-4">

                                
                                <?php
                                //Se valida si se encuentra por nombre, de lo contrario muestra un popup de error.
                                    if($n2==0)
                                    {
                                        
                                        if($nombreBuscado!="")
                                        {
                                            ?>
                                            <div class="col-md-12 text-center mb-4">
                                                <img src="img/404 producto no encontrado.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|} border border-success" alt="">
                                            </div>
                                            <?php

                                        }
                                        else
                                        {
                                            ?>
                                            <div class="col col-sm-4 offset-3 col-lg-5 offset-3 text-center">
                                                <p class="text-muted" id="avisoSinProducto">Para buscar un producto escribe el nombre y presiona buscar</p>
                                            </div>
                                        
                                            <div class="col col-sm-5 col-lg-4">
                                                <img src="img/Flecha arriba.jpg" class="ml-4" style="height: 55px; width: 45px;" alt="">
                                            </div>
                                                            
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                    ?>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            
                                        <?php
                                        //Si es que se encuentra se comienza a llenar la tabla desde el array 
                                        while($fila=mysqli_fetch_array($resultado))
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

                                            if($porcentajeUtilidad>0)
                                            {
                                            
                                            ?>
                                    <form class="col-sm-12 col-md-6 col-lg-3" method="post" id="cartass" name="form1" action="producto_guardado.php?idProducto=<?php echo $id; ?>&idLista=<?php echo $_SESSION['idLista']; ?>&correo=<? echo $usuario; ?>'">
                                        <!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3" id="cartass">-->
                                            <div class="card-deck mt-4">
                                                <div class="card" style="width: 20rem; height: 36rem;" id="carta">
                                                    <div class="contenedorTituloImagen mt-2" data-toggle="popover" data-content="Haz click en la imagen para más información" style="height: 250px; width: auto; display: flex; flex-direction: column;justify-content: center;">
                                                    <a><img class="img-fluid rounded mx-auto d-block view_data"  id ="<?echo $id; ?>"style ="max-width: 10rem; max-height: 16.5vw; "src="<?php
                                                        if($imagen=="")
                                                        {
                                                            echo "https://blog.gtk.com.co/hubfs/descripcion-de-un-producto-nuevo-ecommerce.jpg?t=1492545485693";
                                                        }
                                                        else{
                                                            echo $imagen;
                                                        } ?>" alt="Foto <?php echo $nombre; ?>"></a>
                                                    </div>
                                                <div class="mb-2"style="height: 27px; margin-left: 18px; font-size: 2vw;"><h5 class="card-title"><?php echo $nombre; ?></h5></div>      
                                                <div class="card-body mt-3">
                                                        <p><small class="text-muted">Codigo: <?php echo $codigoTienda ?></small></p>
                                                        <p><small class="text-muted"><?php echo $marca ?></small></p>
                                                        <p class="card-text" name=""><b>Precio: $<?php
                                                        $precioTotal = $precioNeto+($precioNeto*0.19);
                                                        $precioSinIva = $precioTotal+($precioTotal*$porcentajeUtilidad);
                                                        $precioTodo = round($precioSinIva+($precioSinIva*0.19));
                                                        $float = floatval($precioTodo);
                                                        echo number_format($float, 0, '', '.');  
                                                        ?></b>
                                                        <input type="hidden" name ="txtPrecio" value="<?php
                                                        $precioTotal = $precioNeto+($precioNeto*0.19);
                                                        $precioSinIva = $precioTotal+($precioTotal*$porcentajeUtilidad);
                                                        echo round($precioSinIva+($precioSinIva*0.19)); 
                                                        ?>">
                                                        <small class="text-muted"> IVA incluido.</small></p>
                                                        <small class="text-muted">** Imágen sólo referencial **</small>
                                                        
                                                        </div> 
                                                        <div class="card-footer">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <?php 
                                                                    if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))
                                                                    {
                                                                        if(isset($_SESSION['admin']))
                                                                        {
                                                                            if($stock<1)
                                                                            {
                                                                                ?>
                                                                                <input type="submit" name="<?php echo $id; ?>" value="Agregar" style="font-size: 15px; height: 40px; width: 100%; font-weight: bold;" id="<?php echo $usuario; ?>" class="btn btn-danger mx-auto d-block btn-lg"/>
                                                                                <?php 

                                                                            }
                                                                            elseif($stock >1 && $stock<9)
                                                                            {
                                                                                ?>
                                                                                <input type="submit" name="<?php echo $id; ?>" value="Agregar" style="font-size: 15px; height: 40px; width: 100%; font-weight: bold;" id="<?php echo $usuario; ?>" class="btn btn-warning mx-auto d-block btn-lg"/>
                                                                                <?php
                                                                            }
                                                                            else
                                                                            {
                                                                                ?>
                                                                                <input type="submit" name="<?php echo $id; ?>" value="Agregar" style="font-size: 15px; height: 40px; width: 100%; font-weight: bold;" id="<?php echo $usuario; ?>" class="btn btn-success mx-auto d-block btn-lg"/>
                                                                                <?php
                                                                            }
                                                                            
                                                                        }
                                                                        elseif($stock<1)
                                                                        {
                                                                            ?>
                                                                                <input type="submit" name="<?php echo $id; ?>" disabled="disabled" value="Agregar" style="font-size: 15px; height: 40px; width: 100%; font-weight: bold;" id="<?php echo $usuario; ?>" class="btn btn-success mx-auto d-block btn-lg"/>
                                                                            <?php
                                                                        }
                                                                        else
                                                                        {
                                                                            ?>
                                                                                <input type="submit" name="<?php echo $id; ?>" value="Agregar" style="font-size: 15px; height: 40px; width: 100%; font-weight: bold;" id="<?php echo $usuario; ?>" class="btn btn-success mx-auto d-block btn-lg"/>
                                                                            <?php
                                                                        }
                                                                        
                                                                    }
                                                                    else
                                                                    {

                                                                        ?>
                                                                        <input type="button" name="<?php echo $id; ?>" value="Agregar" style="font-size: 15px; height: 40px; width: 100%; font-weight: bold;" id="<?php echo $usuario; ?>" class="btn btn-success mx-auto d-block view_data2 btn-lg"/>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row mt-1">
                                                                        <div class="col-md-3">
                                                                            <span class="input-group-btn">
                                                                                <button type="button" class="btn btn-default btn-number" data-type="minus" value="-" onClick="menos(<?php echo $cont; ?>);">
                                                                                    <i class="fa fa-minus" id="menos" aria-hidden="true"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <span class="input-container">
                                                                                <input type="text" name="cantidad" max-lenght="2" size="1" class="form-control input-number" id ="txtCantidad<?php echo $cont; ?>" value="1" min="1" max="10">
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <span class="input-group-btn">
                                                                                <button type="button" class="btn btn-default btn-number" data-type="plus" value="+" onClick="mas(<?php echo $cont; ?>);">
                                                                                    <i class="fa fa-plus" id="mas" aria-hidden="true"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                        <!--</form> -->
                                                                    </div>        
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>  
                                                </div>
                                            <!--</div>-->
                                            </form>
                                            <?php
                                            //Se realiza el filtro de qué tipo de usuario es para ver qué modal mostrar, si con % de utilidad, costo, etc para admin o modal normal para usuario común y anónimo.
                                            if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))
                                            {
                                                if(isset($_SESSION['admin']))
                                                {
                                                    ?>
                                                    <div class="modal fade product_view" id="product_view">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content" id="prueba">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <div class="modal fade lista_view"  id="lista_view2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content" id="prueba3" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                
                                            }
                                            else
                                            {
                                                ?>
                                                <div class="modal fade lista_view"  id="lista_view2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content" id="prueba3" >
                                                            </div>
                                                        </div>
                                                    </div>

                                                <!-- Este se usaba anteriormente pero no funcionaba para Anónimos, por mientras se ocupará el mismo que usuario común.
                                                <div class="modal fade lista_view bs-modal-sm"  id="lista_view" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content" id="prueba2" >
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <?php
                                            }
                                            ?>
                                                
                                            
                                            
                                    <?php
                        
                                            $cont++;
                                            } 
                                        }
                                        

                                        ?>
                                            
                                            </div>
                                        </div> 
                                <?php
                                    }



                                ?>          
                            <br>
                            <br>
                            <br>
                            <br>
                                </div>
                                <!-- Footer -->
   <footer class="page-footer font-small bg-light pt-4 mt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

<!-- Grid row -->
<div class="row">

    <!-- Grid column -->
    <div class="col-md-4 mx-auto">

    <!-- Content -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Datos</h5>
    <p class="font-weight-bold text mb-4">+56954171360</p>
    <p class="font-weight-bold mt-3 mb-4">libreriacapullito@gmail.com</p>
    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Acerca de la empresa</h5>

    <ul class="list-unstyled">
        <li>
        <a href="#!">Historia</a>
        </li>
        <li>
        <a href="#!">Misión y visión</a>
        </li>
    </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Nosotros</h5>

    <ul class="list-unstyled">
        <li>
        <a href="#!" data-toggle="popover" data-content="Para comprar debes crear tu lista, agregar tus productos y completar ésta. Luego nos comunicaremos contigo donde podrás recibir tus productos donde estimes conveniente (por un recargo de $1.000) o retirarlos en nuestro domicilio previa coordinación.">¿Cómo comprar?</a>
        </li>
        <li>
        <a href="#!" data-toggle="popover" data-content='Puedes retirar en nuestro domicilio previa coordinación. Estamos ubicados en Avenida Patricio Lynch #930, departamentos de Condominio Jardín Urbano 1. Haz click abajo en "Mapa" para ver nuestra ubicación exacta.'>Dirección</a>
        </li>
        <li>
        <a href="https://www.google.com/maps/place/39%C2%B049'38.2%22S+73%C2%B013'13.5%22W/@-39.8270735,-73.2204784,17.34z/data=!4m6!3m5!1s0x9615ee8d1dc25451:0xb2f5216beb5d2e0f!7e2!8m2!3d-39.8272897!4d-73.2204035">Mapa</a>
        </li>
    </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Cuenta</h5>

    <ul class="list-unstyled">
        <?php 

        if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))    
        {
        
            ?>

                <li>
                    <a href="mis_listas.php">Mis listas</a>
                </li>
                <li>
                    <a href="ver_listas_plantillas.php">Listas plantillas</a>
                </li>
                <li>
                    <a href="cerrar_sesion.php">Cerrar sesión</a>
                </li>
            <?php
        }
        else
        {
            ?>
                <li>
                    <a href="" class="view_data2" onclick="event.preventDefault();">Mis listas</a>
                </li>
                <li>
                    <a href="" class="view_data2" onclick="event.preventDefault();">Listas plantillas</a>
                </li>
            <?php
        }
        ?>
    </ul>

    </div>
    <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->

<hr>

<!-- Call to action -->
<ul class="list-unstyled list-inline text-center py-2">
<li class="list-inline-item">
    <h5 class="mb-1">Para crear tus listas</h5>
</li>
<li class="list-inline-item">
    <a href="crear_lista.php" class="btn btn-danger btn-rounded">Crear lista</a>
</li>
</ul>
<!-- Call to action -->

<hr>

<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
<li class="list-inline-item">
    <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/utilesescolares.valdivia.9" target="_blank">
    <i class="fa fa-facebook"> </i>
    </a>
</li>
<li class="list-inline-item">
    <a class="btn-floating btn-env mx-1" href="mailto:libreriacapullito@gmail.com">
    <i class="fa fa-envelope"></i>
    </a>
</li>
<li class="list-inline-item">
    <a class="btn-floating btn-li mx-1" href="https://www.instagram.com/libreria.capullito.valdivia/" target="_blank">
    <i class="fa fa-instagram"> </i>
    </a>
</li>
</ul>
<!-- Social buttons -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2018 Diseñado por:
<a href="https://mapamoga.ga"> FVM</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
                                <?php
                               // }
                               // else
                               // {
                               //     header('location: index.html');
                              //  }
                                ?>

                                <script>

    
var txtCantidad = document.getElementsByName('cantidad');
var txtPrecioTotal = document.getElementsByName('precioTotal');
var precioTotal = document.querySelector('#precioTotal');
var txtPrecioInicial = document.getElementsByName('namePrecioInicial');
var total;
var idLista = "<?php echo $idLista; ?>";
var usuario = "<?php ISSET($_SESSION['admin']) ?  $usuario = $_SESSION['admin'] : $usuario = $_SESSION['usuario']; echo $usuario ?>";

/*$(document).ready(function()
{
    $('#cartass').hover(
        function()
        {
            $(this).animate({
              marginTop: "-=1%",  
            },200);
            
        },

        function()
        {
            $(this).animate({
              marginTop: "0%",  
            },200);
            
        }
    );
});*/

function mas (lugar)
{
    txtCantidad[lugar].value++
    total = txtCantidad[lugar].value * parseInt(txtPrecioInicial[lugar].attributes[1].nodeValue);
    let totalFloat = parseFloat(total);
    txtPrecioTotal[lugar].innerHTML = new Intl.NumberFormat().format(totalFloat);
}

function menos (lugar)
{ 
    
    if(txtCantidad[lugar].value<=1)
    {
        txtCantidad.style = "disabled";
    }
        else
        {
            txtCantidad[lugar].value--
            total = txtCantidad[lugar].value * parseInt(txtPrecioInicial[lugar].attributes[1].nodeValue);
            let totalFloat = parseFloat(total);
            txtPrecioTotal[lugar].innerHTML = new Intl.NumberFormat().format(totalFloat);
            

        }
        

    
}
</script>        
                                <script>  

                                    $(document).ready(function(){

                                        $('[data-toggle="popover"]').popover({
                                            placement: 'top',
                                            trigger: 'hover'
                                        });

                                        $('.view_data').click(function(){  
                                            var id = $(this).attr("id");  
                                            $.ajax({  
                                                    url:"selectProductos.php",  
                                                    method:"post",  
                                                    data:{id:id},  
                                                    success:function(data){  
                                                        $('#prueba').html(data);  
                                                        $('#product_view').modal("show");  
                                                    }  
                                            });  
                                        });
                                    
                                        $('.view_data2').click(function(){ 
                                            if(usuario!="")
                                            {
                                                if(idLista!="")
                                                {
                                                    var id = $(this).attr("id");
                                                    var idProducto = $(this).attr('name');  
                                                    $.ajax({ 
                                                    url:"seleccionar_lista.php",
                                                    method:"post",
                                                    data:{name:idProducto, id:id},
                                                    success:function(data){  
                                                        $('#prueba2').html(data);  
                                                        $('#lista_view').modal("show");  
                                                    }  
                                            }); 
                                                    
                                                }
                                                else
                                                {
                                                    
                                                    
                                                }
                                            
                                            }
                                            else
                                            {
                                                alert("Debe iniciar sesión para agregar productos");
                                            }
                                        });
                                    
                                    
                                        

                                        $('.view_data').click(function(){  
                                            var id = $(this).attr("id");  
                                            $.ajax({  
                                                    url:"selectProductos2.php",  
                                                    method:"post",  
                                                    data:{id:id},  
                                                    success:function(data){  
                                                        $('#prueba3').html(data);  
                                                        $('#lista_view2').modal("show");  
                                                    }  
                                            });  
                                        });

                                    }); 

                                </script>
                                
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                                <script src="productos.js"></script>   

                        </body>
                        </html>