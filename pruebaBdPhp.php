<?php 

include 'conexion2.php';

$errores = array();
$datos = array();
$consulta="Select * from usuario where nombreUsuario ='$nombreUsuario'";


    //Validando los parámetros
if(empty($_GET['nombreUsuario']))
{
    $errores['usuarioVacio'] = "Se debe especificar un nombre de usuario.";
}
else
{
    $nombreUsuario = $_GET['nombreUsuario'];
}

    //Respuesta

if (empty($errores))
{
    $datos['exito'] = true;
    $datos ['mensaje'] = "Datos recibidos correctamente";
    
    $resultado = mysqli_query($conexion, $consulta);

    if(mysqli_fetch_array($resultado)>0)
    {
        echo "Bienvenid@ ".$nombreUsuario;
    }
    else
    {

        echo 'El usuario "'.$nombreUsuario.'" no existe en nuestra Base de Datos';
    }
    
}
else
{
    $datos['exito'] = false;
    $datos['errores'] = $errores;
}

    //Dar respuesta

echo json_encode($datos);

?>