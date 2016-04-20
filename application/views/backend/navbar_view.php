<!-- Navigation -->
<div class="backend">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4 style="margin-top: 15px; vertical-align: middle;">MENTES MEJ<i class="fa fa-smile-o"></i>RAND<i class="fa fa-smile-o"></i> <i class="fa fa-smile-o"></i>N-LINE</h4>
            </div>
            <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
                <!-- <li><a href="#">Link</a></li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="admin/pregunta">Preguntas</a></li>
                        <li><a href="admin/persona">Alumno</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="admin/escuela">Escuela</a></li>
                        <li><a href="admin/diagnostico">Diagnostico</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!--<li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Nosotros</a>
                    </li>-->
                    <div id="box-login-usuario" style="margin-top: 15px; vertical-align: middle;"></div>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>

<script>
    $( document ).ready(function() {
        $.ajax({
            url: "login/autenticacion/loadloginuser",
            type: "post", 
            success: function(result){
                $("#box-login-usuario").html(result);
            }
        });
    });
</script>