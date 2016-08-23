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
                <h3><?= $accion; ?> Escuela</h3>
                <h3><small>En este modulo se <?= $accion; ?> una escuela.</small></h3>
                <hr />
                <form action="admin/encuesta/eliminar" method="post">
                    <div class="form-group col-xs-12">
                        <label for="vcencnombre">Nombre</label>
                        <input type="text" class="form-control" id="vcencnombre" name="vcencnombre" value="<?= $aReg['vcencnombre']; ?>" placeholder="Nombre" readonly />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcencdescrip">Descripción</label>
                        <input type="text" class="form-control" id="vcencdescrip" name="vcencdescrip" value="<?= $aReg['vcencdescrip']; ?>" placeholder="Descripción" readonly />
                    </div>
                    <input type="hidden" name="idencuesta" id="idencuesta" value="<?= $aReg['idencuesta']; ?>" />
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/encuesta/index">Cancelar</a>
                                        <input class="btn btn-default" type="submit" value="Eliminar" />
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