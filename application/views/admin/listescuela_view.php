<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado escuelas</h3>
                <h3><small>En este modulo se puede agregar, editar y eliminar datos de personas.</small></h3>
                <hr />
                <a class="btn btn-default" style="float: right;" href="admin/escuela/formulario">Nuevo</a>
                <br />
                <br />
                <br />
                    <table class="table table-striped">
                    <?php foreach($aEscuela AS $elemEscuela):?>
                        <tr>
                            <td>
                                <a href="admin/escuela/formulario/<?= $elemEscuela['idescuela']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
                                <a href="admin/escuela/baja/<?= $elemEscuela['idescuela']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                            </td>
                            <td><p style="font-size: 11pt;"><?= $elemEscuela['vcescnombre']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemEscuela['vcescnro']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemEscuela['vcescdirec']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemEscuela['vcesctel']; ?></p></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                    <div class="text-center"><?= $this->pagination->create_links(); ?></div>
                    <br>
            </div>
        </div>
    </div>
</section>