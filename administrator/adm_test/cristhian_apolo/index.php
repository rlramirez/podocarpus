<?php
include('../../adm_header.php');
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css"></script>

<main>
	<section>
		<h3>Mi examen desarrollado</h3>
	</section>
	<section class="area">
		<section class="contenido_mod">
			<h2>Sensor Meteorológico</h2>
			<hr>
			<div class="form-style">
				<h1>Datos Sensor</h1>
				<!-- Metodo post para guardar formulario -->
				<form method="post" action="nuevo_sensor.php">
					<input type="number" name="temperatura" placeholder="Temperatura">
					<input type="time" name="hora" placeholder="Hora">
					<input type="date" name="fecha" placeholder="Fecha">
					<input type="number" name="velocidad" placeholder="Nudos">
					<input type="submit" value="Enviar" />

					<!-- required="required"
						required="required"
						required="required"
						required="required"
						-->
					<hr>

					<button onclick="showGraph()">Visualizar chart</button>
					<div id="chart-container">
						<canvas id="graphCanvas">Hola</canvas>
					</div>
				</form>


				<?php
				$miconexion->consulta("SELECT * FROM `apolo_examen`");
				$miconexion->verconsulta();
				?>

			</div>
		</section>
	</section>


	<script>
		object.onclick = showGraph();


		function showGraph() {
			{
				$.post("nuevo_sensor.php",
					function(data) {
						console.log(data);
						var name = [];
						var marks = [];

						for (var i in data) {
							name.push(data[i].student_name);
							marks.push(data[i].marks);
						}

						var chartdata = {
							labels: name,
							datasets: [{
								label: 'Student Marks',
								backgroundColor: '#49e2ff',
								borderColor: '#46d5f1',
								hoverBackgroundColor: '#CCCCCC',
								hoverBorderColor: '#666666',
								data: marks
							}]
						};

						var graphTarget = $("#graphCanvas");

						var barGraph = new Chart(graphTarget, {
							type: 'bar',
							data: chartdata
						});
					});
			}
		}
	</script>



</main>
<?php
include('../../adm_footer.php');
?>