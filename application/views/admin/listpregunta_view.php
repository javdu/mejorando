<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Cuestionario</h3>
                <h3><small>En este modulo se puede agregar, editar y eliminar cada uno de los componentes del cuestionario.</small></h3>
                <hr />
                <a class="btn btn-default" style="float: right;" href="admin/pregunta/nuevo">Nueva Pregunta</a>
                <a class="btn btn-default" style="float: right;" href="admin/subfactor/nuevo">Nuevo Subfactor</a>
                <a class="btn btn-default" style="float: right;" href="admin/factor/formulario">Nuevo Factor</a>
                <br />
                <br />
                <?php foreach($aFactor AS $elemFactor): ?>
                        <h3 style="color: #8E9BFF;">
                            <a href="admin/factor/formulario/<?= $elemFactor['idfactor']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true" style="color: #8E9BFF;"></a>
                            <a href="admin/factor/baja/<?= $elemFactor['idfactor']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color: #8E9BFF;"></span></a> 
                            <?= $elemFactor['vcfactnombre']; ?>
                        </h3>
                        <?php if(isset($elemFactor['subfactor'])):?>
                            <?php foreach($elemFactor['subfactor'] AS $aSubfactor): ?>
                                <?php foreach($aSubfactor AS $elemSubfactor): ?>
                                    <h4 style="color: #E08283;">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="admin/subfactor/editar/<?= $elemSubfactor['idsubfactor']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true" style="color: #E08283;"></a>
                                        <a href="admin/subfactor/baja/<?= $elemSubfactor['idsubfactor']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color: #E08283;"></span></a> 
                                        <a href="admin/resultresp/index/<?= $elemSubfactor['idsubfactor']; ?>"><i class="fa fa-bars" style="color: #E08283;"></i></a>
                                        <?= $elemSubfactor['vcsubfactnombre']; ?>
                                    </h4>
                                    <?php if(isset($elemSubfactor['pregunta'])):?>
                                        <?php foreach($elemSubfactor['pregunta'] AS $aPregunta): ?>
                                            <?php foreach($aPregunta AS $elemPregunta): ?>
                                                <p style="color: #18BC9C;">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="admin/pregunta/editar/<?= $elemPregunta['idpregunta']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
                                                    <a href="admin/pregunta/baja/<?= $elemPregunta['idpregunta']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> 
                                                    <a href="admin/pregunta/respuesta/<?= $elemPregunta['idpregunta']; ?>"><i class="fa fa-share"></i></a>
                                                    <?= $elemPregunta['vcpregnombre']; ?>
                                                </p>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>    
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>