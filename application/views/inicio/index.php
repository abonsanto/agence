<body>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <div class="thumbnail">
                <div class="row">
                    <form action="index_submit" method="get" accept-charset="utf-8">
                        <div class="col-md-4 form-group  text-center">
                        <label for="consultUsua">Consultores</label>
                            <select style="height: 30px" class="form-control listUsuario" name="nombres[]" multiple="multiple" id="consultUsua">
                                <?php
                                foreach ($result as $key => $value) {
                                    echo '<option value="'. $value["co_usuario"]  .'">'. $value["no_usuario"]  .'</option>';
                                }?>
                            </select>
                        </div>
                        <div class="col-md-4 form-group  text-center">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                    <label for="iniDate">Fecha Inicio</label>
                                    <input class="form-control text-center" id="iniDate" class="fechas">
                                    <label for="endDate">Fecha Fin</label>
                                    <input class="form-control text-center" id="endDate" class="fechas">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  text-center">
                            <p><button type="button" id="relatorio" class="btn btn-primary tamano">Relatório
                                <i class="fa fa-lg fa-list-alt" aria-hidden="true"></i>
                            </button></p>
                            <p><button type="button" id="grafico" class="btn btn-primary tamano">Gráfico
                                <i class="fa fa-lg fa-bar-chart" aria-hidden="true"></i>
                            </button></p>
                            <p><button type="button" id="pizza" class="btn btn-primary tamano">Pizza
                                <i class="fa fa-lg fa-pie-chart" aria-hidden="true"></i>
                            </button></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="resultadoConsulta">
    </div>
</body>

<script>
    $(function(){
        scriptMain.init()
    });
</script>