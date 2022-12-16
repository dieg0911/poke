<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo ?></h1>

    <form method="POST" action=" <?php echo site_url('/insertp-form'); ?>" autocomplete="off">

        <div class="form-group">
            <div class="row">

                <div class="col-12 col-sm-3">
                    <label>Codigo</label>
                    <input clas="form-control" id="codigo_producto" name="codigo_producto" type="text" autofocus require />
                </div>
                <div class="col-12 col-sm-3">
                    <label>Nombre</label>
                    <input clas="form-control" id="nombre_producto" name="nombre_producto" type="text" autofocus require />
                </div>
                <div class="col-12 col-sm-3">
                    <label>Detalle</label>
                    <input clas="form-control" id="detalle_producto" name="detalle_producto" type="text" autofocus require />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">


                <div class="col-12 col-sm-3">
                    <label>Precio Venta</label>
                    <input clas="form-control" id="precio_venta" name="precio_venta" type="number" autofocus require />
                </div>
                <div class="col-12 col-sm-3">
                    <label>Precio Compra</label>
                    <input clas="form-control" id="precio_compra" name="precio_compra" type="number" autofocus require />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">

            <div class="col-12 col-sm-3">
                    <label>Stock </label>
                    <input clas="form-control" id="stock_producto" name="stock_producto" type="number" autofocus require />
                </div>
                <div class="col-12 col-sm-3">
                    <label>Stock Minimo</label>
                    <input clas="form-control" id="stock_minimo" name="stock_minimo" type="number" autofocus require />
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-12 col-sm-3">
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