<?php
    $msj = (isset($msj))? $msj : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado de diagnosticos de un alumno.</h3>
                <h3><small>En este modulo se puede ver los diagnosticos de un alumno seleccionado.</small></h3>
                <hr />
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6"><p><label>Nombre: </label><?= $aAlumno['vcpernombre']; ?></p></div>
                            <div class="col-md-6"><p><label>DNI: </label><?= $aAlumno['inperdni']; ?></p></div>
                            <div class="col-md-6"><p><label>Fecha de nac.: </label><?= $aAlumno['dtperfechnac']; ?></p></div>
                            <div class="col-md-6"><p><label>Edad: </label><?= $aAlumno['edad']; ?></p></div>
                            <div class="col-md-6"><p><label>Tutor: </label><?= $aAlumno['vcparentnombre']; ?></p></div>
                            <div class="col-md-6"><p><label>Escuela: </label><?= $aAlumno['vcescnombre']; ?></p></div>
                            <div class="col-md-6"><p><label>Grado: </label><?= $aAlumno['vcescgradnombre']; ?></p></div>
                        </div>
                    </div>
                </div>
                <?= $errores; ?>
                <?= $msj; ?>
                <form action="admin/diagnostico/nuevo/<?= $idalumno; ?>" method="post">
                    <div class="form-group col-xs-12">
                        <label>Encuestas</label>
                        <div class="input-group">
                            <?php
                                $aEncuestas = array('' => 'Seleccionar') + $aEncuestas;
                                echo form_dropdown('idencuesta', $aEncuestas, '', array('class' => 'form-control')); 
                            ?>
                            <span class="input-group-btn">
                                <input class="btn btn-default" type="submit" value="Nuevo">
                            </span>
                        </div><!-- /input-group -->
                    </div>
                </form>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>FECHA REALIZACION</th>
                            <th>REGISTRADO POR...</th>
                        </tr>
                    </thead>
                <?php foreach($aDiagnostico AS $elemDiagnostico):?>
                    <tr>
                        <td>
                            <a href="admin/diagnostico/cuestionario/<?= $elemDiagnostico['idinforme']; ?>/<?= $elemDiagnostico['idalumno']; ?>"><span class="fa fa-check" aria-hidden="true"></a>
                            <a target="_blank" href="admin/diagnostico/generarinforme/<?= $elemDiagnostico['idinforme']; ?>/<?= $elemDiagnostico['idalumno']; ?>"><span class="fa fa-file-pdf-o" aria-hidden="true"></a>
                        </td>
                        <td><p style="font-size: 11pt;"><?= $elemDiagnostico['idinforme']; ?></p></td>
                        <td><p style="font-size: 11pt;"><?= $elemDiagnostico['dtinffecha']; ?></p></td>
                        <td><p style="font-size: 11pt;"><?= $elemDiagnostico['vcpernombre']; ?></p></td>
                    </tr>
                <?php endforeach; ?>
                </table>
                <div class="text-center"><?= $this->pagination->create_links(); ?></div>
                <div class='wrapper text-center'>
                    <a href="admin/diagnostico/index" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">Volver</a>
                </div>
            </div>
        </div>
    </div>
</section>