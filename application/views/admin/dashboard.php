
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        
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
                        ?>
                    </p>
                    <p>
                        <?php
                            echo "ID: ";
                            echo $this->session->userdata("id");
                        ?>
                    </p>
                    <p>
                        <?php 
                            echo " Nombre: ";
                            echo $this->session->userdata("nombre");
                        ;?>
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