<?php
	extract($_POST);
	include('../adm_header.php');

	//$cn = mysqli_connect("DBHOST","DBUSER","","insertdb") or die("Error");
	
	$id = $miconexion->consultaID("INSERT INTO lugares (`idLugares`, `nombre`, `latitud`, `longitud`, `descripcion`, `id_sector`) 
	VALUES ('', '$nombre', $latitud, $longitud, '$descripcion', $sector)");


	// if(isset($_FILES['imagen'])){
	// 	$nombreimagen=$_FILES['imagen']['name'];
	// 	$ruta=$_FILES['imagen']['tmp_name'];
	// 	$destino=" ".$nombreimagen;
	// 	if(copy($ruta,$destino)){
	// 		$sql="INSERT INTO fotos (`idFotos`, `url`, `id_lugares`) 
	// 		VALUES ('', '$nombreimagen', 2)";
	// 		$res=mysqli_query($cn,$sql);
	// 		if($res){
	// 			echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="index.php";</script>';
	// 		}else{
	// 			die("Error".mysqli_error($cn));
	// 		}
	// 	}
	// }



	$miconexion->consulta("INSERT INTO fotos (`idFotos`, `url`, `id_lugares`) 
							VALUES ('', '$url', $id)");
	
	echo "<script>location.href='index.php'</script>";
?>