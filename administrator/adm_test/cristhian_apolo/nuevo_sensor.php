<?php
extract($_POST);
include('../../adm_header.php');

$miconexion->consulta("INSERT INTO `apolo_examen` (`temperatura`, `hora`, `fecha`, `velocidad`) 
                            VALUES ($temperatura, '$hora', '$fecha', $velocidad)");




//header('Content-Type: application/json');


$miconexion->consultaID("SELECT * FROM `apolo_examen`");

$lista_s = $miconexion->consulta_lista();

/* header('Content-Type: application/json'); */

$data = array();
foreach ($lista_s as $row) {
    $data[] = $row;
}


echo json_encode($data);
//echo "<script>location.href='index.php'</script>";

?>