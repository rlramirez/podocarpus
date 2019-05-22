<?php
   
    NuevoProducto($_POST['idServicio'], $_POST['hora'],$_POST['temperatura'], $_POST['fecha'], $_POST['anemometro']);


	function NuevoProducto($id,$temperatura, $hora, $fecha, $anemometro){

        
        include('../../adm_header.php');
        $miconexion->consulta("INSERT INTO febre_examen (id_febre, hora, temperatura, fecha, anemometro) VALUES ('".$id."' ,'".$temperatura."' ,'".$hora."' ,'".$fecha."' ,'".$anemometro."') ");
      
	

}

?>
<script type="text/javascript">
	alert("Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>
