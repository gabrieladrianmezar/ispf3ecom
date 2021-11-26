        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Usuarios
                <small>Listado</small>
                <div class=""><?php if($permisos->insert ==1):?>
                    <small>Añadir nuevo</small>
                     <a href="<?php echo base_url();?>usuarios/usuarios/add" class="btn btn-primary"><span class="fa fa-plus"></span></a></div>
                     <?php endif; ?>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solidusuario">
                    <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                             <!-- <a href="<?php /* echo base_url();*/?>usuarios/add" class="btn btn-primary"><span class="fa fa-plus"></span></a>  -->                           
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
                                            <th>ID Rol</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($usuarios)) ?>
                                            <?php foreach ($usuarios as $usuario):?>
                                        <tr>
                                            <td><?php echo $usuario->idusuario;?></td>
                                            <td><?php echo $usuario->email;?></td>
                                            <td><?php echo $usuario->nombre;?></td>
                                            <td><?php echo $usuario->idrol;?></td>
                                            <td>
                                                <div class="btn-group">

                                                   
                                                    <button type="button" class="viewUsuario btn btn-info btn-view" value="<?php echo $usuario->idusuario;?>" data-toggle="modal" data-target="#viewUsuarioModal">
                                                        <span class="fas fa-search"></span>
                                                    </button>
                                                    
                                                    <!-- <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a> -->                
                                                    <?php if($permisos->update ==1):?>
                                                    <a href="<?php echo base_url()?>usuarios/usuarios/edit/<?php echo $usuario->idusuario;?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                                                    <?php endif;?>
                                                    <?php if($permisos->delete ==1):?>
                                                    <a href="<?php echo base_url();?>usuarios/usuarios/delete/<?php echo $usuario->idusuario;?>" class="btn btn-danger"><span class="fas fa-trash"></span></a>
                                                    <?php endif;?>
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

<div class="modal fade" id="viewUsuarioModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Informacion del Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidusuarioden="true">&times;</span></button>
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
