<?php 

class UsuariosCtlr
{

    public function eliminar_usuario_ctlr()
    {
        if (isset($_GET['idElimUsu'])) {
            if (!empty($_GET['idElimUsu'])) {
                $idElimUsuCtlr = $_GET['idElimUsu'];
                $rta=UsuariosMdl::eliminar_usuario_mdl($idElimUsuCtlr);
                var_dump($rta); 
                if ($rta == "todoOkDel") {
                       header("location:index.php?act=listarUsuarios&rtaDel=todoOkDel");
                   }   
            }            
        }
    }

    public function seleccion_eliminar_usuario_ctlr()
    {
        if (isset($_GET['selUsuDel'])) {
            if (!empty($_GET['selUsuDel'])) {
                $idEditUsuCtlr = $_GET['selUsuDel'];
                $rta=UsuariosMdl::editar_usuario_mdl($idEditUsuCtlr);
                #var_dump($rta);
                echo '
    <input type="hidden" value="'.$rta["id_usuario"].'" name="id_usuario_up">

    <label for="numero_documento_up">Numero de documento</label>
    <input disabled type="text" value="'.$rta["tipo_doc"].'" name="numero_documento_up" required><br>

    <label for="numero_documento_up">Numero de documento</label>
    <input disabled type="number" value="'.$rta["num_doc"].'" name="numero_documento_up" required><br>

    <label for="nombre1">Primer Nombre:</label>
    <input disabled type="text" value="'.$rta["nombre1"].'" name="nombre1_up" required><br>

    <label for="nombre2">Segundo Nombre:</label>
    <input disabled type="text" value="'.$rta["nombre2"].'" name="nombre2_up"><br>

    <label for="apellido1">Primer Apellido:</label>
    <input disabled type="text" value="'.$rta["apellido1"].'" name="apellido1_up" required><br>

    <label for="apellido2">Segundo Apellido:</label>
    <input disabled type="text" value="'.$rta["apellido2"].'" name="apellido2_up"><br>

    <label for="fecha_nac">Fecha de Nacimiento:</label>
    <input disabled type="date" value="'.$rta["fecha_nac"].'" name="fecha_nac_up" required><br>

    <label for="correo">Correo Electrónico:</label>
    <input disabled type="email" value="'.$rta["correo"].'" name="correo_up" required><br>

    <label for="telefono">Teléfono:</label>
    <input disabled type="tel" value="'.$rta["telefono"].'" name="telefono_up" required><br>

    <label for="direccion">Dirección:</label>
    <input disabled type="text" value="'.$rta["direccion"].'" name="direccion_up" required><br>

    <label for="ubicacion">Ubicación:</label>
    <input disabled type="text" value="'.$rta["ubicacion"].'" name="ubicacion_up" required><br>

    <label for="usuario">Usuario:</label>
    <input disabled type="text" value="'.$rta["usuario"].'" name="usuario_up" required><br>

    <label for="contrasena">Contraseña:</label>
    <input disabled type="text" value="'.$rta["pwd"].'" name="pwd_up" required><br>

    <label for="contrasena">Rol:</label>
    <input disabled type="text" value="'.$rta["rol"].'" name="pwd_up" required><br>

    <br><br>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Eliminar Datos
    </button>
<div class="modal fade" data-bs-backdrop="static" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confrimacion Para Eliminar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal " aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Esta seguro de eliminar estos datos, recuerde que no se pueden recuperar despues de eliminar</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">No, Conservar</button>
        <a href="index.php?act=elimUsu&idElimUsu='.$rta["id_usuario"].'" class="btn btn-danger">Si, Eliminar De Todos Modos</a>
      </div>
    </div>
  </div>
</div>
                ';
            }
        }
    }

    public function actualizar_usuario_ctlr()
    {
        if (isset($_POST['tipo_documento_up'])) {
            if (!empty($_POST['tipo_documento_up'])) 
            {
            $datos_form_up_ctlr = array(
                "id_usr" => $_POST["id_usuario_up"],
                "tipo_documento" => $_POST["tipo_documento_up"],
                "numero_documento" => $_POST["numero_documento_up"],
                "nombre1" => $_POST["nombre1_up"],
                "nombre2" => $_POST["nombre2_up"],
                "apellido1" => $_POST["apellido1_up"],
                "apellido2" => $_POST["apellido2_up"],
                "fecha_nac" => $_POST["fecha_nac_up"],
                "correo" => $_POST["correo_up"],
                "telefono" => $_POST["telefono_up"],
                "direccion" => $_POST["direccion_up"],
                "ubicacion" => $_POST["ubicacion_up"],
                "usuario" => $_POST["usuario_up"],
                "contrasena" => $_POST["pwd_up"],
                "rol" => $_POST["rol_up"]
            );
                $rta = UsuariosMdl::actualizar_usuario_mdl($datos_form_up_ctlr);
                if ($rta == "todoOkUp") {
                    header("location:index.php?act=todoOkUp");
                }else{
                }
            }
        }
    }

