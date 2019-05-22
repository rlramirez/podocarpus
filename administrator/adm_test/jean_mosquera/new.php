<?php
	include('../../adm_header.php');
?>
<html>
<head>
    <title>Sensores Data Viz</title>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="js/script.js"></script>
</head>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="index.php"><i class="fas fa-arrow-circle-left"></i> Retornar</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<h3>Nuevo Registro Sensor</h3>
			<form method="post" action="new_e.php">
				<div class="contenedor-inputs">
					<input type="number" step=".01" name="temp" placeholder="Temperatura" required="required">
					<input type="text" name="hour" placeholder="Hora" required="required" >
					<input type="text" name="date" placeholder="Fecha" required="required">
					<input type="number" step=".01" name="velv" placeholder="Velocidad Viento" required="required">
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>

</main>
<?php
	include('../../adm_footer.php');
?>