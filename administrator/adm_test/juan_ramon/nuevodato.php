<?php
	extract($_POST);
	include('../../adm_header.php');

	
	
	$miconexion->consulta("INSERT INTO `ramon_datos` (`id`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES ('', '$tempe', '$hora', '$fecha', '$anemo');");


	
	
	echo "<script>location.href='index.php'</script>";
?>