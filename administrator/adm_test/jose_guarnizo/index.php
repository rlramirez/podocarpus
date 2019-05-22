<?php
	include('../../adm_header.php');
?>
<main style="background-color: #558CD5;">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="libaries/plotly-latest.min.js"></script>
<br>
<div class="row justify-content-center">
	<form action="proceso.php" method="POST">
		<h2>Formulario de Registro</h2>

		<div class="form-group">
            <label>Temperatura</label>
            <input type="number" class="form-control" name="temperatura" 
            value="<?php $temperatura; ?>">
		</div>
		<div class="form-group">
            <label>Hora</label>
            <input type="text" class="form-control" name="hora" 
            value="<?php $hora; ?>">
		</div>
		<div class="form-group">
            <label>Fecha</label>
            <input type="date" class="form-control" name="fecha" 
            value="<?php $fecha; ?>">
		</div>
		<div class="form-group">
            <label>Medidor</label>
            <input type="number" class="form-control" name="medidor" 
            value="<?php $medidor; ?>">
		</div>	
		
		<div class="form-group">
		<button type="submit" class="btn btn-primary" name="guardar">Guardar</button>	
		</div>
	</form>
</div>

<br>
<br>

<div class='container'>
<?php $mysqli = new mysqli('localhost', 'root', '', 'podocarpusdb')
                        or die(mysqli_eror($mysqli));
              $result = $mysqli->query("SELECT * FROM guarnizo_examen") or die($mysqli->eror);              
            ?>
<div class="row justify-content-center">
	<h2>Datos en Tablas</h2>
	<table class="table">
	<thead>
        <tr>
            <th>Temperatura</th>
            <th>Hora</th>
			<th>Fecha</th>
			<th>Medidor</th>
        </tr>
	</thead>
	
	<?php
		while ($row = $result->fetch_assoc()): ?>
		<tr>
			<td><?php echo $row['temperatura']; ?></td>
			<td><?php echo $row['hora']; ?></td>
			<td><?php echo $row['fecha']; ?></td>
			<td><?php echo $row['medidor']; ?></td>
		</tr>
		<?php endwhile; ?>
	</table>
</div>

</div>

<br>
<br>

<div class="panel panel-primary">
	<h2>Grafica</h2>	
	<div clas="panel panel-body">
		<div class="row">		
			<div id="cargaLineas"></div>			
		</div>
	</div>
</div>



<script type="text/javascript">
	$(document).ready(function(){
		$('#cargaLineas').load('lineas.php');		
	})
</script>

</main>
<?php
	include('../../adm_footer.php');
?>