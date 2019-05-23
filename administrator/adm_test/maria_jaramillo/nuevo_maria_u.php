<?php

	extract($_POST);
	include('../../adm_header.php');
	$miconexion->consulta("insert into jaramillomaria_examen values ('','$temperatura','$hora','$fecha','$anemometro')");
	echo "<script>location.href='index.php'</script>";
?>