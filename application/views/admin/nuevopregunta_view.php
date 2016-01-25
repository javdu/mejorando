<section id="resultresp">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <h3>Nueva Pregunta</h3>
                <h3><small>En este modulo se crea una pregunta nueva.</small></h3>
                <hr />
                <form action="admin/pregunta/guardar" method="post">
                    <div class="form-group col-xs-12">
                        <label>Factor</label>
                        <?php
                            $aFactor = array('' => 'Seleccionar') + $aFactor;
                            echo form_dropdown('idfactor', $aFactor, null, array('class' => 'form-control')); 
                        ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Subfactor</label>
                        <?php
                            $aSubfactor = array('' => 'Seleccionar') + $aSubfactor;
                            echo form_dropdown('idsubfactor', $aSubfactor, null, array('class' => 'form-control')); 
                        ?>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="vcpregnombre">Nombre</label>
                        <input type="text" class="form-control" id="vcpregnombre" name="vcpregnombre" value="" placeholder="Nombre">
                    </div>
                    <br />
                    <!--
                    <h4>Posibles Respuestas</h4>
                    <div class="form-group col-xs-12">
                        <label>Respuesta</label>
                        <?php
                            $aRespuesta = array('' => 'Seleccionar') + $aRespuesta;
                            echo form_dropdown('idrespuesta', $aRespuesta, null, array('class' => 'form-control')); 
                        ?>
                    </div>
                    -->
                    <br/>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="admin/pregunta/index">Cancelar</a>
                                        <input class="btn btn-default" type="submit" value="Guardar">
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