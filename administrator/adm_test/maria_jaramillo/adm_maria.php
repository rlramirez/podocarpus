<?php
	include('../adm_header.php');
?>
<main>
	<?php
		$miconexion->consulta("select * from jaramillomaria_examen");
		$miconexion->verconsulta();
	?>
</main>
<?php
	include('../adm_footer.php');
?>