<?php
	include('../../adm_header.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilosFebre.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://cdn.plot.ly/plotly-1.2.0.min.js"></script>
	<script src="js/jquery.js"></script>

	<?php
	extract($_GET);

	$miconexion->consulta("SELECT * FROM febre_examen");
      $listaServicios=$miconexion->verCrudFebre();
	
	?>

<!--Grafica-->

<div class="container">		
				Graficas
				
				<div >    
					<div id="cargaBarras"></graph>
				</div>	
			
</div>


</head>
<body>
	
</body>
</html>





<?php
	include('../../adm_footer.php');
?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaBarras').load('barras.php');
	});

</script> 