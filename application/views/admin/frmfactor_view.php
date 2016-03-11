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
                <h3><?= $accion; ?> Factor</h3>
                <h3><small>En este modulo se <?= $accion; ?> un factor.</small></h3>
                <hr />
                <form action="admin/factor/guardar" method="post">
                    <div class="form-group col-xs-12">
                        <label for="vcfactnombre">Nombre</label>
                        <input type="text" class="form-control" id="vcfactnombre" name="vcfactnombre" value="<?= $aReg['vcfactnombre']; ?>" placeholder="Nombre">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcfactdescrip">Descripción</label>
                        <input type="text" class="form-control" id="vcfactdescrip" name="vcfactdescrip" value="<?= $aReg['vcfactdescrip']; ?>" placeholder="Descripción">
                    </div>
                    <input type="hidden" name="idfactor" id="idfactor" value="<?= $aReg['idfactor']; ?>">
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/pregunta/index">Cancelar</a>
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