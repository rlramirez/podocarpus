<?php
include('../../adm_header.php');
?>
<main>
	<link rel="stylesheet" type="text/css" href="estilos/estilos_tabla.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script> 
	<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
	<section class="content">
	

		<h3>Temperaturas registradas</h3>
		<a href="registro.php" class="boton azul">Nuevo Dato</a>
		<?php
			
			$miconexion->consulta("Select * from villavicencio_examen ORDER BY fecha DESC");
			echo $miconexion->tabla_villavicencio();
			//$miconexion->desconectar();
		?>

		<div id="fre_tw">
		<h2>Velocidad y Temperatura por horas del dia</h2>

		<p>Esta gráfica muestra la velocidad del viento y la temperatura en las diferentes horas del dia (La temperatura se muestra en grados centigrados y la velocidad en Km/h).</p>

		<canvas id="lifeChart"></canvas>
	<script type="text/javascript">
			$.getJSON("results.json",function (dataset) {
				
				var canvaBar = document.getElementById('lifeChart');
				var contextoBar = canvaBar.getContext("2d");

				var	dataBar = {
					labels: dataset.map((el) => el.hora),

					datasets: [{
						label: 'Temperatura del ambiente',
						backgroundColor: 'rgba(   84, 153, 199  )',
						borderColor: 'rgba( 84, 153, 199 )',
						borderWidth: 2,
						data: dataset.map((el) => el.temperatura)
					},{

						label: 'Velocidad del viento',
						backgroundColor: 'rgba(  241, 196, 15  )',
						borderColor: 'rgba( 241, 196, 15 )',
						borderWidth: 2,
						data: dataset.map((el) => el.velocidad)
					}]
				};


				var optionsBar = {
					responsive: true,
					scales:{
						xAxes:[{
							scaleLabel:{
								display: true,
								labelString: "Hora",
								fontColor: "black",
								fontSize: 18,
								fontFamily: 'Helvetica',
							}
						}],
						yAxes:[{
							scaleLabel:{
								display: true,
								labelString: "Medidad",
								fontColor: "black",
								fontSize: 18,
								fontFamily: 'Helvetica',
							}
						}]
					},
					title: {
						display: true,
						text: 'Publicaciones por fecha',
						fontSize: 20,
						fontFamily: 'Helvetica'
					},
					legend:{
						display: true
					}
				};
				
				var chartBar = new Chart(contextoBar, {
					type: 'bar',
					data: dataBar,
					options: optionsBar
				});
				
			});

		</script>
	</div>
	</section>

	

</main>
<?php
include('../../adm_footer.php');
?>