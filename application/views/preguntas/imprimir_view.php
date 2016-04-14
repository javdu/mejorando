<?php
    $msj = (isset($msj))? '<div class="alert alert-warning"><p>'.$msj.'</p></div>' : '';        
?>

<section id="imprimir" style="padding: 0px;">
    <div class="container">
        <div class="row">
            <?= $msj; ?>
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="jumbotron">
                    <h2 class="text-center">Gracias por participar!</h2>
                    <!--<p>Mejorando Mentes.</p>-->
                </div>
                <br>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="form-group">
                        <div id='toolbar'>
                            <div class='wrapper text-center'>
                                <div class="btn-group">
                                    <a href="cuestionario/resultados/verpdf" target="_blank" id="submitRespuestas" name="submitRespuestas" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">VER RESULTADOS</a>
                                    <a href="preguntas" id="otraEncuesta" name="otraEncuesta" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">INGRESAR OTRO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        $('html, body').animate({ scrollTop: 0 }, 500);
    });
</script>