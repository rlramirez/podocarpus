<?php
include("../../../security/security.php");

$con = mysqli_connect("localhost", "root", "", "podocarpusdb");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    mysqli_query($con, "INSERT INTO quito_datos (hora,fecha,anemometro) VALUES ('$_POST[hora]', '$_POST[fecha]', '$_POST[anemometro]')");
    if ($miconexion) {
        echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="../index.php";</script>';
    } else {
        echo '<script type="text/javascript"> alert("Fallido"); window.location="../index.php";</script>';
        die("Error" . mysqli_error($miconexion));
    }
}
