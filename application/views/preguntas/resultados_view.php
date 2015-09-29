<section id="preguntas">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-lg-offset-2">
                <form name="resultadosForm" id="resultadosForm" action="cuestionario/resultados/guardar">
                    <p>RESULTADOS</p>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar'>
                                <div class='wrapper text-center'>
                                    <div class="btn-group btn-group-lg">
                                        <a href="preguntas1" class="btn btn-default" style="padding: 20px 40px; width: 300px; color: #0E6E8C;">VOLVER</a>
                                        <input type="submit" class="btn btn-default" style="padding: 20px 40px; width: 300px; color: #0E6E8C;" value="IMPRIMIR Y FINALIZAR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#juga" ).css('border', '0px');
        
        $( "#resultados" ).css('border-bottom', '3px solid #2196F3');
        
        
    });
</script>