<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $titulo ?></h1>

    <div>
        <p>
            <a href="<?php echo base_url(); ?>/clientes" class="btn btn-warning">Clientes</a>
        </p>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <th>ID</th>
                            <th>nombre</th>
                            <th>direccion</th>
                            <th>telefono</th>
                            <th>email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $dato) { ?>
                        <tr>
                        <td><?php echo $dato['id']; ?></td>
                            <td><?php echo $dato['nombre']; ?></td>
                            <td><?php echo $dato['direccion']; ?></td>
                            <td><?php echo $dato['telefono']; ?></td>
                            <td><?php echo $dato['email']; ?></td>

                            <td>
                                <a href="<?php echo site_url('reingresarc/'. $dato['id']); ?>" class="btn btn-success"><i class="fas fa-trash-restore"></i></a>
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