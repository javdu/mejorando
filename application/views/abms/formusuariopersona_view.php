<?php
    $msj = (isset($msj))? $msj : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<section id="poblacion">
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <?= $errores; ?>
                <?= $msj; ?>
                <form action="abms/usuario/guardarpersona" name="personaForm" method="post">
                    <div class="form-group">
                        <label for="inperdni">Usuario (DNI)</label>
                        <input type="text" class="form-control" id="inperdni" name="inperdni" placeholder="DNI" value="<?= $aReg['inperdni']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="vcusuclave">Contraseña</label>
                        <input type="password" class="form-control" id="vcusuclave" name="vcusuclave" placeholder="Contraseña" value="<?= $aReg['vcusuclave']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="vcusuclave1">Repita la contraseña</label>
                        <input type="password" class="form-control" id="vcusuclave1" name="vcusuclave1" placeholder="Contraseña" value="<?= $aReg['vcusuclave1']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="vcusuemail">Email</label>
                        <input type="text" class="form-control" id="vcusuemail" name="vcusuemail" placeholder="Email" value="<?= $aReg['vcusuemail']; ?>">
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="vcpernombre">Apellido y Nombre</label>
                        <input type="text" class="form-control" id="vcpernombre" name="vcpernombre" placeholder="Apellido y Nombre" style="text-transform: uppercase;" value="<?= $aReg['vcpernombre']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="dtperfechnac">Fecha de Nacimiento</label>
                        <input type="text" class="form-control" id="dtperfechnac" name="dtperfechnac" placeholder="Fecha de Nacimiento" value="<?= $aReg['dtperfechnac']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="vcperdom">Domicilio</label>
                        <input type="text" class="form-control" id="vcperdom" name="vcperdom" placeholder="Domicilio" style="text-transform: uppercase;" value="<?= $aReg['vcperdom']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="vcpercelcodarea">Teléfono celular</label>
                        <div class="form-inline">
                            0 <input type="text" class="form-control" style="width: 15%;" id="vcpercelcodarea" name="vcpercelcodarea" placeholder="Cod. área" value="<?= $aReg['vcpercelcodarea']; ?>">
                            15 <input type="text" class="form-control" style="width: 80%;" id="vcpercel" name="vcpercel" placeholder="Tel. celúlar" value="<?= $aReg['vcpercel']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vcpertelcodarea">Teléfono</label>
                        <div class="form-inline">
                            0 <input type="text" class="form-control" style="width: 15%;" id="vcpertelcodarea" name="vcpertelcodarea" placeholder="Cod. área" value="<?= $aReg['vcpertelcodarea']; ?>">
                            <input type="text" class="form-control" style="width: 82%;" id="vcpertel" name="vcpertel" placeholder="Teléfono" value="<?= $aReg['vcpertel']; ?>">
                        </div>
                    </div>                                       
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group">
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
        $( "#dtperfechnac" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange:'-90:+0',
            buttonImageOnly: true,
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy'
        });
    });
</script>