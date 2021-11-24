
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Permisos
                <small>Listado</small>
                <div class="float-right d-none d-sm-inline-block"><?php if($permisosP->insert ==1):?>
                     <a href="<?php echo base_url();?>sysadmin/permisos/add" class="btn btn-primary"><span class="fa fa-plus"></span></a></div>
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
                                            <th>Menu</th>
                                            <th>Rol</th>
                                            <th>Leer</th>
                                            <th>Insertar</th>
                                            <th>Actualizar</th>
                                            <th>Eliminar</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($permisos)) ?>
                                            <?php foreach ($permisos as $permiso):?>
                                        <tr>
                                            <td><?php echo $permiso->id;?></td>
                                            <td><?php echo $permiso->menu;?></td>
                                            <td><?php echo $permiso->rol;?></td>
                                            <td>
                                                <?php if($permiso->read==0):?>
                                                    <span class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($permiso->insert==0):?>
                                                    <span class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($permiso->update==0):?>
                                                    <span class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($permiso->delete==0):?>
                                                    <span class="fa fa-times"></span>
                                                <?php else:?>
                                                    <span class="fa fa-check"></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <!-- <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a> -->                
                                                    <?php if($permisosP->update ==1):?>
                                                    <a href="<?php echo base_url()?>sysadmin/permisos/edit/<?php echo $permiso->id;?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                                                    <?php endif; ?>
                                                    <?php if($permisosP->delete ==1):?>
                                                    <a href="<?php echo base_url();?>sysadmin/permisos/delete/<?php echo $permiso->id;?>" class="btn btn-danger"><span class="fas fa-trash"></span></a>
                                                    <?php endif; ?>
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
