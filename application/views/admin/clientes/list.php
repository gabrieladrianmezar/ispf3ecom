
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Clientes
                <small>Listado</small>
                <div class=""> <?php if($permisos->insert ==1):?>
                    <small>Añadir nuevo</small>
                    <a href="<?php echo base_url();?>clientes/clientes/add" class="btn btn-primary"><span class="fa fa-plus"></span></a></div>
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
                             <!-- <a href="<?php /* echo base_url();*/?>clientes/add" class="btn btn-primary"><span class="fa fa-plus"></span></a>  -->                           
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                            <div class="col-md-12">
                                <table id="example1"class="table table-bordered btn-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Dni</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($clientes)) ?>
                                            <?php foreach ($clientes as $cliente):?>
                                        <tr>
                                            <td><?php echo $cliente->idcliente;?></td>
                                            <td><?php echo $cliente->email;?></td>
                                            <td><?php echo $cliente->nombre;?></td>
                                            <td><?php echo $cliente->direccion;?></td>
                                            <td><?php echo $cliente->telefono;?></td>
                                            <td><?php echo $cliente->dni;?></td>
                                            <td>
                                                <div class="btn-group">
                                                <button type="button" class="viewCliente btn btn-info btn-view" value="<?php echo $cliente->idcliente;?>" data-toggle="modal" data-target="#viewClienteModal">
                                                        <span class="fas fa-search"></span>
                                                    </button>
                                                    
                                                    <!-- <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a> -->                

                                                    <?php if($permisos->update ==1):?>
                                                    <a href="<?php echo base_url()?>clientes/clientes/edit/<?php echo $cliente->idcliente;?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                                                    <?php endif;?>
                                                    <?php if($permisos->delete ==1):?>
                                                    <a href="<?php echo base_url();?>clientes/clientes/delete/<?php echo $cliente->idcliente;?>" class="btn btn-danger"><span class="fas fa-trash"></span></a>
                                                    <?php endif;?>
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

<div class="modal fade" id="viewClienteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Informacion del Cliente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
