<?php
    $msj = (isset($msj))? $msj : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<section id="poblacion">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <?= $errores; ?>
                <?= $msj; ?>
                <p style="text-align: center;">¿Que parentesco tiene con el alumno?</p>
                <form name="poblacionForm" id="poblacionForm" method="post">
                    <div class="form-group col-xs-12">
                        <label for="inperdni">DNI</label>
                        <input type="text" class="form-control" id="inperdni" name="inperdni" placeholder="DNI" value="<?= $aReg['inperdni']; ?>" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcpernombre">Apellido y Nombre</label>
                        <input type="text" class="form-control" id="vcpernombre" name="vcpernombre" placeholder="Apellido y Nombre" style="text-transform: uppercase;" value="<?= $aReg['vcpernombre']; ?>" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcperdom">Domicilio</label>
                        <input type="text" class="form-control" id="vcperdom" name="vcperdom" placeholder="Domicilio" value="<?= $aReg['vcperdom']; ?>" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="idparentesco">Parentesco</label>
                        <?php
                            $aParent = array('' => 'Seleccionar') + $aParent;
                            echo form_dropdown('idparentesco', $aParent, $idparentesco, array('class' => 'form-control')); 
                        ?>
                    </div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a href="preguntas" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">CANCELAR</a>
                                        <input type="submit" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;" value="GUARDAR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr />
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#poblacionForm" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({ 
                url: "abms/persona/guardartutalum", 
                type: "post", 
                data : $("#poblacionForm").serialize(),
                success: function(result){
                    $("#box-preguntas").html(result);
                }
            });
        });
    });
</script>