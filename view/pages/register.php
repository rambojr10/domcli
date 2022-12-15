<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Domcli | Página de registro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../../assets/images/iconodomcli.png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="../../assets/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
      .gradient{
        background: rgba(255,109,0,1);
        background: -moz-linear-gradient(left, rgba(255,109,0,1) 0%, rgba(24,162,147,1) 100%);
        background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,109,0,1)), color-stop(100%, rgba(24,162,147,1)));
        background: -webkit-linear-gradient(left, rgba(255,109,0,1) 0%, rgba(24,162,147,1) 100%);
        background: -o-linear-gradient(left, rgba(255,109,0,1) 0%, rgba(24,162,147,1) 100%);
        background: -ms-linear-gradient(left, rgba(255,109,0,1) 0%, rgba(24,162,147,1) 100%);
        background: linear-gradient(to right, rgba(255,109,0,1) 0%, rgba(24,162,147,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff6d00', endColorstr='#18a293', GradientType=1 );
    }
</style>
</head>
<body class="hold-transition register-page gradient">
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>Domcli</b>.com</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Formulario de registro</p>

                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nombre completo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Correo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control" placeholder="Repetir contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row"> 
                    <div class="col-12">    
                            <div class="custom-control custom-switch mb-3">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Tengo mi negocio</label>
                            </div>
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                Acepto los <a href="#">términos y condiciones</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-outline-primary btn-block">Registrar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <hr>
            <a href="login.html" class="text-center">Ya estoy registrado, ingresar.</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->
<div class="container text-center">
    <a href="../../index.php" class="btn btn-outline-light">Volver al inicio</a>
</div>

<!-- jQuery -->
<script src="../../assets/js/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/js/bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
