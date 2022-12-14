<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo ?></h1>

    <form method="POST" action=" <?php echo base_url(); ?>/categorias/añadir" autocomplete="off">

        <div class="form-group">
            <div class="row">

                <div class="col-12 col-sm-6">
                    <label>Nombre</label>
                    <input clas="form-control" id="nombre" name="nombre" type="text" autofocus require />
                </div>
                </div>

                <a href="<?php echo base_url(); ?>/categorias" class="btn btn-primary">Regresar</a>
                <button type="submit" class="btn btn-success"> Guardar </button>
            </div>

        </div>

    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->