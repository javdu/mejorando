<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado de diagnosticos de un alumno.</h3>
                <h3><small>En este modulo se puede ver los diagnosticos de un alumno seleccionado.</small></h3>
                <hr />
                <a class="btn btn-default" style="float: right;" href="admin/diagnostico/formulario>">Nuevo</a>
                <br />
                <br />
                <br />
                    <table class="table table-striped">
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
                    <br>
            </div>
        </div>
    </div>
</section>