<section id="poblacion">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <form name="mostrarPersonaForm" id="mostrarPersonaForm" class="form-horizontal">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                                <label for="dni" class="control-label">HABLARE DE:</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p><?= strtoupper($aAlumno['vcpernombre']); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                                <label class="control-label">DNI:</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p><?= $aAlumno['inperdni'] ?></p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <input type="submit" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;" value=" GUARDAR Y CONTINUAR">
                                        <a href="preguntas" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">BUSCAR OTRO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="idalumno" name="idalumno" value="<?= $aAlumno['idalumno']; ?>">
                </form>
                <hr />
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#mostrarPersonaForm" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({
                url: "cuestionario/poblacion/guardar",
                type: "post", 
                data : $("#mostrarPersonaForm").serialize(),
                success: function(result) {
                    $("#box-preguntas").html(result);
                }
            });
        });
    });
</script>