<?php

session_start();
include 'conexion2.php';

$idLista = $_POST['txtIdLista'];
$nombreLista = $_POST['txtNombreLista'];
$nombreInteresado = $_POST['txtNombreInteresado'];
$establecimiento = $_POST['txtEstablecimiento'];
$curso = $_POST['txtCurso'];
$basica = "básico";
$media = "medio";
$check  = $_POST['plantilla'];

isset($_SESSION['admin']) ? $correo = $_SESSION['admin']: $correo = $_SESSION['usuario'];
?>

<script type="text/javascript">
</script>
<?php
if(isset($_SESSION['admin']))
{
    if($check=='Plantilla')
    {
        ?>
        <script type="text/javascript">
            var a = "<?php echo $correo; ?>";
            alert(a);
        </script>
        <?php
        if(stripos($curso, 'básico')!=FALSE)
        {
            $consulta = "UPDATE `lista` SET `nombreLista` = '$nombreLista', nombreInteresado = '$nombreInteresado', direccion = '1', Estado = 'Plantilla', correoUsuario = 'Plantilla@gmail.com', establecimiento = '$establecimiento', curso = '$curso' WHERE `lista`.`idLista` = '$idLista';";
            $resultado = mysqli_query($conexion, $consulta);
        }
        if(stripos($curso, 'medio')!=FALSE)
        {
            $consulta = "UPDATE `lista` SET `nombreLista` = '$nombreLista', nombreInteresado = '$nombreInteresado', direccion = '2', Estado = 'Plantilla', correoUsuario = 'Plantilla@gmail.com', establecimiento = '$establecimiento', curso = '$curso' WHERE `lista`.`idLista` = '$idLista';";
            $resultado = mysqli_query($conexion, $consulta);
        }
        else
        {
            $consulta = "UPDATE `lista` SET `nombreLista` = '$nombreLista', nombreInteresado = '$nombreInteresado', Estado = 'Plantilla', correoUsuario = 'Plantilla@gmail.com', establecimiento = '$establecimiento', curso = '$curso' WHERE `lista`.`idLista` = '$idLista';";
            $resultado = mysqli_query($conexion, $consulta);
        }
        
    }
    else
    {
        $consulta = "UPDATE `lista` SET `nombreLista` = '$nombreLista', nombreInteresado = '$nombreInteresado', establecimiento = '$establecimiento', curso = '$curso' WHERE `lista`.`idLista` = '$idLista';";
        $resultado = mysqli_query($conexion, $consulta);
    }
    
}
else
{
    $consulta = "UPDATE `lista` SET `nombreLista` = '$nombreLista' WHERE `lista`.`idLista` = '$idLista';";
    $resultado = mysqli_query($conexion, $consulta);
}



?>
<script type="text/javascript">
    window.location.href="mis_listas.php";
</script>