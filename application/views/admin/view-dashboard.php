

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Dashboard
                <small>Dashboard</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <p>
                        <?php 
                            echo "Rol de Usuario:";
                            echo $this->session->userdata("rol");
                        ?>
                    </p>
                    <p>
                        <?php
                            echo "ID de Usuario: ";
                            echo $this->session->userdata("idusuario");
                        ?>
                    </p>
                    <p>
                        <?php 
                            echo " Nombre de Usuario: ";
                            $nombre = $this->session->userdata("nombre");
                            $palabras = str_word_count($nombre);
                            if ($palabras > 20 and strlen($nombre) < 100){
                            $nombreEnvuelto = wordwrap($nombre, 25);
                            /*var_dump($nombreEnvuelto);*/

                            /*$nombreLineas = explode("\n", $nombreEnvuelto);
                            var_dump($nombreLines);*/

                            echo $nombreEnvuelto;
                            } else {
                                $nombreTruncado = (strlen($nombre) > 100) ? substr($nombre, 0, 100) . '...(Continúa)' : $nombre;
                                echo $nombreTruncado;
                            }
                            ?>
                    </p>
                    <p>Esta vista es la del dashboard</p>
                    <div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo $cantVentas;?></h3>

                <p>Ventas</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo $cantProductos;?></h3>

                <p>Productos</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo $cantUsuarios;?></h3>

                <p>Usuarios</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?php echo $cantClientes;?></h3>

                <p>Clientes</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Monthly Recap Report</h3>

                        <div class="box-tools pull-right">
                        <select name="year" id="year" class="form-control">
                            <?php echo $years ?>
                            <?php foreach($years as $year):?>
                                    <option value="<?php echo $year->year;?>"><?php echo $year->year;?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="grafico">
                                <figure class="highcharts-figure">
                                    <div id="grafico"></div>
                                    <p class="highcharts-description">
                                        A basic column chart compares rainfall values between four cities.
                                        Tokyo has the overall highest amount of rainfall, followed by New York.
                                        The chart is making use of the axis crosshair feature, to highlight
                                        months as they are hovered over.
                                    </p>
                                </figure>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- ./box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->