<?php
include('../../adm_header.php');
?>
        <main class="principal my-5">
            <div class="container">
                <div class="row">
                    <section class="col-md-8">
                        <div id="container" style="width: 100%;">
                            <canvas id="canvas"></canvas>
                        </div>
                    </section>
                    <section class="col-md-4">
                        <div>
                            <?php
                            $miconexion->consulta("SELECT idSensores Id, temperatura Temperatura, hora Hora, fecha Fecha, anemometro Anemometro FROM pachar_sensores");

                            $miconexion->verconsulta_sensores();
                            ?>
                        </div>
                    </section>
                </div>
                <a href="nuevo.php" class="btn btn-success">Insertar registro</a>
            </div>
        </main>
    <script>
        var popCanvas = document.getElementById("canvas").getContext("2d");

        var barChart = new Chart(popCanvas, {
            type: 'bar',
            data: {
                labels: ["08:00", "09:00", "10:00", "18:00", "19:00"],
                datasets: [{
                    label: 'Menor velocidad del viento',
                    data: [30, 345, 234, 55, 275],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                    ]
                }]
            }
        });
    </script>
<?php
include('../../adm_footer.php');
?>