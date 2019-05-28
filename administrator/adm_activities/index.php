<?php
	include('../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
<<<<<<< HEAD
		<a href="">Servicios</a>
		<a href="">Crud</a>
	</section>
	<section class="area_trabajo">
		<?php
			$miconexion->consulta("select id, nombre, apellido, correo, rol, user from usuarios");
			$miconexion->verconsulta();
		?>
=======
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Usuario</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Crud</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<?php
				$miconexion->consulta("select id, nombre,apellido,correo,rol,user from usuarios");
				$miconexion->verconsulta_crud();
			?>
		</section>
>>>>>>> 041167ca255354af9d7fca91e03001c02e559bd6
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>