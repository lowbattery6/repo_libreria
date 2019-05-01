<?php
    include 'conexion2.php';
    $correo = $_POST["id"];
    $idProducto = $_POST["name"];

    echo '<script language="javascript">console.log("'.$idProducto.'");</script>'; 

    $output = "";
  

    $consulta = "Select nombreLista, idLista from lista where correoUsuario = '$correo'";

        $resultado = mysqli_query($conexion, $consulta);
        $resultado2 = mysqli_query($conexion, $consulta);

        $fila1=mysqli_fetch_array($resultado2);
        if($fila1 === null)
        {
            $output .= '
            <div class="modal-header">
                <h5 class="modal-title">Listas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="modal-body">
                        <h1 style="font-size: 25px;">No tienes listas</h1>
                    </div>
                </div>
            </div>';

        echo $output;
        }
        else
        {
            $consulta2 = "Select nombre, precioNeto, porcentajeUtilidad from producto where id = '$idProducto'";

            $resultado3 = mysqli_query($conexion, $consulta2);

            while($fila2 = mysqli_fetch_array($resultado3))
            {
                $nombreProducto = $fila2['nombre'];
                $precioNeto = $fila2['precioNeto'];
                $porcentajeUtilidad = $fila2['porcentajeUtilidad'];
                $precioTotal = $precioNeto+($precioNeto*0.19);
                $precioSinIva = $precioTotal+($precioTotal*$porcentajeUtilidad);
                $precioTodo = round($precioSinIva+($precioSinIva*0.19));
            }

            $output .= '
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="nav-item active"><a href="#signin" class="nav-link"data-toggle="tab" style="font-size: 15px;">Ingresar</a></li>
              <li class="nav-item"><a href="#signup" class="nav-link" data-toggle="tab" style="font-size: 15px;">Registro</a></li>
              <li class="nav-item"><a href="#why" class="nav-link" data-toggle="tab" style="font-size: 15px;">¿Por qué?</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="why">
        <p>Necesitamos esta información para poder guardar tus cotizaciones y poder identificar de quién son éstas. Prometemos que tus datos en ningún momento serán usados para otra función.</p>
        <hr>
        <p></p><br> Ante cualquier duda envíanos un correo a : <br><a mailto:href="libreriacapullito@gmail.com"></a>libreriacapullito@gmail.com</a></p>
        </div>
        <div class="tab-pane active" id="signin">

            <!-- Form de inicio de sesión-->
            <form class="form-horizontal" id="form1" name="form1" method="post" action="login.php">
            <fieldset>
            <div class="control-group">
              <label class="control-label" for="userid">Correo electrónico:</label>
              <div class="controls">
                <input required="" id="correo" name="correo" type="text" class="form-control" placeholder="Ejemplo@jemplo.com" class="input-medium" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="passwordinput">Contraseña:</label>
              <div class="controls">
                <input required="" id="contrasena" name="contrasena" class="form-control" type="password" placeholder="********" class="input-medium">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Recuérdame
                </label>
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="btnIngresar" name="btnIngresar" class="btn btn-success">Iniciar sesión</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal" name="formRegistro" id="formRegistro" action="registrando.php" method="post">
            <fieldset>

            <!-- Form de registro-->
            <div class="control-group">
              <label class="control-label" for="Email">Correo electrónico:</label>
              <div class="controls">
                <input id="correo" name="correo" class="form-control" type="text" placeholder="ejemplo@ejemplo.com" class="input-large" required="">
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="userid">Nombre</label>
              <div class="controls">
                <input id="txtNombre" name="txtNombre" class="form-control" type="text" placeholder="" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="userid">Apellido Paterno</label>
                <div class="controls">
                  <input id="txtApellidoPaterno" name="txtApellidoPaterno" class="form-control" type="text" placeholder="" class="input-large" required="">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="userid">Apellido Materno</label>
                <div class="controls">
                  <input id="txtApellidoMaterno" name="txtApellidoMaterno" class="form-control" type="text" placeholder="" class="input-large" required="">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="userid">Rut sin guíon</label>
                <div class="controls">
                  <input id="txtRut" name="txtRUt" class="form-control" type="text" placeholder="111111111" class="input-large" required="">
                </div>
              </div>
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Contraseña:</label>
              <div class="controls">
                <input id="txtContrasena" name="txtContrasena" class="form-control" type="password" placeholder="********" class="input-large" required="">
                <p class="text-muted">entre 1 a 8 letras o números</p>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Repite tu contraseña:</label>
              <div class="controls">
                <input id="txtContrasenaRe" class="form-control" name="txtContrasenaRe" type="password" placeholder="********" class="input-large" required="">
              </div>
            </div>
                  
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="btnRegistro" name="btnRegistro" class="btn btn-success">Registrar</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </center>
      </div>
    </div>
  </div>
</div>';
        echo $output;
            
}
    ?>