<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo ?></h1>

    <form method="POST" action=" <?php echo site_url('/insertc-form'); ?>" autocomplete="off">

        <div class="form-group">
            <div class="row">

                <div class="col-12 col-sm-3">
                    <label>Nombre</label>
                    <input clas="form-control" id="nombre" name="nombre" type="text" autofocus require />
                </div>
                <div class="col-12 col-sm-3">
                    <label>Direccion</label>
                    <input clas="form-control" id="direccion" name="direccion" type="text" autofocus require />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
            <div class="col-12 col-sm-3">
                    <label>Telefono</label>
                    <input clas="form-control" id="telefono" name="telefono" type="text" autofocus require />
                </div>
                <div class="col-12 col-sm-3">
                    <label>Email</label>
                    <input clas="form-control" id="email" name="email" type="text" autofocus require />
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success"> Guardar </button>
        <a href="<?php echo base_url(); ?>/clientes" class="btn btn-primary">Regresar</a>

    </form>
</div>

<!-- /.container-fluid -->
</form>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Footer -->