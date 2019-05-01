
                        <?php
                        // Se incluye el archivo php de conexión a la BD
                        include 'conexion2.php';
                        session_start();
                        $usuario = $_SESSION['usuario'];
                        $idLista = $_GET['idLista'];
                        $tipoUsuario=0;
                        $cont=0;
                        $_SESSION['idLista'] = $idLista;

                        ISSET($_SESSION['admin']) ?  $usuario = $_SESSION['admin'] : $usuario = $_SESSION['usuario'];

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
                            <div class="row bg-light" style="height: 40px;">
                                <div class="col-md-7"><p class="text-muted">Usuario: <b><?php echo $usuario; ?></b></p></div>
                                <div class="col-md-1">
                                <a class="nav-link" href="https://www.facebook.com/utilesescolares.valdivia.9" target="_blank"><i class="fa fa-facebook" style="font-size:24px"></i></a>
                                </div>
                                <div class="col-md-1">
                                <a class="nav-link" href="https://www.instagram.com/libreria.capullito.valdivia/" target="_blank"><i class="fa fa-instagram" style="font-size:24px"></i></a>          
                                </div>
                                <div class="col-md-1">
                                <a class="nav-link" href="https://www.facebook.com/utilesescolares.valdivia.9" target="_blank"><i class="material-icons" style="font-size:24px">mail</i></a>
                                </div>
                                <div class="col-md-2">
                                <a class="nav-link" href="cerrar_sesion.php"><p>Cerrar sesión</p></a>
                                </div>
                            </div>


                            <div class="divTitulo" style="height: 250px; display: flex; flex-direction: column;justify-content: center;">      
                                <?php 
                                if($nombreBuscado=="")
                                {
                                    ?> <h1 class="display-1"><b>Consultando Productos</b></h1>
                                    <?php
                                    
                                }
                                else
                                {
                                    ?><h1 class="display-1"><b><?php echo $nombreBuscado; ?></b></h1>
                                    <?php
                                }
                                    ?>
                                
                                
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
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Librería
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Adhesivos</a>
                                            <a class="dropdown-item" href="#">Blocks</a>
                                            <a class="dropdown-item" href="#">Lápices pasta y gel</a>
                                            <a class="dropdown-item" href="#">Lápices cera</a>
                                            <a class="dropdown-item" href="#">Cuadernos</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="index.html">Ingreso Adm.</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Oficina
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Misión</a>
                                            <a class="dropdown-item" href="#">Visión</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="index.html">Ingreso Adm.</a>
                                            </div>
                                        </li>
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
                                        <form class="form-inline mt-3 ml-3" id="form5" name="form5" method="post" action="consulta_producto_its.php?idLista=<?php echo $_SESSION['idLista']; ?>" align ="center">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar producto" aria-label="Search"  name="nombreBuscado"  id="txt" onkeyup="listar_productos(this.value);" value="<?php $nombreBuscado=$_POST['nombreBuscado']; echo $nombreBuscado; ?>">
                                            <button class="btn btn-success" type="submit" name="Buscar" id="buscar">Buscar</button>
                                        </form>
                                    </div>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-white mt-3">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" >Consultando productos</li>
                                    </ol>
                                </nav>      

                                <?php
                                //Recibo el id de la lista para poder guardar los productos en ésta.

                                // Se recibe el nombre desde el buscar.php y se guarda en variable $nombreBuscado

                                $nombreBuscado=$_POST['nombreBuscado']; 
                                $consulta = "SELECT *, MATCH(nombre, marca) AGAINST ('+$nombreBuscado' IN BOOLEAN MODE) AS relevance FROM `producto` WHERE MATCH(nombre, marca) AGAINST ('+$nombreBuscado' IN BOOLEAN MODE) ORDER BY relevance DESC";
                                //"SELECT * from producto where match(nombre,marca) against ('$nombreBuscado')";
                                $cont=0;


                                    

                                //Se inicializa variable de precio total
                                $precioTotal=0;

                                // Se ejecuta la consulta y se guarda éste en la variable $resultado

                                $resultado= mysqli_query($conexion, $consulta);

                                //Se almacenan el número de registros de la consulta (filas) en la variable $n2
                                $n2=mysqli_num_rows($resultado);
                                ?>
                                <div class="row">

                                
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
                                            <div class="col-md-4 offset-4 float-right">
                                                <p class="text-muted" style="font-size: 20px;">Para buscar un producto escribe el nombre y presiona buscar</p>
                                            </div>
                                        
                                            <div class="col-md-1">
                                                <img src="img/Flecha arriba.jpg" style="height: 55px; width: 45px;" alt="">
                                            </div>
                                                            
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                    ?>
                                    </div>
                                    <div class="container" style="padding: 10px;">
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
                                    <form class="col-xs-12 col-sm-12 col-md-6 col-lg-3" method="post" id="cartass" name="form1" action="producto_guardado.php?idProducto=<?php echo $id; ?>&idLista=<?php echo $_SESSION['idLista']; ?>&correo=<? echo $usuario; ?>'">
                                        <!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3" id="cartass">-->
                                            <div class="card-deck mt-4">
                                                <div class="card" style="width: 20rem; height: 34rem;" id="carta">
                                                    <div class="contenedorTituloImagen mt-1" style="height: 250px; width: auto; display: flex; flex-direction: column;justify-content: center;">
                                                    <a><img class="img-fluid rounded mx-auto d-block view_data" data-toggle="popover" data-content="Haz click en la imagen para más información" id ="<?echo $id; ?>"style ="max-width: 10rem; max-height: 13rem; "src="<?php
                                                        if($imagen=="")
                                                        {
                                                            echo "https://blog.gtk.com.co/hubfs/descripcion-de-un-producto-nuevo-ecommerce.jpg?t=1492545485693";
                                                        }
                                                        else{
                                                            echo $imagen;
                                                        } ?>" alt="Foto <?php echo $nombre; ?>"></a>
                                                    </div>
                                                <div class="mb-3"style="height: 27px; margin-left: 18px;"><h5 class="card-title"><?php echo $nombre; ?></h5></div>      
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
                                                                        ?>
                                                                        <input type="submit" name="<?php echo $id; ?>" value="Agregar" style="font-size: 15px; height: 40px; width: 100%; font-weight: bold;" id="<?php echo $usuario; ?>" class="btn btn-success mx-auto d-block view_data2 btn-lg"/>
                                                                        <?php
                                                                    }
                                                                    else{

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



                        
                        <?php
                            // Se incluye el archivo php de conexión a la BD
                            include 'conexion2.php';
                            session_start();

                            //Se valida si se está registrado con alguna sesión.

                            ?>
                            <html>
                            <head>
                                <title>Librería Capullito</title>
                                <link rel="stylesheet" type="text/css" href="estilos.css">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

                            <div class="container-fluid">
                                <div class="row bg-light" style="height: 40px;">
                                    <div class="col-sm-1 lg-1"><p class="text-muted">Usuario:
                                    </div> 
                                    <div class="col-sm-1 lg-6 text-muted"><b><?php
                                    if($correo !='')
                                    {
                                        echo $correo;
                                        
                                    }
                                    else
                                    {
                                        echo "Anónimo";
                                    }?></b></p>
                                    </div>
                                    <div class="col-sm-1 lg-1">
                                        <a class="nav-link" href="https://www.facebook.com/utilesescolares.valdivia.9" target="_blank"><i class="fa fa-facebook" style="font-size:22px"></i></a>
                                    </div>
                                    <div class="col-sm-1 lg-1">
                                        <a class="nav-link" href="https://www.instagram.com/libreria.capullito.valdivia/" target="_blank"><i class="fa fa-instagram" style="font-size:22px"></i></a>          
                                    </div>
                                    <div class="col-sm-1 lg-1">
                                        <a class="nav-link" href="https://www.facebook.com/utilesescolares.valdivia.9" target="_blank"><i class="material-icons" style="font-size:22px">mail</i></a>
                                    </div>
                                    <?php
                                    if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))
                                    {
                                        ?>
                                            <div class="col-md-1">  
                                                <a class="nav-link" href="cerrar_sesion.php"><span>Cerrar sesión</span></a>
                                            </div>
                                        <?php

                                    }
                                    ?>
                                    
                                </div>


                                <div class="text-center" style="height: 150px; display: flex; flex-direction: column; justify-content: center; text-align: center; background: transparent;">      

                                        <div style="background: rgba(0,0,0,.25); width: auto;">
                                            <p class="display-3 text-light"><b>Librería Capullito</b></p>
                                        </div>
                                    
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
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Librería
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Adhesivos</a>
                                                <a class="dropdown-item" href="#">Blocks</a>
                                                <a class="dropdown-item" href="#">Lápices pasta y gel</a>
                                                <a class="dropdown-item" href="#">Lápices cera</a>
                                                <a class="dropdown-item" href="#">Cuadernos</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="index.php">Ingreso Adm.</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Oficina
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Misión</a>
                                                <a class="dropdown-item" href="#">Visión</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="index.php">Ingreso Adm.</a>
                                                </div>
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
                                            <form class="form-inline mt-3 ml-3" id="form5" name="form5" method="post" action="consulta_producto_its.php?idLista=<?php echo $idLista2 ?>" align ="center">
                                                <input class="form-control mr-sm-2" type="search" placeholder="Buscar producto" aria-label="Search"  name="nombreBuscado"  id="txt" onkeyup="listar_productos(this.value);" value="<?php $nombreBuscado=$_POST['nombreBuscado']; echo $nombreBuscado; ?>">
                                                <button class="btn btn-success" type="submit" name="Buscar" id="buscar">Buscar</button>
                                            </form>
                                        </div>
                                    </nav> 
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
                                window.history.go(-2);
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
    else
    {
    $agregar = "INSERT INTO contiene (idProducto, idLista, precioContiene, cantidad, precioTotal, detalleCompra) VALUES ('$idProducto', '$idLista', '$precioContiene','$cantidad','$precioTotal','$detalleCompra')";

    $resultado= mysqli_query($conexion,$agregar);

    if(!$resultado)
    {
            echo '<script>
                alert("Error al crear agregar el producto");
                window.history.go(-2);
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

mysqli_close($conexion);

?>


Bueno??



window.location.href=`consulta_producto_its.php?idLista=${'.$idLista.'}`;