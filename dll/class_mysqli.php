<?php
class clase_mysqli{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	/*identificacion de error y texto de error*/
	var $Errno = 0;
	var $Error = "";
	/*identificacion de conexion y consulta*/
	var $Conexion_ID=0;
	var $Consulta_ID=0;
	/*constructor de la clase*/
	function clase_mysqli($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	/*conexion al servidor de db*/
	function conectar($host, $user, $pass, $db){
		if($db != "")$this->BaseDatos=$db;
		if($host != "")$this->Servidor=$host;
		if($user != "")$this->Usuario=$user;
		if($pass != "")$this->Clave=$pass;
		/*conectar al servidor*/
		$this->Conexion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if(!$this->Conexion_ID){
			$this->Error="Ha fallado la conexion";
			return 0;
		}
		return$this->Conexion_ID;
	}
	function consulta($sql=""){
		if($sql==""){
			$this->Error="NO hay ninguna sentencia sql";
			return 0;
		}
		/*Ejecutar la cunsulta*/
		//$this->Consulta_ID=$this->Conexion_ID->query($sql);
		$this->Consulta_ID=mysqli_query($this->Conexion_ID,$sql);

		if(!$this->Consulta_ID){
			print $this->Conexion_ID->error;
			//$this->Errno->error;
		}
		return $this->Consulta_ID;
	}

	function consultaID($query){
		$link = mysqli_connect($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);

		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Error de conexión: %s\n", mysqli_connect_error());
			exit();
		}
		mysqli_query($link, $query);
		$id_query =  mysqli_insert_id($link);
		/* close connection */
		mysqli_close($link);

		return $id_query;
	}


