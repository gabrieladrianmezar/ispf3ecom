
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
      <p class="login-box-msg">La creación de su cuenta ha sido exitosa ahora puede <a href="<?php echo base_url();?>register/success" class="ml-2">iniciar sesión</a></p>

      </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->