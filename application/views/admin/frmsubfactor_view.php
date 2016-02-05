<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3><?= $accion; ?> Subfactor</h3>
                <h3><small>En este modulo se crea un subfactor nuevo.</small></h3>
                <hr />
                <form action="admin/subfactor/guardar" method="post">
                    <div class="form-group col-xs-12">
                        <label>Factor</label>
                        <?php
                            $aFactor = array('' => 'Seleccionar') + $aFactor;
                            echo form_dropdown('idfactor', $aFactor, $aReg['idfactor'], array('class' => 'form-control', 'id' =>'idfactor')); 
                        ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcsubfactnombre">Nombre</label>
                        <input type="text" class="form-control" id="vcsubfactnombre" name="vcsubfactnombre" value="<?= $aReg['vcsubfactnombre']; ?>" placeholder="Nombre">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcsubfactdescrip">Descripción</label>
                        <input type="text" class="form-control" id="vcsubfactdescrip" name="vcsubfactdescrip" value="<?= $aReg['vcsubfactdescrip']; ?>" placeholder="Nombre">
                    </div>
                    <input type="hidden" name="idsubfactor" id="idsubfactor" value="<?= $aReg['idsubfactor']; ?>">
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/subfactor/index">Cancelar</a>
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