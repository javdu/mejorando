<?php
    $msj = (isset($msj))? '<div class="alert alert-info"><p>'.$msj.'</p></div>' : '';
    $errores = validation_errors();
    $errores = (!empty($errores))? '<div class="alert alert-danger" role="alert">'.$errores.'</div>' : ''; 
?>
<div class="row">
    <div style="padding: 180px 0 103px 0; border-bottom: 3px solid #fff;" class="container">
        <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
            <?= $errores; ?>
            <?= $msj; ?>
            <?= ''//$this->session->userdata('vcpernombre') ?>
            <div class="panel panel-default">
              <div class="panel-heading">Inicio Sesión</div>
              <div class="panel-body">
                <form id="login-form" name="login-form" class="form-horizontal" action="login/autenticacion/login" method="post">
                  <div class="form-group">
                    <label for="vcusunombre" class="col-sm-2 control-label">DNI</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="vcusunombre" name="vcusunombre" placeholder="DNI" value="<?= $aReg['vcusunombre']?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="vcusuclave" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="vcusuclave" name="vcusuclave" placeholder="Password" value="<?= $aReg['vcusuclave']?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a id="show_form_tutor" href="abms/usuario/index">&raquo; Registrarme.</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Entrar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
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