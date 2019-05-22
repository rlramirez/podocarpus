<?php
	extract($_GET);
	include('../../adm_header.php');
	$miconexion->consulta("select COUNT(*) FROM ramon_datos");
	$lista_e=$miconexion->consulta_lista();

	$miconexion->consulta("select temperatura FROM ramon_datos");
	$lista_es=$miconexion->consulta_lista();

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
			<input  type="text" name="id" placeholder="Nombres " value="<?php echo $lista_e[0];?>">
		</section>
		<?php 
			for ($i=0; $i <$lista_es[$i] ; $i++) {
				
				echo "<input  type="text" name="id" placeholder="Nombres" value=" ".$lista_e[0] ."">";

				
			}
		?>
	</section>
</main>
<?php
	include('../../adm_footer.php');
?>