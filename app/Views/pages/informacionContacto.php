<!-- seccion para el logo de arriba -->
<section class="title-section">
    <!-- imagen del logo que va en el centro -->
    <img src="<?= base_url('public/assets/img/informaciondecontacto.png') ?>" alt="Logo Game-Box" class="title-image">
</section>

<!-- seccion principal donde esta todo -->
<section class="container-fluid main-section">
    <!-- contenedor para centrar las cosas -->
    <div class="container">
        <!-- fila para alinear el contenido -->
        <div class="row justify-content-center">
            <!-- caja blanca con toda la info de contacto -->
            <div class="col-md-7 content-box-quienes p-4">

                <!-- mensaje que aparece si todo salio bien -->
                <?php if (session()->has('message')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('message') ?>
                    </div>
                <?php endif; ?>

                <!-- mensajes de error si algo salio mal -->
                <?php if (isset($validation)): ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($validation->getErrors() as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- info de la primera persona -->
                <div class="custom-card mb-4 p-3">
                    <!-- datos de contacto -->
                    <div class="card-body-custom">
                        <h4 class="card-title-custom">Romero Francisco Ignacio</h4>
                        <p class="contacto-dato"><strong>Correo:</strong> fran92162@gmail.com</p>
                        <p class="contacto-dato"><strong>Telefono:</strong> +54 3794991145</p>
                        <p class="contacto-dato"><strong>Disponibilidad:</strong> Lunes a viernes, 7:00 AM - 12:00 PM</p>
                    </div>

                    <!-- boton para mostrar o esconder el formulario -->
                    <div class="d-flex justify-content-center">
                        <button class="btn-consulta toggle-button" type="button" data-bs-toggle="collapse" data-bs-target="#consultaForm1" aria-expanded="false" aria-controls="consultaForm1">
                            Realizar consulta
                        </button>
                    </div>

                    <!-- formulario que se muestra al hacer clic -->
                    <div class="collapse mt-4" id="consultaForm1">
                        <form class="form-contacto" action="<?= base_url('InformacionDeContacto/send') ?>" method="post">
                            <!-- campo para el nombre -->
                            <div class="mb-3">
                                <label class="form-label" for="nombreUsuario1">Nombre de Usuario</label>
                                <input type="text" id="nombreUsuario1" name="nombreUsuario" class="form-contacto-input" placeholder="Ingresa tu nombre" value="<?= old('nombreUsuario') ?>">
                            </div>

                            <!-- campo para el correo -->
                            <div class="mb-3">
                                <label class="form-label" for="correoElectronico1">Correo Electrónico</label>
                                <input type="email" id="correoElectronico1" name="correoElectronico" class="form-contacto-input" placeholder="Ingresa tu correo electrónico" value="<?= old('correoElectronico') ?>">
                            </div>

                            <!-- campo para elegir el motivo -->
                            <div class="mb-3">
                                <label class="form-label" for="motivoConsulta1">Motivo</label>
                                <select id="motivoConsulta1" name="motivoConsulta" class="form-contacto-input">
                                    <option value="Problemas con Pedido" <?= old('motivoConsulta') == 'Problemas con Pedido' ? 'selected' : '' ?>>Problemas con Pedido</option>
                                    <option value="Consultas de Productos" <?= old('motivoConsulta') == 'Consultas de Productos' ? 'selected' : '' ?>>Consultas de Productos</option>
                                    <option value="Soporte Tecnico" <?= old('motivoConsulta') == 'Soporte Tecnico' ? 'selected' : '' ?>>Soporte Técnico</option>
                                    <option value="Problemas de Pago" <?= old('motivoConsulta') == 'Problemas de Pago' ? 'selected' : '' ?>>Problemas de Pago</option>
                                    <option value="Otras Razones" <?= old('motivoConsulta') == 'Otras Razones' ? 'selected' : '' ?>>Otras Razones</option>
                                </select>
                            </div>

                            <!-- campo para escribir un comentario -->
                            <div class="mb-3">
                                <label class="form-label" for="comentarioAdicional1">Comentario Adicional</label>
                                <textarea id="comentarioAdicional1" name="comentarioAdicional" class="form-contacto-input" rows="4" placeholder="Detalla tu problema aquí"><?= old('comentarioAdicional') ?></textarea>
                            </div>

                            <!-- boton para enviar el formulario -->
                            <button type="submit" class="btn-enviar">Enviar</button>
                        </form>
                    </div>
                </div>

                <!-- info de la segunda persona -->
                <div class="custom-card mb-4 p-3">
                    <!-- datos de contacto -->
                    <div class="card-body-custom">
                        <h4 class="card-title-custom">Sosa Diana Abril</h4>
                        <p class="contacto-dato"><strong>Correo:</strong> dianasosa1771@gmail.com</p>
                        <p class="contacto-dato"><strong>Telefono:</strong> +54 3794881959</p>
                        <p class="contacto-dato"><strong>Disponibilidad:</strong> Lunes a viernes, 12:00 AM - 5:00 PM</p>
                    </div>

                    <!-- boton para mostrar o esconder el formulario -->
                    <div class="d-flex justify-content-center">
                        <button class="btn-consulta toggle-button" type="button" data-bs-toggle="collapse" data-bs-target="#consultaForm2" aria-expanded="false" aria-controls="consultaForm2">
                            Realizar consulta
                        </button>
                    </div>

                    <!-- formulario que se muestra al hacer clic -->
                    <div class="collapse mt-4" id="consultaForm2">
                        <form class="form-contacto" action="<?= base_url('InformacionDeContacto/send') ?>" method="post">
                            <!-- campo para el nombre -->
                            <div class="mb-3">
                                <label class="form-label" for="nombreUsuario2">Nombre de Usuario</label>
                                <input type="text" id="nombreUsuario2" name="nombreUsuario" class="form-contacto-input" placeholder="Ingresa tu nombre" value="<?= old('nombreUsuario') ?>">
                            </div>

                            <!-- campo para el correo -->
                            <div class="mb-3">
                                <label class="form-label" for="correoElectronico2">Correo Electrónico</label>
                                <input type="email" id="correoElectronico2" name="correoElectronico" class="form-contacto-input" placeholder="Ingresa tu correo electrónico" value="<?= old('correoElectronico') ?>">
                            </div>

                            <!-- campo para elegir el motivo -->
                            <div class="mb-3">
                                <label class="form-label" for="motivoConsulta2">Motivo</label>
                                <select id="motivoConsulta2" name="motivoConsulta" class="form-contacto-input">
                                    <option value="Problemas con Pedido" <?= old('motivoConsulta') == 'Problemas con Pedido' ? 'selected' : '' ?>>Problemas con Pedido</option>
                                    <option value="Consultas de Productos" <?= old('motivoConsulta') == 'Consultas de Productos' ? 'selected' : '' ?>>Consultas de Productos</option>
                                    <option value="Soporte Tecnico" <?= old('motivoConsulta') == 'Soporte Tecnico' ? 'selected' : '' ?>>Soporte Técnico</option>
                                    <option value="Problemas de Pago" <?= old('motivoConsulta') == 'Problemas de Pago' ? 'selected' : '' ?>>Problemas de Pago</option>
                                    <option value="Otras Razones" <?= old('motivoConsulta') == 'Otras Razones' ? 'selected' : '' ?>>Otras Razones</option>
                                </select>
                            </div>

                            <!-- campo para escribir un comentario -->
                            <div class="mb-3">
                                <label class="form-label" for="comentarioAdicional2">Comentario Adicional</label>
                                <textarea id="comentarioAdicional2" name="comentarioAdicional" class="form-contacto-input" rows="4" placeholder="Detalla tu problema aquí"><?= old('comentarioAdicional') ?></textarea>
                            </div>

                            <!-- boton para enviar el formulario -->
                            <button type="submit" class="btn-enviar">Enviar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- codigo para que el boton de consulta cambie de texto -->
<script>
    document.querySelectorAll('.toggle-button').forEach(button => {
        const targetSelector = button.getAttribute('data-bs-target');
        const collapseElement = document.querySelector(targetSelector);
        const collapse = new bootstrap.Collapse(collapseElement, { toggle: false });

        // cuando se muestra el formulario cambia el texto del boton
        collapseElement.addEventListener('show.bs.collapse', function () {
            button.textContent = 'Cancelar consulta';
        });

        // cuando se esconde el formulario cambia el texto del boton
        collapseElement.addEventListener('hide.bs.collapse', function () {
            button.textContent = 'Realizar consulta';
        });

        // al hacer clic en el boton se muestra o esconde el formulario
        button.addEventListener('click', function () {
            collapse.toggle();
        });
    });
</script>