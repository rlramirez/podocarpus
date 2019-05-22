<?php
	include('../../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="index.php"><i class="fas fa-database"></i>Formulario</a><br>
			<a href="graficos.php"><i class="fas fa-chart-bar"></i>Estadisticas</a><br>
			<a href="tabla.php"><i class="fas fa-table"></i>Datos en tabla</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<h3>Datos</h3><br>
			<form method="post" action="insertar.php">
				<div class="contenedor-inputs">
					<input type="time" name="hora" placeholder="Hora" required="required">
					<input type="date" name="fecha" placeholder="Fecha" required="required">
					<input type="number" step="0.01" name="temperatura" placeholder="Temperatura" required="required">
					<input type="number" step="0.01"  name="anemometro" placeholder="Anemometro" required="required">
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	
</main>
<?php
	include('../../adm_footer.php');
?>