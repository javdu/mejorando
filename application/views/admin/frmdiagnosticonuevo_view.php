<section id="preguntas">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado de preguntas para el alumno.</h3>
                <h3><small>Seleccione la respuesta indicada, para cada una de las preguntas.</small></h3>
                <hr />
                <form action="admin/diagnostico/guardar" name="preguntas1Form" id="preguntas1Form" method="post">
                    <ul class="list-group">
                    <?php foreach($aPreg as $preg): ?>
                            <a class="list-group-item boxpregunta">
                                <h5 class="text-center"> ¿<?= $preg['vcpregnombre']; ?>?</h5>
                                <div class="row">
                                    <?php foreach($preg['respuestas'] as $resp): ?>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                                            <label class="label-pregunta">
                                                <input type="radio" name="<?= $preg['idpregunta']; ?>" value="<?= $resp['idrespuesta'];?>" /> <?= $resp['vcrespnombre']; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </a>
                    <?php endforeach; ?>
                    </ul>
                    <div class="text-center"><?= $this->pagination->create_links(); ?></div>
                    <br>
                    <div class="clearfix"></div>
                    <input type="hidden" name="idalumno" id="idalumno" value="<?= $idalumno ?>">
                    <div class="row">
                        <div class="form-group">
                            <div id='toolbar'>
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <input type="submit" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;" value="GUARDAR">
                                        <a href="admin/diagnostico/listadodiagnostico/<?= $idalumno; ?>" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">VOLVER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>