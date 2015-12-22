<section id="poblacion">
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <ol class="breadcrumb">
                    <li>Registrarme</li>
                    <li>Datos Docente</li>                    
                </ol>
                <form name="personaDocente" id="personaDocente" method="post">
                    <label>Agregar escuela/s</label>
                    <div class="input-group">
                        <?php
                            $aEscuelas = array('' => 'Seleccionar') + $aEscuelas;
                            echo form_dropdown('idescuela', $aEscuelas, 'large', array('class' => 'form-control')); 
                        ?>
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
                                    <th>Escuela</th>
                                </tr>
                                <?php foreach ( $aDocEsc AS $elemDocEsc):?>
                                    <tr>
                                        <td><a class="hrefEliminarDocente" href="abms/usuario/eliminardocente/<?= $elemDocEsc['iddocesc']; ?>"><i class="fa fa-times"></i></a></td>
                                        <td><?= $elemDocEsc['iddocesc']; ?></td>
                                        <td><?= $elemDocEsc['vcescnombre']; ?></td>
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
                    <input type="hidden" value="<?= $aReg['iddocente']; ?>" id="iddocente" name="iddocente" />
                </form>
                <hr />
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
        
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#personaDocente" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({ 
                url: "abms/usuario/guardardocente", 
                type: "post", 
                data : $("#personaDocente").serialize(),
                success: function(result){
                    $("#box-main").html(result);
                }
            })
        });
        
        $( ".hrefEliminarDocente" ).bind( "click", function(event) {
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