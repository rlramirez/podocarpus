<?php
	include('../../adm_header.php');
?>
<main>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<h3>Registro de Datos</h3>
			<form method="post" action="dll/insercion.php">
				<div class="contenedor-inputs">
					<input type="text" name="temperatura" placeholder="Temperatura" required="required">
					<input type="text" name="hora" placeholder="Hora" required="required">
					<input type="text" name="fecha" placeholder="Fecha" required="required">
					<input type="text" name="velocidad" placeholder="Velocidad del viento" required="required">
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	
</main>
<?php
	include('../../adm_footer.php');
?>