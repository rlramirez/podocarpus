<?php
	extract($_POST);
	include('../adm_header.php');
	$pass=md5($userpass);
	$miconexion->consulta("insert into sensores values ('','$latitud','$longitud','$descripcion','tipo_dato','$extraccion_dato','$nombre_sensor')");
	echo "<script>location.href='index.php'</script>";
?>