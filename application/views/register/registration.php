
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fermosa Workout</title>
            <?php if ($this->session->flashdata("error")): ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error")?></p>           
                </div>
            <?php endif; ?>
              <?php 
                /* Clearing flashdata on without redirect*/
                if($this->session->flashdata("error")){
                unset($_SESSION['error']);
                }?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/adminlte.min.css">
</head>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Fermosa</b>Workout</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ya tienes una cuenta? <a href="<?php echo base_url();?>clienteauth" class="ml-2">Inicia sesión</a></p>

      <form action="<?php echo base_url();?>register/create" method="post">
        <div class="input-group mb-3">
        <input type="text" class="form-control <?php echo !empty(form_error("nombre"))? 'is-invalid':'';?>" placeholder="Nombre de usuario" id="nombre" name="nombre" maxlength="255" value="<?php echo set_value("nombre");?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">

          <input type="email" class="form-control <?php echo !empty(form_error("email"))? 'is-invalid':'';?>" placeholder="Email" id="email" name="email" minlength="3" maxlength="200" value="<?php echo set_value("email");?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control <?php echo !empty(form_error("password"))? 'is-invalid':'';?>" placeholder="Contraseña" id="password" name="password" maxlength="255" value="<?php echo set_value("password");?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            <div class="input-group-append">
                <div class="input-group-text">
                    <input type="checkbox" id="showPass" name="showPass" value="show" class="fas fa-eye">
                </div>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" class="form-control <?php echo !empty(form_error("passwordconf"))? 'is-invalid':'';?>" placeholder="Reintroducir contreseña" id="passwordconf" name="passwordconf" maxlength="255" value="<?php echo set_value("retypepassword");?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            <div class="input-group-append">
                <div class="input-group-text">
                    <input type="checkbox" id="showPassConf" name="showPassConf" value="showconf" class="fas fa-eye">
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Estoy de acuerdo con los <button type="button" class="btn btn-primary btn-block viewTerminos" data-toggle="modal" data-target="#viewTerminosModal">términos</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" id="registerbtn" disabled>Crear cuenta</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  <div class="modal fade" id="viewTerminosModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Términos y condiciones</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p style='margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in mauris sed lacus scelerisque bibendum sed ut ipsum. Nunc sed arcu rutrum, hendrerit purus in, ornare justo. Quisque volutpat sem non lacus vestibulum laoreet at id sem. In hac habitasse platea dictumst. Maecenas id feugiat orci. In sit amet viverra nibh, vitae dapibus eros. Praesent velit justo, mattis et dapibus fringilla, volutpat a felis. Aliquam sollicitudin eros pellentesque, convallis nulla quis, tristique mauris. Etiam semper diam et ornare cursus. Vestibulum a nunc ultricies, pharetra ante non, mattis nibh. Cras interdum elit mauris, fermentum bibendum arcu eleifend non. In consequat est sem. Maecenas interdum nulla vitae nisl rhoncus suscipit. Curabitur pretium consequat mauris. Curabitur lacinia luctus laoreet. Nam pretium mauris quis magna cursus, at condimentum ante lacinia.</p>
        <p style='margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Donec ut laoreet risus. Aliquam sit amet ultricies libero, ac pretium mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et lorem ipsum. Ut sodales arcu elit, nec pharetra diam molestie id. Aliquam erat volutpat. Duis suscipit ipsum dui, eget tincidunt ipsum dictum ut. Donec quis accumsan ligula. Vivamus tortor lorem, euismod quis augue scelerisque, pharetra hendrerit ipsum. Nam pharetra, risus ac vestibulum euismod, est eros vestibulum diam, eu eleifend velit metus eget dui. Vestibulum mattis et justo at varius. Nunc dictum venenatis sapien eu venenatis. Maecenas hendrerit sapien leo, a vehicula arcu posuere eget. Sed lacinia, tortor in condimentum fermentum, magna elit sollicitudin neque, vitae tristique mi orci efficitur tellus.</p>
        <p style='margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Proin semper diam vitae eros fermentum interdum. Sed ultrices pulvinar pulvinar. Phasellus ornare eros ac leo imperdiet, vitae egestas nibh consequat. Donec velit ante, ornare ut diam semper, hendrerit pharetra sem. Phasellus pellentesque elit et arcu dictum, in condimentum leo porttitor. Integer quis odio at felis mattis lobortis ut at sapien. Vivamus id velit semper, laoreet mauris vitae, efficitur metus. Maecenas feugiat interdum erat ac efficitur. Aenean non ullamcorper dui, eu pulvinar nisi. In eget euismod sem. Donec eu augue blandit, tincidunt diam a, luctus dolor. Nulla eu eleifend odio. Curabitur nisl nunc, finibus id pellentesque eget, bibendum sed lacus. Fusce molestie sapien eu quam sagittis eleifend. Suspendisse ornare fermentum nibh ac eleifend.</p>
        <p style='margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Cras id lectus ut ligula dapibus viverra. Vivamus consectetur suscipit pulvinar. Quisque lorem mi, lacinia ut lacus at, tristique aliquet nisl. Sed elementum neque vel turpis tincidunt semper. Etiam condimentum ornare leo sit amet bibendum. Vivamus tempus sollicitudin pulvinar. Aenean fringilla vehicula dui eu euismod. Pellentesque nec interdum dui, sit amet volutpat urna. Aliquam vitae semper nulla, in pharetra elit. In maximus augue a ultrices convallis. Phasellus eu quam ac turpis aliquet congue eget at tortor. Cras at ornare est, vitae porta est. Nam imperdiet mi a purus porttitor maximus. Aenean libero est, hendrerit id aliquet tristique, blandit at sapien.</p>
        <p style='margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Proin et odio leo. Sed consectetur elit sed elit aliquam venenatis. Proin gravida ullamcorper facilisis. Sed maximus lorem sed quam lobortis vestibulum. Proin ultricies felis in est egestas ultrices. Maecenas feugiat dictum erat, in fringilla sapien posuere sed. Etiam tempus metus eget est pharetra tincidunt. Nulla arcu turpis, posuere efficitur magna at, blandit fringilla metus. Fusce dignissim hendrerit nisl, at gravida libero porta nec. Vivamus turpis est, rhoncus non purus quis, tempus tristique est. In auctor lorem sed luctus ultrices. Praesent mauris est, sodales ac neque imperdiet, maximus dapibus odio.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.
</div>
 /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/adminlte.min.js"></script>
<script>
    var checker = document.getElementById('agreeTerms');
    var registerbtn = document.getElementById('registerbtn');
    checker.onchange = function() {
    registerbtn.disabled = !this.checked;
    };

    var showPass = document.getElementById('showPass');
    var password = document.getElementById('password');
    showPass.onchange = function() {
        if(!this.checked){
            password.type = 'password'
        } else {
            password.type = 'text'
        };
    };

    var showPassConf = document.getElementById('showPassConf');
    var passwordconf = document.getElementById('passwordconf');
    showPassConf.onchange = function() {
        if(!this.checked){
            passwordconf.type = 'password'
        } else {
            passwordconf.type = 'text'
        };
    };
</script>
</body>
</html>
