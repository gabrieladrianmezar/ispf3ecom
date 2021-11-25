<?php 
        
        /*session_start(); *//*Eliminar
        if( isset($_SESSION['id'])==false){
            header("location: index.php");
        }

        /*$modulo=$_REQUEST['modulo']??'';*/
    ?>

<!-- =============================================== --> 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>dashboard" class="brand-link">
      <img src="<?php echo base_url();?>dist/img/FermosaWorkoutLogo.png" alt="Fermosa Workout Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Fermosa Workout</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>about" class="nav-link"> 
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Acerca
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>contactmain" class="nav-link"> 
              <i class="nav-icon fas fa-envelope-square"></i>
              <p>
                 Contacto
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>productos/shop" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Productos <?php /* echo base_url();?*/ ?>
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>ventas/cart" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Carrito
                 <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- =============================================== -->

<?php
/*Eliminar
  if($modulo=="estadisticas ")
  include_once "application/views/admin/estadisticas.php"
  */
?>
