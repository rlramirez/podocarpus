<?php
include('../adm_header.php');
?>

<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Nuevo Lugar</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Listar</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<div class="contenido_mod">
			<?php

			/* $miconexion->consulta("SELECT l.idLugares ID, l.nombre Nombre_Lugar, l.latitud Latitud, l.longitud Longitud,l.descripcion Descripcion, s.nombre Sector, f.url Imagen 
			FROM lugares l JOIN sector s ON l.id_sector = s.idSector 
			JOIN fotos f ON l.idLugares = f.id_lugares");
			 */
			$miconexion->consulta("SELECT l.idLugares ID, l.nombre Nombre_Lugar, l.latitud Latitud, l.longitud Longitud,l.descripcion Descripcion, l.url Url, s.nombre Sector FROM lugares l, sector s WHERE l.id_sector = s.idSector");

			$miconexion->verconsulta_crud();
			?>
		</div>
	</section>
</main>

<?php
include('../adm_footer.php');
?>