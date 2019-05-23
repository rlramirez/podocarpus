<?php
	include('../../adm_header.php');
?>
<head>
	<title>Examen</title>
	<link rel="stylesheet" href="estilosestevan.css">
	
</head>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="Ndatos.php" class="btnNuevo" > Registrar</a><br>
			
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
				$miconexion->consulta("select * from atiencia_examen");
				$miconexion->verconsulta();
		
			?>
		</section>
	</section>
	

</main>
<?php
	include('../../adm_footer.php');
?>