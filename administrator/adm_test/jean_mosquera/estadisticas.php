<?php
	include('../../adm_header.php');
	$sql = "SELECT temperatura,hora,fecha,vel_viento from mosquera_examen;";

?>
<html>
<head>
    <title>Sensores Data Viz</title>
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
	<script src="http://code.highcharts.com/stock/highstock.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>

<script type='text/javascript'>
</script>
<script type='text/javascript'>

$(function () {
    $(document).ready(function() {
        Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });

        var chart;
        $('#container').highcharts({
            chart: {
                type: 'column',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function() {

                    }
                }
            },
              data: {
   				 table: 'tablec'
  			},
            title: {
                text: 'Promedios por hora'
            },

            legend: {
                enabled: true
            },
            exporting: {
                enabled: true
            }


        });
    });

});



</script>

</head>

<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="index.php"><i class="fas fa-arrow-circle-left"></i> Retornar</a>
			<a href="statsh.php"><i class="fas fa-clock"></i> Promedios por hora</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
			//SELECT AVG(temperature), DATE(date), HOUR(date) FROM data GROUP BY DATE(date), HOUR(date)
				$miconexion->consulta("select fecha,AVG(temperatura), AVG(vel_viento)  from mosquera_examen GROUP BY fecha");
				$miconexion->verconsulta();
			?>
		</section>
<div id="container"></div>
	</section>

</main>

<?php
	include('../../adm_footer.php');
?>