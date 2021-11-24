<!DOCTYPE html>
<html lang="en">
<?php       
  /*session_start(); *//*Eliminar*/
  /*if( isset($_SESSION['id'])==false ){
  header("location: index.php");
  }*/
  /*$modulo=$_REQUEST['modulo']??'';*/
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Fermosa Workout </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="http://localhost/isfp3ecom/" class="h1"><b>Fermosa</b>Workout</a>
    </div>
    <div class="card-body">
    <div class="mb-4">
      <div class="d-flex justify-content-center links">
				No tienes una cuenta? <a href="<?php echo base_url();?>log/register" class="ml-2">Regístrate</a>
			</div>
    </div>
      <!--<p class="login-box-msg">Ingresa tus datos para iniciar sesión</p> -->
      <?php if($this->session->flashdata("error")):?>
        <div class="alert alert-danger">
          <p><?php echo $this->session->flashdata("error")?></p>
        </div>
      <?php endif; ?>
      <?php 
        /* Clearing flashdata on without redirect*/
        if($this->session->flashdata("error")){
        unset($_SESSION['error']);
      }?>
      <form action="<?php echo base_url();?>log/clienteauth/login" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="password"> 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Will make do with browser password remember for now-->
          <!--<div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordar mis datos
              </label>
            </div> -->
          </div>
          <!-- /.col -->
            <input type="productosinput" style="display:none" class="productosinput" id="productosinput" name="productosinput" value="<?php foreach($productos as $producto): echo $producto->idproducto;?>,<?php endforeach;?>0">
          <div class="social-auth-links text-center">
            <button type="submit" class="btn btn-primary btn-block" name="login">Iniciar sesión</button>
          </div>
          <!-- /.col ex col-4 class -->
        </div>
      </form>

      <!-- No social auth for now
      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      -->
      <!-- /.social-auth-links -->
      
      <div class="mb-4">
					<div class="d-flex justify-content-center links">
						<a href="#">Olvidaste tu contraseña?</a>
					</div>
      </div>

      <div class="mb-4">
					<div class="d-flex justify-content-center links">
						<a href="<?php echo base_url();?>log/auth">Soy administrador</a>
					</div>
      </div>

      <!-- Old, superseeded by text above
      <p class="mb-1">
        <a href="forgot-password.html">Olvidaste tu contraseña?</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrar una nueva cuenta</a>
      </p>
      -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/adminlte.min.js"></script>
</body>
</html>