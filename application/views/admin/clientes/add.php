        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Clientes
                <small>Agregar</small>
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
                                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error")?></p>           
                                </div>
                                <?php endif; ?>
                                <?php 
                                    /* Clearing flashdata on without redirect*/
                                    if($this->session->flashdata("error")){
                                    unset($_SESSION['error']);
                                 }?>
                                <form action="<?php echo base_url();?>clientes/clientes/store" method="POST">
                                    <div class="form-group">   
                                        <label for="email" class="<?php echo !empty(form_error("email"))? 'text-danger':'';?>">Email:</label>
                                        <input type="email" class="form-control <?php echo !empty(form_error("email"))? 'is-invalid':'';?>" id="email" name="email" minlength="3" maxlength="200" value="<?php echo set_value("email");?>">
                                        <?php echo form_error("email", "<span class='help-block text-danger'>","</span>");?>
                                    </div>
                                    <div class="form-group <?php echo !empty(form_error("password"))? 'has-error':'';?>">   
                                        <label for="password" class="<?php echo !empty(form_error("password"))? 'text-danger':'';?>">Contrase??a:</label>
                                        <input type="text" class="form-control <?php echo !empty(form_error("password"))? 'is-invalid':'';?>" id="password" name="password" maxlength="255" value="<?php echo set_value("password");?>">
                                        <?php echo form_error("password", "<span class='help-block text-danger'>","</span>");?>
                                    </div>
                                    <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'';?>">   
                                        <label for="nombre" class="<?php echo !empty(form_error("nombre"))? 'text-danger':'';?>">Nombre:</label>
                                        <input type="text" class="form-control <?php echo !empty(form_error("nombre"))? 'is-invalid':'';?>" id="nombre" name="nombre" maxlength="255" value="<?php echo set_value("nombre");?>">
                                        <?php echo form_error("nombre", "<span class='help-block text-danger'>","</span>");?>
                                    </div>
                                    <div class="form-group <?php echo !empty(form_error("direccion"))? 'has-error':'';?>">   
                                        <label for="direccion" class="<?php echo !empty(form_error("direccion"))? 'text-danger':'';?>">Direccion:</label>
                                        <input type="text" class="form-control <?php echo !empty(form_error("direccion"))? 'is-invalid':'';?>" id="direccion" name="direccion" maxlength="255" value="<?php echo set_value("direccion");?>">
                                        <?php echo form_error("direccion", "<span class='help-block text-danger'>","</span>");?>
                                    </div>
                                    <div class="form-group <?php echo !empty(form_error("telefono"))? 'has-error':'';?>">   
                                        <label for="telefono" class="<?php echo !empty(form_error("telefono"))? 'text-danger':'';?>">Telefono:</label>
                                        <input type="text" class="form-control <?php echo !empty(form_error("telefono"))? 'is-invalid':'';?>" id="telefono" name="telefono" maxlength="255" value="<?php echo set_value("telefono");?>">
                                        <?php echo form_error("telefono", "<span class='help-block text-danger'>","</span>");?>
                                    </div>
                                    <div class="form-group <?php echo !empty(form_error("dni"))? 'has-error':'';?>">   
                                        <label for="dni" class="<?php echo !empty(form_error("dni"))? 'text-danger':'';?>">Dni:</label>
                                        <input type="text" class="form-control <?php echo !empty(form_error("dni"))? 'is-invalid':'';?>" id="dni" name="dni" maxlength="255" value="<?php echo set_value("dni");?>">
                                        <?php echo form_error("dni", "<span class='help-block text-danger'>","</span>");?>
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

