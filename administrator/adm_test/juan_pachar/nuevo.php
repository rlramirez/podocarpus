<?php
include('../../adm_header.php');
?>
    <main class="principal">
        <div class="container">
            <div class="row">
                <section class="col-md-5">
                    <form method="post" action="nuevo_registro.php">
                        <div class="form-group">
                            <label class="text-left">Temperatura</label>
                            <input type="text" class="form-control" name="temperatura" id="temperatura" placeholder="Ingrese la temperatura">
                        </div>
                        <div class="form-group">
                            <label class="text-left">Hora</label>
                            <input type="text" class="form-control" name="hora" id="hora" placeholder="00:00">
                        </div>
                        <div class="form-group">
                            <label class="text-left">Fecha</label>
                            <input type="text" class="form-control" name="fecha" id="fecha" placeholder="AAAA-MM-DD">
                        </div>
                        <div class="form-group">
                            <label class="text-left">Anemómetro (Velocidad del viento)</label>
                            <input type="text" class="form-control" name="anemometro" id="anemometro" placeholder="Ingrese la velocidad del viento">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </section>
            </div>
        </div>
    </main>
<?php
include('../../adm_footer.php');
?>