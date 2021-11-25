<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Catálogo de productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  Todos los Productos
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <?php if(!empty($productos)) ?>
                        <?php foreach ($productos as $producto):?>
                <div class="col-sm-2">
                    <a href="product/index/<?php echo $producto->idproducto;?>" data-toggle="lightbox" data-title="sample 4 - red">
                        <img src="<?php echo $producto->imagen;?>" class="img-fluid mb-2" alt="red sample"/>
                        <?php echo $producto->nombre;?>
                    </a>
                </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
        </div>
      </div>
</section>
</div>