	/*retorna el numero de campos de la consulta*/
	function numcampos(){
		return mysqli_num_fields($this->Consulta_ID);
	}
	/*retorna de campos de la consulta*/
	function numregistros(){
		return mysqli_num_rows($this->Consulta_ID);
	}
	function verconsulta(){
		echo "<table id='tablec' border=1>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		echo  "<td>Moficar</td>";
		
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) {
				echo "<td>".utf8_encode($row[$i])."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	function verconsulta_crud(){
		echo "<table class='tablecud'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) {
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}
		echo  "<th>Actualizar</th>";
		echo  "<th>Borrar</th>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) {
				echo "<td>".utf8_encode($row[$i])."</td>";
			}
			echo "<td><a href='actualizar.php?id=$row[0]'><i class='fas fa-edit'></i></a></td>";
			echo "<td><a href='borrar.php?idr=$row[0]'><i class='fas fa-trash-alt'></i></a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function verconsulta_maria(){
		echo "<table class='tablecud'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) { 
			//echo "<td>".$this->nombrecampo($i)."</td>";
			echo  "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}

		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".utf8_encode($row[$i])."</td>";
				
			}
			echo '<td><a href="">Modificar</a><td>';
			echo '<td><a href="">Elimimar</a><td>';
			echo "</tr>";

		}
		echo "</table>";
	}

    function verconsulta_sensores(){
        echo "<table class='table'>";
        echo "<tr>";
        for ($i=0; $i < $this->numcampos() ; $i++) {
            //echo "<td>".$this->nombrecampo($i)."</td>";
            echo  "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
        }
        echo "</tr>";
        while ($row=mysqli_fetch_array($this->Consulta_ID)) {
            echo "<tr>";
            for ($i=0; $i < $this->numcampos(); $i++) {
                echo "<td>".utf8_encode($row[$i])."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

	function consulta_lista(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i=0; $i < $this->numcampos(); $i++) {
				$row[$i];
			}
			return $row;
		}
	}


	function insertar($sql=""){

    
    function verconsulta_jaramilloluis(){
		echo "<table class='table_examen'>";
		echo "<tr>";
        echo  "<th class='t1'>ID</th>";
        echo  "<th>Temperatura</th>";
        echo  "<th>Hora</th>";
		echo  "<th>Fecha</th>";
		echo  "<th>Velocidad</th>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
    
    function verconsulta_jaramilloluishora(){
		echo "<table class='table_examen'>";
		echo "<tr>";
        echo  "<th>Hora</th>";
		echo  "<th>Velocidad</th>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
    
    function verconsulta_jaramilloluisfecha(){
		echo "<table class='table_examen'>";
		echo "<tr>";
        echo  "<th>Fecha</th>";
		echo  "<th>Velocidad</th>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";



	function insert_Gaona($sql=""){

	function insertar_villavicencio($sql=""){
		$estado;
		if($sql==""){
			$this->Error="NO hay ninguna sentencia sql";
			return 0;
		}
		
		$this->Insertar_ID=mysqli_query($this->Conexion_ID,$sql);

		if(!$this->Insertar_ID){
			print $this->Conexion_ID->error;
			$estado = 0;
		}
		else{
			$estado = 1;
		}
		return $estado;
	}


	function vernoticia(){
		echo '<table class="tabla">';

		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo '<tr class="fila">';
			//for ($i=0; $i < $this->numcampos(); $i++) { 
				echo '<td class="col_fecha">'.$row['fecha']. '<br><br><a href="editar_noticia.php?variable_id='.$row['idNoticia'].'"><span class="icon-pencil" title="Modificar"></span></a><br><br><a href="eliminar_noticia.php?variable_id='.$row['idNoticia'].'"><span class="icon-bin" title="Eliminar"></span></a></td>';
				echo '<td class="col_contenido"> <a class="col_titulo" href="noticia.php?variable_id='.$row['idNoticia'].'" target="_blank">'. $row['titulo']. "</a>" .'<br><br><p class="col_des">' . $row['descripcion'] ."</p></td>";
				echo "<td>". '<img src="'. $row['imagen'] . '" width="250px" />' ."</td>";
				
			//}
			echo "</tr>";
		}
		echo "</table>";
	}

	function vercategoria_noticia(){
		$combobit = "";
		if (mysqli_num_rows($this->Consulta_ID)) {
			/*$valor = "ok";
			$combobit = "<option value='0'>" . $valor . "</option>";*/
			while ($row=mysqli_fetch_array($this->Consulta_ID)) {
				$combobit .= "<option value='" . $row['idCategoria'] . "'>" . $row['categoria'] . "</option>";
			}
		}
		/*else{
			$valor = "Error";
			$combobit = "<option value='0'>" . $valor . "</option>";
		}*/

		return $combobit;
	}

	function modificar_noticia(){
		$row=mysqli_fetch_array($this->Consulta_ID);
		echo '<div class="noticia">';
		echo '<form method="post" enctype="multipart/form-data"  action="" id="image-form" name="form2">';
		echo '<div class="three_col">';

		echo '<select required="required" title="Categoría" name="id_categoria2" id="sel">';
			$miconexion = new clase_mysqli;
			$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
			$miconexion->consulta("Select * from categoria");
		echo $miconexion->vercategoria_noticia();
		echo "<script>";
		echo "$(document).ready(function(){";
  		echo '$("#sel").val("'.$row['idCategoria'].'")';
		echo "});";
		echo "</script>";
		echo '</select>';
		echo '<input type="text" name="fecha2" title="Fecha" placeholder="Fecha" class="default" readonly="readonly" msg="Error for First name" value="'.$row['fecha'].'">';
		echo '<span class="error"></span>';
		echo '<input type="text" name="autor2" placeholder="Autor (Máximo 45 caracteres)" class="default" msg="Error for Last name" required="required" maxlength="45" value="'.$row['autor'].'">';
		echo '<span class="error"></span>';
		echo '</div>';
		echo '<div class="one_col email">';
		echo '<input type="text" name="titulo2" placeholder="Título (Máximo 100 caracteres)" class="default" msg="Please enter a valid email" required="required" maxlength="100" value="'.$row['titulo'].'">';
		echo '</div>';
		echo '<div class="one_col">';
		echo '<textarea rows="2" cols="20" placeholder="Entradilla (Máximo 225 caracteres)" name="entradilla2" required="required" id="entradilla" maxlength="225">'.$row['descripcion'].'</textarea>';
		echo '</div>';
		echo '<div class="one_col2">';
		echo '<textarea rows="10" cols="20" placeholder="Contenido (Máximo 5000 caracteres)" name="contenido2" required="required" class="contenido2" id="contenido2" maxlength="5000">'.$row['contenido'].'</textarea>';
		echo '</div>';
		echo '<div class="one_col file-upload">';
		echo '<div id="file"><ul id="image-list"><p>Click or Drag in an image to upload</p></ul></div>';
		echo '<input type="file" class="file" name="imagen2" id="images" />';
		echo '<input type="text" class="file" name="imagen22" readonly="readonly" id="images" value="'.$row['imagen'].'"/>';

		echo '<span class="error"></span>';
		echo '</div>';
		echo '<div class="one_col">';
		echo '<input id="submit" type="submit" value="Guardar Noticia" />';
		echo '</div>';
		echo '<span class="clear"></span>';
		echo '</form>';
		echo '</div>';
	}


	function eliminar_noticia(){
		$row=mysqli_fetch_array($this->Consulta_ID);
		echo '<section id="sec_eliminar">';
		echo '<table class="tabla">';

		
			echo '<tr class="fila">';
			//for ($i=0; $i < $this->numcampos(); $i++) { 
				echo '<td class="col_fecha">'.$row['fecha']. '</td>';
				echo '<td class="col_contenido"> <a class="col_titulo" href="noticia.php?variable_id='.$row['idNoticia'].'" target="_blank">'. $row['titulo']. "</a>" .'<br><br><p class="col_des">' . $row['descripcion'] ."</p></td>";
				echo "<td>". '<img src="'. $row['imagen'] . '" width="250px" />' ."</td>";
				
			//}
			echo "</tr>";
		
		echo "</table>";
		echo '<form method="post" enctype="multipart/form-data"  action="" name="formeliminar">';
		echo '<input type="text" name="inputeliminar" title="Fecha" placeholder="Fecha" class="ideliminar" value="'.$row['idNoticia'].'">';
		echo '<input id="submiteliminar" type="submit" value="Eliminar Noticia" />';
		echo '</form>';
		echo '</section>';
	}

	function noticia(){
		$row=mysqli_fetch_array($this->Consulta_ID);
		echo '<section id="secnoticia">';
		echo '<p id="ptitulo">'.$row['titulo'].'</p>';
		echo '<div>';
		echo '<img src="'. $row['imagen'] . '" width="100%" />';
		echo '<p id="pdes">'.$row['descripcion'].'</p><p id="pautor">'.$row['autor'].'</p>';
		echo '</div>';
		echo '<div id="divcate">';
		echo '<p id="pcate">'.$row['categoria'].' | '.$row['fecha'].'</p>';
		echo '</div>';
		echo '<div id="divcont">';
		echo '<p id="pcont">' . $row['contenido'] . '<p>';
		echo '</div>';
		echo '</section>';
		
	}

	function noticias_izquierda(){
		echo '<section id="secnoticia2">';
		echo '<div id="divmas">';
		echo '<p>MÁS EN NOTICIAS</p>';
		echo '</div>';
		echo '<table class="tabla3">';
	
		for ($i=0; $i <= 4; $i++) { 
			$row=mysqli_fetch_array($this->Consulta_ID);
			echo "<tr>";
				echo '<td class="col_contenido"> <a class="col_titulo" href="noticia.php?variable_id='.$row['idNoticia'].'">'. $row['titulo']. "</a></td>";
				echo "<td>". '<img src="'. $row['imagen'] . '" width="100px" />' ."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
		
		echo '</section>';
	}

	/*Funcion para presentar las tres ultimas noticias*/

	function tres_noticias(){
		echo '<section class="noticias">';
		echo '<a name="notices"></a>';
		echo '<h2>Noticias</h2>';
		for ($i=0; $i < 3; $i++) { 
			$row=mysqli_fetch_array($this->Consulta_ID);
			echo '<section class="noticiadetalle">';
			echo '<img src="administrator/adm_notices/' .$row['imagen']. '">';
			echo '<a href="noticia.php?variable_id='.$row['idNoticia'].'" target="_blank">'.$row['titulo'].'</a>';
			echo '<p>'.$row['descripcion'].'</p>';
			echo '</section>';
		}
		
		echo '<br><br>';
		echo '<h3><a href="modules/noticias.php">Mas información</a></h3>';
		echo '</section>';

	function gaonaTable(){
		echo '<table cellspacing="0" cellpadding="0" id="tabla" class="tabla">';

	function tabla_villavicencio(){
		$response = array();
		$posts = array();
		echo '<table cellspacing="0" cellpadding="0" id="mi-tabla" class="tabla">';

		echo '<thead>';
		echo '<tr>';
		for ($i=0; $i < $this->numcampos() ; $i++) { 
			echo '<th><span>'. mysqli_fetch_field_direct($this->Consulta_ID, $i)->name .'</span></th>';

		}
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo '<tr>';
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>". $row[$i] ."</td>";

			}
			echo "</tr>";
		}

		echo '</tbody>';
		echo '</table>';


			}
			echo "</tr>";
			$temperatura=$row['temperatura'];
			$hora=$row['hora'];
			$fecha=$row['fecha'];
			$velocidad=$row['velocidad'];
			$posts[] = array('temperatura'=> $temperatura, 'hora'=>$hora, 'fecha'=>$fecha, 'velocidad'=>$velocidad);
		}

		$response = $posts;

		$fp = fopen('results.json', 'w');
		fwrite($fp, json_encode($response));
		fclose($fp);
		
		echo '</tbody>';
		echo '</table>';	

	}

	function verCrudFebre(){
		echo "<div class='main-containerS'>";
    	echo "<a href='nuevoServicio.php'> <button type='button' class='btnNuevo'>Nuevo</button> </a>" ;
  	    echo "<table class='customers'>";
  		echo  "<thead>";
        echo     "<tr>";
  			       echo " <th>Id</th> ";
  			       echo " <th>Hora</th> ";
					 echo " <th>Temperatura</th> ";
					 echo " <th>Fecha</th> ";
					 echo " <th>Anemometro</th> ";
				 
               	  
                   echo "</tr>";
  		           echo " </thead>";
		           echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
				echo "<tr>";
				echo "<td>".utf8_encode($row["id_febre"])."</td>";
				echo "<td>".utf8_encode($row["hora"])."</td>";
            	echo "<td>".utf8_encode($row["temperatura"])."</td>";
            	echo "<td>".utf8_encode($row["fecha"])."</td>";
				echo "<td>".utf8_encode($row["anemometro"])."</td>";
				
			echo "</tr>";
		}
		echo "</table>";
		echo "</div>";

	}

	function consultaCrudServicios(){
		echo "<div class='main-containerS'>";
    	echo "<a href='nuevoServicio.php'> <button type='button' class='btnNuevo'>Nuevo</button> </a>" ;
  	    echo "<table class='customers'>";
  		echo  "<thead>";
        echo     "<tr>";
  			       echo " <th>Id Servicio</th> ";
  			       echo " <th>Nombre</th> ";
  			       echo " <th>Inicio Temporada</th> ";
				   echo " <th>Fin Temporada</th> ";
				   echo " <th>Capacidad</th> ";
  			       echo " <th>Responsable</th> ";
  			       echo " <th>InformaciÃ³n</th> ";
               	   echo " <th>Foto</th> ";
               	   echo " <th>Accion 1</th> ";
                   echo " <th>Accion 2</th> ";
                   echo "</tr>";
  		           echo " </thead>";
		           echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
				echo "<tr>";
				echo "<td>".utf8_encode($row["id_servicios"])."</td>";
				echo "<td>".utf8_encode($row["nom_servicio"])."</td>";
            	echo "<td>".utf8_encode($row["fecha_ini_tem"])."</td>";
            	echo "<td>".utf8_encode($row["fecha_fin_tem"])."</td>";
				echo "<td>".utf8_encode($row["capacidad"])."</td>";
				echo "<td>".utf8_encode($row["responsable"])."</td>";
				echo "<td>".utf8_encode($row["informacion"])."</td>";
            	$direccion = $row['galeria'];
            	echo "<td><img src='../../images/". $direccion ."' border='0' width='200' height='100' /></td>";
			

				echo "<td><a href='modifServicio.php?no=".$row['id_servicios']."'> <button type='button' class='btnModificar'>Modificar</button> </a></td>";
				echo " <td><a href='eliminarServicio.php?no=".$row['id_servicios']."'> <button type='button' class='btnEliminar'>Eliminar</button> </a></td>";

			
			echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
	}


	function consulta3Servicios(){

			echo "<h2>Servicios</h2>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<section class ='serviciodetalle'>";
			$direccion = $row['galeria'];
			echo "<img src='images/".$direccion."'>";
			echo "<h3>".utf8_encode($row["nom_servicio"])."</h3>";
			echo "<p>".utf8_encode($row["informacion"])."</p>";
		
			echo "</section>";

		}

	}

	function consultarTodosServicios(){
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<div class='product'>";
			$direccion = $row['galeria'];
			echo "<img src='images/".$direccion."' class='product-img'>";
			echo "<div class='product-content'> </div>";
			echo "<h3 class='product-title'>".utf8_encode($row["nom_servicio"])."</h3>";
			echo "<p>".utf8_encode($row["informacion"])."</p>";
			echo "<p class='fintprint'>".utf8_encode($row["responsable"])."</p>";
			echo "</div>";

		}

	}
}
?>