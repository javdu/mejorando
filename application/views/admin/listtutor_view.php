<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado de tutores</h3>
                <h3><small>En este modulo se puede agregar, editar y eliminar datos de tutores.</small></h3>
                <hr />
                <a class="btn btn-default" style="float: right;" href="admin/tutor/formulario">Nuevo</a>
                <br />
                <br />
                <br />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>DNI</th>
                                <th>APELLIDO Y NOMBRE</th>
                                <th>DOMICILIO</th>
                                <th>CELULAR</th>
                            </tr>
                        </thead>
                    <?php foreach($aPersona AS $elemPersona):?>
                        <tr>
                            <td>
                                <a href="admin/tutor/formulario/<?= $elemPersona['idtutor']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
                                <a href="admin/tutor/baja/<?= $elemPersona['idtutor']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                            </td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['inperdni']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['vcpernombre']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['vcperdom']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['vcpercelcodarea'].' - '.$elemPersona['vcpercel']; ?></p></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                    <div class="text-center"><?= $this->pagination->create_links(); ?></div>
                    <br>
            </div>
        </div>
    </div>
</section>