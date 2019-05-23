<?php
	include('../../adm_header.php');
?>
<main>
	<section class="modulo-maria">
		<nav class="nav_modulo">
			<a href="nuevo_maria.php"><i class="fas fa-user-plus"></i> Registro</a><br>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
				$miconexion->consulta("select * from jaramillomaria_examen");
				$miconexion->verconsulta_maria();
			?>
		</section>
	</section>
	
</main>
<?php
	include('../../adm_footer.php');
?>