<?php
	include('../../adm_header.php');
?>

<link rel="stylesheet" type="text/css" href="css/estilos.css">
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
    	<form method="post" action="nuevodato.php">
	        Temperatura: <input type="number" name="tempe" placeholder="Ingrese temperatura" required="required">
	        Hora: <input type="text" name="hora" placeholder="Ingrese hora actual" required="required">
	        Fecha: <input type="date" name="fecha" placeholder="Ingrese fecha actual" required="required">
	        Anemómetro: <input type="number" name="anemo" placeholder="Ingrese dato preciso" required="required"><br><br><br>
	        <input type="submit" class="btn-submit" value="Registrar">
    	</form>
	    </section>
	</section>
</main>
<?php
	include('../../adm_footer.php');
?>