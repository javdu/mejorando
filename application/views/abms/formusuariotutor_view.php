<?php
    $msj = (isset($msj))? $msj : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<section id="poblacion">
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <?= $errores; ?>
                <?= $msj; ?>
                <ol class="breadcrumb">
                    <li>Registrarme</li>
                    <li>Datos Padre | Madre | Tutor</li>                    
                </ol>
                <form name="form" id="form" method="post">
                    <label for="inperdni">Soy padre | madre | tutor del alumno</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inperdni" name="inperdni" placeholder="DNI" value="<?= $aReg['inperdni']; ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-check"></i></button>
                        </span>
                    </div>
                    <br />
                    <br />
                    <div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th></th>
                                    <th>#</th>
                                    <th>DNI</th>
                                    <th>Nombre</th>
                                    <th>Escuela</th>
                                </tr>
                                <?php foreach ( $aTutAlum AS $elemTutAlum):?>
                                    <tr>
                                        <td><a class="hrefEliminarTutor" href="abms/usuario/eliminartutor/<?= $elemTutAlum['idtutalum']; ?>"><i class="fa fa-times"></i></a></td>
                                        <td><?= $elemTutAlum['idtutalum']; ?></td>
                                        <td><?= $elemTutAlum['inperdni']; ?></td>
                                        <td><?= $elemTutAlum['vcpernombre']; ?></td>
                                        <td><?= $elemTutAlum['vcescnombre']; ?></td>
                                    </tr>
                                <?php endforeach;?>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a href="preguntas" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">CANCELAR</a>
                                        <a id="hrefContinuar" href="abms/usuario/formusuario" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">CONTINUAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $aReg['idtutor']; ?>" id="idtutor" name="idtutor" />
                </form>
                <hr />
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#form" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({ 
                url: "abms/usuario/guardartutalum", 
                type: "post", 
                data : $("#form").serialize(),
                success: function(result){
                    $("#box-main").html(result);
                }
            });
        });
        
        $( ".hrefEliminarTutor" ).bind( "click", function(event) {
            event.preventDefault();
            $.ajax({
                async: true,
                type: "get",
                url: $(this).attr('href'),
                success: function(result){
                    $("#box-main").html(result);
                }
            })
        });
        
        $( "#hrefContinuar" ).bind( "click", function(event) {
            event.preventDefault();
            $.ajax({
                async: true,
                type: "get",
                url: $(this).attr('href'),
                success: function(result){
                    $("#box-main").html(result);
                }
            })
        });
    });
</script>