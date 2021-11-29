
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
                        
                        <form action="<?php echo base_url();?>ventas/cart/store" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-3">
                                <p>
                        <?php
                           // echo "ID: ";
                           // echo $this->session->userdata("idcliente");
                           // echo " LastId: ";
                           // echo $this->db->insert_id();
                            
                        ?>
                    </p>
                                    <select style="display:none" name="comprobantes" id="comprobantes" class="form-control" >
                                        <option type="hidden" value="" readonly>Seleccione...</option>
                                        <?php foreach($tipocomprobante as $tipocomprobante):
                                        ?>
                                            <?php $datacomprobante = $tipocomprobante->id."*".
                                                    $tipocomprobante->cantidad."*".
                                                    $tipocomprobante->iva."*".
                                                    $tipocomprobante->serie;?>
                                            <option value="<?php echo $datacomprobante;?>" selected>
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
                                        <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $this->session->userdata("idcliente")?>">
                                        <input type="hidden" class="form-control" disabled="disabled" id="cliente" value="<?php echo $this->session->userdata("idcliente")?>">
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
                                    <button id="btn-agregar" type="button" class="detailVenta btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                            </div>
                            <table id="tbventas" class="table table-bordered table-striped btn-hover table-hover">
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
                                <tbody id="tbventas-body">
                             <?php for($i = 1; $i<=$this->session->userdata('productos') ; $i++) :?>
                                    <?php $producto='producto'.strval($i)?>

                                    <?php if($this->session->userdata($producto)>0):?>
                                <tr>
                                    <td><input type='hidden' name='idproductos[]' value='<?php echo $productos[$i-1]->idproducto;?>'><?php echo $productos[$i-1]->nombre;?></td>
                                    <td><input type='hidden' name='precios[]' value='<?php echo $productos[$i-1]->precio;?>'><?php echo $productos[$i-1]->precio;?></td>
                                    <td><?php echo $productos[$i-1]->stock;?></td>
                                    <td><input type='text' id="<?php echo $i?>"name='cantidades[]' value='<?php echo $this->session->userdata($producto)?>' class='cantidades'></td>
                                    <td><input type='hidden' name='importes[]' value='<?php echo $productos[$i-1]->precio;?>'><p><?php echo $productos[$i-1]->precio*$this->session->userdata($producto);?></p></td>
                                    <td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fas fa-minus-circle'></span></button></td>
                                
                                </tr> 
                                    <?php endif;?>
                                    <?php endfor;?>
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
                                    <button type="submit" class="btn btn-success btn-flat">Avanzar con la compra</button>
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
<script>
</script>