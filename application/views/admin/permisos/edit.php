       <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Permiso
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
                                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error")?></p>           
                                </div>
                                <?php endif; ?>
                                <?php 
                                    /* Clearing flashdata on without redirect*/
                                    if($this->session->flashdata("error")){
                                    unset($_SESSION['error']);
                                 }?>
                                <form action="<?php echo base_url();?>sysadmin/permisos/update" method="POST">
                                    <input type="text" style="display:none" name="idpermiso" id="idpermiso" value="<?php echo $permiso->id;?>">
                                    <div class="form-group">
                                        <label for="rol"> Roles:</label>
                                        <select name="rol" id="rol" class="form-control" disabled="disabled">
                                            <?php foreach($roles as $rol):?>
                                                <option value="<?php echo $rol->id?>"
                                                <?php echo $rol->id == $permiso->idrol ? "selected":""?>>
                                                <?php echo $rol->nombre?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="menu"> menues:</label>
                                        <select name="menu" id="menu" class="form-control" disabled="disabled">
                                            <?php foreach($menus as $menu):?>
                                                <option value="<?php echo $menu->id?>"
                                                <?php echo $menu->id == $permiso->idmenu ? "selected":""?>>
                                                <?php echo $menu->nombre?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="read">Leer:</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="read" value="1" 
                                            <?php echo $permiso->read == 1 ? "checked":"";?>>Si
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="read" value="0"
                                            <?php echo $permiso->read == 0 ? "checked":"";?>>No
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="insert">Agregar:</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="insert" value="1"
                                            <?php echo $permiso->insert == 1 ? "checked":"";?>>Si
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="insert" value="0"
                                            <?php echo $permiso->insert == 0 ? "checked":"";?>>No
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="update">Eliminar:</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="update" value="1"
                                            <?php echo $permiso->update == 1 ? "checked":"";?>>Si
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="update" value="0"
                                            <?php echo $permiso->update == 0 ? "checked":"";?>>No
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="delete">Delete:</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="delete" value="1"
                                            <?php echo $permiso->delete == 1 ? "checked":"";?>>Si
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="delete" value="0"
                                            <?php echo $permiso->delete == 0 ? "checked":"";?>>No
                                        </label>
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

