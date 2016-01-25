<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado de Resultados del Informe.</h3>
                <hr />
                <table class="table">
                    <?php foreach($aResult AS $elemResult): ?>
                        <tr>
                            <th><?= $elemResult['idresultado']; ?></th>
                            <th><?= $elemResult['vcfactnombre']; ?></th>
                            <th><?= $elemResult['vcsubfactnombre']; ?></th>
                            <th><?= substr($elemResult['vcresultinfobt'], 0, 50); ?></th>
                            <th><?= substr($elemResult['vcresultsugprof'], 0, 50); ?></th>
                            <th><?= substr($elemResult['vcresultejepot'], 0, 50); ?></th>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>