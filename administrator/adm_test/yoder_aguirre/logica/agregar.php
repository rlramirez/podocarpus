<?php
	extract($_POST);
	include('../../../adm_header.php');

	// agregar datpos a bd
	$miconexion->consulta("INSERT INTO `yoderaguirre` (`id`, `temperatura`, `hora`, `fecha`, `anemometro`) 
						 	VALUES ('', '$temperatura','$hora', $fecha, '$anemometro')");

	// alerta
	echo "<script>alert('Datos agregados correctamente!')</script>";
	echo "<script>location.href='../index.php'</script>";
?>