<?php
            include 'conexion2.php';
            $idLista = $_GET["idLista"];
            $nombreLista = $_GET["nombreLista"];
            $plantilla = $_GET['plantilla'];
            
            session_start();
            $i=0;
            $sumaTotal=0;

            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Mi Lista</title>
                <link rel="stylesheet" type="text/css" href="estilos.css">
                <meta name="viewport" content="width=device-width, initial-scale=0.4" />
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">                      
            </head>
            <body>
                                    <?php
                                if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))
                                        {
                                            ISSET($_SESSION['admin']) ?  $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];
                                            
                                            
                                            ?>

                                <div class="container-fluid">
                                    <div class="row bg-light">
                                        <div class="col-md-8"><p class="text-muted">Usuario: <b><?php echo $correo; ?></b></p></div>
                                        <div class="col-md-1">
                                        <a class="nav-link" href="https://www.facebook.com/utilesescolares.valdivia.9" target="_blank"><i class="fa fa-facebook" style="font-size:24px"></i></a>
                                        </div>
                                        <div class="col-md-1">
                                        <a class="nav-link" href="https://www.instagram.com/libreria.capullito.valdivia/" target="_blank"><i class="fa fa-instagram" style="font-size:24px"></i></a>          
                                        </div>
                                        <div class="col-md-1">
                                        <a class="nav-link" href="https://www.facebook.com/utilesescolares.valdivia.9" target="_blank"><i class="material-icons" style="font-size:24px">mail</i></a>
                                        </div>
                                        <div class="col-md-1">
                                        <a class="nav-link" href="cerrar_sesion.php"><span>Cerrar sesión</span></a>
                                        </div>
                                    </div>


                                    <div class="divTitulos" style="height: 250px; display: flex; flex-direction: column;justify-content: center; background-image: url(img/fondoUtiles.jpg);
                                    background-size: cover; font-size: 30px; width: auto; text-align: center; color: #57636F; padding: 15px 15px 15px 15px;">      
                                        <?php 
                                            ?> <h1 class="display-1"><b><?php echo $nombreLista; ?></b></h1>

                                        </div>
                                        <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top" id="navbarBusqueda" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
                                            <a class="navbar-brand" href=""></a>
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>

                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <ul class="navbar-nav mr-auto">
                                                <li class="nav-item active">
                                                    <a class="navbar-brand" href="index.php">Librería Capullito <span class="sr-only">(current)</span></a>
                                                </li>
                                                <?php

                                                if($idLista!="")

                                                {?>
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
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Librería
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
                                                    <a class="dropdown-item" href="mis_listas.php">Mis listas</a>
                                                    <a class="dropdown-item" href="crear_lista.php">Crear lista</a>
                                                    <a class="dropdown-item" href="ver_listas_plantillas.php">Listas plantillas</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="bienvenido.php">Ingreso administrador</a>
                                                    </div>
                                            </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled text-success" href="mis_listas.php">Ver mis listas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#">Ofertas</a>
                                                </li>
                                                </ul>
                                            </div>
                                        </nav>      
                                        <?php
                                        $consulta = "SELECT producto.nombre as nombre, producto.codigoTienda, producto.marca, contiene.precioContiene, contiene.cantidad, contiene.precioTotal, producto.id, producto.imagen FROM contiene, producto where producto.id = contiene.idProducto and idLista = $idLista";
                                        $cont=0;

                                        //Se inicializa variable de precio total
                                        $precioTotal=0;

                                        // Se ejecuta la consulta y se guarda éste en la variable $resultado

                                        $resultado= mysqli_query($conexion, $consulta);

                                        //Se almacenan el número de registros de la consulta (filas) en la variable $n2
                                        $n2=mysqli_num_rows($resultado);
                                        ?>
                                        <?php
                                        //Se valida si se encuentra por nombre, de lo contrario muestra un popup de error.
                                            if($n2==0)
                                            {
                                                ?>
                                                <div class="container text-center">
                                                    <div class="row" style="margin-top: 80px;">
                                                        <div class="col-md-12">
                                                            <p class="font-weight-bold text-muted">No tiene productos agregados a su lista</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mt-3" style="margin-bottom: 80px;">
                                                        <input type="button" class="btn btn-primary" value="Agregar producto" style="font-size: 17px;" onclick ="window.location.href='consulta_producto_its.php?idLista=<?php echo $idLista; ?>'">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php

                                            }
                                            else
                                            {
                                            ?>
                                                <div class="container-fluid ml-5">
                                                    <div class="row mt-3 "style="width: 1600px;">
                                                    <div class="col-md-8">
                                                    <div class="card mt-2" style="border:none;">
                                                        <div class="row bg-light" style="height: 50px; display: flex;justify-content: center; align-items: center;">
                                                            <div class="col-md-4">
                                                                <dt class= "text-muted">Producto</dt>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <dt class= "text-muted">Cantidad</dt>
                                                            </div>
                                                            <div class="col-md-1">
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
                                                    while($fila=mysqli_fetch_array($resultado))
                                                    {
                                                        
                                                        $precioContiene = $fila ['precioContiene'];
                                                        $cantidad = $fila ['cantidad'];
                                                        $total=$fila['precioTotal'];
                                                        $idProducto=$fila['id'];
                                                        $precioNeto=$fila['precioNeto'];
                                                        $imagen=$fila['imagen'];
                                                        $nombreProducto=$fila['nombre'];
                                                        $codigoTienda = $fila['codigoTienda'];
                                                        $marca = $fila['marca'];
                                                        $sumaTotal = $sumaTotal + $total;

                                                        ?>

                                                        <div class="row">
                                                                <h6 class="title text-muted float-left ml-1" style="font-size: 15px;"><b><?php echo $nombreProducto ?></b></h6>
                                                            </div>
                                                        <div class="row mt-3"><!-- Comienza div row de las cartas -->
                                                            <div class="col-md-4"> <!-- Comienza div col de producto y foto -->
                                                                <figure class="media" style="margin-right: 1rem;">
                                                                <div class="img-wrap"><img name ="imagen" id="<?php echo $idProducto; ?>"src="<?php if($imagen=="")
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

                                                            <div class="col-md-3 mt-2"><!-- Comienza div col de cantidad -->
                                                                <div class="input-group">
                                                                <?php             
                                                                if($plantilla==1)
                                                                    {
                                                                        ?>
                                                                            <span class="input-group-btn">
                                                                                <button type="button" class="btn btn-default btn-number" data-type="minus" value="-" onclick="alert(`Debes escoger 'Ocupar esta lista' para poder modificarla`)">
                                                                                    <i class="fa fa-minus" id="menos" aria-hidden="true"></i>
                                                                                </button>
                                                                            </span>
                                                                            <span class="input-container">
                                                                                <input type="text" name="quant[1]" class="form-control input-number bg-white" id ="txtCantidad<?php echo $i; ?>" value="<?php echo $cantidad ?>" min="1" max="10" readonly>
                                                                            </span>
                                                                            <span class="input-group-btn">
                                                                                <button type="button" class="btn btn-default btn-number" data-type="plus" value="+" onclick="alert(`Debes escoger 'Ocupar esta lista' para poder modificarla`)">
                                                                                    <i class="fa fa-plus" id="mas" aria-hidden="true"></i>
                                                                                </button>
                                                                            </span>
                                                                        <?php

                                                                    }

                                                                    else
                                                                    {
                                                                        ?>
                                                                            <span class="input-group-btn">
                                                                                <button type="button" class="btn btn-default btn-number" data-type="minus" value="-" onClick="menos(<?php echo $i; ?>);">
                                                                                    <i class="fa fa-minus" id="menos" aria-hidden="true"></i>
                                                                                </button>
                                                                            </span>
                                                                            <span class="input-container">
                                                                                <input type="text" name="quant[1]" class="form-control input-number bg-white" id ="txtCantidad<?php echo $i; ?>" value="<?php echo $cantidad ?>" min="1" max="10" readonly>
                                                                            </span>
                                                                            <span class="input-group-btn">
                                                                                <button type="button" class="btn btn-default btn-number" data-type="plus" value="+" onClick="mas(<?php echo $i; ?>);">
                                                                                    <i class="fa fa-plus" id="mas" aria-hidden="true"></i>
                                                                                </button>
                                                                            </span>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                        
                                                                    </div>
                                                            </div><!-- Termina div col de cantidad -->

                                                            <div class="col-md-1">
                                                                <a class="text-muted">$</a><a class="text-muted" value="<?php echo $precioContiene ?>" id="precioInicial<?php echo $i; ?>" name="namePrecioInicial"><?php $float = floatval($precioContiene); echo number_format($float, 0, '', '.'); ?></a> 
                                                            </div><!-- Termina div col de precio unidadd -->

                                                            <div class="col-md-2"><!-- Comienza div col de precio Total -->
                                                                <div class="price-wrap" style="color: #007bff;
                                                                        font-size: 18px;
                                                                        font-weight: bold;
                                                                        margin-right: 5px;
                                                                        display: block;"> 
                                                                <a class="text-muted">$</a><a class="text-muted" id="precioTotal<?php echo $i; ?>" name ="precioTotal" value = "<?php echo $total ?>" style="font-size: 17px;"><?php $float = floatval($total); echo number_format($float, 0, '', '.'); ?></a></div><a class="text-muted"><?php echo round($float/1.19); ?></a> 
                                                            </div><!-- Termina div col de precio Total -->

                                                            <div class="col-md-2"><!-- Comienza div col de acciones -->
                                                                <div class="row ">
                                                                <?php
                                                                    if($plantilla==1)
                                                                    {
                                                                        ?>
                                                                        <div class="col-sm-8 md-6"><a class="btn btn-warning text-white font-weight-bold"  onclick="alert(`Debes escoger 'Ocupar esta lista' para poder modificarla`)" id="<?php echo $idProducto; ?>" name ="<?php echo $idLista; ?>" style="font-size: 15px;" cantidad="<?php echo $cantidad; ?>" >Cambiar  <i class="fa fa-pencil-square-o"></i></a> </div>
                                                                        <div class="col-sm-4 md-6"><button class="btn btn-outline-danger font-weight-bold" style="font-size: 12px;" onclick="alert(`Debes escoger 'Ocupar esta lista' para poder modificarla`)">x</button></div>
                                                                        <?php
                                                                    }
                                                                    else
                                                                    {
                                                                        ?>
                                                                        <div class="col-sm-8 md-6"><a class="btn btn-warning text-white font-weight-bold view_data" id="<?php echo $idProducto; ?>" name ="<?php echo $idLista; ?>" style="font-size: 15px;" cantidad="<?php echo $cantidad; ?>" >Cambiar  <i class="fa fa-pencil-square-o"></i></a> </div>
                                                                        <div class="col-sm-4 md-6"><button class="btn btn-outline-danger font-weight-bold" style="font-size: 12px;" onclick="eliminar(<?php echo $idProducto; ?>, <?php echo $idLista; ?>)">x</button></div>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            
                                                                </div>
                                                            </div><!-- Termina div col de acciones -->

                                                        </div><!--termina row de las cartas -->
                                                        <hr>

                                                        <div class="modal fade product_view" id="product_view"><!-- Comienza el modal -->
                                                            <div class="modal-dialog">
                                                                <div class="modal-content" id="prueba">
                                                                </div>
                                                            </div>
                                                        </div><!-- termina el modal -->
                                                        <?php
                                                        $i++;
                                                    }//Termina el while
                                                    ?>
                
                                                    </div><!-- Termina div del container de las cartas -->
                                                    </div>
                                                    <div class="col-md-3" >
                                                        <div class="row sticky-top" style="width: 250px;">
                                                            <div class="col-md-12 mt-2 ml-5">
                                                                <div class="row bg-light" style="height: 50px; display: flex; justify-content: center; align-items: center;">
                                                                <b><p class="text-muted mt-3">Detalles</p></b>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-md-6">
                                                                        <b><p class="text-muted">Sub-total  :</p></b>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <b class="text-muted">$<a id="txtSubTotal" class="text-muted"><?php
                                                                        $a = round($sumaTotal/1.19);
                                                                        $float = floatval($a);
                                                                        echo number_format($float, 0, '', '.');?></a></b>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <b><p class="text-muted">IVA  :</p></b>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <b class="text-muted">$<a class="text-muted" id="txtIVA"><?php 
                                                                        $b = round($sumaTotal - $sumaTotal/1.19);
                                                                        $float = floatval($b);
                                                                        echo number_format($float, 0, '', '.'); ?></a></b>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <b><p class="text-muted">Total  :</p></b>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <b class="text-muted">$<input type="hidden" id="txtTotal" value="<?php echo $sumaTotal; ?>"><a class="text-muted" id ="txtTotal2"><?php
                                                                        $float = floatval($sumaTotal);
                                                                        echo number_format($float, 0, '', '.');?></a></b>
                                                                    </div>    
                                                                </div>
                                                                <div class="row">

                                                                    <?php
                                                                    if($plantilla==1)
                                                                    {
                                                                        ?>
                                                                        <div class="col-md-12 mt-4">
                                                                            
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    else
                                                                    { 
                                                                        if(isset($_SESSION['admin']))
                                                                        {
                                                                            $consulta3 = "Select estado from lista where idLista = '$idLista'";
                                                                            $resultado3 = mysqli_query($conexion, $consulta3);

                                                                            while($fila3 = mysqli_fetch_array($resultado3))
                                                                            {
                                                                                $estado = $fila3['estado'];
                                                                                        
                                                                                ?>
                                                                                <div class="col-md-12 mt-4">
                                                                                    <b><input type="button" class="btn btn-success btn-lg btn-block" value="Quiero esta lista!" onclick="enviar_cotizacion()"></b>
                                                                                </div>
                                                                                <div class="col-md-12 mt-4">
                                                                                    <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Agregar otro producto" style="font-size: 17px;" onclick ="window.location.href='consulta_producto_its.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                </div>
                                                                                
                                                                                <?php
                                                                            
                                                                                if($estado == 'Creada')
                                                                                {
                                                                                    ?>
                                                                                    <div class="col-md-12 mt-4">
                                                                                        <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Ver PDF" style="font-size: 17px;" onclick ="window.location.href='imprimir.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>
                                                                                    <div class="col-md-12 mt-4">
                                                                                        <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Marcar como enviada" style="font-size: 17px;" onclick ="window.location.href='enviado.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>         
                                                                                    <?php
                                                                                }

                                                                                if($estado == 'Enviada')
                                                                                {
                                                                                    ?>
                                                                                    <div class="col-md-12 mt-4">
                                                                                        <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Ver PDF" style="font-size: 17px;" onclick ="window.location.href='imprimir.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>
                                                                                    <div class="col-md-12 mt-4">
                                                                                    <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Marcar como confirmada" style="font-size: 17px;" onclick ="window.location.href='confirmada.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>         
                                                                                    <?php
                                                                                }

                                                                                if($estado == 'Confirmada')
                                                                                {
                                                                                    ?>
                                                                                    <div class="col-md-12 mt-4">
                                                                                    <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Ver PDF" style="font-size: 17px;" onclick ="window.location.href='imprimir.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>
                                                                                    <div class="col-md-12 mt-4">
                                                                                    <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Marcar como entregada" style="font-size: 17px;" onclick ="window.location.href='entregada.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>         
                                                                                    <?php
                                                                                }

                                                                                if($estado == 'Entregada')
                                                                                {
                                                                                    ?>
                                                                                    <div class="col-md-12 mt-4">
                                                                                    <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Ver PDF" style="font-size: 17px;" onclick ="window.location.href='imprimir.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>
                                                                                    <div class="col-md-12 mt-4">
                                                                                        <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Cancelar lista" style="font-size: 17px;" onclick ="window.location.href='cancelada.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>         
                                                                                    <?php
                                                                                }
                                                                                if($estado == 'Plantilla')
                                                                                {
                                                                                    ?>
                                                                                    <div class="col-md-12 mt-4">
                                                                                    <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Ver PDF" style="font-size: 17px;" onclick ="window.location.href='imprimir.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>
                                                                                    <div class="col-md-12 mt-4">
                                                                                        <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Cancelar lista" style="font-size: 17px;" onclick ="window.location.href='cancelada.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>         
                                                                                    <?php
                                                                                }
                                                                                
                                                                            }
                                                                        }
                                                                        else
                                                                        {
                                                                            ?>
                                                                        <div class="col-md-12 mt-4">
                                                                            <b><input type="button" class="btn btn-success btn-lg btn-block" value="Quiero esta lista!" onclick="enviar_cotizacion()"></b>
                                                                        </div>
                                                                        <div class="col-md-12 mt-4">
                                                                            <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Agregar otro producto" style="font-size: 17px;" onclick ="window.location.href='consulta_producto_its.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                        </div>
                                                                        
                                                                        <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                <?php
                                                                    if($plantilla==1)
                                                                    {
                                                                        if(isset($_SESSION['admin']))
                                                                        {
                                                                            ?>
                                                                            <div class="col-md-12 mt-4">
                                                                                <b><input type="button" class="btn btn-success btn-lg btn-block" value="Ocupar esta lista" onclick="window.location.href='copiar_plantilla.php?nombreLista=<?php echo $nombreLista; ?>&idLista=<?php echo $idLista; ?>'"></b>
                                                                            </div>
                                                                            <div class="col-md-12 mt-4">
                                                                                <b><input type="button" class="btn btn-warning btn-lg btn-block text-white" value="Ver detalles y faltantes" data-toggle="modal" data-target="#exampleModalLong"></b>
                                                                            </div>
                                                                            <div class="col-md-12 mt-4">
                                                                                    <b><input type="button" class="btn btn-primary btn-lg btn-block" value="Ver PDF" style="font-size: 17px;" onclick ="window.location.href='imprimir.php?idLista=<?php echo $idLista; ?>'"></b>
                                                                                    </div>
                                                                            <?php
                                                                        }
                                                                        else
                                                                        {
                                                                            ?>
                                                                            <div class="col-md-12 mt-4">
                                                                                <b><input type="button" class="btn btn-success btn-lg btn-block" value="Ocupar esta lista" onclick="window.location.href='copiar_plantilla.php?nombreLista=<?php echo $nombreLista; ?>&idLista=<?php echo $idLista; ?>'"></b>
                                                                            </div>
                                                                            <div class="col-md-12 mt-4">
                                                                                <b><input type="button" class="btn btn-warning btn-lg btn-block text-white" value="Ver detalles y faltantes" data-toggle="modal" data-target="#exampleModalLong"></b>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        
                                                                        
                                                                    }
                                                                    else
                                                                    {
                                                                    }
                                                                    ?>  
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                                    }//Termina el else de la comprobación de la consulta n==0
                                                    ?>
                                                    
                                                            
                                                    <!--<div class="col-md-12 bg-primary float-right"><h1>Hola</h1> </div>-->
            

            
            </div>
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Detalles de la lista</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
                                $consulta1 = "Select detalleLista, faltante, estado from lista where idLista = '$idLista'";
                                $resultado1 = mysqli_query($conexion, $consulta1);
                                                                                
                                while($fila1 = mysqli_fetch_array($resultado1))
                                    {
                                        $faltante = $fila1['faltante'];
                                        $detalles = $fila1['detalleLista'];
                                        ?>
                                        <p class="font-weight-bold">Detalles de la lista</p>
                                        <p class="ml-2"><?php $detalles = str_replace(array("."), "<br/>", $detalles); echo $detalles;?></p>
                                        <p class="font-weight-bold">Productos faltantes</p>
                                        <p class="ml-2"><?php $faltante = str_replace(array("."), "<br/>", $faltante); echo $faltante;?></p>

                                        <?php
                                    }
                                    ?>
                                                                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="enviar_modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enviar lista</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="font-weight-bold">Por favor llena los siguientes datos</p>
                        <form id="form1" method="POST" action="enviar_cotizacion.php?idLista=<?php echo $idLista; ?>">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label font-weight-bold">Tu nombre:</label>
                            <?php
                                $consulta2 = "Select nombre, apellidoPaterno from usuario where correo = '$correo'";
                                $resultado2 = mysqli_query($conexion, $consulta2);

                                while($fila2= mysqli_fetch_array($resultado2))
                                {
                                    $nombre = $fila2['nombre'];
                                    $apellido = $fila2['apellidoPaterno'];

                                    ?>

                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $nombre;?> <?php echo $apellido;?>">

                                    <?php
                                }
                            ?>
                            
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label font-weight-bold">Número de teléfono:</label>
                            <input type="text" class="form-control" id="txtTeléfono"  name="txtTeléfono" value="+569">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label font-weight-bold">¿Cómo deseas que te contactemos?</label>
                            <select class="form-control" id="selectContacto" name="selectContacto">
                                <option value="Correo eléctrónico">Correo eléctrónico</option>
                                <option value="Llamada">Llamada</option>
                                <option value="Whatsapp">Whatsapp</option>
                            </select>
                        </div>
                        <label for="info-text" class="text-muted font-weight-bold text-danger" style="font-size: 15px;">Recuerda que...</label>
                        <label for="info-text" class="text-muted" style="font-size: 15px;">- En cuanto revisemos tu solicitud nos contactaremos contigo para coordinar la entrega de tu lista</label>
                        <label for="info-text" class="text-muted" style="font-size: 15px;">- Recuerda que el stock de cada producto debe ser confirmado</label>
                        <label for="info-text" class="text-muted" style="font-size: 15px;">- Ante cualquier problema nos contactaremos al correo que proporcionaste para el registro</label>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                    </form>
                    </div>
                </div>
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
            }
            else
            {
                header('location: index.html');
            }
            ?>
            <script>

            
        var txtCantidad = document.getElementsByName('quant[1]');
        var txtPrecioTotal = document.getElementsByName('precioTotal');
        var precioTotal = document.querySelector('#precioTotal');
        var txtPrecioInicial = document.getElementsByName('namePrecioInicial');
        var subTotal = document.getElementById('txtSubTotal');
        var txtIVA = document.getElementById('txtIVA');
        var txtTotal = document.getElementById('txtTotal').value;
        var txtTotal2 = document.getElementById('txtTotal2');
        var total;
        var idProducto = document.getElementsByName('imagen');
        var idLista = "<?php echo $idLista ?>";

        $(document).ready(function()
        {
        });

        function mas (lugar)
        {
            txtCantidad[lugar].value++
            total = txtCantidad[lugar].value * parseInt(txtPrecioInicial[lugar].attributes[1].nodeValue);
            txtTotal = parseInt(txtTotal) + parseInt(txtPrecioInicial[lugar].attributes[1].nodeValue);
            txtTotal2.innerHTML = new Intl.NumberFormat().format(txtTotal);
            txtIVA.innerHTML = new Intl.NumberFormat().format(Math.round(parseInt(txtTotal) - parseInt(txtTotal)/1.19));
            subTotal.innerHTML = new Intl.NumberFormat().format(Math.round(parseInt(txtTotal)/1.19));
            let totalFloat = parseFloat(total);
            txtPrecioTotal[lugar].innerHTML = new Intl.NumberFormat().format(totalFloat);

            var cantidad = txtCantidad[lugar].value;
            
            $.ajax({
                method:"POST",
                url: "actualizar_cantidad.php",
                dataType: "html",
                data: "cantidad="+cantidad+"&txtPrecioInicial="+txtPrecioInicial[lugar].attributes[1].nodeValue+"&idProducto="+idProducto[lugar].attributes[1].nodeValue+"&idLista="+idLista
            }).done(function(){
                
            });
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
                    txtTotal = parseInt(txtTotal) - parseInt(txtPrecioInicial[lugar].attributes[1].nodeValue);
                    txtTotal2.innerHTML = new Intl.NumberFormat().format(txtTotal);
                    txtIVA.innerHTML = new Intl.NumberFormat().format(Math.round(parseInt(txtTotal) - parseInt(txtTotal)/1.19));
                    subTotal.innerHTML = new Intl.NumberFormat().format(Math.round(parseInt(txtTotal)/1.19));
                    let totalFloat = parseFloat(total);
                    txtPrecioTotal[lugar].innerHTML = new Intl.NumberFormat().format(totalFloat);
                    var cantidad = txtCantidad[lugar].value;
                    $.ajax({
                        method:"POST",
                        url: "actualizar_cantidad.php",
                        dataType: "html",
                        data: "cantidad="+cantidad+"&txtPrecioInicial="+txtPrecioInicial[lugar].attributes[1].nodeValue+"&idProducto="+idProducto[lugar].attributes[1].nodeValue+"&idLista="+idLista
                    }).done(function(){
                        
                    });
                    

                }
                

            
        }

        function eliminar (idProducto, idLista)
        {
            //console.log(idProducto, idLista);
            var nombre = "<?php echo $nombreProducto ?>";
            var marca = "<?php echo $marca ?>";
            var opcion = confirm(`¿Realmente desea eliminar este producto?`);

            if(opcion == true)
            {
                window.location.href=`eliminando_producto.php?idProducto=${idProducto}&idLista=${idLista}`;
            }
            else
            {
            
            }
            
            
        }

        function actualizar_total()
        {
            var nombreLista = "<?php echo $nombreLista; ?>";
            var idLista = "<?php echo $idLista; ?>";
            window.location.href=`ver_lista_usuario.php?idLista=${idLista}&nombreLista=${nombreLista}`;
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
                        var idLista = $(this).attr('name');
                        var cantidad = $(this).attr('cantidad')
                        $.ajax({  
                            url:"cambiar_producto_modal.php",  
                            method:"post",  
                            data:{id:id, name:idLista,cantidad:cantidad},  
                            success:function(data){  
                                $('#prueba').html(data);  
                                $('#product_view').modal("show");  
                            }  
                        });  
                    });  
                });


                function enviar_cotizacion()
                {
                    //var idLista = "<?php echo $idLista; ?>";
                    $('#enviar_modal').modal("show");
                }

            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="productos.js"></script>   
            </body>
			</html>