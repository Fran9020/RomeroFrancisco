<section class="title-section">
    <!-- Imagen centrada -->
    <img src="http://localhost/RomeroFrancisco/public/assets/img/informaciondecontacto.png" alt="Logo Game-Box" class="title-image">
</section>

<section class="container-fluid main-section">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Cuadro blanco centrado -->
            <div class="col-md-7 content-box-quienes p-4">

                <!-- Mensaje de éxito -->
                <?php if (session()->has('message')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('message') ?>
                    </div>
                <?php endif; ?>

                <!-- Errores de validación -->
                <?php if (isset($validation)): ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($validation->getErrors() as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Persona 1 -->
                <div class="custom-card mb-4 p-3">
                    <div class="card-body-custom">
                        <h4 class="card-title-custom">Romero Francisco Ignacio</h4>
                        <p class="contacto-dato"><strong>Correo:</strong> fran92162@gmail.com</p>
                        <p class="contacto-dato"><strong>Teléfono:</strong> +54 3794991145</p>
                        <p class="contacto-dato"><strong>Disponibilidad:</strong> Lunes a viernes, 9:00 AM - 6:00 PM</p>
                    </div>

                    <!-- Botón para desplegar formulario -->
                    <div class="d-flex justify-content-center">
                        <button class="btn-consulta toggle-button" type="button" data-bs-toggle="collapse" data-bs-target="#consultaForm1" aria-expanded="false" aria-controls="consultaForm1">
                            Realizar consulta
                        </button>
                    </div>

                    <!-- Formulario oculto -->
                    <div class="collapse mt-4" id="consultaForm1">
                        <form class="form-contacto" action="<?= base_url('InformacionDeContacto/send') ?>" method="post">
                            <div class="mb-3">
                                <label class="form-label" for="nombreUsuario1">Nombre de Usuario</label>
                                <input type="text" id="nombreUsuario1" name="nombreUsuario" class="form-contacto-input" placeholder="Ingresa tu nombre" value="<?= old('nombreUsuario') ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="correoElectronico1">Correo Electrónico</label>
                                <input type="email" id="correoElectronico1" name="correoElectronico" class="form-contacto-input" placeholder="Ingresa tu correo electrónico" value="<?= old('correoElectronico') ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="motivoConsulta1">Motivo</label>
                                <select id="motivoConsulta1" name="motivoConsulta" class="form-contacto-input">
                                    <option value="Problemas con Pedido" <?= old('motivoConsulta') == 'Problemas con Pedido' ? 'selected' : '' ?>>Problemas con Pedido</option>
                                    <option value="Consultas de Productos" <?= old('motivoConsulta') == 'Consultas de Productos' ? 'selected' : '' ?>>Consultas de Productos</option>
                                    <option value="Soporte Técnico" <?= old('motivoConsulta') == 'Soporte Técnico' ? 'selected' : '' ?>>Soporte Técnico</option>
                                    <option value="Problemas de Pago" <?= old('motivoConsulta') == 'Problemas de Pago' ? 'selected' : '' ?>>Problemas de Pago</option>
                                    <option value="Otras Razones" <?= old('motivoConsulta') == 'Otras Razones' ? 'selected' : '' ?>>Otras Razones</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="comentarioAdicional1">Comentario Adicional</label>
                                <textarea id="comentarioAdicional1" name="comentarioAdicional" class="form-contacto-input" rows="4" placeholder="Detalle su problema aquí"><?= old('comentarioAdicional') ?></textarea>
                            </div>

                            <button type="submit" class="btn-enviar">Enviar</button>
                        </form>
                    </div>
                </div>

                <!-- Persona 2 -->
                <div class="custom-card mb-4 p-3">
                    <div class="card-body-custom">
                        <h4 class="card-title-custom">Diana Sosa</h4>
                        <p class="contacto-dato"><strong>Correo:</strong> maria.lopez@tecnalix.com</p>
                        <p class="contacto-dato"><strong>Teléfono:</strong> +54 9 351-987-6543</p>
                        <p class="contacto-dato"><strong>Disponibilidad:</strong> Lunes a viernes, 10:00 AM - 7:00 PM</p>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn-consulta toggle-button" type="button" data-bs-toggle="collapse" data-bs-target="#consultaForm2" aria-expanded="false" aria-controls="consultaForm2">
                            Realizar consulta
                        </button>
                    </div>

                    <div class="collapse mt-4" id="consultaForm2">
                        <form class="form-contacto" action="<?= base_url('InformacionDeContacto/send') ?>" method="post">
                            <div class="mb-3">
                                <label class="form-label" for="nombreUsuario2">Nombre de Usuario</label>
                                <input type="text" id="nombreUsuario2" name="nombreUsuario" class="form-contacto-input" placeholder="Ingresa tu nombre" value="<?= old('nombreUsuario') ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="correoElectronico2">Correo Electrónico</label>
                                <input type="email" id="correoElectronico2" name="correoElectronico" class="form-contacto-input" placeholder="Ingresa tu correo electrónico" value="<?= old('correoElectronico') ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="motivoConsulta2">Motivo</label>
                                <select id="motivoConsulta2" name="motivoConsulta" class="form-contacto-input">
                                    <option value="Problemas con Pedido" <?= old('motivoConsulta') == 'Problemas con Pedido' ? 'selected' : '' ?>>Problemas con Pedido</option>
                                    <option value="Consultas de Productos" <?= old('motivoConsulta') == 'Consultas de Productos' ? 'selected' : '' ?>>Consultas de Productos</option>
                                    <option value="Soporte Técnico" <?= old('motivoConsulta') == 'Soporte Técnico' ? 'selected' : '' ?>>Soporte Técnico</option>
                                    <option value="Problemas de Pago" <?= old('motivoConsulta') == 'Problemas de Pago' ? 'selected' : '' ?>>Problemas de Pago</option>
                                    <option value="Otras Razones" <?= old('motivoConsulta') == 'Otras Razones' ? 'selected' : '' ?>>Otras Razones</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="comentarioAdicional2">Comentario Adicional</label>
                                <textarea id="comentarioAdicional2" name="comentarioAdicional" class="form-contacto-input" rows="4" placeholder="Detalle su problema aquí"><?= old('comentarioAdicional') ?></textarea>
                            </div>

                            <button type="submit" class="btn-enviar">Enviar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Scripts adicionales -->
<script>
    document.querySelectorAll('.toggle-button').forEach(button => {
        const targetSelector = button.getAttribute('data-bs-target');
        const collapseElement = document.querySelector(targetSelector);
        const collapse = new bootstrap.Collapse(collapseElement, { toggle: false });

        collapseElement.addEventListener('show.bs.collapse', function () {
            button.textContent = 'Cancelar consulta';
        });

        collapseElement.addEventListener('hide.bs.collapse', function () {
            button.textContent = 'Realizar consulta';
        });

        button.addEventListener('click', function () {
            collapse.toggle();
        });
    });
</script>
