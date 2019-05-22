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
			<?php
				$miconexion->consulta("select hora,fecha,temperatura,anemometro from caicedo_sensor");
				$miconexion->verconsulta_crud();
			?>
		</section>
	</section>
	
</main>
<?php
	include('../../adm_footer.php');
?>