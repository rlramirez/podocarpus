<?php
	extract($_POST);
	include('../adm_header.php');

	$cn = mysqli_connect("DBHOST","DBUSER","","insertdb") or die("Error");
	
	$miconexion->consulta("INSERT INTO lugares (`idLugares`, `nombre`, `latitud`, `longitud`, `descripcion`, `id_sector`) 
	VALUES ('', '$nombre', $latitud, $longitud, '$descripcion', $sector)");
	/* Saca el ID del lugar que se quiere registrar para guardarlo en Fotos
	$miconexion->consulta("SELECT l.idLugares
	FROM lugares AS l, fotos AS f 
	WHERE l.idLugares = f.idFotos
	AND l.nombre = '$nombre'");
	*/

	if(isset($_FILES['imagen'])){
		$nombreimagen=$_FILES['imagen']['name'];
		$ruta=$_FILES['imagen']['tmp_name'];
		$destino="../../../../img/tmp".$nombreimagen;
		if(copy($ruta,$destino)){
			$sql="INSERT INTO fotos (`idFotos`, `url`, `id_lugares`) 
			VALUES ('', '$nombreimagen', 2)";
			$res=mysqli_query($cn,$sql);
			if($res){
				echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="index.php";</script>';
			}else{
				die("Error".mysqli_error($cn));
			}
		}
	}



	$miconexion->consulta("INSERT INTO fotos (`idFotos`, `url`, `id_lugares`) 
	VALUES ('', '$url', 2)");
	
	echo "<script>location.href='index.php'</script>";
?>