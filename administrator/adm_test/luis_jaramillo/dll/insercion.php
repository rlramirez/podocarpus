<?php
	extract($_POST);
	include('../../../adm_header.php');
	$miconexion->consulta("insert into jaramillo_examen values ('','$temperatura','$hora','$fecha','$velocidad')");
	echo'<script type="text/javascript">
    alert("Datos Guardados Correctamente");
    window.location.href="../index.php";
    </script>';
?>