<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado de Subfactor</h3>
                <h3><small>En este modulo se puede agregar, editar y eliminar subfactores del cuestionario.</small></h3>
                <hr />
                <a class="btn btn-default" style="float: right;" href="admin/subfactor/nuevo">Nuevo</a>
                <br />
                <?php foreach($aFactor AS $elemFactor): ?>
                        <h3 style="color: #D2527F;"><?= $elemFactor['vcfactnombre']; ?></h3>
                        <?php foreach($elemFactor['subfactor'] AS $aSubfactor): ?>
                            <?php foreach($aSubfactor AS $elemSubfactor): ?>
                                <p>
                                    <a href="admin/subfactor/editar/<?= $elemSubfactor['idsubfactor']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
                                    <a href="admin/subfactor/baja/<?= $elemSubfactor['idsubfactor']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> 
                                    <a href="admin/resultresp/index/<?= $elemSubfactor['idsubfactor']; ?>"><i class="fa fa-bars"></i></a>
                                    <?= $elemSubfactor['vcsubfactnombre']; ?>
                                </p>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>