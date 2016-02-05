<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado resultados esperados</h3>
                <h3><small>En este modulo se puede agregar, editar y eliminar los resultados esperados.</small></h3>
                <hr />
                <div class="form-group col-xs-12">
                    <table class="table table-striped">
                    <?php foreach($aResultResp AS $elemResultResp):?>
                        <tr><td><a href="admin/resultresp/eliminar/<?= $elemResultResp['idresultresp']; ?>"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> <?= $elemResultResp['vcresultinfobt']; ?></td></tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>