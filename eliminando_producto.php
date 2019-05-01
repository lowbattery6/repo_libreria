<?php

include 'conexion2.php';
session_start();

$idLista = $_GET['idLista'];
$idProducto= $_GET['idProducto'];
$nombreLista = $_SESSION['nombreLista'];
isset($_SESSION['admin']) ? $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];

$consulta2 = "Select * from lista where idLista = '$idLista' and correoUsuario = '$correo'";
$resultado2 = mysqli_query($conexion, $consulta2);
?>
    <script type="text/javascript">
        var idLista = "<?php echo $idLista; ?>";
        var idProducto = "<?php echo $idProducto; ?>";

    </script>
<?php
    if(isset($_SESSION['admin']))
    {
            $delete= "delete from contiene WHERE idProducto='$idProducto' and idLista='$idLista'";
            $resultado = mysqli_query($conexion, $delete);
            ?>
            <script type="text/javascript">
                var idLista = "<?php echo $idLista; ?>";
                var nombreLista = "<?php echo $nombreLista; ?>";
                window.location.href=`ver_lista_usuario.php?idLista=${idLista}&nombreLista=${nombreLista}`;
            </script>
            <?php
    }
    else
    {
        if(mysqli_num_rows($resultado2)>0)
        {
            $delete= "delete from contiene WHERE idProducto='$idProducto' and idLista='$idLista'";
            $resultado = mysqli_query($conexion,$delete);
            
            ?>
            <script type="text/javascript">
                 var idLista = "<?php echo $idLista; ?>";
                 var nombreLista = "<?php echo $nombreLista; ?>";
                 window.location.href=`ver_lista_usuario.php?idLista=${idLista}&nombreLista=${nombreLista}`;
            </script>
            <?php
        }
        else
        {
                ?>
                <script type="text/javascript">
                    alert("Producto Eliminado");
                    var idLista = "<?php echo $idLista; ?>";
                    window.location.href=`ver_lista_usuario.php?idLista=${idLista}`;
                </script>
                <?php
            
            
        }
    }
?>