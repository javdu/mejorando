<?php
    $msj = (!empty($msj))? '<div class="alert alert-danger" role="alert">'.$msj.'</div>' : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <?= $errores; ?>
                <h3><?= $accion; ?> Tutor</h3>
                <hr />
                <form action="admin/tutor/guardar" method="post">
                    <div class="form-group col-xs-12">
                        <label for="inperdni">DNI</label>
                        <?php if($aReg['inperdni'] == 0): ?>
                            <div class="input-group">
                                <input type="text" class="form-control" id="inperdni" name="inperdni" value="<?= $aReg['inperdni']; ?>" placeholder="DNI">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" data-toggle="modal" data-target="#myModal"type="button">Buscar</button>
                                </span>
                            </div><!-- /input-group -->
                        <?php else: ?>
                            <div class="input-group">
                                <input type="text" class="form-control" id="inperdni" name="inperdni" value="<?= $aReg['inperdni']; ?>" placeholder="DNI" readonly>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" data-toggle="modal" data-target="#myModal"type="button">Buscar</button>
                                </span>
                            </div><!-- /input-group -->
                        <?php endif; ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcpernombre">Apellido y Nombre/s</label>
                        <input type="text" class="form-control" id="vcpernombre" name="vcpernombre" value="<?= $aReg['vcpernombre']; ?>" placeholder="Apellido y Nombre/s">
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
                    <input type="hidden" name="idtutor" id="idtutor" value="<?= $aReg['idtutor']; ?>" />
                    <input type="hidden" name="idpersona" id="idpersona" value="<?= $aReg['idpersona']; ?>" />
                    <input type="hidden" name="form-tutor" id="form-tutor" value="form-tutor" />
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/tutor/index">Cancelar</a>
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
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Buscar Persona</h4>
      </div>
      <form action="admin/tutor/buscarpersona" method="post">
            <div class="modal-body">
                <?= $msj; ?>
                <label for="inperdni">DNI</label>
                <input type="text" class="form-control" id="inperdni" name="inperdni" value="" placeholder="DNI">
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <input class="btn btn-default" type="submit" value="Buscar">
          </div>
      </form>
    </div>
  </div>
</div>
<!-- /Modal -->
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

    if ($('#inperdni').val().length == 0) {
        $('#myModal').modal('show');
    }
  });
  </script>