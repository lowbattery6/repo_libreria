
<?php
session_start();

//Aqui recibiré el nombre de usuario y contraseña.
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

include 'conexion2.php';
 
$consulta="select * from usuario where correo = '$correo' and contraseña = '$contrasena'";
   
$resultado= mysqli_query($conexion, $consulta);
    
//Se almacenan el número de registros de la consulta (filas) en la variable fila
$fila=mysqli_fetch_array($resultado);

//Se valida si se encuentra por nombre, de lo contrario muestra un popup de error.
	if($fila==NULL) 
	{
		echo '<script>
             alert("Correo electrónico o contraseña inválidos");
              window.history.go(-1);
              </script>';

	}


	else
    {
        $sesion = $correo;

        if($fila["administrador"]=="0")
        {
           
            //Se dirige a consuta_producto_its.php y además se envía mediante esta URL el valor de la variable nombreUsuario
            $_SESSION['usuario'] = $sesion;
            ?>
            <script>
            var correo = "<?php echo $correo; ?>";
            var desdeLogin = 1;
            window.location.href=`mis_listas.php?correo=${correo}&desdeLogin=${desdeLogin}`;
            </script>
            <?php
            
        }
        else
        {
            $_SESSION['admin'] = $sesion;
            
            //Se dirige a consuta_producto_its.php y además se envía mediante esta URL el valor de la variable nombreUsuario
            header("location:bienvenido.php?correo=$correo");
        }
        
        
    }
msql_close();
?>
