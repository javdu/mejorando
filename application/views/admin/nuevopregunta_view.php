<?php
    $msj = (isset($msj))? $msj : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3><?= $accion; ?> Pregunta</h3>
                <h3><small>En este modulo se crea una pregunta nueva.</small></h3>
                <hr />
                <?= $errores; ?>
                <?= $msj; ?>
                <form action="admin/pregunta/guardar" method="post">
                    <div class="form-group col-xs-12">
                        <label>Factor</label>
                        <?php
                            $aFactor = array('' => 'Seleccionar') + $aFactor;
                            echo form_dropdown('idfactor', $aFactor, $aReg['idfactor'], array('class' => 'form-control', 'id' =>'idfactor')); 
                        ?>
                    </div>
                    <div id="box-subfactor">
                        <?php if ($aReg['idfactor'] != null): ?>
                            <div class="form-group col-xs-12">
                                <label>Subfactor</label>
                                <?php
                                    $aSubfactor = array('' => 'Seleccionar') + $aSubfactor;
                                    echo form_dropdown('idsubfactor', $aSubfactor, $aReg['idsubfactor'], array('class' => 'form-control', 'id' =>'idsubfactor')); 
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcpregnombre">Nombre</label>
                        <input type="text" class="form-control" id="vcpregnombre" name="vcpregnombre" value="<?= $aReg['vcpregnombre']; ?>" placeholder="Nombre">
                    </div>
                    <input type="hidden" name="idpregunta" id="idpregunta" value="<?= $aReg['idpregunta']; ?>">
                    <input type="hidden" name="idencuesta" id="idencuesta" value="<?= $idencuesta; ?>">
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/pregunta/index/<?= $idencuesta ?>">Cancelar</a>
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
<script>
    $( document ).ready(function() {
        
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#idfactor" ).change(function( event ) {
            event.preventDefault();
            $.ajax({ 
                url: "admin/pregunta/loadsubfactor", 
                type: "post", 
                data : $("#idfactor").serialize(),
                success: function(result){
                    $("#box-subfactor").html(result);
                }
            });
        });
    });
</script>