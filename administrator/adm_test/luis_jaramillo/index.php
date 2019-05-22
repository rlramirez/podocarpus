<?php
include('../../adm_header.php');
?>
<main>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="stylesheet" href="adm_birds_css/fontello.css">
    <div class="principal">
        <section class="area">
            <div class="ingresar"><a href="formulario.php"> Formulario</a></div>
            <h2 class="titulo">DATOS DISPONIBLES</h2>
            <section class="tabla">
                <img src="" alt="">
                <?php
                $miconexion->consulta("select id, temperatura,hora,fecha,anemometro from jaramillo_examen");
                $miconexion->verconsulta_jaramilloluis();
                ?>
            </section>
            <section class="grafico">
               <h2 class="titulo2">PRESENTACIÓN DE DATOS</h2>
               <h2 class="titulo2">VELOCIDAD POR FECHA</h2>
               <section class="tabla1"><?php
                $miconexion->consulta("select fecha,anemometro from jaramillo_examen");
                $miconexion->verconsulta_jaramilloluisfecha();
                ?>
                </section>
               
               <h2 class="titulo2">VELOCIDAD POR HORA</h2>
               <section class="tabla2"><?php
                $miconexion->consulta("select hora,anemometro from jaramillo_examen");
                $miconexion->verconsulta_jaramilloluishora();
                ?>
                </section>
            </section>
        </section>
    </div>
</main>
<?php
include('../../adm_footer.php');
?>
