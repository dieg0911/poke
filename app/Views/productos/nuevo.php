<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo ?></h1>

    <form method="POST" action=" <?php echo site_url('/insertp-form'); ?>" autocomplete="off">

        <div class="form-group">
            <div class="row">

                <div class="col-12 col-sm-2">
                    <label>Codigo</label>
                    <input clas="form-control" id="codigo_producto" name="codigo_producto" type="text" autofocus require />
                </div>
                <div class="col-12 col-sm-6">
                    <label>Nombre</label>
                    <input clas="form-control" id="nombre_producto" name="nombre_producto" type="text" autofocus require />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-2">
                    <label>Categorias</label>
                    <select class="form-control" id="id_categoria" name="id_categoria" require>
                        <option value="">Seleccione una categoria</option>
                        <?php foreach ($categorias as $categoria) { ?>
                            <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">

                <div class="col-12 col-sm-4">
                    <label>Detalle</label>
                    <input clas="form-control" id="detalle_producto" name="detalle_producto" type="text" autofocus require />
                </div>
                <div class="col-12 col-sm-4">
                    <label>Precio</label>
                    <input clas="form-control" id="nombre_producto" name="nombre_producto" type="text" autofocus require />
                </div>
                <div class="col-12 col-sm-4">
                    <label>Precio</label>
                    <input clas="form-control" id="nombre_producto" name="nombre_producto" type="text" autofocus require />
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success"> Guardar </button>
        <a href="<?php echo base_url(); ?>/productos" class="btn btn-primary">Regresar</a>

    </form>
</div>

<!-- /.container-fluid -->
</form>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->

<!-- Footer -->