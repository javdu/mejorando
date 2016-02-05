<?php
    $msj = (isset($msj))? '<div class="alert alert-info"><p>'.$msj.'</p></div>' : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Posibles Respuestas</h3>
                <h3><small>En este modulo se seleccionan las posibles respuestas.</small></h3>
                <hr />
                <?= $msj; ?>
                <form action="admin/pregresp/guardar" method="post">
                    <div class="form-group col-xs-12">
                        <label>Respuestas</label>
                        <div class="input-group">
                            <?php
                                $aRespuestas = array('' => 'Seleccionar') + $aRespuestas;
                                echo form_dropdown('idrespuesta', $aRespuestas, null, array('class' => 'form-control', 'id' =>'idrespuesta')); 
                            ?>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default" value="Agregar" />    
                            </span>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Respuestas elegidas</label>
                        <table class="table table-striped">
                        <?php foreach($aPregResp AS $elemPregResp):?>
                            <tr><td><a href="admin/pregresp/eliminar/<?= $elemPregResp['idpregunta']; ?>/<?= $elemPregResp['idpregresp']; ?>"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> <?= $elemPregResp['vcrespnombre']; ?></td></tr>
                        <?php endforeach; ?>
                        </table>
                    </div>
                    <input type="hidden" name="idpregunta" value="<?= $elemPregResp['idpregunta']; ?>" />
                    <div class="form-group col-xs-12">
                        <div id='toolbar' style="padding: 40px 15px;">
                            <div class='wrapper text-center'>
                                <div class="btn-group">
                                    <a class="btn btn-default" href="admin/pregunta/index">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>