<?php
include('../../adm_header.php');
?>
<main>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--Esto utilize para cargar la hora y fecha automaticamente-->
	<?php
		
		error_reporting(E_ALL ^ E_NOTICE);
		date_default_timezone_set("America/Guayaquil");
		$fechaactual = getdate();
		setlocale(LC_TIME, "spanish");
		$fecha = $fechaactual[year] .".". date('m') .".". date('d');
		$hora = date('H') .":". date('m');//Hora a almacenar.
		$fecha_input = strftime("%A, %d de %B de %Y");//Fecha a mostrar.
		$hora_input = strftime("%H:%M");//Hora a mostrar.
		//
	?>
	<!---->

	<section >
		<h3 class="titulo">Recolección de datos de sensor metereológico</h3>
		<p>Freddy Villavicencio</p>
		<form method="post" enctype="multipart/form-data" action="" class="formulario">
			<h1 class="formulario__titulo">Sénsor Meteorológico</h1>
			<input type="text" class="formulario__input" required="required" placeholder="Temperatura" name="temperatura">
			<input type="text" class="formulario__input" readonly="readonly" placeholder="Hora" value="<?php echo utf8_encode($hora_input); ?>">
			<input type="text" class="formulario__input" readonly="readonly" placeholder="Fecha" value="<?php echo utf8_encode($fecha_input); ?>">
			<input type="text" class="formulario__input" required="required" placeholder="Velocidad del viento" name="velocidad">
			<input type="submit" class="formulario__submit" value="Guardar Datos">
		</form>
	</section>
	
	<?php
		error_reporting(E_ALL ^ E_NOTICE);
		$Temperatura=$_POST['temperatura'];
		$Velocidad=$_POST['velocidad'];
        
		if ($Temperatura==null) {

		}else{
			$resultado_noticia = $miconexion->insertar_villavicencio("Insert into villavicencio_examen(id, temperatura, hora, fecha, velocidad) VALUES (0, '$Temperatura', '$hora_input', '$fecha', $Velocidad)");
			if ($resultado_noticia == 0) {
				echo ' <script language="javascript">alert("Error: No se pudo guardar dato");</script> ';
			}
			else{
				echo ' <script language="javascript">alert("Dato registrado con éxito");</script> ';
				echo ' <script language="javascript">location.href="index.php";</script> '; 
			}

		}
	?>

	
</main>
<?php
include('../../adm_footer.php');
?>