
                            <?php
                            // Se incluye el archivo php de conexión a la BD
                            include 'conexion2.php';
                            session_start();

                            //Se valida si se está registrado con alguna sesión.

                            ?>
                            <html>
                            <head>
                                <title>Librería Capullito</title>
                                    
                                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                                <link rel="stylesheet" type="text/css" href="estilos.css"> 
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            </head>
                            <body style="background-image:url('img/PapeleriaTrue.jpg'); background-size: cover;">
                                <?php
                            //if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))
                                // {
                            ISSET($_SESSION['admin']) ?  $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];
                                        
                                        
                                        ?>
                                <div class="row bg-light container-fluid" style="height: auto;">
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
                           
                                    <div class="text-center" style="height: 150px; display: flex; flex-direction: column; justify-content: center; text-align: center; background: transparent;">      

                                        <div class="" style="background: rgba(0,0,0,.25); width: auto;">
                                            <p class="display-3 text-light"><b>Librería Capullito</b></p>
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
                                                <li class="nav-item dropdown">
                                                    <a class="navbar-brand" href="index.php">Librería Capullito <span class="sr-only">(current)</span></a>
                                                </li>
                                            <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                            <form class="col col-sm-3 col-lg-4 mt-3" id="form5" name="form5" method="post" action="consulta_producto_its.php?idLista=<?php echo $idLista2 ?>" align ="center">
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
                                    <div class="container-fluid">
                                    <?php
                                    //Recibo el id de la lista para poder guardar los productos en ésta.

                                    // Se recibe el nombre desde el buscar.php y se guarda en variable $nombreBuscado

                                    $nombreBuscado=$_POST['nombreBuscado']; 
                                    $consulta = "SELECT * from producto where match(nombre,marca) against ('*$nombreBuscado' IN BOOLEAN MODE)";
                                    $cont=0;

                                        if(isset($_POST['Buscar']))
                                        {
                                            $length = count($_POST['grupo']);

                                            for($i=0;$i<$length;$i++)
                                            {
                                                $consulta .= "AND grupo IN ('".implode("','",$_POST["grupo"])."')"; 
                                            }
                                        }

                                        

                                    //Se inicializa variable de precio total
                                    $precioTotal=0;

                                    // Se ejecuta la consulta y se guarda éste en la variable $resultado

                                    $resultado= mysqli_query($conexion, $consulta);

                                    //Se almacenan el número de registros de la consulta (filas) en la variable $n2
                                    $n2=mysqli_num_rows($resultado);
                                    ?>
                                
                                        <div class="container" style="padding: 10px;">
                                        <div class="row">
                                            <div class="col-md-9">
                                            <p class="font-weight-light text-center mt-2"><b>Novedades</b></p>
                                                <div id="carouselExampleIndicators " class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner bg-white " style="height: 300px;">
                                                        <div class="carousel-item active ">
                                                        <img class="d-block w-100 h-100" src="img/Banner cuadernos mafalda.png" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="https://img.maspormas.com/2017/08/papeleri%CC%81a.jpg" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img class="d-block w-100" src="https://previews.123rf.com/images/serezniy/serezniy1108/serezniy110801020/10354941-papeler%C3%ADa-y-libros-brillantes-aislados-en-blanco.jpg" alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                    </div>
                                            </div>
                                            <div class="col-md-3 mt-5" >
                                            <div class="" style="width: auto;" id="comoCotizar">
                                                <div class="row bg-primary text-white">
                                                <div class="col-md-12 text-center">
                                                <p class=""><b>¿Deseas cotizar una lista?</b></p>
                                                </div>
                                                </div>
                                                <div class="row bg-warning text-white">
                                                        <div class="col-md-6 mt-2">
                                                        <p class=""><b>1. Crear cuenta o iniciar sesión</b></p>
                                                        </div>
                                                        <div class="col-md-6 mt-2">
                                                            
                                                            <button type="submit" class="btn btn-warning view_data2" style="border: solid; border-color: white; color: white;">Click Aquí</button>
                                                        </div>
                                                </div>
                                                <div class="row bg-success text-white">
                                                        <div class="col-md-12 mt-2">
                                                            <p class=""><b>2. Crear tu lista</b></p>
                                                        </div>
                                                </div>

                                                <div class="row bg-danger text-white">
                                                        <div class="col-md-12 mt-2">
                                                        <p class=""><b>3. Agregar tus productos</b></p>
                                                        </div>
                                                </div>

                                                <div class="row bg-info text-white">
                                                        <div class="col-md-12 mt-2">
                                                        <p class=""><b>4. Finalizar la cotización</b></p>
                                                        </div>
                                                </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                            


                                            </div>
                                            <div class="modal fade lista_view bs-modal-sm"  id="lista_view" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content" id="prueba2" >
                                                    </div>
                                                </div>
                                            </div>
                                                
    
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

        
    var txtCantidad = document.getElementsByName('quant[1]');
    var txtPrecioTotal = document.getElementsByName('precioTotal');
    var precioTotal = document.querySelector('#precioTotal');
    var txtPrecioInicial = document.getElementsByName('namePrecioInicial');
    var total;

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

                                        $(document).ready(function(){  

                                            $('[data-toggle="popover"]').popover({
                                            placement: 'top',
                                            trigger: 'hover'
                                            });

                                            $('.view_data2').click(function(){ 
                                                //event.preventDefault(); 
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

                                        }); 

                                    </script>
                                    
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                                    <script src="productos.js"></script>   

                            </body>
                            </html>







                            