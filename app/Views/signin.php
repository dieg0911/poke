    <div class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card">

                <div class="card-body login-card-body">

                    <!-- Titulo de la página -->
                    <h2 class="login-box-msg">Iniciar sesión</h2>


                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3 ">
                            <div class="col-6">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>


                    <p class="mb-1">
                        <a href="<?php echo base_url(); ?>">¿Olvistaste la contraseña?</a>
                    </p>
                    <p class="mb-0">
                        <a href="<?php echo base_url(); ?>/signup" class="text-center">Registrar un nuevo usuario</a>

                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>


    </div>
    </body>

    </html>