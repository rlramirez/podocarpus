

<?php
    include('../../adm_header.php');
    
	
?>
<main>
<link rel="stylesheet" type="text/css" href="css/estilosC.css">

	<section >
		<h3>Mi examen desarrollados</h3>
		<p>Desarrollar el examen</p>
        <div class="wrapper">
    <form method="post" action="" class="ccform">
    <div class="ccfield-prepend">
        <input class="ccformfield" name="temperatura" type="text" placeholder="Ingrese temperatura" required>
        <input class="ccformfield" name="hora" type="text" placeholder="Ingrese hora" required>
        <input class="ccformfield" name="fecha" type="text" placeholder="Ingrese fecha" required>
        <input class="ccformfield" name="anem" type="text" placeholder="Ingrese anemómetro" required>
        <input class="ccbtn" type="submit" value="Submit">
    </div>
    </form>
    </div>
	</section>
    

<?php
error_reporting(E_ERROR);
$temperatura=$_POST['temperatura'];
$hora=$_POST['hora'];
$fecha=$_POST['fecha'];
$anem=$_POST['anem'];
if ($temperatura==null) {

}else{
    $envio_registro = $miconexion->insert_Gaona("insert into gaona_sensor (id, temperatura, hora, fecha, adem)
     values ('','$temperatura', '$hora', '$fecha', '$anem')");
     

    if ($envio_registro == 0) {
        echo ' <script language="javascript">alert("Error: No se pudo guardar dato");</script> ';
    }
    else{
        echo ' <script language="javascript">alert("Dato registrado con éxito");</script> ';
        echo ' <script language="javascript">location.href="index.php";</script> '; 
    }
}


$miconexion->consulta("select id, temperatura,hora,fecha,adem from gaona_sensor");
$miconexion->gaonaTable();

?>
<!--<canvas id="myCanvas"></canvas>
<script type="text/javascript" src="script.js"></script>-->
</main>


<?php

    include('../../adm_footer.php');
    

?>