    public function editar_usuario_ctlr()
    {
        if (isset($_GET['idEditUsu'])) {
            if (!empty($_GET['idEditUsu'])) {
                $idEditUsuCtlr = $_GET['idEditUsu'];
                $rta=UsuariosMdl::editar_usuario_mdl($idEditUsuCtlr);
                #var_dump($rta);
                echo '
    <input type="hidden" value="'.$rta["id_usuario"].'" name="id_usuario_up">
    <label for="tipo_documento">Tipo de Documento:</label>
    <select value="tipo_documento" name="tipo_documento_up" required>
        <option value="'.$rta["tipo_doc"].'" class="text-center">'.$rta["tipo_doc"].' (es su documento actual)</option>
        <option value="TI">TI</option>
        <option value="CC">CC</option>
        <option value="CE">CE</option>
    </select><br>

    <label for="numero_documento_up">Numero de documento</label>
    <input type="number" value="'.$rta["num_doc"].'" name="numero_documento_up" required><br>

    <label for="nombre1">Primer Nombre:</label>
    <input type="text" value="'.$rta["nombre1"].'" name="nombre1_up" required><br>

    <label for="nombre2">Segundo Nombre:</label>
    <input type="text" value="'.$rta["nombre2"].'" name="nombre2_up"><br>

    <label for="apellido1">Primer Apellido:</label>
    <input type="text" value="'.$rta["apellido1"].'" name="apellido1_up" required><br>

    <label for="apellido2">Segundo Apellido:</label>
    <input type="text" value="'.$rta["apellido2"].'" name="apellido2_up"><br>

    <label for="fecha_nac">Fecha de Nacimiento:</label>
    <input type="date" value="'.$rta["fecha_nac"].'" name="fecha_nac_up" required><br>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" value="'.$rta["correo"].'" name="correo_up" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" value="'.$rta["telefono"].'" name="telefono_up" required><br>

    <label for="direccion">Dirección:</label>
    <input type="text" value="'.$rta["direccion"].'" name="direccion_up" required><br>

    <label for="ubicacion">Ubicación:</label>
    <input type="text" value="'.$rta["ubicacion"].'" name="ubicacion_up" required><br>

    <label for="usuario">Usuario:</label>
    <input type="text" value="'.$rta["usuario"].'" name="usuario_up" required><br>

    <label for="contrasena">Contraseña:</label>
    <input type="text" value="'.$rta["pwd"].'" name="pwd_up" required><br>

    <label for="rol">Rol:</label>
        <select value="rol" name="rol_up" required>
            <option value="'.$rta["rol"].'">'.$rta["rol"].' (Este es su rol actual)</option>
            <option value="2">Admin</option>
            <option value="3">Consumidor</option>
        </select><br>
                ';
            }
        }
    }

    public function listar_usuarios_ctlr()
    {
        $rta = UsuariosMdl::listar_usuarios_mdl("usuarios");
        #var_dump($rta);
        if ($rta != "errorRead") {
            foreach ($rta as $row => $item) {
            echo '
                <tr>
                  <td><a href="index.php?act=editarUsu&idEditUsu='.$item["id_usuario"].'" class="btn btn-warning">Editar</a></td>
                  <td><a href="index.php?act=elimUsu&selUsuDel='.$item["id_usuario"].'" class="btn btn-danger">Eliminar</a></td>
                  <td>'.$item["tipo_doc"].'</td>
                  <td>'.$item["num_doc"].'</td>
                  <td>'.$item["nombre1"].'</td>
                  <td>'.$item["nombre2"].'</td>
                  <td>'.$item["apellido1"].'</td>
                  <td>'.$item["apellido2"].'</td>
                  <td>'.$item["fecha_nac"].'</td>
                  <td>'.$item["correo"].'</td>
                  <td>'.$item["telefono"].'</td>
                  <td>'.$item["direccion"].'</td>
                  <td>'.$item["ubicacion"].'</td>
                  <td>'.$item["usuario"].'</td>
                  <td>'.$item["pwd"].'</td>
                  <td>'.$item["rol"].'</td>
                  <td>'.$item["estado"].'</td>
                  <td>'.$item["fecha_crea"].'</td>
                  <td>'.$item["fecha_actualiza"].'</td>
                  <td>'.$item["fecha_elimina"].'</td>
                </tr>
        ';
        }
        }else{
            echo '
                <script type="text/javascript">
                    Swal.fire({
                        title: "Error!",
                        html: "error no hay registros.<br>registra usuarios antes.<br>Si la falla persiste, comunícate con el administrador.",
                        icon: "error",
                    });
                </script>
            ';
        }
    }

