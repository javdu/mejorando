<section id="poblacion">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-lg-offset-2">
                <form name="poblacionForm" id="poblacionForm">
                    <div class="panel panel-default">
                      <div class="title panel-heading text-center"><h5>¿Puede caminar sobre una línea recta?</h5></div>
                      <div class="panel-body" style="display: none;">
                            <div class="radio text-center">
                                <div class="row">
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Siempre</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Algunas veces</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Nunca</label></div>
                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="title panel-heading text-center"><h5>¿Puede recortar figuras con tijera para niños?</h5></div>
                      <div class="panel-body" style="display: none;">
                            <div class="radio text-center">
                                <div class="row">
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Siempre</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Algunas veces</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Nunca</label></div>
                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="title panel-heading text-center"><h5>¿Puede lavarse las manos sin ayuda?</h5></div>
                      <div class="panel-body" style="display: none;">
                            <div class="radio text-center">
                                <div class="row">
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Siempre</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Algunas veces</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Nunca</label></div>
                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="title panel-heading text-center"><h5>¿Puede abrochar un botón?</h5></div>
                      <div class="panel-body" style="display: none;">
                            <div class="radio text-center">
                                <div class="row">
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Siempre</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Algunas veces</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Nunca</label></div>
                                </div>
                            </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="title panel-heading text-center"><h5>¿Puede guardar solo sus cosas en su mochila?</h5></div>
                      <div class="panel-body" style="display: none;">
                            <div class="radio text-center">
                                <div class="row">
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Siempre</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Algunas veces</label></div>
                                    <div class="col-xs-4"><label><input type="radio" name="optradio">Nunca</label></div>
                                </div>
                            </div>
                      </div>
                    </div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="display: none;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group btn-group-lg">
                                        <a href="preguntas" class="btn btn-default" style="padding: 20px 40px; width: 300px; color: #0E6E8C;">VOLVER</a>
                                        <input type="submit" class="btn btn-default" style="padding: 20px 40px; width: 300px; color: #0E6E8C;" value="GUARDAR Y CONTINUAR">
                                    </div>
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
        $( ".title" ).bind( "click", function() {
            $parent = $(this).parent();
            $panel = $parent.children('div.panel-body');
            $panel.toggle('slow');
        });
    });
</script>