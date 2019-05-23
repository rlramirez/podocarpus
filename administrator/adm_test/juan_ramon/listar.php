<?php
	include('../../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="index.php"><i class="fas fa-user-plus"></i> Formulario</a><br>
			<a href="listar.php"><i class="fas fa-user-cog"></i> Datos</a><br>
			<a href="grafico.php"><i class="fas fa-user-cog"></i> Estadistica</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
				$miconexion->consulta("select id, temperatura,hora,fecha,anemometro from ramon_datos");
				$miconexion->verconsulta_crud();
			?>
		</section>
	</section>
</main>
<?php
	include('../../adm_footer.php');
?>