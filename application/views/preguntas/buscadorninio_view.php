<?php
    $msj = (isset($msj))? $msj : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<section id="poblacion">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <?= $errores; ?>
                <?= $msj; ?>
                <form name="poblacionForm" id="poblacionForm" class="form-horizontal">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <label for="dni" class="control-label">HABLARE DE:</label>
                            </div>
                            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                <input type="text" class="form-control" id="inperdni" name="inperdni" placeholder="DNI" value="<?= $inperdni; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 col-lg-9 col-lg-offset-3">
                                <a href="abms/persona" id="show_form_persona" name="show_form_persona">&raquo; Ingresar nuevo alumno.</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group">
                            <div class='wrapper text-center'>
                                <div class="btn-group">
                                    <input type="submit" class="btn btn-default" style="padding: 10px 20px; color: #0E6E8C;" value="BUSCAR">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr />
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        $( "#poblacionForm" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({
                url: "abms/persona/buscarPersona",
                type: "post", 
                data : $("#poblacionForm").serialize(),
                success: function(result){
                    $("#box-preguntas").html(result);
                }
            });
        });
        
        $( "#show_form_persona" ).bind( "click", function(event) {
            event.preventDefault();
            $.ajax({url: "abms/persona", success: function(result){
                $("#box-preguntas").html(result);
            }});
        });
    });
</script>