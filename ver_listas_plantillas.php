<?php

include 'conexion2.php';
session_start();
$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="estilos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Listas plantillas</title>
</head>
<body style="background-image:url('img/PapeleriaTrue.jpg'); background-size: cover; width: auto;">

<?php
if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))
{
    isset($_SESSION['admin']) ? $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];
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
                            <div class="text-center" style="height: 150px; display: flex; flex-direction: column; justify-content: center; text-align: center; background: transparent;">      

                                        <div style="background: rgba(0,0,0,.40); width: auto;">
                                            <p class="display-3 text-light"><b>Mis listas</b></p>
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
    
    <?php
    
    //$conexion = mysqli_connect("mysql.hostinger.com.ar", "u456209797_low", "trivium12", "u456209797_libre");

    //$consulta = "Select nombreLista, idLista, curso, establecimiento from lista where establecimiento = 'masters college' and curso = '4to básico'";

    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    $resultado2 = mysqli_query($conexion, $consulta2);
    $fila2 = mysqli_num_rows($resultado);

    ?>
    <div class="row mt-4">
            <div class="col-sm-12 col-lg-4 text-center border border-warning" style="background-color: rgba(0,0,0,.40);">
                <div class="row">
                        <div class="col col-sm-12 col-lg-12">
                            <p class="font-weight-bold mt-1 text-white" style="font-size: 25px;">Escogue lo que corresponda</p>
                        </div>
                </div> 
                <div class="row justify-content-center">
                    <div class="col col-sm-12">
                    <select class="custom-select" style="width:70%;" name="establecimientoOpciones" id="establecimientoOpciones">
                        <option selected>Institución</option>
                        <?php 

                        $buscarEstablecimiento = "Select DISTINCT establecimiento from lista where establecimiento!= ' ' and estado = 'Plantilla' order by establecimiento ASC";
                        $buscandoEstablecimiento = mysqli_query($conexion, $buscarEstablecimiento);

                        while($fila = mysqli_fetch_array($buscandoEstablecimiento))
                        {
                            $establecimiento = $fila['establecimiento'];
                            ?>
                            <option value="<?php echo $establecimiento; ?>"><?php echo $establecimiento; ?></option>
                            <?php 
                        }
                        ?>
                        </select>
                </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col col-sm-12">
                        <select class="custom-select" style="width: 70%;" name="cursoOpciones" id="cursoOpciones">
                            <option selected>Curso</option>

                            <?php 

                            $buscarCurso = "Select DISTINCT curso from lista where curso!= ' ' and estado = 'Plantilla' order by direccion, curso ASC";
                            $buscandoCurso = mysqli_query($conexion, $buscarCurso);

                            while($fila = mysqli_fetch_array($buscandoCurso))
                            {
                                $curso = $fila['curso'];
                                ?>
                                <option value="<?php echo $curso; ?>"><?php echo $curso; ?></option>
                                <?php 
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row mb-4">
                        <div class="col col-sm-12 col-lg-12 text-center">
                        <button type="submit" class="btn btn-warning text-white border border-white" id="btnBuscarListas" onclick="obtener_registros()">Buscar listas</button>
                        </div>
                </div>  
                </div>
                <div class="col-sm-12 col-lg-8 card-deck contenedor_cartas">
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
    ?>
    <script type="text/javascript">
        alert("Debe iniciar sesión para acceder a esta función");
        window.location.href="index.php";
    </script>
    <?php
    
}

?>

<script type="text/javascript">
    $(document).ready(function()
    {

        $('[data-toggle="popover"]').popover({
            placement: 'top',
            trigger: 'hover'
        });

    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="buscar_plantillas.js"></script>
</body>
</html>