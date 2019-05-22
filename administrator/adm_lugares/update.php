<?php
	extract($_POST);
	include('../adm_header.php');

	$miconexion->consulta("UPDATE lugares SET nombre = '$nombre', latitud = $latitud, longitud = $longitud, descripcion = '$descripcion', url = '$url', id_sector = $sector WHERE idLugares = $idLugares");



	// $miconexion->consulta("UPDATE fotos SET url = '$url'
							// WHERE idFotos = $id_f");
	

	echo "<script>location.href=index.php</script>";

?>
