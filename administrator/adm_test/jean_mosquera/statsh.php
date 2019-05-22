<?php
	include('../../adm_header.php');
	$sql = "SELECT temperatura,hora,fecha,vel_viento from mosquera_examen;";

?>
<html>
<head>
    <title>Sensores Data Viz</title>
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

	<link rel="stylesheet" type="text/css" href="css/estilos.css"/>

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
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function() {

                    }
                }
            },
            title: {
                text: 'Promedios por hora'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150
            },
            yAxis: {
                title: {
                    text: 'Value'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
                        Highcharts.numberFormat(this.y, 2);
                }
            },
            legend: {
                enabled: true
            },
            exporting: {
                enabled: true
            },
            series: [{
                name: 'Temperatura',
                data: (function() {
                   var data = [];
                                        data.push([1400976011000,0.000]);
                                    return data;
                })()
            },{
                name: 'Velocidad del Viento',
                     data: (function() {
                        var data = [];
                                        data.push([1400976011000,0.000]);

                                    return data;
                     })()
            }]
        });
    });

});


</script>

</script>
</script>

</head>

<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="index.php"><i class="fas fa-arrow-circle-left"></i> Retornar</a>
			<a href="estadisticas.php"><i class="fas fa-calendar-alt"></i> Promedios por dia</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
			//SELECT AVG(temperature), DATE(date), HOUR(date) FROM data GROUP BY DATE(date), HOUR(date)
				$miconexion->consulta("select hora,AVG(temperatura), AVG(vel_viento)  from mosquera_examen GROUP BY hora");
				$miconexion->verconsulta();
			?>
		</section>
<div id="container"></div>
	</section>

</main>

<?php
	include('../../adm_footer.php');
?>