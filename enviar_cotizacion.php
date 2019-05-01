
<?php 
session_start();
include 'conexion2.php';
$idLista = $_GET['idLista'];
$telefono = $_POST['txtTeléfono'];
$nombre = $_POST['txtNombre'];
$contacto = $_POST['selectContacto'];

$destinatario ="libreriacapullito@gmail.com";
ISSET($_SESSION['admin']) ?  $usuario = $_SESSION['admin'] : $usuario = $_SESSION['usuario'];
$asunto = "confirmación de cotización de $usuario";
$mensaje = "Correo: $usuario \n";
$mensaje .= "Nombre: $nombre \n";
$mensaje .= "Teléfono: $telefono \n";
$mensaje .= "Desea que lo contacten por: $contacto \n";
$mensaje .= "confirma cotización con código: $idLista \n";

$consulta = "UPDATE `lista` SET `estado` = 'Cotizada' WHERE `lista`.`idLista` = $idLista";

$resultado = mysqli_query($conexion, $consulta);

mail($destinatario, $asunto, $mensaje);
?>
<script type="text/javascript">
    alert("Lista enviada");
    window.location.href="mis_listas.php";
</script>