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
                <h3>Buscar Persona</h3>
                <hr />
                <form action="admin/tutor/buscarpersona" method="post">
                    <div class="form-group col-xs-12">
                        <label for="inperdni">DNI</label>
                        <input type="text" class="form-control" id="inperdni" name="inperdni" value="<?= $aReg['inperdni']; ?>" placeholder="DNI">
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/tutor/index">Cancelar</a>
                                        <input class="btn btn-default" type="submit" value="Buscar">
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