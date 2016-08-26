<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado encuestas</h3>
                <h3><small>En este modulo se puede agregar, editar y eliminar datos de encuestas.</small></h3>
                <hr />
                <a class="btn btn-default" style="float: right;" href="admin/encuesta/formulario">Nuevo</a>
                <br />
                <br />
                <br />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 70px;"></th>
                                <th>NOMBRE</th>
                                <th>DESCRIPCIÓN</th>
                            </tr>
                        </thead>
                    <?php foreach($aEncuesta AS $elemEncuesta):?>
                        <tr>
                            <td>
                                <a href="admin/encuesta/formulario/<?= $elemEncuesta['idencuesta']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
                                <a href="admin/encuesta/baja/<?= $elemEncuesta['idencuesta']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                <a href="admin/pregunta/index/<?= $elemEncuesta['idencuesta']; ?>"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></a>
                            </td>
                            <td><p style="font-size: 11pt;"><?= $elemEncuesta['vcencnombre']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemEncuesta['vcencdescrip']; ?></p></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                    <div class="text-center"><?= $this->pagination->create_links(); ?></div>
                    <br>
            </div>
        </div>
    </div>
</section>