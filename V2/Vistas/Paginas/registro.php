<h1>Formulario de registro</h1>
<div class="container">
    <?php 
        $reg = new UsuariosCtlr; 
        $reg->registrar_usuario_ctlr();
        if ($_GET['act']) {
            if ($_GET['act'] == "todoOkReg") {
echo '
    <script type="text/javascript">
        Swal.fire({
            title: "Genial!",
            text: "Usuario Registrado Con Éxito!",
            text: "Presiona Ok Para Iniciar Sesion!",
            icon: "success",
        }).then(function() {
            // Redirige al usuario a la página deseada
            window.location.href = "index.php?act=ingreso"; 
        });
    </script>
';
            }
        }
    ?>
</div>
<form method="post">
    <label for="tipo_documento">Tipo de Documento:</label>
    <select id="tipo_documento" name="tipo_documento_reg" required>
        <option value="">Selecciona Tipo De Documento</option>
        <option value="TI">TI</option>
        <option value="CC">CC</option>
        <option value="CE">CE</option>
    </select><br>
    
    <label for="numero_documento_reg">Numero de documento</label>
    <input type="number" id="numero_documento_reg" name="numero_documento_reg" required><br>

    <label for="nombre1">Primer Nombre:</label>
    <input type="text" id="nombre1" name="nombre1_reg" required><br>

    <label for="nombre2">Segundo Nombre:</label>
    <input type="text" id="nombre2" name="nombre2_reg"><br>

    <label for="apellido1">Primer Apellido:</label>
    <input type="text" id="apellido1" name="apellido1_reg" required><br>

    <label for="apellido2">Segundo Apellido:</label>
    <input type="text" id="apellido2" name="apellido2_reg"><br>

    <label for="fecha_nac">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nac" name="fecha_nac_reg" required><br>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo_reg" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono_reg" required><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion_reg" required><br>

    <label for="ubicacion">Ubicación:</label>
    <input type="text" id="ubicacion" name="ubicacion_reg" required><br>

    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario_reg" required><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="pwd_reg" required><br>

    <label for="rol">Rol:</label>
    <select id="rol" name="rol_reg" required>
        <option value="admin">Admin</option>
        <option value="consumidor">Consumidor</option>
    </select><br>

    <input type="submit" value="Enviar">
</form>