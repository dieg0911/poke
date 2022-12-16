<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Clientes</h1>

    <div>
        <p>
            <a href="<?php echo site_url('/clientes-form') ?>" class="btn btn-info">Agregar </a>
            <a href="<?php echo base_url(); ?>/clientes/eliminados" class="btn btn-danger">Eliminados </a>
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
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Editar</th>
                            <th>Borrar</th>
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
                            <a href="<?php echo site_url('editac/'. $dato['id']); ?>" class="btn btn-success">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Editar</span>
                                    </a>

                            </td>

                            <td>
                                <a href="<?php echo site_url('eliminarc/'. $dato['id']); ?>" class="btn btn-danger">Borrar<i class="fas fa-trash-alt"></i></a>
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