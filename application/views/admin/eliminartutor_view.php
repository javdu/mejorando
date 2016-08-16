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
                <h3><?= $accion; ?> Tutor</h3>
                <hr />
                <form action="admin/tutor/eliminar" method="post">
                    <div class="form-group col-xs-12">
                        <label for="vcpernombre">Apellido y Nombre/s</label>
                        <input type="text" class="form-control" id="vcpernombre" name="vcpernombre" value="<?= $aReg['vcpernombre']; ?>" placeholder="Apellido y Nombre/s" readonly>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inperdni">DNI</label>
                        <input type="text" class="form-control" id="inperdni" name="inperdni" value="<?= $aReg['inperdni']; ?>" placeholder="DNI" readonly>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="dtperfechnac">Fecha Nac.</label>
                        <input type="text" class="form-control" id="dtperfechnac" name="dtperfechnac" value="<?= $aReg['dtperfechnac']; ?>" placeholder="dd/mm/aaaa" readonly>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcperdom">Domicilio</label>
                        <input type="text" class="form-control" id="vcperdom" name="vcperdom" value="<?= $aReg['vcperdom']; ?>" placeholder="Domicilio" readonly>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcpercelcodarea">Teléfono celular</label>
                        <div class="form-inline">
                            0 <input type="text" class="form-control" style="width: 15%;" id="vcpercelcodarea" name="vcpercelcodarea" placeholder="Cod. área" value="<?= $aReg['vcpercelcodarea']; ?>" readonly/>
                            15 <input type="text" class="form-control" style="width: 80%;" id="vcpercel" name="vcpercel" placeholder="Tel. celúlar" value="<?= $aReg['vcpercel']; ?>" readonly/>
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcpertelcodarea">Teléfono</label>
                        <div class="form-inline">
                            0 <input type="text" class="form-control" style="width: 13.5%;" id="vcpertelcodarea" name="vcpertelcodarea" placeholder="Cod. área" value="<?= $aReg['vcpertelcodarea']; ?>" readonly/>
                            <input type="text" class="form-control" style="width: 84%;" id="vcpertel" name="vcpertel" placeholder="Teléfono" value="<?= $aReg['vcpertel']; ?>" readonly/>
                        </div>
                    </div>
                    <input type="hidden" name="idtutor" id="idtutor" value="<?= $aReg['idtutor']; ?>" />
                    <input type="hidden" name="idpersona" id="idpersona" value="<?= $aReg['idpersona']; ?>" />
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/tutor/index">Cancelar</a>
                                        <input class="btn btn-default" type="submit" value="Eliminar">
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