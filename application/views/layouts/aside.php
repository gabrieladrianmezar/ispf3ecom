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
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>dist/img/user3-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata("nombre")?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>ventas/estadisticas" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Estadisticas
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>usuarios/usuarios" class="nav-link"> 
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>clientes/clientes" class="nav-link"> 
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Clientes
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>productos/productos" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Productos <?php /* echo base_url();?*/ ?>
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>ventas/ventas" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Ventas
                 <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>   
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>ventas/reportes" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Reportes
                 <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>   
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>sysadmin/permisos" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Permisos
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
