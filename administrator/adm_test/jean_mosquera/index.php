<?php
	include('../../adm_header.php');
	$sql = "SELECT temperatura,hora,fecha,vel_viento from mosquera_examen;";

?>
<html>
<head>
    <title>Sensores Data Viz</title>
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
	<script src="http://code.highcharts.com/stock/highstock.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>



</head>

<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">

			<a href="estadisticas.php"><i class="fas fa-signal"></i> Estadisticas</a><br>
			<a href="new.php"><i class="fas fa-plus-circle"></i> Formulario</a><br>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
				$miconexion->consulta("select id_registro, temperatura, hora, fecha , vel_viento  from mosquera_examen");
				$miconexion->verconsulta();
			?>
		</section>
<div id="container"></div>
	</section>

</main>

<?php
	include('../../adm_footer.php');
?>