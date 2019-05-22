<?php
include('../../adm_header.php');
?>

<main>

    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
    <link href='css/style.css' rel='stylesheet' type='text/css' />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


    <form class='form' method="post" action="dll/insertar_datos.php">
        <h2>RECOLECCION DE DATOS</h2>
        <div class="">
            <div class="form_item col-12 col-lg-5">
                <input type="text" name="temperatura" id="temperatura" class="form_input" required>
                <label for="temperatura" class="form_label">TEMPERATURA °C</label>
            </div>

            <div class="form_item col-12 col-lg-5">
                <input type="text" name="hora" id="hora" class="form_input" required>
                <label for="hora" class="form_label">HORA</label>
            </div>

            <div class="form_item col-12 col-lg-5">
                <input type="date" name="fecha">
                <label for="hora" class="form_label" min="2018-03-25" max="2018-05-25" required>FECHA</label>
            </div>

            <div class="form_item col-12 col-lg-5">
                <input type="text" name="anemometro" id="anemometro" class="form_input" required>
                <label for="anemometro" class="form_label">ANEMOMETRO</label>
            </div>

        </div>

        <div class="row justify-content-center">
            <button class="submit" type="submit">REGISTRAR</button>
        </div>
    </form>

    <?php
    $miconexion->consulta("select * from quito_datos");
    $miconexion->verconsulta();
    ?>


    <?php

    function conectarBD()
    {
        $server = "localhost";
        $usuario = "root";
        $pass = "";
        $BD = "podocarpusdb";

        $conexion = mysqli_connect($server, $usuario, $pass, $BD);
        if (!$conexion) {
            echo 'Ha sucedido un error inexperado en la conexion de la base de datos<br>';
        }
        return $conexion;
    }

    function desconectarBD($conexion)
    {

        $close = mysqli_close($conexion);

        if (!$close) {
            echo 'Ha sucedido un error inexperado en la desconexion de la base de datos<br>';
        }

        return $close;
    }

    function getArraySQL($sql)
    {

        $conexion = conectarBD();

        if (!$result = mysqli_query($conexion, $sql)) die();

        $rawdata = array();

        $i = 0;
        while ($row = mysqli_fetch_array($result)) {

            $rawdata[$i] = $row;
            $i++;
        }

        desconectarBD($conexion);

        return $rawdata;
    }

    $sql = "SELECT fecha,hora,anemometro from quito_datos;";
    $rawdata = getArraySQL($sql);
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>"."Hora"."</td>";
    echo "<td>"."Fecha"."</td>";
    for ($i = 0; $i < count($rawdata); $i++) {
        echo "<tr>";
        //  echo $rawdata[$i]["hora"];
        echo "<td>".utf8_encode($rawdata[$i]["hora"])."</td>";
        echo "<td>".utf8_encode($rawdata[$i]["anemometro"])."</td>";
        echo "<tr>";
    }
    echo "</table>";

    ?>


    <?php


        $consulta1 = "SELECT count(*) as Total FROM quito_datos";
        $resultado1 = $miconexion->consulta($consulta1);
        $fila1 = $resultado1->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
        $total = $fila1['Total'];

        $consulta = "SELECT SUM(anemometro) as Temperatura FROM quito_datos";
        $resultado = $miconexion->consulta($consulta);
        $fila = $resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
        $temperatura = $fila['Temperatura'];

        $media = $temperatura / $total;
    ?>
    <div class="myChart">
        <canvas id="myChart"></canvas>
        <script src="chart.js"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            datasets: [{
                                    data: [ <?php echo ($total); ?>, <?php echo ($temperatura); ?>, <?php echo ($media); ?>],
                                        backgroundColor: ['#42a5f5', 'blue', 'green'],
                                        label: 'COMPORTAMIENTO DEL VIENTO'
                                    }],
                                labels: ["TOTAL DE DATOS","TEMPERATURA MAXIMA", "PROMEDIO DE TEMPERATURA"
                                ]
                            },
                            options: {
                                responsive: true
                            }
                        });
        </script>

    </div>

</main>


<?php
include('../../adm_footer.php');
?>