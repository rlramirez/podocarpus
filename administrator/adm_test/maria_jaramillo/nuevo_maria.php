<?php
	include('../../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo_maria.php"><i class="fas fa-user-plus"></i> Usuario</a><br>
			<a href="nuevo_hora.php"><i class="fas fa-user-plus"></i> Estadística</a><br>

		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<h3>Nuevo Registro</h3>
			<form method="post" action="nuevo_maria_u.php">
				<div class="contenedor-inputs">
					<input type="number" name="temperatura" placeholder="Temperatura" required="required">
					<input type="number" name="hora" placeholder="Hora" required="required" >
					<input type="date" name="fecha" placeholder="Fecha" required="required">
					<input type="number" name="anenometro" placeholder="Velocidad" required="required">
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	
</main>
<?php
	include('../../adm_footer.php');
?>