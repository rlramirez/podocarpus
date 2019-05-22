<?php 
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'podocarpusdb') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM guarnizo_examen") or die($mysqli->eror);              
$valoresX = array();
$valoresY = array();

while ($ver=mysqli_fletch_row($result)){
    $valoresX=$ver[1];
    $valoresY=$ver[0];
}

$datosX=json_encode($valoresX);
$datosY=json_encode($valoresY);

?>
<div id="graficaLineal"></div>

<script>
    function crearCadena(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script>
    datosX=crearCadena('<?php echo $datosX ?>');
    datosY=crearCadena('<?php echo $datosY ?>');

    var traso = {
        x: datosX, 
        y: datosY,
        type: 'scatter'
    };

    var data = [traso];

    Ploty.newPlot('graficaLineal', data);

</script>