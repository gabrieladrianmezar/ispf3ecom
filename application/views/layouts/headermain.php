<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Primary Meta Tags -->
  <title>Fermosa Workout | gabrieladrianmezar</title>
  <meta name="title" content="Fermosa Workout | gabrieladrianmezar">
  <meta name="description" content="Personal project based upon building a eCommerce website and CRUD panel">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://gamezar.xyz/">
  <meta property="og:title" content="Fermosa Workout | gabrieladrianmezar">
  <meta property="og:description" content="Personal project based upon building a eCommerce website and CRUD panel">
  <meta property="og:image" content="">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" disabled>
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/jquery-ui/jquery-ui.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/styles.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/daterangepicker/daterangepicker.css" disabled>
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/summernote/summernote-bs4.css" disabled>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script>
</script>    
</head>
<body class="hold-transition sidebar-mini layout-fixed"> <!-- Tweak this to keep sidebar collapsed-->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>" class="nav-link"><b>Inicio</b></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>productos/shop" class="nav-link"><b>Productos</b></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>about" class="nav-link"><b>Acerca</b></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>contactmain" class="nav-link"><b>Contacto</b></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <?php if( isset($_SESSION['idcliente'])==true || isset($_SESSION['idusuario'])==true) :  ?>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url();?>ventas/cart" class="nav-link"><i class="fas fa-shopping-cart"></i><b>Carrito</b></a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>log/auth/logout" class="nav-link"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </li>
    </ul>
    <?php else : ?>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url();?>ventas/cart" class="nav-link"><i class="fas fa-shopping-cart"></i><b> Carrito</b></a>
        </li>
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>log/clienteauth" class="nav-link"><i class="fas fa-sign-in-alt"></i><span class="">Iniciar sesión</span></a>
        </li>
    </ul>
    <?php endif; ?>
  </nav>
  <!-- /.navbar -->