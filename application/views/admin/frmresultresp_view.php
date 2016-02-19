<?php
    $msj = (isset($msj))? $msj : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <?= $errores; ?>
                <?= $msj; ?>
                <h3><?= $accion; ?> Resultado esperado</h3>
                <h3><small>En este modulo se crea un resultado esperado nuevo.</small></h3>
                <hr />
                <form action="admin/subfactor/guardar" method="post">
                    <div class="form-group col-xs-12">
                        <label for="vcresultinfobt">Informacion obtenida:</label>
                        <textarea name="vcresultinfobt" id="vcresultinfobt" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcresultsugprof">Sugerencia profesional:</label>
                        <textarea name="vcresultsugprof" id="vcresultsugprof" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcresultejepot">Ejercicio de potenciamiento:</label>
                        <textarea name="vcresultejepot" id="vcresultejepot" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcresultorientadult">Orientación del adulto:</label>
                        <textarea name="vcresultorientadult" id="vcresultorientadult" class="form-control" rows="3"></textarea>
                    </div>
                    <hr />
                    <h4>Combinacion 1</h4>
                    <div class="form-group col-xs-12">
                        <label for="idresultrespcontador">Contador</label>
                        <input type="text" class="form-control" id="idresultrespcontador" name="idresultrespcontador" value="" placeholder="Contador">
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Respuesta</label>
                        <?php
                            $aRespuesta = array('' => 'Seleccionar') + $aRespuesta;
                            echo form_dropdown('idrespuesta', $aRespuesta, null, array('class' => 'form-control')); 
                        ?>
                    </div>
                    <h4>Combinacion 2</h4>
                    <div class="form-group col-xs-12">
                        <label for="idresultrespcontador2">Contador</label>
                        <input type="text" class="form-control" id="idresultrespcontador2" name="idresultrespcontador2" value="<?= null ?>" placeholder="Contador">
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Respuesta</label>
                        <?php
                            echo form_dropdown('idrespuesta2', $aRespuesta, null, array('class' => 'form-control')); 
                        ?>
                    </div>
                    <input type="hidden" name="idsubfactor" id="idsubfactor" value="<?= $idsubfactor; ?>" />
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/resultresp/index/<?= $idsubfactor; ?>">Cancelar</a>
                                        <input class="btn btn-default" type="submit" value="Guardar" />
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