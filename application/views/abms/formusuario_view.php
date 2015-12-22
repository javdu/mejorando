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
                    <li>Datos Usuario</li>                    
                </ol>
                <form name="formUsuario" id="formUsuario" method="post">
                    <div class="form-group">
                        <label for="vcusunombre">Usuario (DNI)</label>
                        <input type="text" class="form-control" id="vcusunombre" name="vcusunombre" placeholder="DNI" value="<?= $aReg['vcusunombre']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="vcusuclave">Clave</label>
                        <input type="text" class="form-control" id="vcusuclave" name="vcusuclave" placeholder="Clave" value="<?= $aReg['vcusuclave']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="vcusuemail">Email</label>
                        <input type="text" class="form-control" id="vcusuemail" name="vcusuemail" placeholder="Email" value="<?= $aReg['vcusuemail']; ?>">
                    </div>
                    <br>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <div id='toolbar' style="padding: 40px 15px;">
                                <div class='wrapper text-center'>
                                    <div class="btn-group">
                                        <a href="preguntas" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;">CANCELAR</a>
                                        <input type="submit" class="btn btn-default" style="padding: 10px 20px; width: 200px; color: #0E6E8C;" value="GUARDAR">
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
        
        $('html, body').animate({ scrollTop: 0 }, 500);
        
        $( "#formUsuario" ).submit(function( event ) {
            event.preventDefault();
            $.ajax({ 
                url: "abms/usuario/guardarusuario", 
                type: "post", 
                data : $("#formUsuario").serialize(),
                success: function(result){
                    $("#box-main").html(result);
                }
            });
        });
    });
</script>