<?php
	include('../adm_header.php');
?>
<main>
	<link rel="stylesheet" type="text/css" href="estilos/estilos2.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
	<section class="content">
		<div class="crear">
			<h3 class="title">Administrar Noticia - Parque Nacional Podocarpus</h3>
			<a href="crear_noticia.php" class="categoria">Nueva Noticia</a>
		</div>
		<?php
			
			$miconexion->consulta("Select * from noticia ORDER BY fecha DESC");

			echo $miconexion->vernoticia();
			//$miconexion->desconectar();
		?>
	</section>
	
</main>
<?php
include('../adm_footer.php');
?>