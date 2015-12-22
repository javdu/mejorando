<section id="preguntas">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <form name="preguntas1Form" id="preguntas1Form">
                    <ul class="list-group">
                    <?php foreach($aPreg as $preg): ?>
                            <a class="list-group-item boxpregunta">
                                <h5 class="text-center"> ¿<?= $preg['vcpregnombre']; ?>?</h5>
                                <div class="row">
                                    <?php foreach($preg['respuestas'] as $resp): ?>
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                                            <label class="label-pregunta">
                                                <input type="radio" name="<?= $preg['idpregunta']; ?>" value="<?= $resp['idrespuesta'];?>" /> <?= $resp['vcrespnombre']; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </a>
                    <?php endforeach; ?>
                    </ul>
                    <div class="text-center"><?= $this->pagination->create_links(); ?></div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group">
                            <div id='toolbar'>
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <input type="submit" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;" value="GUARDAR Y CONTINUAR">
                                        <a href="preguntas" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">VOLVER</a>
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
        /*
        $( ".boxpregunta" ).bind( "click", function() {
            $( ".boxpregunta" ).removeClass("active");
            $(this).addClass("active");
            
        });*/
        
        $(':radio').change(function () {
            $(':radio[name=' + this.name + ']').parent().css("font-weight", "normal");
            $(':radio[name=' + this.name + ']').parent().css("font-size", "14px");
            $(this).parent().css( "font-weight", "bold" );
            $(this).parent().css( "font-weight", "bold" );
            $(this).parent().css( "font-size", "15px" );
        });
        
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#contanos" ).css('border-bottom', '5px solid #7f8c8d');
        $( "#juga" ).css('border-bottom', '5px solid #2196F3');
        $( "#resultados" ).css('border-bottom', '5px solid #7f8c8d');
        
        $( "#preguntas1Form" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({
                url: "cuestionario/preguntas1/guardarcontinuar",
                type: "post", 
                data : $("#preguntas1Form").serialize(),
                success: function(result){
                    $("#box-preguntas").html(result);
                }
            });
        });
        
        $( ".nropaginacion" ).bind( "click", function(event) {
            event.preventDefault();
            $link = $(this).children("a").attr('href');
            $.ajax({
                url: $link,
                type: "post", 
                data : $("#preguntas1Form").serialize(),
                success: function(result){
                    $("#box-preguntas").html(result);
                }
            });
        });
    });
</script>