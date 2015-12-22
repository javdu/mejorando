<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <form name="poblacionForm" id="poblacionForm" action="admin/resultresp/guardar" method="post">
                    <h4>Combinacion 1</h4>
                    <div class="form-group col-xs-12">
                        <label for="idresultrespcontador">Contador</label>
                        <input type="text" class="form-control" id="idresultrespcontador" name="idresultrespcontador" value="<?= $aReg['idresultrespcontador']?>" placeholder="Contador">
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Respuesta</label>
                        <?php
                            $aRespuesta = array('' => 'Seleccionar') + $aRespuesta;
                            echo form_dropdown('idrespuesta', $aRespuesta, $aReg['idrespuesta'], array('class' => 'form-control')); 
                        ?>
                    </div>
                    <h4>Combinacion 2</h4>
                    <div class="form-group col-xs-12">
                        <label for="idresultrespcontador2">Contador</label>
                        <input type="text" class="form-control" id="idresultrespcontador2" name="idresultrespcontador2" value="<?= $aReg['idresultrespcontador2']?>" placeholder="Contador">
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Respuesta</label>
                        <?php
                            echo form_dropdown('idrespuesta2', $aRespuesta, $aReg['idrespuesta2'], array('class' => 'form-control')); 
                        ?>
                    </div>
                    <hr />
                    <div class="form-group col-xs-12">
                        <label>Sub Factor</label>
                        <?php
                            $aSubFactor = array('' => 'Seleccionar') + $aSubFactor;
                            echo form_dropdown('idsubfactor', $aSubFactor, $aReg['idsubfactor'], array('class' => 'form-control')); 
                        ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Resultado</label>
                        <?php
                            $aResultado = array('' => 'Seleccionar') + $aResultado;
                            echo form_dropdown('idresultado', $aResultado, $aReg['idresultado'], array('class' => 'form-control')); 
                        ?>
                    </div>
                    <input type="hidden" id="idcombinacion" name="idcombinacion" value="<?= $aReg['idcombinacion']?>" />
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a href="preguntas" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">CANCELAR</a>
                                        <input type="submit" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;" value="GUARDAR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr />
            </div>
        </div>
    </div>
</section>