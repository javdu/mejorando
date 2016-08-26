<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado resultados esperados</h3>
                <h3><small>En este modulo se puede agregar, editar y eliminar los resultados esperados.</small></h3>
                <hr />
                <a class="btn btn-default" style="float: right;" href="admin/resultresp/formulario/<?= $idsubfactor; ?>/0/<?= $idencuesta; ?>">Nuevo</a>
                <br />
                <br />
                <br />
                    <table class="table table-striped">
                    <?php foreach($aResultResp AS $elemResultados):?>
                        <tr>
                            <td>
                                <a href="admin/resultresp/formulario/<?= $idsubfactor; ?>/<?= $elemResultados['idresultado']; ?>/<?= $idencuesta ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
                                <a href="admin/resultresp/baja/<?= $idsubfactor; ?>/<?= $elemResultados['idresultado']; ?>/<?= $idencuesta ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                            </td>
                            <td>
                                <?= $elemResultados['vcresultinfobt']; ?>
                                <?php if(isset($elemResultados['respuestas'])):?>
                                    <?php foreach($elemResultados['respuestas'] AS $elemOpciones):?>
                                        <?= $elemOpciones['idresultrespcontador']; ?> - <?= $elemOpciones['vcrespnombre']; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12">
                <div id='toolbar' style="padding: 40px 15px;">
                    <div class='wrapper text-center'>
                        <div class="btn-group">
                            <a class="btn btn-default" href="admin/pregunta/index/<?= $idencuesta ?>">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>