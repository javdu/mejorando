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
                <h3><?= $accion; ?> Alumno/a</h3>
                <hr />
                <form action="admin/persona/guardar" method="post">
                    <div class="form-group col-xs-12">
                        <label for="vcpernombre">Apellido y Nombre/s</label>
                        <input type="text" class="form-control" id="vcpernombre" name="vcpernombre" value="<?= $aReg['vcpernombre']; ?>" placeholder="Apellido y Nombre/s">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="inperdni">DNI</label>
                        <input type="text" class="form-control" id="inperdni" name="inperdni" value="<?= $aReg['inperdni']; ?>" placeholder="DNI">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="dtperfechnac">Fecha Nac.</label>
                        <input type="text" class="form-control" id="dtperfechnac" name="dtperfechnac" value="<?= $aReg['dtperfechnac']; ?>" placeholder="dd/mm/aaaa">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcperdom">Domicilio</label>
                        <input type="text" class="form-control" id="vcperdom" name="vcperdom" value="<?= $aReg['vcperdom']; ?>" placeholder="Domicilio">
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
                      <label for="tutor">Tutor: <small>(Escriba y seleccione)</small></label>
                      <input type="text" class="form-control" id="tutor" name="tutor" value="<?= $aReg['nombreTutor']; ?>" placeholder="Tutor">
                      <input type="hidden" name="idtutor" id="idtutor" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Tutor parentesco</label>
                        <?php
                            $aParentescos = array('' => 'Seleccionar') + $aParentescos;
                            echo form_dropdown('idparentesco', $aParentescos, $aReg['idparentesco'], array('class' => 'form-control')); 
                        ?>
                    </div>
                    <input type="hidden" name="idpersona" id="idpersona" value="<?= $aReg['idpersona']; ?>" />
                    <input type="hidden" name="idalumno" id="idalumno" value="<?= $aReg['idalumno']; ?>" />
                    <input type="hidden" name="idtutorviejo" id="idtutorviejo" value="<?= $aReg['idtutor']; ?>" />
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/persona/index">Cancelar</a>
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
  $(function() {
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
    
    var $local_source = [{
    value: 1,
    label: "c++"
}, {
    value: 2,
    label: "java"
}, {
    value: 3,
    label: "php"
}, {
    value: 4,
    label: "coldfusion"
}, {
    value: 5,
    label: "javascript"
}, {
    value: 6,
    label: "asp"
}, {
    value: 7,
    label: "ruby"
}];
    
    $('#tutor').autocomplete({

        minLength: 2,
        source: <?= json_encode($aListaTutor);?>,
        focus: function(event, ui){
            $('#tutor').val(ui.item.label);
            return false;
        },
        select: function (event, ui) {
             $('#tutor').val(ui.item.label); // display the selected text
             $('#idtutor').val(ui.item.value); // save selected id to hidden input
             return false;
         },
        change: function( event, ui ) {
            $( "#idtutor" ).val( ui.item? ui.item.value : 0 );
        } 
    });
 
  });
  </script>