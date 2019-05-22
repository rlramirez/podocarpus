<?php
extract($_GET);
include('../adm_header.php');
$miconexion->consulta("delete from lugares where idLugares=$idr");
echo "<script>location.href='index.php'</script>";
?>