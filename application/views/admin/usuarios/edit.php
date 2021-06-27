
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Categorias
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
                                <?php if ($this->session->flashdata("error")): ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="icon fa fa-ban"></i><?php $this->session->flashdata("error"); ?></p>
                                        
                                    </div>
                                <<?php endif; ?>
                                <form action="<?php echo base_url();?>usuarios/update" method="POST">
                                    <input type="hidden" value="<?php echo $usuario->id;?>" name="id">
                                    <div class="form-group">   
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" maxlength="200" value="<?php echo $usuario->email?>">
                                    </div>
                                    <div class="form-group">   
                                        <label for="password"><a href="https://md5decrypt.net/en/Sha1/" target="_blank">Contraseña (for demo purposes) *Debe introducirse el hash de SHA1 para la contraseña:</a></label>
                                        <input type="text" class="form-control" id="password" name="password" maxlength="255" value="<?php echo $usuario->password?>">  
                                    </div>
                                    <div class="form-group">   
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="255" value="<?php echo $usuario->nombre?>">  
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                    </div>
                                </form> 
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
