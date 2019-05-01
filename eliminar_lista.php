<?php
session_start();
include 'conexion2.php';
$idLista = $_GET['idLista'];

isset($_SESSION['admin']) ? $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];

$consulta2 = "Select * from lista where idLista = '$idLista' and correoUsuario = '$correo'";
$resultado2 = mysqli_query($conexion, $consulta2);

    if(isset($_SESSION['admin']))
    {
        $consulta1 = "delete from contiene where idLista = '$idLista'";
        $resultado1 = mysqli_query($conexion, $consulta1);
        $consulta = "Delete from lista where idLista = '$idLista'";
        
        $resultado = mysqli_query($conexion, $consulta);
        
        ?>
        <script type="text/javascript">
            window.location.href="mis_listas.php";
        </script>
        <?php
    }
    else
    {

    
    if(mysqli_num_rows($resultado2)>0)
    {
        $consulta1 = "delete from contiene where idLista = '$idLista'";
        $resultado1 = mysqli_query($conexion, $consulta1);
        $consulta = "Delete from lista where idLista = '$idLista'";
        
        $resultado = mysqli_query($conexion, $consulta);
        
        ?>
        <script type="text/javascript">
            window.location.href="mis_listas.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Hubo un problema al realizar su solicitud");
            window.location.href="mis_listas.php";
        </script>
        <?php
    }
}


