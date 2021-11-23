
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
                            echo "Login:";
                            echo $this->session->userdata("login");
                            echo "Rol:";
                            echo $this->session->userdata("rol");
                        ?>

                    </p>
                    <p>
                        <?php
                            echo "ID: ";
                            echo $this->session->userdata("idusuario");
                        ?>
                    </p>
                    <p>
                        <?php 
                            echo " Nombre: ";
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
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->