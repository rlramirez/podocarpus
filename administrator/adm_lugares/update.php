<?php
	extract($_POST);
	include('../adm_header.php');
	
	$miconexion->consulta("UPDATE lugares SET nombre = '$nombre', latitud = $latitud, longitud = $longitud, descripcion = '$descripcion', id_sector = '$sector' 
							WHERE idLugares = $id_l");

	$miconexion->consulta("UPDATE fotos SET url = '$url'
							WHERE idFotos = $id_f");
	

	echo "<script>location.href=index.php</script>";

?>
