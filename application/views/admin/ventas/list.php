        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Ventas
                <small>Listado</small>
                <div class=""> <?php if($permisos->insert ==1):?>
                    <small>Añadir nuevo</small>
                    <a href="<?php echo base_url();?>ventas/ventas/add" class="btn btn-primary"><span class="fa fa-plus"></span></a></div>
                    <?php endif;?>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                             <!-- <a href="<?php /* echo base_url();*/?>ventas/add" class="btn btn-primary"><span class="fa fa-plus"></span></a>  -->                           
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                            <div class="col-md-12">
                                <table id="example1"class="table table-bordered btn-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID Cliente</th>
                                            <th>Fecha</a></th>
                                            <th>Subtotal</th>
                                            <th>IVA</th>
                                            <th>Descuento</th>
                                            <th>Total</th>
                                            <th>ID Tipo Comprobante</th>
                                            <th>ID Usuario</a></th>
                                            <th>Número de Comprobante</th>
                                            <th>Serie</th>
                                            <th>Estado</th></th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($ventas)) ?>
                                            <?php foreach ($ventas as $venta):?>
                                        <tr>
                                            <td><?php echo $venta->idventa;?></td>
                                            <td><?php echo $venta->idcliente;?></td>
                                            <td><?php echo $venta->fecha;?></td>
                                            <td><?php echo $venta->subtotal;?></td>
                                            <td><?php echo $venta->iva;?></td>
                                            <td><?php echo $venta->descuento;?></td>
                                            <td><?php echo $venta->total;?></td>
                                            <td><?php echo $venta->idtipocomprobante;?></td>
                                            <td><?php echo $venta->idusuario;?></td>
                                            <td><?php echo $venta->numerodocumento;?></td>
                                            <td><?php echo $venta->serie;?></td>
                                            <td><?php echo $venta->estado;?></td>
                                            <td>
                                                  <div class="btn-group">
                                                   
                                                    <button type="button" class="viewVenta btn btn-info btn-view" value="<?php echo $venta->idventa;?>" data-toggle="modal" data-target="#viewVentaModal">
                                                        <span class="fas fa-search"></span>
                                                    </button>
                                                    
                                                    <!-- <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a> -->                
                                                    <?php if($permisos->update ==1):?>
                                                    <a href="<?php echo base_url()?>ventas/ventas/edit/<?php echo $venta->idventa;?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                                                    <?php endif; ?>
                                                    <?php if($permisos->delete ==1):?>
                                                    <a href="<?php echo base_url();?>ventas/ventas/delete/<?php echo $venta->idventa;?>" class="btn btn-danger"><span class="fas fa-trash"></span></a>
                                                    <?php endif; ?>
                                                    <script type="text/javascript">
                                                        var elems = document.getElementsByClassName('btn btn-danger');
                                                        var confirmIt = function (e) {
                                                            if (!confirm('Estas seguro de que deseas eliminar ese registro?')) e.preventDefault();
                                                        };
                                                        for (var i = 0, l = elems.length; i < l; i++) {
                                                            elems[i].addEventListener('click', confirmIt, false);
                                                        }
                                                    </script>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

<div class="modal fade" id="viewVentaModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Informacion de la venta</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidusuarioden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="viewVentaPrint btn btn-primary"><span class="fa fa-print">Imprimir</span></button>
    </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