    public function ingreso_usuario_ctlr()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $datos_form_ing_ctlr = array(
                "correo" => $_POST["correo_ing"],
                "contrasena" => $_POST["contrasena_ing"]
            );

            $rta = UsuariosMdl::ingreso_usuario_mdl($datos_form_ing_ctlr);
            #var_dump($rta[8]);
            if ($rta == "errorIng") {
                echo '
                    <script type="text/javascript">
                        Swal.fire({
                            title: "Error!",
                            html: "Usuario y contraseña incorrectos.<br>Verifica e intenta nuevamente.<br>Si la falla persiste, comunícate con el administrador.",
                            icon: "error",
                        });
                    </script>
                ';
            }else{
                if($rta["correo"] == $_POST["correo_ing"] && $rta["pwd"] == $_POST["contrasena_ing"]) {
                    session_start();
                    $_SESSION['usuCampeche'] = true;
                    echo '
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Perfecto!",
                                text: "Usuario y contrasena Correctos!",
                                icon: "success",
                            }).then(function() {
                                // Redirige al usuario a la página deseada
                                window.location.href = "index.php?act=listarUsuarios"; 
                            });
                        </script>
                    ';
                }
            }

        } else {
            #Manejar el caso en el que alguien accede directamente a esta página sin enviar un formulario.
            #echo "Acceso no autorizado.";
        }
    }







    public function registrar_usuario_ctlr()
    {
        function sanitizeInput($input) 
        {
            $input = trim(strip_tags($input));
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            return $input;
        }
        function validateText($input) {
            return preg_match('/^[a-zA-Z]+$/', $input);
        }
        function validateNumber($number) {
            return preg_match('/^[0-9]+$/', $number);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errores = array();
            $datos_form_reg_ctlr = array(
                "tipo_documento" => $_POST["tipo_documento_reg"],
                "numero_documento" => $_POST["numero_documento_reg"],
                "nombre1" => $_POST["nombre1_reg"],
                "nombre2" => $_POST["nombre2_reg"],
                "apellido1" => $_POST["apellido1_reg"],
                "apellido2" => $_POST["apellido2_reg"],
                "fecha_nac" => $_POST["fecha_nac_reg"],
                "correo" => $_POST["correo_reg"],
                "telefono" => $_POST["telefono_reg"],
                "direccion" => $_POST["direccion_reg"],
                "ubicacion" => $_POST["ubicacion_reg"],
                "usuario" => $_POST["usuario_reg"],
                "contrasena" => $_POST["pwd_reg"],
                "rol" => $_POST["rol_reg"]
            );
            foreach ($datos_form_reg_ctlr as $campo => $valor) 
            {
                $datos_form_reg_ctlr[$campo] = sanitizeInput($valor);
            }
            if (!validateNumber($datos_form_reg_ctlr["numero_documento"])) 
            {
                $errores[] = "El campo de número de documento debe contener solo números.";
            }
            if (!validateNumber($datos_form_reg_ctlr["telefono"])) 
            {
                $errores[] = "El campo de teléfono debe contener solo números.";
            }
            $camposTexto = array("nombre1", "nombre2", "apellido1", "apellido2", "direccion", "ubicacion", "usuario", "contrasena");
            foreach ($camposTexto as $campo) 
            {
                if (!validateText($datos_form_reg_ctlr[$campo])) 
                {
                    $errores[] = "El campo $campo contiene caracteres no permitidos.";
                }
            }
            $camposRequeridos = array(
                "tipo_documento", "numero_documento", "nombre1", "apellido1", "fecha_nac", "correo", "telefono",
                "direccion", "ubicacion", "usuario", "contrasena", "rol"
            );
            foreach ($camposRequeridos as $campo) 
            {
                if (empty($datos_form_reg_ctlr[$campo])) 
                {
                    $errores[] = "El campo $campo es requerido y debe ser completado.";
                }
            }
            if (empty($errores)) 
            {
                $rta = UsuariosMdl::registrar_usuario_mdl($datos_form_reg_ctlr);
                if ($rta == "todoOkReg") {
                    header("location:index.php?act=todoOkReg");
                }else{
                    
                }
            } else {
                echo "Se encontraron los siguientes errores:<br>";
                foreach ($errores as $error) {
                    echo "$error<br>";
                }
            }
        }
    }
}
?>