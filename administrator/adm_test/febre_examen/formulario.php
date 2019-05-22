<?php
	include('../../adm_header.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosFebre.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3 class="titulo">Formulario</h3> 
  	<div class="main-container">
	  	<form form action="agregar.php" method="POST" enctype="multipart/form-data">
          <input  type="hidden" id="idServicio" name="idServicio" placeholder="Id Servicio"><br>

        <label>Hora</label>
  		<input class="text" type="text" id="hora" name="hora" placeholder="Hora"><br>

		<label>Temperatura</label>
  		<input class="text" type="text" id="temperatura" name="temperatura" placeholder="Temperatura"><br>

		

		<label>Fecha</label>
  		<input class="text" type="date" id="fecha" name="fecha" placeholder="Fecha"><br>


  		<label>Anemometro</label>
  		<input class="text" type="text" id="anemometro" name="anemometro"  placeholder="Anemometro"><br>

		<br>

  		<input class="submi" type="submit" value="Enviar">

     </form>

  	</div>

      <?php
	include('../../adm_footer.php');
    ?>


    
</body>
</html>






