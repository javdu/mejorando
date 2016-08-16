<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Listado de alumnos/as</h3>
                <h3><small>En este modulo se puede agregar, editar y eliminar datos de alumnos/as.</small></h3>
                <hr />
                <a class="btn btn-default" style="float: right;" href="admin/persona/formulario">Nuevo</a>
                <br />
                <br />
                <br />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>DNI</th>
                                <th>APELLIDO Y NOMBRE</th>
                                <th>TIPO TUTOR</th>
                                <th>TUTOR</th>
                                <th>ESCUELA</th>
                                <th>GRADO</th>
                            </tr>
                        </thead>
                    <?php foreach($aPersona AS $elemPersona):?>
                        <tr>
                            <td>
                                <a href="admin/persona/formulario/<?= $elemPersona['idalumno']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></a>
                                <a href="admin/persona/baja/<?= $elemPersona['idalumno']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                            </td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['inperdni']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['vcpernombre']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['vcparentnombre']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['nombreTutor']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['vcescnombre']; ?></p></td>
                            <td><p style="font-size: 11pt;"><?= $elemPersona['vcescgradnombre']; ?></p></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                    <div class="text-center"><?= $this->pagination->create_links(); ?></div>
                    <br>
            </div>
        </div>
    </div>
</section>