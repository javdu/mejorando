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
                    <div class="form-group col-xs-12">
                        <label for="vcresultinfobt">Informacion obtenida:</label>
                        <textarea name="vcresultinfobt" id="vcresultinfobt" class="form-control" rows="3"><?= $aReg['vcresultinfobt']; ?></textarea>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcresultsugprof">Sugerencia profesional:</label>
                        <textarea name="vcresultsugprof" id="vcresultsugprof" class="form-control" rows="3"<?= $aReg['vcresultsugprof']; ?>></textarea>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcresultejepot">Ejercicio de potenciamiento:</label>
                        <textarea name="vcresultejepot" id="vcresultejepot" class="form-control" rows="3"><?= $aReg['vcresultejepot']; ?></textarea>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcresultorientadult">Orientación del adulto:</label>
                        <textarea name="vcresultorientadult" id="vcresultorientadult" class="form-control" rows="3"><?= $aReg['vcresultorientadult']; ?></textarea>
                    </div>
                    <hr />
                    <div id="box-respuestas">
                    <?php foreach($aRespuestas AS $elemResp):?>
                        <div class="box-respuesta form-group col-xs-12">
                            <label for="idresultrespcontador">Contador</label>
                            <input type="text" class="form-control" id="idresultrespcontador" name="idresultrespcontador[]" value="<?= $elemResp['idresultrespcontador']; ?>" placeholder="Contador">
                       
                            <label>Respuesta</label>
                            <input type="text" class="form-control" id="idrespuesta[]" name="idrespuesta[]" placeholder="Respuesta" value="<?= $elemResp['vcrespnombre']; ?>" />
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <input type="hidden" name="idsubfactor" id="idsubfactor" value="<?= $idsubfactor; ?>" />
                    <input type="hidden" name="idresultado" id="idresultado" value="<?= $aReg['idresultado'];; ?>" />
                    <input type="hidden" name="idcombinacion" id="idcombinacion" value="<?= (isset($elemResp))? $elemResp['idcombinacion'] : 0; ?>" />
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/resultresp/index/<?= $idsubfactor; ?>">Cancelar</a>
                                        <a class="btn btn-default" href="admin/resultresp/eliminar/<?= $idsubfactor; ?>/<?= $aReg['idresultado']; ?>">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>