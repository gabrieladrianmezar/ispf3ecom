<!-- =============================================== -->
<footer class="main-footer mains">  
    <a href="<?php echo base_url();?>licensepage"><strong>Copyright &copy; </a> 2021 <a href="https://github.com/gabrieladrianmezar" target="_blank">Gabriel Adrián Meza Romero</a>.</strong>
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
<script src="<?php echo base_url();?>plugins/jquery-ui/jquery-ui.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>lugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url();?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
// Modal viewUsuario de usuarios/list
var cart = [0,0,0,0]


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

  $(document).ready( function() {
    var now = new Date();
    var month = (now.getMonth() + 1);               
    var day = now.getDate();
    if (month < 10) 
        month = "0" + month;
    if (day < 10) 
        day = "0" + day;
    var today = now.getFullYear() + '-' + month + '-' + day;
    $('#datePicker').val(today);
});


  $(function() { 
    $(comprobantes).on("change",function(){
      option = $(this).val();
      if (option !="") {
        infocomprobante = option.split("*");
        $("#idcomprobante").val(infocomprobante[0]);
        $("#iva").val(infocomprobante[2]);
        $("#serie").val(infocomprobante[3]);
        $("#numero").val(generarNumeroComprobante(infocomprobante[1]));
      }
      else{
        $("#idcomprobante").val(null);
        $("#iva").val(null);
        $("#serie").val(null);
        $("#numero").val(null);
      }
      obtenerValores();
    })
  })

  $(document).on("click",".btn-check",function(){
    cliente = $(this).val()
    infocliente = cliente.split("*");
    $("#idcliente").val(infocliente[0]);
    $("#cliente").val(infocliente[1]);
    $("#modal-default").modal("hide")
  });

  $("#producto").autocomplete({
    source:function(request, response){ 
      $.ajax({
        url:"http://localhost/isfp3ecom/ventas/getProductos",
        type:"POST",
        dataType:"json",
        data:{ valor: request.term},
        success:function(data){
          response(data);
        }
      });
    },  
    minLength:1,
    select:function(event, ui){
      data = ui.item.idproducto + "*"+ ui.item.label + "*" + 
            ui.item.precio + "*" + ui.item.stock;
      $("#btn-agregar").val(data);
    },
  });

  $("#btn-agregar").on("click",function(){
      data = $(this).val();
      if (data !='') {
        infoproducto = data.split("*");
        html = "<tr>";
        html += "<td><input type='hidden' name='idproductos[]' value='"+infoproducto[0]+"'>"+infoproducto[1]+"</td>";
        html += "<td><input type='hidden' name='precios[]' value='"+infoproducto[2]+"'>"+infoproducto[2]+"</td>";
        html += "<td>"+infoproducto[3]+"</td>";
        html += "<td><input type='text' name='cantidades[]' value='1' class='cantidades'></td>";
        html += "<td><input type='hidden' name='importes[]' value='"+infoproducto[2]+"'><p>"+infoproducto[2]+"</p></td>";
        html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fas minus-circle'></span></button></td>";
        html += "</tr>";
        $("#tbventas tbody").append(html);
        obtenerValores();
      }else{
        alert("Seleccione un producto");
      };
    });

    $("#btn-to-cart").on("click",function(){
      data = $(this).val();
      if (data !='') {
        infoproducto = data.split(",");
        idproducto = parseInt(infoproducto[0])-1;
        if (cart[idproducto]>0) {
        cantidadproducto = cart[idproducto]+parseInt(infoproducto[1]);
        cart[idproducto] = cantidadproducto;
        alert(cart[idproducto]+"ojo");
        }else{
            cart[idproducto] = parseInt(infoproducto[1]);
            alert(cart[idproducto]+"ejo");
        }
      }else{
        alert("Seleccione un producto");
      };
    });

    $(document).on("click",".btn-remove-producto", function(){
      $(this.closest("tr").remove());
    });
    $(document).on("keyup","#tbventas input.cantidades", function(){
      cantidad = $(this).val();
      precio = $(this).closest("tr").find("td:eq(1)").text();
      importe = cantidad * precio;

      $(this).closest("tr").find("td:eq(4)").children("p").text(importe.toFixed(2));
      $(this).closest("tr").find("td:eq(4)").children("input").val(importe);
    });

  //Paginas
  $(function () {
    $("#example1").DataTable({
      "buttons": [/*"copy",*/ "csv", "excel", "pdf", "print", /*"colvis"*/],
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        },
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  function generarNumeroComprobante(cantidad){
    var numero = parseInt(cantidad)+1; //n debe ser el ultimo numero generado
    var fn ='00000000'; //es la mascara de ceros
    fn = fn.substring (0,8-numero.toString().length) + numero.toString();
    return fn;
  }

  function obtenerValores(){
    subtotal = 0;
    $('#tbventas tbody tr').each(function(){
      subtotal = subtotal + Number($(this).find("td:eq(4)").text());
    });
    $("input[name=subtotal]").val(subtotal);
    porcentaje = $("#iva").val();
    iva = subtotal * (porcentaje/100);
    $("input[name=iva]").val(iva);
    descuento = $("input[name=descuento]").val();
    total = subtotal + iva - descuento;
    $("input[name=total]").val(total.toFixed(2));
    
  }

  function añadirProducto(){

  }

    /*Con quilombo*
    if (cantidad>=99999 && numero<   999999){
      return Number(numero)+1;
    }
    if (numero>= 9999 && numero< 99999){
      return "0" + (Number(numero)+1);
    }
    if (numero>= 999 && numer< 9999){
      return "00" + (Number(numero)+1);
    }
    if (numero>= 99 && numero< 999){
      return "000" + (Number(numero)+1);
    }
    if (numero>= 9 && numero< 99){
      return "0000" + (Number(numero)+1);
    }
    if (numero< 9 ){
      return "00000" + (Number(numero)+1);
    }

    */

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