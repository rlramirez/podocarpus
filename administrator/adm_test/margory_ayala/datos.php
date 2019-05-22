<?php
	include('../../adm_header.php');
?>
<main>
	
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
				$miconexion->consulta("select temperatura, hora,fecha,anemometro,id from margory_ayala");
				$miconexion->verconsulta();
			?>
		</section>
	</section>

	<form action="index.php">
    				<input type="submit" value="volver al menu" />
	</form>
	
</main>
<?php
	include('../../adm_footer.php');
?>