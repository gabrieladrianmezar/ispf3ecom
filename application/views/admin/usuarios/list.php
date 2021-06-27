
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Usuarios
                <small>Listado</small>
                <div class="float-right d-none d-sm-inline-block"> <a href="<?php echo base_url();?>usuarios/add" class="btn btn-primary"><span class="fa fa-plus"></span></a></div>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
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
                                            <th><a href="https://md5decrypt.net/en/Sha1/" target="_blank">Contraseña (For demo purposes)</a></th>
                                            <th>Nombre</th>
                                            <th>Opciones</th>
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
                                                    <a href="<?php echo base_url();?>usuarios/delete/<?php echo $usuario->id;?>" class="btn btn-danger"><span class="fas fa-trash"></span></a>
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
