<?php

	include('../../adm_header.php');



?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<main>




	

	
	<section class="area_trabajo">
		<h3>Formulario de registros de SENSORES</h3>
	<form method="post" action="update_m.php">
		<div class="contenedor-inputs">
					<input type="number" step="any" name="temperatura" placeholder="temperatura" value="<?php echo $lista_u[0];?>"><br>
					<input type="hidden" name="id_m" value="<?php echo $lista_u[4];?>"><br>
					<input type="time" name="hora" placeholder="hora" value="<?php echo $lista_u[1];?>"><br>
					<input type="date" name="fecha" placeholder="fecha" value="<?php echo $lista_u[2];?>"><br>
					<input type="number" step="any" name="anemometro" placeholder="anemometro" value="<?php echo $lista_u[3];?>"><br>
					
					 
		</div>
		<button type="submit" class="btn-submit" class="btn btn-success">Registrar</button>
	</form>
	</section>
	
</main>
<?php
	include('../../adm_footer.php');
?>