<?php
$nombreLista = $_GET['nombreLista'];
$idLista = $_GET['idLista'];
$detalles = $_GET['detalles'];
$faltantes = $_GET['faltantes'];

$detalles1 = str_replace(array("."), "\n", $detalles);
$faltantes1 = str_replace(array("."), "\n", $faltantes);;

$cont = 0;

session_start();

include 'conexion2.php';

if(isset($_SESSION['admin']) or isset($_SESSION['usuario']))
    {
        isset($_SESSION['admin']) ? $correo = $_SESSION['admin'] : $correo = $_SESSION['usuario'];

    
    ?>
    <?php
    $consulta = "Select * from contiene where idLista = $idLista";
    $resultado = mysqli_query($conexion, $consulta);

    while($fila = mysqli_fetch_array($resultado))
    {

            $idProducto = $fila['idProducto'];
            $precioContiene = $fila['precioContiene'];
            $cantidad = $fila['cantidad'];
            $precioTotal = $fila['precioTotal'];

            if($cont==0)
            {
                $creandoLista = "insert into lista (nombreLista, nombreInteresado, estado, correoUsuario, detalleLista, faltante) values ('$nombreLista','$correo (Plantilla)','Creada','$correo','$detalles1','$faltantes1')";
                $listaCreada = mysqli_query($conexion, $creandoLista);
        
                $verId = "SELECT * FROM lista ORDER BY idLista DESC LIMIT 1";
                $viendoId = mysqli_query($conexion, $verId);
        
                while($fila2 = mysqli_fetch_array($viendoId))
                {
                    $idNuevaLista = $fila2['idLista'];
                
        
                $consulta2 = "Insert into contiene (idProducto, idLista, precioContiene, cantidad, precioTotal) values ('$idProducto','$idNuevaLista','$precioContiene','$cantidad','$precioTotal')";
                $resultado2 = mysqli_query($conexion, $consulta2);
        
                
                $cont++;
            }
            }
            else
            {
                $consulta2 = "Insert into contiene (idProducto, idLista, precioContiene, cantidad, precioTotal) values ('$idProducto','$idNuevaLista','$precioContiene','$cantidad','$precioTotal')";
                $resultado2 = mysqli_query($conexion, $consulta2);
                $cont++;
            }
            
        }
        
    }
else
{
    ?>

    <script>
        alert("Debes iniciar sesión para utilizar esta función");
        window.location.href="index.php";
    </script>

    <?php
}
?>
<script>
window.location.href="mis_listas.php";
</script>