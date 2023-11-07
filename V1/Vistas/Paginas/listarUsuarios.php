<?php
session_start(); 
if (!$_SESSION['usuCampeche']) {
	header("location:index.php?act=index");
	exit();
}
?>



    <?php 
        if ($_GET['act']) {
            if ($_GET['act'] == "todoOkUp") {
			echo '
			<script type="text/javascript">
			    Swal.fire({
			        title: "Genial!",
			        html: "Usuario Actualizado Con Éxito!<br>Presiona Ok para continuar!",
			        icon: "success",
			    });
			</script>

			';
            }
        }
        if (isset($_GET['rtaDel'])) {
            if ($_GET['rtaDel'] == "todoOkDel") {
			echo '
			<script type="text/javascript">
			    Swal.fire({
			        title: "Genial!",
			        html: "Datos Eliminados Con Éxito!<br>Presiona Ok para continuar!",
			        icon: "success",
			    });
			</script>

			';
            }
        }
    ?>

<div class="container-fluid">
	<h1 class="text-center">Pagina De Usuarios</h1>
	<div class="table-responsive">
	<table class="table table-dark table-sm text-nowrap table-borderless table-hover">
	  <thead class="table-light">
	    <tr>
	      <th scope="col" colspan="2">ACCIONES</th>
	      <th scope="col">TIPO DE DOCUMENTO</th>
	      <th scope="col">N° DOCUMENTO</th>
	      <th scope="col">PRIMER NOMBRE</th>
	      <th scope="col">SEGUNDO NOMBRE</th>
	      <th scope="col">PRIMER APELLIDO</th>
	      <th scope="col">SEGUNDO APELLIDO</th>
	      <th scope="col">FECHA NACIMIENTO</th>
	      <th scope="col">CORREO</th>
	      <th scope="col">TELEFONO</th>
	      <th scope="col">DIRECCION</th>
	      <th scope="col">UBICACION</th>
	      <th scope="col">USUARIO</th>
	      <th scope="col">CONTRASEÑA</th>
	      <th scope="col">ROL</th>
	      <th scope="col">ESTADO</th>
	      <th scope="col">FECHA CREACION</th>
	      <th scope="col">FECHA ACTUALIZACION</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php 
		$list = new UsuariosCtlr;
		$list->listar_usuarios_ctlr();
		?>
	  </tbody>
	</table>

</div>
</div>
<br><br>