<div class="container">
	<br>
	<form method="POST">
	<?php 
		$elimUsu = new UsuariosCtlr; 
		$elimUsu-> seleccion_eliminar_usuario_ctlr();

		$elimina_confirmado = new UsuariosCtlr;
		$elimina_confirmado -> eliminar_usuario_ctlr();
	?>

	</form>
	<br><br>
</div>