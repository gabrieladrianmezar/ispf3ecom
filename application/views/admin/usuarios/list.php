
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Usuarios
                <small>Listado</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <a href="<?php/* echo base_url();*/?>usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"> Agregar Usuarios</span></a> -->                            
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
                                            <th>Password</th>
                                            <th>Nombre</th>
                                            <th>Opciones 
                                                <a href="<?php echo base_url();?>usuarios/add" class="btn btn-primary"><span class="fa fa-plus"> Agregar</span></a> 
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($usuarios)) ?>
                                            <?php foreach ($usuarios as $usuario):?>
                                        <tr>
                                            <td><?php echo $usuario->id;?></td>
                                            <td><?php echo $usuario->email;?></td>
                                            <td><?php echo $usuario->password;?></td>
                                            <td><?php echo $usuario->nombre;?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal"data-target="#modal-default" value="<?php echo $usuario->id;?>">
                                                        <span class="fas fa-search"></span>
                                                    </button>
                                                    
                                                    <!-- <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a> -->                

                                                    <a href="<?php echo base_url()?>usuarios/edit/<?php echo $usuario->id;?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                                                    <a href="#" class="btn btn-danger"><span class="fas fa-trash"></span></a>
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
