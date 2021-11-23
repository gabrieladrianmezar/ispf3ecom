        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Ventas
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
                                <form action="<?php echo base_url();?>ventas/update" method="POST">
                                    <input type="hidden" value="<?php echo $venta->idventa;?>" name="idventa">
                                    <div class="form-group">   
                                        <label for="estado" class="<?php echo !empty(form_error("estado"))? 'text-danger':'';?>">Estado:</label>
                                        <input type="estado" class="form-control <?php echo !empty(form_error("estado"))? 'is-invalid':'';?>" id="estado" name="estado" maxlength="200" value="<?php echo !empty(form_error("estado"))? set_value("estado"):$venta->estado;?>">
                                        <?php echo form_error("estado", "<span class='help-block text-danger'>","</span>");?>
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
