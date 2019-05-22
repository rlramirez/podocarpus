<?php
include("security/security.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<meta charset="utf-8">
	<meta name="description" content="Visualización de aves del Ecuador">
	<meta name="keywords" charset="aves, ecuador, turismo, loja, bird">
	<meta name="author" content="UTPL by @rlramirez">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/administrator/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/administrator/adm_birds/adm_birds_css/estilos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>/administrator/adm_birds/adm_birds_css/fontello.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $site_url;?>/administrator/adm_test/juan_pachar/css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
	<header>
		<h1><i class="fas fa-seedling"></i> DASHBOARD ADMINSITRATOR</h1>
		<nav class="top-menu">
			<div class="nameperfil"> <i class="fas fa-male"></i> <?php echo utf8_encode($_SESSION['nombre']);?></div>
			<a href=""><i class="fas fa-user-alt"></i> Perfir</a>
			<a href="<?php echo $site_url;?>/administrator/security/exit.php?salir=true"><i class="fas fa-power-off"></i> Salir</a>
		</nav>
	</header>
	<nav class="mainmenu">
		<a href="<?php echo $site_url; ?>/administrator/">Dashboard</a>
		<a href="<?php echo $site_url; ?>/administrator/adm_birds/index.php">Aves</a>
		<a href="">Noticias</a>
		<a href="">Servicios</a>
		<a href="../adm_lugares/index.php">Lugares</a>
		<a href="">Personal</a>
		<a href="../adm_visitas/index.php">Visitas</a>
		<a href="">Sensores</a>
		<a href="<?php echo $site_url; ?>/administrator/adm_activities/index.php">Actividades</a>
		<a href="<?php echo $site_url; ?>/administrator/adm_test/index.php" >Examenes</a>
	</nav>