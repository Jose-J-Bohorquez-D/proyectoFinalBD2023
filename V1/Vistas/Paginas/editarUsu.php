<div class="container">
	<div class="row">
		<h1 class="text-center">Formulario Para Actualizacion De Datos</h1>
		<div class="col">
			<form method="POST">
    			<?php 
					$editUsu=new UsuariosCtlr;
					$editUsu->editar_usuario_ctlr();
					$editUsu->actualizar_usuario_ctlr();
				?>
			    <input type="submit" value="Actualizar">
			</form>
		</div>
	</div>
</div>