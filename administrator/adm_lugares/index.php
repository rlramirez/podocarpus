<?php
include('../adm_header.php');
?>

<main>
	<section class="area_registro">
		<section class="contenido_mod">
			<h2>REGISTRO</h2>
			<hr>
			<h3>Nuevo Lugar</h3>
			<!-- Metodo post para guardar formulario -->
			<form method="post" action="nuevo_lugar.php" enctype="multipart/form-data">
				<div class="contenedor-inputs">
					<input type="text" name="nombre" placeholder="Nombre">
					<input type="text" name="latitud" placeholder="Latitud" required="required">
					<input type="text" name="longitud" placeholder="Longitud" required="required">
					<input type="text" name="descripcion" placeholder="Descripción" required="required">
					<select name="sector">
						<option value="">Seleccione el sector</option>
						<option value="1">Bombuscaro</option>
						<option value="2">Romerillos</option>
						<option value="3">Zona Alta</option>
						<option value="4">Zona Baja</option>
					</select>
					<input type="text" name="url" placeholder="URL Imagen" required="required">

					<hr>
					<span>Subir Imagen</span>
					<input type="file" name="uploadedFile">
				</div>
				<hr>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	<hr>
	<section class="area_consulta">
		<div class="tabla_consulta">
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