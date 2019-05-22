<?php
	extract($_POST);
	include('../../adm_header.php');
	$miconexion->consulta("insert into caicedo_sensor values ('$hora', '$fecha', '$temperatura', '$anemometro', '')");
	echo "<script>location.href='index.php'</script>";
?>
