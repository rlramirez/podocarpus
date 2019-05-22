<?php
	include('../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo_s.php"><i class="fas fa-user-plus"></i> Usuario</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Crud</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<h3>Nuevo Usuario</h3>
			<form method="post" action="nuevo_u.php">
				<div class="contenedor-inputs">
					<input type="text" name="latitud" placeholder="Latitud">
					<input type="text" name="longitud" placeholder="Longitud">
					<input type="text" name="descripcion" placeholder="Descipción">
					<input type="text" name="tipo_dato" placeholder="Descipción">
					<input type="text" name="extraccion_dato" placeholder="Descipción">
					<input type="text" name="nombre_sensor" placeholder="Descipción">

					<input type="text" name="username" placeholder="Username" required="required">
					<input type="password" name="userpass" placeholder="Password" required="required">
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>