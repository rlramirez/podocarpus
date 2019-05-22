<?php
	extract($_POST);
	include('../../adm_header.php');
	//$pass=md5($userpass);
	$miconexion->consulta("insert into atiencia_examen values ('$temperatura','$hora','$fecha','$anemometro')");
	echo "<script>location.href='index.php'</script>";
?>