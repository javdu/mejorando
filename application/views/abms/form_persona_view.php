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
                        <label for="dtperfechnac">Fecha de Nacimiento</label>
                        <input type="text" class="form-control" id="dtperfechnac" name="dtperfechnac" placeholder="Fecha de Nacimiento" value="<?= $aReg['dtperfechnac']; ?>" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcperdom">Domicilio</label>
                        <input type="text" class="form-control" id="vcperdom" name="vcperdom" placeholder="Domicilio" style="text-transform: uppercase;" value="<?= $aReg['vcperdom']; ?>" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcpercelcodarea">Teléfono celular</label>
                        <div class="form-inline">
                            0 <input type="text" class="form-control" style="width: 15%;" id="vcpercelcodarea" name="vcpercelcodarea" placeholder="Cod. área" value="<?= $aReg['vcpercelcodarea']; ?>" />
                            15 <input type="text" class="form-control" style="width: 80%;" id="vcpercel" name="vcpercel" placeholder="Tel. celúlar" value="<?= $aReg['vcpercel']; ?>" />
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcpertelcodarea">Teléfono</label>
                        <div class="form-inline">
                            0 <input type="text" class="form-control" style="width: 13.5%;" id="vcpertelcodarea" name="vcpertelcodarea" placeholder="Cod. área" value="<?= $aReg['vcpertelcodarea']; ?>" />
                            <input type="text" class="form-control" style="width: 84%;" id="vcpertel" name="vcpertel" placeholder="Teléfono" value="<?= $aReg['vcpertel']; ?>" />
                        </div>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Escuela</label>
                        <?php
                            $aEscuelas = array('' => 'Seleccionar') + $aEscuelas;
                            echo form_dropdown('idescuela', $aEscuelas, $aReg['idescuela'], array('class' => 'form-control')); 
                        ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Grado que esta cursando</label>
                        <?php
                            $aEscuelaGrados = array('' => 'Seleccionar') + $aEscuelaGrados;
                            echo form_dropdown('idescuelagrado', $aEscuelaGrados, $aReg['idescuelagrado'], array('class' => 'form-control')); 
                        ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="idparentesco">Parentesco</label>
                        <?php
                            $aParent = array('' => 'Seleccionar') + $aParent;
                            echo form_dropdown('idparentesco', $aParent, $aReg['idparentesco'], array('class' => 'form-control')); 
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
                url: "abms/persona/guardarpersona", 
                type: "post", 
                data : $("#poblacionForm").serialize(),
                success: function(result){
                    $("#box-preguntas").html(result);
                }
            });
        });
    });
</script>