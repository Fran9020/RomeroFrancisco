<section class="title-section">
    <!-- Imagen centrada -->
    <img src="http://localhost/RomeroFrancisco/public/assets/img/informaciondecontacto.png" alt="Logo Game-Box" class="title-image">
</section>

<section class="container" style="background-color: #1B263B; margin: 0; padding: 50px 0; max-width: 100%; overflow-x: hidden;">
    <div class="row justify-content-center">
        <!-- Cuadro blanco centrado (más pequeño) y sin margen superior -->
        <div class="col-md-7 p-4 border rounded bg-light text-dark" style="margin-top: -50px;">

            <!-- Espacio 1: Contacto de Persona 1 -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title text-center">Contacto: Romero Francisco Ignacio</h4>
                    <p class="mb-2"><strong>Correo:</strong> juan.perez@tecnalix.com</p>
                    <p class="mb-2"><strong>Teléfono:</strong> +54 9 341-123-4567</p>
                    <p class="mb-0"><strong>Disponibilidad:</strong> Lunes a viernes, 9:00 AM - 6:00 PM</p>
                </div>

                <!-- Botón y formulario dentro de una tarjeta -->
                <div class="card-body">
                    <!-- Botón para desplegar el formulario -->
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#consultaForm" aria-expanded="false" aria-controls="consultaForm" style="width: 70%;">
                            Enviar consulta
                        </button>
                    </div>

                    <!-- Formulario desplegable -->
                    <div class="collapse mt-4" id="consultaForm">
                        <form style="width: 70%; margin: 0 auto;">
                            <!-- Nombre de Usuario -->
                            <div class="mb-3">
                                <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="nombreUsuario" placeholder="Ingresa tu nombre">
                            </div>

                            <!-- Correo Electrónico -->
                            <div class="mb-3">
                                <label for="correoElectronico" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correoElectronico" placeholder="Ingresa tu correo electrónico">
                            </div>

                            <!-- Motivo (Menú desplegable) -->
                            <div class="mb-3">
                                <label for="motivoConsulta" class="form-label">Motivo</label>
                                <select class="form-select" id="motivoConsulta">
                                    <option value="Problemas con Pedido">Problemas con Pedido</option>
                                    <option value="Consultas de Productos">Consultas de Productos</option>
                                    <option value="Soporte Técnico">Soporte Técnico</option>
                                    <option value="Problemas de Pago">Problemas de Pago</option>
                                    <option value="Otras Razones">Otras Razones</option>
                                </select>
                            </div>

                            <!-- Comentario Adicional -->
                            <div class="mb-3">
                                <label for="comentarioAdicional" class="form-label">Comentario Adicional</label>
                                <textarea class="form-control" id="comentarioAdicional" rows="4" placeholder="Detalle su problema aquí"></textarea>
                            </div>

                            <!-- Botón de Enviar -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success w-100">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Espacio 2: Contacto de Persona 2 -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title text-center">Contacto: Diana Sosa</h4>
                    <p class="mb-2"><strong>Correo:</strong> maria.lopez@tecnalix.com</p>
                    <p class="mb-2"><strong>Teléfono:</strong> +54 9 351-987-6543</p>
                    <p class="mb-0"><strong>Disponibilidad:</strong> Lunes a viernes, 10:00 AM - 7:00 PM</p>
                </div>

                <!-- Botón y formulario dentro de una tarjeta -->
                <div class="card-body">
                    <!-- Botón para desplegar el formulario -->
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#consultaForm2" aria-expanded="false" aria-controls="consultaForm2" style="width: 70%;">
                            Enviar consulta
                        </button>
                    </div>

                    <!-- Formulario desplegable -->
                    <div class="collapse mt-4" id="consultaForm2">
                        <form style="width: 70%; margin: 0 auto;">
                            <!-- Nombre de Usuario -->
                            <div class="mb-3">
                                <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="nombreUsuario" placeholder="Ingresa tu nombre">
                            </div>

                            <!-- Correo Electrónico -->
                            <div class="mb-3">
                                <label for="correoElectronico" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correoElectronico" placeholder="Ingresa tu correo electrónico">
                            </div>

                            <!-- Motivo (Menú desplegable) -->
                            <div class="mb-3">
                                <label for="motivoConsulta" class="form-label">Motivo</label>
                                <select class="form-select" id="motivoConsulta">
                                    <option value="Problemas con Pedido">Problemas con Pedido</option>
                                    <option value="Consultas de Productos">Consultas de Productos</option>
                                    <option value="Soporte Técnico">Soporte Técnico</option>
                                    <option value="Problemas de Pago">Problemas de Pago</option>
                                    <option value="Otras Razones">Otras Razones</option>
                                </select>
                            </div>

                            <!-- Comentario Adicional -->
                            <div class="mb-3">
                                <label for="comentarioAdicional" class="form-label">Comentario Adicional</label>
                                <textarea class="form-control" id="comentarioAdicional" rows="4" placeholder="Detalle su problema aquí"></textarea>
                            </div>

                            <!-- Botón de Enviar -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success w-100">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
