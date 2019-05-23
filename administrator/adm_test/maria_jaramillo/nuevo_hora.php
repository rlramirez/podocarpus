<?php
  include('../../adm_header.php');
?>
<main>
  <section class="modulo-servicios">
    <nav class="nav_modulo">
      <a href="nuevo_maria.php"><i class="fas fa-user-plus"></i> Usuario</a><br>
      <a href="nuevo_hora_u.php"><i class="fas fa-user-plus"></i> Estadística</a><br>

    </nav>
  </section>
  <section class="area_trabajo">
    <section class="contenido_mod">
      <h3>Seleccione las horas</h3>
      <form method="post" action="nuevo_hora_u.php">
        <div class="contenedor-inputs">
          <input type="number" name="hora1" placeholder="Hora1" required="required">
          <input type="number" name="hora2" placeholder="Hora2" required="required" step='1'>

        </div>
        <input type="submit" class="btn-submit" value="Guardar">
      </form>
    </section>
  </section>
  
</main>
<?php
  include('../../adm_footer.php');
?>