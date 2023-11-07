<h2>Formulario de Ingreso</h2>
<div class="container">
	<?php 
		$ing = new UsuariosCtlr;
		$ing->ingreso_usuario_ctlr();
	?>
</div>
<form method="POST">
<label for="correo_ing">Correo:</label>
<input type="email" id="correo_ing" name="correo_ing" required>

<label for="contrasena_ing">Contraseña:</label>
<input type="password" id="contrasena_ing" name="contrasena_ing" required>

<input type="submit" value="Ingresar">
</form>

