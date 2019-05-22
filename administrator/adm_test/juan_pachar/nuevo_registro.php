<?php
extract($_POST);
include('../../adm_header.php');

$miconexion->consulta("INSERT INTO pachar_sensores (`idSensores`, `temperatura`, `hora`, `fecha`, `anemometro`) 
	VALUES ('', '$temperatura', '$hora', '$fecha', '$anemometro')");

echo "<script>location.href='index.php'</script>";
?>