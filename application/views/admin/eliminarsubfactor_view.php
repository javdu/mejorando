<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Eliminar Subfactor</h3>
                <h3><small>En este modulo se elimina un subfactor.</small></h3>
                <hr />
                <form action="admin/subfactor/eliminar" method="post">
                    <div class="form-group col-xs-12">
                        <label>Factor</label>
                        <input type="text" class="form-control" id="vcfactnombre" name="vcfactnombre" value="<?= $aReg['vcfactnombre']; ?>" readonly />
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Subfactor</label>
                        <input type="text" class="form-control" id="vcsubfactnombre" name="vcsubfactnombre" value="<?= $aReg['vcsubfactnombre']; ?>" readonly />
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Descripción</label>
                        <input type="text" class="form-control" id="vcsubfactdescrip" name="vcsubfactdescrip" value="<?= $aReg['vcsubfactdescrip']; ?>" readonly />
                    </div>
                    <input type="hidden" name="idsubfactor" id="idsubfactor" value="<?= $aReg['idsubfactor']; ?>" />
                    <input type="hidden" name="idencuesta" id="idencuesta" value="<?= $aReg['idencuesta']; ?>" />
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/pregunta/index/<?= $idencuesta ?>">Cancelar</a>
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