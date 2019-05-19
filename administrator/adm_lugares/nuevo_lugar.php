<?php
	extract($_POST);
	include('../adm_header.php');

	$miconexion->consulta("INSERT INTO lugares (`idLugares`, `nombre`, `latitud`, `longitud`, `descripcion`, `id_sector`) 
	VALUES ('', '$nombre', $latitud, $longitud, '$descripcion', $sector)");
	/* Saca el ID del lugar que se quiere registrar para guardarlo en Fotos */
/* 	$miconexion->consulta("SELECT l.idLugares
	FROM lugares AS l, fotos AS f 
	WHERE l.idLugares = f.idFotos
	AND l.nombre = '$nombre'");
 */
	$resultado = mysql_query("SELECT l.idLugares
	FROM lugares AS l, fotos AS f 
	WHERE l.idLugares = f.idFotos
	AND l.nombre = '$nombre'");
	if (!$resultado) {
		echo 'No se pudo ejecutar la consulta: ' . mysql_error();
		exit;
	}
	$fila = mysql_fetch_row($resultado);


	//$resConsulta = $miconexion->consulta($consultID);
	/* // verificamos que no haya error
	if (! $resConsulta){
		echo “La consulta SQL contiene errores.”.mysql_error();
	exit(); */

	$miconexion->consulta("INSERT INTO fotos (`idFotos`, `url`, `id_lugares`) 
	VALUES ('', '$url', $fila)");
	
	//echo "<script>location.href='index.php'</script>";
?>