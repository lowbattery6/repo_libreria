
<?php
session_start();

include 'conexion2.php';

//Aqui recibiré el nombre de usuario y contraseña.
$nombre=$_POST['txtNombre'];
$apellidoPaterno=$_POST['txtApellidoPaterno'];
$apellidoMaterno=$_POST['txtApellidoMaterno'];
$correo=$_POST['correo'];
$rut=$_POST['txtRUt'];
$contrasena=$_POST['txtContrasena'];

 
$consulta="Select * from usuario where correo ='$correo'";
        
$resultado= mysqli_query($conexion, $consulta);
    
//Se almacenan el número de registros de la consulta (filas) en la variable fila
$fila=mysqli_fetch_array($resultado);

//Se valida si se encuentra por nombre, de lo contrario muestra un popup de error.
	if($fila==NULL) 
	{	
        $registrar= "insert into usuario (nombre, apellidoPaterno, apellidoMaterno, correo, rut,contraseña, administrador) VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$correo', '$rut', '$contrasena', '0');";
        $resultado = mysqli_query($conexion,$registrar);

        if(!$resultado)
        {
            echo $nombre, $apellidoMaterno, $apellidoPaterno, $correo, $rut, $contrasena;     
        }
        else
        {
            $_SESSION['usuario'] = $correo;
            ?>
            <script type="text/javascript">
            var correo = "<?php echo $_SESSION['usuario']; ?>";
                alert(`Usuario creado: ${correo}`);
                window.location.href=`mis_listas.php`;
            </script>
            <?php
        }
       
	}

	else
    {
        
        echo '<script>
             alert("El correo ya se encuentra utilizado");
              window.history.go(-1);
              </script>';
        
    }
msql_close();
?>
