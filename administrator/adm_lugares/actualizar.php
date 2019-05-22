<?php
	extract($_GET);
	include('../adm_header.php');
	$id_lugar = $miconexion->consulta("SELECT * FROM lugares WHERE idLugares = $id");
	// $id_foto = $miconexion->consultaID("SELECT idFotos FROM fotos WHERE id_lugares = $id_lugar");
	// echo $id_foto;
	$lista_l=$miconexion->consulta_lista();
    $lista_sector[1]="Bombuscaro";
    $lista_sector[2]="Romerillos";
    $lista_sector[3]="Zona Alta";
    $lista_sector[4]="Zona Baja";
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
			<h2>Actualización de lugares</h2>
			<!-- Metodo post para guardar formulario -->
			<form method="post" action="update.php">
				<div class="contenedor-inputs">
					<input type="hidden" name="idLugares" value="<?php $lista_l[0];?>">
					<input type="text" name="nombre" placeholder="Nombre" value="<?php echo $lista_l[1];?>">
					<input type="text" name="latitud" placeholder="Latitud"  value="<?php echo $lista_l[2];?>" required="required">
					<input type="text" name="longitud" placeholder="Longitud"  value="<?php echo $lista_l[3];?>" required="required">
					<input type="text" name="descripcion" placeholder="Descripción"  value="<?php echo $lista_l[4];?>" required="required">
					<select name="sector">
                        <option value="<?php echo $lista_l[6]; ?>"><?php echo $lista_sector[$lista_l[6]];?></option>
						<option value="1">Bombuscaro</option>
						<option value="2">Romerillos</option>
						<option value="3">Zona Alta</option>
						<option value="4">Zona Baja</option>
					</select>
					

					<input type="text" name="url" placeholder="URL Imagen" value="<?php echo $lista_l[5];?>" required="required">
                    <p> <?php echo $lista_l[0] ?></p>
					<!--<hr>
					<span>Subir Imagen</span>
					<input type="file" name="imagen">-->
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>