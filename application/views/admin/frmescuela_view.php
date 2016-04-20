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
                <form action="admin/escuela/guardar" method="post">
                    <div class="form-group col-xs-12">
                        <label for="vcescnombre">Nombre</label>
                        <input type="text" class="form-control" id="vcescnombre" name="vcescnombre" value="<?= $aReg['vcescnombre']; ?>" placeholder="Nombre" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcescnro">Nro.</label>
                        <input type="text" class="form-control" id="vcescnro" name="vcescnro" value="<?= $aReg['vcescnro']; ?>" placeholder="Nro." />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcescdirec">Dirección</label>
                        <input type="text" class="form-control" id="vcescdirec" name="vcescdirec" value="<?= $aReg['vcescdirec']; ?>" placeholder="Dirección" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcesctel">Teléfono</label>
                        <input type="text" class="form-control" id="vcesctel" name="vcesctel" value="<?= $aReg['vcesctel']; ?>" placeholder="Teléfono" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcesccel">Celular</label>
                        <input type="text" class="form-control" id="vcesccel" name="vcesccel" value="<?= $aReg['vcesccel']; ?>" placeholder="Celular" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcescemail">Email</label>
                        <input type="text" class="form-control" id="vcescemail" name="vcescemail" value="<?= $aReg['vcescemail']; ?>" placeholder="Email" />
                    </div>
                    <input type="hidden" name="idescuela" id="idescuela" value="<?= $aReg['idescuela']; ?>">
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/escuela/index">Cancelar</a>
                                        <input class="btn btn-default" type="submit" value="Guardar">
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