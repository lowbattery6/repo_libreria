    <?php
    session_start();

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <title>Agregando Producto</title>
    </head>
    <body style="background-image:url('img/PapeleriaTrue.jpg'); background-size: cover;">
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
                                <div class="text-center" style="height: 150px; display: flex; flex-direction: column; justify-content: center; text-align: center; background: transparent;">      

                                            <div style="background: rgba(0,0,0,.40); width: auto;">
                                                <p class="display-3 text-light"><b>Agregar Producto</b></p>
                                            </div>
                                        
                                        </div>
                                    <nav class="row navbar navbar-expand-sm navbar-light bg-light sticky-top" id="navbarBusqueda">
                                    <div class="col col-sm-1 col-lg-8">
                                        <a class="navbar-brand" href=""></a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>

                                        <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                                <a class="navbar-brand" href="index.php">Librería Capullito <span class="sr-only">(current)</span></a>
                                            </li>
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

            <div class="container">
                    <div class="container mt-5 mb-5 border border-warning" style="height: auto; width: 800px; border:solid;">
                        <div class="row">
                            <div class="col-md-12 bg-light">
                                <h3 class="text-center mt-4">Ingrese los detalles del producto</h3>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Nombre</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idNombre" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Marca</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idMarca" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Precio Neto</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idPrecioNeto"  size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Porcentaje de utilidad</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idPorcentajeUtilidad" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Color</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idColor" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Detalle</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <textarea cols="104"  class="form-control" rows="2"  id="idDetalles"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Link</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idLink" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Código tienda</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idCodigoTienda" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Stock</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idStock" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Precio Tramo 2</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idPrecioTramo2" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Precio Tramo 3</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idPrecioTramo3" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Imágen URL</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idImagenURL" size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Tipo</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idTipo"size="20" placeholder="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>Tags</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="idTags" size="20" value="<?php echo $nombre;?> <?php echo $apellidoPaterno ?>">
                                    </div>
                                </div>
                                <div class="row text-center mt-4 mb-4">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning" onclick="crear_producto();" style="color: white; borded-color: white;">Crear</button>
                                    </div>
                                </div>

                                <div class="row text-center mt-4 mb-4">
                                    <div class="col-md-12">
                                        <span class="text-danger" id="resultado"></span>
                                    </div>
                                </div>
                            </div> 
                            </div>
                        </div>
            </div>

        </div>

        <script>
            function crear_producto()
            {

                var xmlhttp;

                if(window.XMLHttpRequest)
                {
                    xmlhttp = new XMLHttpRequest();
                }
                else{
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                
                var resultado = document.getElementById("resultado");

                var nombre = document.getElementById("idNombre").value;
                var marca = document.getElementById("idMarca").value;
                var precioNeto = document.getElementById("idPrecioNeto").value;
                var porcentajeUtilidad = document.getElementById("idPorcentajeUtilidad").value;
                var color = document.getElementById("idColor").value;
                var detalle = document.getElementById("idDetalles").value;
                var link = document.getElementById("idLink").value;
                var codigoTienda = document.getElementById("idCodigoTienda").value;
                var stock = document.getElementById("idStock").value;
                var precioTramo2 = document.getElementById("idPrecioTramo2").value;
                var precioTramo3 = document.getElementById("idPrecioTramo3").value;
                var imagenURL = document.getElementById("idImagenURL").value;
                var tipo = document.getElementById("idTipo").value;
                var tags = document.getElementById("idTags").value;

                var informacion = "nombre="+ nombre +"&marca=" + marca +"&precioNeto=" + precioNeto + "&porcentajeUtilidad=" + porcentajeUtilidad + "&color=" + color + "&detalle=" + detalle + "&link=" + link + "&codigoTienda=" + codigoTienda + "&imagenURL=" + imagenURL + "&tipo=" + tipo + "&tags=" + tags + "&precioTramo2=" + precioTramo2 + "&precioTramo3=" + precioTramo3 + "&stock=" + stock;

                xmlhttp.onreadystatechange = function() 
                {
                    if(xmlhttp.readyState === 4 && xmlhttp.status === 200)
                    {
                        var mensaje = xmlhttp.responseText;
                        resultado.innerHTML = mensaje;
                    }
                }

                xmlhttp.open("POST", "creando_producto.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send(informacion);
                $('.alert').alert();
                //document.location.reload();

            }

            </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>