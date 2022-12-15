<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Categorias</h1>

    <div>
        <p>
            <a href="<?php echo site_url('/categorias-form') ?>" class="btn btn-info">Agregar </a>
            <a href="<?php echo base_url(); ?>/categorias/eliminados" class="btn btn-danger">Eliminados </a>
        </p>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $dato) { ?>
                        <tr>
                            <td><?php echo $dato['id']; ?></td>
                            <td><?php echo $dato['nombre']; ?></td>

                            <td>
                            <a href="<?php echo site_url('editar-form/'. $dato['id']); ?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                            </td>

                            <td>
                                <a href="<?php echo site_url('eliminar/'. $dato['id']); ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>


                        </tr>
                        <?php ; }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->