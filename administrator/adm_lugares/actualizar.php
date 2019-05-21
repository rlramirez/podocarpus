<?php
	extract($_GET);
	include('../adm_header.php');
	$id_lugar = $miconexion->consulta("SELECT * FROM lugares WHERE idLugares=$id");
	$id_foto = $miconexion->consultaID("SELECT idFotos FROM fotos WHERE id_lugares = $id_lugar");
	$lista_l=$miconexion->consulta_lista();
	echo $id_foto
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Nuevo Lugar</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Listar</a>
		</nav>
    </section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<h2>EDITAR</h2>
			<hr>
			<!-- Metodo post para guardar formulario -->
			<form method="post" action="update.php" enctype="multipart/form-data">
				<div class="contenedor-inputs">
					<input type="hidden" name="id_l" value="<?php $lista_l[0];?>">
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
					
					<input type="hidden" name="id_f" value="<?php $id_foto?>">
					<input type="text" name="url" placeholder="URL Imagen" required="required">

					<hr>
					<span>Subir Imagen</span>
					<input type="file" name="imagen">
				</div>
				<hr>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>