<?php
session_start();
include 'conexion2.php';

$nombreLista= $_POST["txtNombreLista"];
$nombreInteresado= $_POST["txtNombreInteresado"];
isset($_SESSION['admin']) ? $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];

echo $tipoLista;

$insertar= "Insert into lista (nombreLista,nombreInteresado,fecha, estado, correoUsuario) values ('$nombreLista','$nombreInteresado', now() - interval 3 hour, 'Creada', '$correo')";

$resultado= mysqli_query($conexion,$insertar);

if(!$resultado)
{
        ?>
        <script type="text/javascript">
        var correo = "<?php echo $nombreLista ?>";
            alert("Ha surgido un error al crear la lista. Contacte a libreriacapullito@gmail.com");
            window.location.href="crear_lista.php";
        </script>
        <?php
}
else{
        ?>
            <script type="text/javascript">
                var correo = "<?php echo $nombreLista ?>";
                    alert("Lista creada de forma exitosa");
                    window.location.href="mis_listas.php";
            </script>
        <?php
}

mysqli_close($conexion);
?>

