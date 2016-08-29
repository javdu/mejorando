?php
    $msj = (isset($msj))? '<div class="alert alert-info"><p>'.$msj.'</p></div>' : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<div class="row">
    <div style="padding: 180px 0 103px 0; border-bottom: 3px solid #fff;" class="container">
        <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
            <?= $errores; ?>
            <?= $msj; ?>
            <form id="login-form" name="login-form" class="form-horizontal" action="login/seleccionarbd/selectbd" method="post">
                <div class="form-group col-xs-12">
                    <label>Edad de los alumnos</label>
                    <?php
                        $aEdadNinios = array('' => 'Seleccionar') + $aEdadNinios;
                        echo form_dropdown('vcBaseDatos', $aEdadNinios, null, array('class' => 'form-control')); 
                    ?>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <div id='toolbar' style="padding: 40px 15px;">
                            <div class='wrapper text-center'>
                                <div class="btn-group">
                                    <a class="btn btn-default" href="admin/persona/index">&nbsp;&nbsp;&nbsp;Salir&nbsp;&nbsp;&nbsp;</a>
                                    <input class="btn btn-default" type="submit" value="Aceptar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#show_form_tutor" ).bind( "click", function(event) {
            event.preventDefault();
            $.ajax({url: "abms/usuario/index", success: function(result){
                $("#box-main").html(result);
            }});
        });
    });
</script>