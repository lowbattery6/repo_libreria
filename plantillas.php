<?php
$optionEstablecimiento = $_POST['optionEstablecimiento'];
$optionCurso = $_POST['cursoOpciones'];
include 'conexion2.php';

$consulta = "Select nombreLista, idLista, establecimiento, curso from lista where establecimiento = '$optionEstablecimiento'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if($filas>0)
{
    
    $consulta2 = "Select nombreLista, idLista, establecimiento, curso, detalleLista, faltante from lista where establecimiento = '$optionEstablecimiento' and curso = '$optionCurso' and estado = 'Plantilla'";
    $resultado2 = mysqli_query($conexion, $consulta2);

    if(mysqli_num_rows($resultado2)>0)
    {
        while($fila=mysqli_fetch_array($resultado2))
        {
    
            $nombreLista = $fila['nombreLista'];
            $idLista = $fila['idLista'];
            $establecimiento = $fila['establecimiento'];
            $curso = $fila['curso'];
            $detalles = $fila['detalleLista'];
            $faltantes = $fila['faltante'];
            
            $plantillasHTML = '<div class="card border border-warning">
                                <div class="row">
                                    <div class="col col-sm-12 col-lg-12">
                                        <div style="margin-left: 18px;">
                                            <h5 class="font-weight-bold mt-1">'.$nombreLista.'</h5>
                                        </div> 
                                    </div>
                                </div>
                                    <div class="card-body" style="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <small class="font-weight-bold text-muted">Codigo de lista: </small><small class="text-muted">'.$idLista.'</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <small class="font-weight-bold text-muted">Establecimiento: </small><small class="text-muted">'.$establecimiento.'</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <small class="font-weight-bold text-muted">Curso: </small><small class="text-muted">'.$curso.'</small>
                                            </div>
                                        </div>
                                        
                                    </div> 
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col col-sm-7">
                                                <input type="button" value="Ocupar" style="font-size: 14px;"class="btn btn-warning text-white mx-auto d-block" onclick="window.location.href=`copiar_plantilla.php?nombreLista='.$nombreLista.'&idLista='.$idLista.'&nombreLista='.$nombreLista.'&detalles='.$detalles.'&faltantes='.$faltantes.'`"/>
                                            </div>
                                            <div class="col col-sm-5">
                                                <input type="button" name="view" value="Ver lista" style="font-size: 14px;" id="" class="btn btn-warning text-white mx-auto d-block" onclick="window.location.href=`ver_lista_usuario.php?idLista='.$idLista.'&nombreLista='.$nombreLista.'&plantilla=1`"/>
                                            </div>  
                                        </div>
                                    </div>  
                            </div>';
    
                        echo $plantillasHTML;         
        }

    }
    else
    {
        $plantillasHTML = '<h1>Por el momento no tenemos listas de este curso para este estaclecimiento</h1>';
        echo $plantillasHTML;
    }
    
    
}





?>