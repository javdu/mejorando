<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Posibles Respuestas</h3>
                <h3><small>En este modulo se seleccionan las posibles respuestas.</small></h3>
                <hr />
                <div class="form-group col-xs-12">
                    <label>Respuestas</label>
                    <div class="input-group">
                        <?php
                            $aRespuestas = array('' => 'Seleccionar') + $aRespuestas;
                            echo form_dropdown('idrespuesta', $aRespuestas, null, array('class' => 'form-control', 'id' =>'idrespuesta')); 
                        ?>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-check"></i></button>
                        </span>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <label>Respuestas elegidas</label>
                    <table class="table table-striped">
                    <?php foreach($aPregResp AS $elemPregResp):?>
                        <tr><td><a href="admin/pregunta/baja/<?= $elemPregResp['idpregresp']; ?>"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> <?= $elemPregResp['vcrespnombre']; ?></td></tr>
                    <?php endforeach; ?>
                    </table>
                </div>
                <div class="form-group col-xs-12">
                    <div id='toolbar' style="padding: 40px 15px;">
                        <div class='wrapper text-center'>
                            <div class="btn-group">
                                <a class="btn btn-default" href="admin/pregunta/index">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>