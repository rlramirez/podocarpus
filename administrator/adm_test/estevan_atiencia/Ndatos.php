<?php
  include('../../adm_header.php');
?>
<head>
  <link rel="stylesheet" href="estilosestevan.css">
</head>
<main>
  <section class="modulo-servicios">
    <nav class="nav_modulo">

      <a href="index.php"><i class="fas fa-user-cog"></i> Volver</a>
    </nav>
  </section>
  <section class="area_trabajo">
    <section class="contenido_mod">
      <h3>Nuevo Usuario</h3>
      <form method="post" action="Rdatos.php">
        <div class="contenedor-inputs">
          <input type="number" name="temperatura" placeholder="Temperatura" required="required">
          <input type="text" name="hora" placeholder="hora" required="required">
          <input type="text" name="fecha" placeholder="fecha" required="required">
          <input type="number" name="anemometro" placeholder="anemometro" required="required">
        </div>
        <input type="submit" class="submit" value="Guardar">
      </form>
    </section>
  </section>
  
</main>
<?php
  include('../../adm_footer.php');
?>