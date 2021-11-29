<!-- =============================================== -->
<footer class="main-footer">
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
<!-- jQuery Print -->
<script src="<?php echo base_url();?>plugins/jquery-print/jquery.print.js"></script>
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
<script src="<?php echo base_url();?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- HighCharts-->
<script src="<?php echo base_url();?>plugins/highcharts/exporting.js"></script>
<script src="<?php echo base_url();?>plugins/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>plugins/highcharts/export-data.js"></script>
<script src="<?php echo base_url();?>plugins/highcharts/accessibility.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/adminlte.js"></script>
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
$(document).ready(function () {
    var base_url = "<?php  echo base_url();?>";
    var year = (new Date).getFullYear();
    datagrafico(base_url,year);
    $("#year").on("change",function(){
      yearselect = $(this).val();
      datagrafico(base_url,yearselect);
    });
    $(".viewUsuario").on("click", function(){
        var id = $(this).val(); 
        $.ajax({
            url: base_url + "usuarios/usuarios/view/" + id,
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
            url: base_url + "clientes/clientes/view/" + id,
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
            url: base_url + "productos/productos/view/" + id,
            type:"POST",
            success:function(resp){
              $("#viewProductoModal .modal-body").html(resp);
              //alert(resp);
            }
        });
    }); 
  });

$(document).ready(function (){
  $(".viewVentaPrint").on("click", function(){
    $("#viewVentaModal .modal-body").print({
      title:"Comprobante de Venta"
    });
  });
});
// Modal viewVenta de ventas/list
$(document).ready(function () {
    var base_url= "<?php  echo base_url();?>";
    $(".viewVenta").on("click", function(){
        var id = $(this).val(); 
        $.ajax({
            url: base_url + "ventas/ventas/view/" + id,
            type:"POST",
            success:function(resp){
              $("#viewVentaModal .modal-body").html(resp);
              //alert(resp);
            }
        });
    })
    ; 
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
        url:"<?php echo base_url()?>/ventas/productosdetalle/getProductos",
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
        html += "<td><input type='hidden' id='importes' class='importes' name='importes[]' value='"+infoproducto[2]+"'><p>"+infoproducto[2]+"</p></td>";
        html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fas fa-minus-circle'></span></button></td>";
        html += "</tr>";
        $("#tbventas tbody").append(html);
        obtenerValores();
      }else{
        alert("Seleccione un producto");
      };
    });

    $(document).on("click",".cantidades",function(){
      obtenerValores();
    });
    $(document).on("click",".btnSale",function(){
      obtenerValores();
    });

    $(document).on("click",".btn-remove-producto", function(){
      $(this.closest("tr").remove());
      obtenerValores();
    });
    $(document).on("keyup","#tbventas input.cantidades", function(){
      cantidad = $(this).val();
      precio = $(this).closest("tr").find("td:eq(1)").text();
      importe = cantidad * precio;

      $(this).closest("tr").find("td:eq(4)").children("p").text(importe.toFixed(2));
      $(this).closest("tr").find("td:eq(4)").children("input").val(importe);
      obtenerValores()
    });

  //Paginas
  $(function () {
    $("#example1").DataTable({
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
    
  };

  function datagrafico(base_url,year){
    namesMonth=["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre", "Octubre","Noviembre","Diciembre"];
    $.ajax({
      url: base_url + "ventas/estadisticas/getData",
      type:"POST",
      data:{year: year},
      dataType:"json",
      success:function(data){
        var meses = new Array();
        var montos = new Array();
        $.each(data,function(key,value){
          meses.push(namesMonth[value.mes - 1]);
          valor = Number(value.monto);
          montos.push(valor);
        });
        graficar(meses,montos,year);
      }
    })
  }

  function graficar(meses,montos,year){
    Highcharts.chart('grafico', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Montos acumulados en ventas'
    },
    subtitle: {
        text: 'Año ' + year
    },
    xAxis: {
        categories: meses,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">Monto: </td>' +
            '<td style="padding:0"><b>{point.y:.2f} pesos</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        },
        series:{
          dataLabels:{
            enabled:true,
            formatter:function(){
              return Highcharts.numberFormat(this.y,2)
            }
          }
        }
    },
    series: [{
        name: 'Meses',
        data: montos
    }]
});
  }

</script>
</body>
</html>