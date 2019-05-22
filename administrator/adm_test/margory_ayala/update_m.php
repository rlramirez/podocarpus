<?php
	extract($_POST);
	include('../../adm_header.php');
	$miconexion->consulta("insert into margory_ayala values ('$temperatura','$hora', '$fecha', '$anemometro', '')");
	echo "<script>location.href='index.php'</script>";




?>