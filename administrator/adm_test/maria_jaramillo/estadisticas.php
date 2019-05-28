<?php
  include('../../adm_header.php');
  include('../../style_maria.css')
?>
<main>
  <section class="modulo-maria">
    <nav class="nav_modulo">
      <a href="nuevo_maria.php"><i class="fas fa-user-plus"></i> Registro</a><br>
    </nav>
  </section>
  <section class="area_trabajo">
    <section class="contenido_mod">
      <?php
      extract($_POST);
      include('../../adm_header.php');
      $miconexion->consulta("SELECT temperatura, anemometro FROM jaramillomaria_examen WHERE time Between $hora1 And $hora2");
      $miconexion->verconsulta_maria();
      ?>
    </section>
  </section>
  
</main>
<?php
  include('../../adm_footer.php');
?>
  <table id="q-graph">
  <caption>Quarterly Results</caption>
  <thead>
  <tr>
  <th></th>
  <th class="sent">Invoiced</th>
  <th class="paid">Collected</th>
  </tr>
  </thead>
  <tbody>
  <tr class="qtr" id="q1">
  <th scope="row">Q1</th>
  <td class="sent bar" style="height: 111px;"><p>$18,450.00</p></td>
  <td class="paid bar" style="height: 99px;"><p>$16,500.00</p></td>
  </tr>
  <tr class="qtr" id="q2">
  <th scope="row">Q2</th>
  <td class="sent bar" style="height: 206px;"><p>$34,340.72</p></td>
  <td class="paid bar" style="height: 194px;"><p>$32,340.72</p></td>
  </tr>
  <tr class="qtr" id="q3">
  <th scope="row">Q3</th>
  <td class="sent bar" style="height: 259px;"><p>$43,145.52</p></td>
  <td class="paid bar" style="height: 193px;"><p>$32,225.52</p></td>
  </tr>
  <tr class="qtr" id="q4">
  <th scope="row">Q4</th>
  <td class="sent bar" style="height: 110px;"><p>$18,415.96</p></td>
  <td class="paid bar" style="height: 195px;"><p>$32,425.00</p></td>
  </tr>
  </tbody>
  </table>

  <div id="ticks">
  <div class="tick" style="height: 59px;"><p>$50,000</p></div>
  <div class="tick" style="height: 59px;"><p>$40,000</p></div>
  <div class="tick" style="height: 59px;"><p>$30,000</p></div>
  <div class="tick" style="height: 59px;"><p>$20,000</p></div>
  <div class="tick" style="height: 59px;"><p>$10,000</p></div>
  </div>
</body>
</html>