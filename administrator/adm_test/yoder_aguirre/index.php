<?php
	include('../../adm_header.php');
?>
<main>
	<section >
		<h3>Mi examen desarrollados</h3>
		<div class="contenedor">
		<div class="botones">
			<button type="button" onclick="formularioBtn()">Formularios</button>
			<button type="button" onclick="tablaBtn()">Datos en tablas</button>
			<button type="button" onclick="graficaBtn()">Estadisticas</button>
		</div>
		<!-- formulario de registro  -->
		<form id="formulario" method="POST" action="logica/agregar.php">
            <div class="form-group">
                <label for="temperatura">Temperatura</label>
                <input name="temperatura" required="required" type="number" class="form-control" id="temperatura" placeholder="Ingrese la temperatura">
            </div>
            <div class="form-group">
                <label for="hora">Hora</label>
                <input name="hora" required="required" type="time" class="form-control" id="hora" placeholder="Ingrese la hora">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input name="fecha" required="required" type="date" class="form-control" id="fecha" placeholder="Ingrese la fecha">
            </div>
            <div class="form-group">
                <label for="anemometro">Anemómetro</label>
                <input name="anemometro" required="required" type="number" class="form-control" id="anemometro" placeholder="Ingrese anemometro">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
		</div>
		<div id="tabla">
		<!-- presenta datos consulta -->
		<?php
			$miconexion->consulta("select * from yoderaguirre");
			$miconexion->verconsulta();
		?>
			
		</div>
		<!-- presenta grafica -->
		<div id="grafica">
			<canvas id="myChart"></canvas>
		</div>
	</section>
	
</main>

<script>
	// funciones para esconder divs 
	function esconderDivs() {
		document.getElementById("formulario").style.display = "none";	
		document.getElementById("tabla").style.display = "none";	
		document.getElementById("grafica").style.display = "none";	
        }
        window.onload = esconderDivs;
	function formularioBtn(){
		document.getElementById("formulario").style.display = "block";	
		document.getElementById("tabla").style.display = "none";	
		document.getElementById("grafica").style.display = "none";	
	}
	function graficaBtn(){
		document.getElementById("formulario").style.display = "none";	
		document.getElementById("tabla").style.display = "none";	
		document.getElementById("grafica").style.display = "block";	
	}
	function tablaBtn(){
		document.getElementById("formulario").style.display = "none";	
		document.getElementById("tabla").style.display = "block";	
		document.getElementById("grafica").style.display = "none";	
	}
	// obtener media de las ultimas 5 horas
	// SELECT AVG(`temperatura`) as media FROM yoderaguirre ORDER BY `fecha` DESC LIMIT 5
	// grafica

	

	var ctx = document.getElementById('myChart').getContext('2d');
	var chart = new Chart(ctx, {
		// tipo de grafica
		type: 'bar',
		// datos grafica
		data: {
			labels: ['Temperatura'],
			datasets: [{
				label: 'Media Temperatura',
				backgroundColor: 'rgb(255, 99, 132)',
				borderColor: 'rgb(255, 99, 132)',
				data: [23]
			}]
		},

		options: {}
	});
</script>


<?php
	include('../../adm_footer.php');
?>