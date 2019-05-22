<?php 
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'podocarpusdb') or die(mysqli_error($mysqli));

if (isset($_POST['guardar'])){
    $temperatura= $_POST['temperatura'];
    $hora= $_POST['hora'];
    $fecha= $_POST['fecha'];
    $medidor= $_POST['medidor'];

    $_SESSION['message'] = "Guardado";
    $_SESSION['msg_type'] = "sucess";

    $mysqli->query("INSERT INTO guarnizo_examen (temperatura, hora, fecha, medidor) 
    VALUES ('$temperatura', '$hora', '$fecha', '$medidor')")
    or die($mysqli->error);
    header("location: index.php");
    
}

?>