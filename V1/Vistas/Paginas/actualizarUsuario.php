<h1>pagina para actualizar datos</h1>
<form method="post">
        <label for="tipo_documento">Tipo de Documento:</label>
        <select id="tipo_documento" name="tipo_documento_reg" required>
            <option value="">Selecciona Tipo De Documento</option>
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="CE">CE</option>
        </select><br>

        <label for="nombre1">Primer Nombre:</label>
        <input type="text" id="nombre1" name="nombre1" value="<?php ?>" required><br>

        <label for="nombre2">Segundo Nombre:</label>
        <input type="text" id="nombre2" name="nombre2"><br>

        <label for="apellido1">Primer Apellido:</label>
        <input type="text" id="apellido1" name="apellido1"  value="<?php ?>" required><br>

        <label for="apellido2">Segundo Apellido:</label>
        <input type="text" id="apellido2" name="apellido2"><br>

        <label for="fecha_nac">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nac" name="fecha_nac"  value="<?php ?>" required><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo"  value="<?php ?>" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono"  value="<?php ?>" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion"  value="<?php ?>" required><br>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion"  value="<?php ?>" required><br>

        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario"   value="<?php ?>" required><br>

        <label for="pwd">Contraseña:</label>
        <input type="password" id="pwd" name="pwd"  value="<?php ?>" required><br>

        <label for="rol">Rol:</label>
        <select id="rol" name="rol" required>
            <option value="admin">Admin</option>
            <option value="consumidor">Consumidor</option>
        </select><br>

        <input type="submit" value="Enviar">
    </form>