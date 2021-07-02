        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Productos
                <small>Editar</small>
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
                                <form action="<?php echo base_url();?>productos/update" method="POST">
                                    <input type="hidden" value="<?php echo $producto->id;?>" name="id">
                                    <div class="form-group">   
                                        <label for="nombre" class="<?php echo !empty(form_error("nombre"))? 'text-danger':'';?>">Nombre:</label>
                                        <input type="nombre" class="form-control <?php echo !empty(form_error("nombre"))? 'is-invalid':'';?>" id="nombre" name="nombre" maxlength="200" value="<?php echo !empty(form_error("nombre"))? set_value("nombre"):$producto->nombre;?>">
                                        <?php echo form_error("nombre", "<span class='help-block text-danger'>","</span>");?>
                                    </div>      
                                    <div class="form-group">   
                                        <label for="precio" class="<?php echo !empty(form_error("precio"))? 'text-danger':'';?>">Precio</label>
                                        <input type="number" class="form-control <?php echo !empty(form_error("precio"))? 'is-invalid':'';?>" id="precio" name="precio" maxlength="255" value="<?php echo $producto->precio?>">  
                                        <?php echo form_error("precio", "<span class='help-block text-danger'>","</span>");?>
                                    </div>
                                    <div class="form-group">   
                                        <label for="stock" class="<?php echo !empty(form_error("stock"))? 'text-danger':'';?>">Stock:</label>
                                        <input type="number" class="form-control <?php echo !empty(form_error("stock"))? 'is-invalid':'';?>" id="stock" name="stock" maxlength="255" value="<?php echo $producto->stock?>"> 
                                        <?php echo form_error("stock", "<span class='help-block text-danger'>","</span>");?> 
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
