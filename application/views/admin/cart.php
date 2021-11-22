
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mains">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Carrito
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        
                        <form action="<?php echo base_url();?>cart/store" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-3">
                                <p>
                        <?php
                            echo "ID: ";
                            echo $this->session->userdata("idusuario");
                            echo " LastId: ";
                            echo $this->db->insert_id();
                            
                        ?>
                    </p>
                                    <label type="hidden for=">Comprobante:</label>
                                    <select type="hidden" name="comprobantes" id="comprobantes" class="form-control" >
                                        <option type="hidden" value="" readonly>Seleccione...</option>
                                        <?php foreach($tipocomprobante as $tipocomprobante):
                                        ?>
                                            <?php $datacomprobante = $tipocomprobante->id."*".
                                                    $tipocomprobante->cantidad."*".
                                                    $tipocomprobante->iva."*".
                                                    $tipocomprobante->serie;?>
                                            <option value="<?php echo $datacomprobante;?>" >
                                            <?php echo $tipocomprobante->nombre?></option>
                                        <?php endforeach;?>
                                    </select>
                                    <input type="hidden" id="idcomprobante" name="idcomprobante">
                                    <input type="hidden" id="iva">
                                </div>
                                <div class="col-md-3">
                                    <input type="hidden" class="form-control" name="serie" id="serie" readonly>
                                </div>
                                <div class="col-md-3">
                                    <input type="hidden" class="form-control" id="numero" name="numero" readonly>
                                </div>
                                 
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $this->session->userdata("idusuario")?>">
                                        <input type="hidden" class="form-control" disabled="disabled" id="cliente" value="<?php echo $this->session->userdata("idusuario")?>">
                                        <!-- <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span> Buscar</button>
                                        </span> -->
                                    </div><!-- /input-group -->
                                </div> 
                                <div class="col-md-3">
                                    <input type="hidden" class="form-control" name="fecha" id="datePicker" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Producto:</label>
                                    <input type="text" class="form-control" id="producto">
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                            </div>
                            <table id="tbventas" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>

                                        <th>Precio</th>
                                        <th>Stock Max.</th>
                                        <th>Cantidad</th>
                                        <th>Importe</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>

                            <div class="form-group">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Subtotal:</span>
                                        <input type="text" class="form-control" placeholder="0.00" name="subtotal" value="<?php ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">IVA:</span>
                                        <input type="text" class="form-control" placeholder="0.00" name="iva" value="" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Descuento:</span>
                                        <input type="text" class="form-control" placeholder="0.00" name="descuento" value="0.00" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Total:</span>
                                        <input type="text" class="form-control" placeholder="0.00" value="" name="total" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                </div>
                                
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lista de Clientes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($clientes)) ?>
                            <?php foreach ($clientes as $cliente):?>
                            <tr>
                            <td><?php echo $cliente->idcliente;?></td>
                            <td><?php echo $cliente->nombre;?></td>
                            <td><?php echo $cliente->email;?></td>
                            <?php $datacliente = $cliente->idcliente."*".
                            $cliente->nombre."*".
                            $cliente->email."*";
                            ?>
                            <td>
                            <button type="button" class="btn btn-success btn-check" value="<?php echo $datacliente?>"><span class="fas fa-check"></span>

                            </button>
                            </td>
                            </tr>
                            <?php endforeach;?>
                    </tbody>
                </table>
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
