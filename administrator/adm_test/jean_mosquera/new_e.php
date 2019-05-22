<?php
	extract($_POST);
	include('../../adm_header.php');
	$miconexion->consulta("insert into mosquera_examen values ('','$temp','$hour','$date','$velv')");
	echo "<script>location.href='index.php'</script>";
?>
