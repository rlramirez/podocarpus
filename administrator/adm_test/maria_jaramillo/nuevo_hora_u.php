<?php

	extract($_POST);
	include('../../adm_header.php');
	$miconexion->consulta("SELECT temperatura, anemometro, hora FROM jaramillomaria_examen WHERE hora Between $hora1 And $hora2");
    $miconexion->verconsulta_maria();
    //ejecutamos la consulta
	//obtenemos número filas
	
	 
	//cargamos array con los nombres de las métricas a visualizar
	$datos[0] = array('temperatura','hora');
	 
	//recorremos filas
	for ($i=1; $i<($miconexion->numregistros()+1); $i++)
	{
	    $datos[$i] = array($miconexion->consulta_lista($result, $i-1, "temperatura"),
	    (int) $miconexion->consulta_lista($result, $i-1, "hora"));
	}
	 
	mysql_close($conexion);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" > </script>
<!-- Load the AJAX API -->
<script type="text/javascript" src="https://www.google.com/jsapi" > </script>
<script type="text/javascript"
src="https://www.google.com/jsapi?autoload={
'modules':[{
'name':'visualization',
'version':'1',
'packages':['corechart']
}]
}"></script>
 
<script type="text/javascript">
google.setOnLoadCallback(drawChart);
 
function drawChart() {
 
//cargamos nuestro array $datos creado en PHP para que se puede utilizar en JavaScript
var cargaDatos = <?php echo json_encode($datos); ?>;
 
var datosFinales = google.visualization.arrayToDataTable(cargaDatos);
 
var options = {
title: 'Ejemplo gráfica',
curveType: 'function',
legend: { position: 'bottom' }
};
 
var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
 
chart.draw(datosFinales, options);
}
 
</script>
</head>
<body>
<div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>
</html>
