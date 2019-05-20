<?php
include('../adm_header.php');
?>

<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Usuario</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Crud</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<div class="contenido_mod">
			<?php

			$miconexion->consulta("SELECT l.idLugares ID, l.nombre Nombre_Lugar, l.latitud Latitud, l.longitud Longitud,l.descripcion Descripcion, s.nombre Sector, f.url Imagen 
			FROM lugares AS l, sector AS s, fotos AS f 
			WHERE s.idSector = l.idLugares 
			AND l.idLugares = f.idFotos");
			$miconexion->verconsulta_crud();
			?>
		</div>
	</section>
</main>

<?php
include('../adm_footer.php');
?>