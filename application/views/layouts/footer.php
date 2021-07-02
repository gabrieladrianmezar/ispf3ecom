<!-- =============================================== -->
<footer class="main-footer">
<a href="<?php echo base_url();?>licensepage"><strong>Copyright &copy; </a> 2021 <a href="https://github.com/iamSopapo" target="_blank">iamSopapo</a>.</strong>
    Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versión</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
// Modal viewUsuario de usuarios/list
$(document).ready(function () {
    var base_url= "<?php  echo base_url();?>";
    $(".viewUsuario").on("click", function(){
        var id = $(this).val(); 
        $.ajax({
            url: base_url + "usuarios/view/" + id,
            type:"POST",
            success:function(resp){
              $("#viewUsuarioModal .modal-body").html(resp);
              //alert(resp);
            }
        });
    }); 
  });

// Modal viewCliente de clientes/list
$(document).ready(function () {
    var base_url= "<?php  echo base_url();?>";
    $(".viewCliente").on("click", function(){
        var id = $(this).val(); 
        $.ajax({
            url: base_url + "clientes/view/" + id,
            type:"POST",
            success:function(resp){
              $("#viewClienteModal .modal-body").html(resp);
              //alert(resp);
            }
        });
    }); 
  });

// Modal viewProducto de productos/list
$(document).ready(function () {
    var base_url= "<?php  echo base_url();?>";
    $(".viewProducto").on("click", function(){
        var id = $(this).val(); 
        $.ajax({
            url: base_url + "productos/view/" + id,
            type:"POST",
            success:function(resp){
              $("#viewProductoModal .modal-body").html(resp);
              //alert(resp);
            }
        });
    }); 
  });

// Modal viewVenta de ventas/list
$(document).ready(function () {
    var base_url= "<?php  echo base_url();?>";
    $(".viewVenta").on("click", function(){
        var id = $(this).val(); 
        $.ajax({
            url: base_url + "ventas/view/" + id,
            type:"POST",
            success:function(resp){
              $("#viewVentaModal .modal-body").html(resp);
              //alert(resp);
            }
        });
    }); 
  });

//$(document).on("click", ".open-viewUsuarioDialog", function () {
//    var id = $(this).val(); 
//        $.ajax({
//            url: base_url + "usuarios/view" + id,
//            type:"POST",
//            success:function(resp){
//                $("#viewUsuarioDialog .modal-body").html(resp);
//                alert(resp);
//            }
     //var myBookId = $(this).data('id');
     //$(".modal-body #bookId").val( myBookId );
     // As pointed out in comments,  
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
//})
//});
</script>
</body>
</html>