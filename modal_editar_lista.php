<?php
session_start();
include 'conexion2.php';

$idLista = $_POST['id'];

$consulta = "Select * from lista where idLista = '$idLista'";
$resultado = mysqli_query($conexion, $consulta);

isset($_SESSION['admin']) ? $correo = $_SESSION['admin']: $correo = $_SESSION['usuario'];

while($fila = mysqli_fetch_array($resultado))
{
    $nombreLista = $fila['nombreLista'];
    $nombreInteresado = $fila['nombreInteresado'];
    $estado = $fila['Estado'];
    $correo = $fila['correoUsuario'];
    $establecimiento = $fila['establecimiento'];
    $curso = $fila['curso'];



$output ='<div class="modal-header ">
    <h5 class="modal-title">Cambiar nombre de lista</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form name="form1" id="form1" action="editando_lista.php" method="POST">
    <input type="text" name="txtIdLista" id="txtIdLista" value ="'.$idLista.'" hidden>
    <div class="row">
        <div class="col col-sm-12">
            <label for="staticEmail" class="form-label">Nombre de lista</label>
        </div>
    </div>
    <div class="row">
        <div class="col col-sm-12">
            <input class="form-control" type="text" name="txtNombreLista" id="txtNombreLista" placeholder="" value="'.$nombreLista.'">
        </div>
    </div>';
    if(isset($_SESSION['admin']))
    {
    $output .='<div class="row">
        <div class="col col-sm-12">
            <label for="staticEmail" class="form-label">Nombre Interesado</label>
        </div>
    </div>
        <div class="row">
        <div class="col col-sm-12">
            <input class="form-control" type="text" name="txtNombreInteresado" id="txtNombreInteresado" placeholder="" value="'.$nombreInteresado.'">
        </div>
    </div>
    <div class="row">
        <div class="col col-sm-12">
            <label for="staticEmail" class="form-label">Establecimiento</label>
        </div>
    </div>
        <div class="row">
        <div class="col col-sm-12">
            <input class="form-control" type="text" name="txtEstablecimiento" id="txtEstablecimiento" placeholder="" value="'.$establecimiento.'">
        </div>
    </div>
    <div class="row">
        <div class="col col-sm-12">
            <label for="staticEmail" class="form-label">Curso</label>
        </div>
    </div>
        <div class="row">
        <div class="col col-sm-12">
            <input class="form-control" type="text" name="txtCurso" id="txtCurso" placeholder="" value="'.$curso.'">
        </div>
    </div>
    <div class="row mt-2">
    <div class="col col-sm-12">
        <input type="checkbox" name="plantilla" value="Plantilla">Pasar a plantilla<br>
    </div>
</div>';
    }
$output .='</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary" id="guardar">Guardar cambios</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
</div>
</form>

<script>
    var form = document.getElementById("form1");
    var btn = document.getElementById("guardar");

    $(btn).click(function(){

        form.submit();
    });
</script>';
}
    echo $output;
?>
