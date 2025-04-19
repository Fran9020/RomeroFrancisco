<section class="title-section" style="position: relative; height: 300px; display: flex; align-items: center; justify-content: center; overflow: hidden; background-color: #1B263B;"> <!-- Fondo azul aplicado -->
    <!-- Video de fondo -->
    <video autoplay muted loop style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
        <source src="http://localhost/RomeroFrancisco/assets/img/wild.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
    </video>
    <!-- Nombre de la página -->
    <h1 class="display-3 text-white" style="position: relative; z-index: 2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);">TECNALIX</h1>
</section>

<!-- Contenedor principal con fondo azul -->
<section class="container-fluid" style="background-color: #1B263B; margin: 0; padding: 50px 0;"> <!-- Sección completa azul -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Cuadro blanco centrado -->
            <div class="col-md-10 p-4 border rounded bg-light" id="content-box">
                <!-- Subtítulos -->
                <ul class="list-unstyled mb-4">
                    <li class="mb-3">
                        <h3 class="h5">Lo más vendido</h3>
                    </li>
                    <!-- Ruleta de imágenes y miniaturas -->
                    <li class="mb-4">
                        <div class="row">
                            <!-- Carrusel (Ruleta de imágenes) con descripciones -->
                            <div class="col-md-8">
                                <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                    <div class="carousel-inner">
                                        <!-- Elementos individuales del carrusel con descripciones -->
                                        <div class="carousel-item active">
                                            <div class="d-flex align-items-center">
                                                <img src="http://localhost/RomeroFrancisco/assets/img/imagen1.jpg" class="d-block img-fluid" style="max-height: 300px; object-fit: contain;" alt="Imagen 1">
                                                <div class="ms-3 text-start">
                                                    <h4>Dark Souls</h4>
                                                    <h5 class="text-muted">Subtítulo 1</h5>
                                                    <p>Esta es una breve descripción sobre la imagen mostrada en el carrusel.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex align-items-center">
                                                <img src="http://localhost/RomeroFrancisco/assets/img/imagen2.jpg" class="d-block img-fluid" style="max-height: 300px; object-fit: contain;" alt="Imagen 2">
                                                <div class="ms-3 text-start">
                                                    <h4>The Legend Of Zelda</h4>
                                                    <h5 class="text-muted">Subtítulo 2</h5>
                                                    <p>Breve descripción que explica lo que aparece en esta imagen del carrusel.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex align-items-center">
                                                <img src="http://localhost/RomeroFrancisco/assets/img/imagen3.jpg" class="d-block img-fluid" style="max-height: 300px; object-fit: contain;" alt="Imagen 3">
                                                <div class="ms-3 text-start">
                                                    <h4>Título 3</h4>
                                                    <h5 class="text-muted">Minecraft</h5>
                                                    <p>Texto breve que acompaña y describe el contenido de esta imagen.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex align-items-center">
                                                <img src="http://localhost/RomeroFrancisco/assets/img/imagen4.jpg" class="d-block img-fluid" style="max-height: 300px; object-fit: contain;" alt="Imagen 4">
                                                <div class="ms-3 text-start">
                                                    <h4>Crash Bandicoot</h4>
                                                    <h5 class="text-muted">Subtítulo 4</h5>
                                                    <p>Descripción breve que acompaña a esta imagen en el carrusel.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Controles del carrusel -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Anterior</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Siguiente</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Miniaturas 2x2 -->
                            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <img src="http://localhost/RomeroFrancisco/assets/img/imagen1.jpg" class="img-thumbnail clickable-thumbnail" data-bs-target="#imageCarousel" data-bs-slide-to="0" style="max-height: 120px; max-width: 120px; object-fit: contain;" alt="Miniatura 1">
                                    </div>
                                    <div class="col-6">
                                        <img src="http://localhost/RomeroFrancisco/assets/img/imagen2.jpg" class="img-thumbnail clickable-thumbnail" data-bs-target="#imageCarousel" data-bs-slide-to="1" style="max-height: 120px; max-width: 120px; object-fit: contain;" alt="Miniatura 2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <img src="http://localhost/RomeroFrancisco/assets/img/imagen3.jpg" class="img-thumbnail clickable-thumbnail" data-bs-target="#imageCarousel" data-bs-slide-to="2" style="max-height: 120px; max-width: 120px; object-fit: contain;" alt="Miniatura 3">
                                    </div>
                                    <div class="col-6">
                                        <img src="http://localhost/RomeroFrancisco/assets/img/imagen4.jpg" class="img-thumbnail clickable-thumbnail" data-bs-target="#imageCarousel" data-bs-slide-to="3" style="max-height: 120px; max-width: 120px; object-fit: contain;" alt="Miniatura 4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Continuación del contenido -->
                    <li class="mb-3">
    <h3 class="h5">Ofertas</h3>
    <!-- Fila de imágenes con descripciones -->
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="http://localhost/RomeroFrancisco/assets/img/imagen1.jpg" class="img-fluid mb-2" style="max-height: 150px; width: auto; object-fit: cover;" alt="Oferta 1">
            <h6 class="mt-1" style="font-size: 14px;">Título Oferta 1</h6> <!-- Título más pequeño -->
            <p class="text-muted" style="font-size: 12px;">Subtítulo Oferta 1</p> <!-- Subtítulo más pequeño -->
        </div>
        <div class="col-md-4 text-center">
            <img src="http://localhost/RomeroFrancisco/assets/img/spidermnan.jpg" class="img-fluid mb-2" style="max-height: 150px; width: auto; object-fit: cover;" alt="Oferta 2">
            <h6 class="mt-1" style="font-size: 14px;">Título Oferta 2</h6> <!-- Título más pequeño -->
            <p class="text-muted" style="font-size: 12px;">Subtítulo Oferta 2</p> <!-- Subtítulo más pequeño -->
        </div>
        <div class="col-md-4 text-center">
            <img src="http://localhost/RomeroFrancisco/assets/img/No-More-Heroes.jpg" class="img-fluid mb-2" style="max-height: 150px; width: auto; object-fit: cover;" alt="Oferta 3">
            <h6 class="mt-1" style="font-size: 14px;">Título Oferta 3</h6> <!-- Título más pequeño -->
            <p class="text-muted" style="font-size: 12px;">Subtítulo Oferta 3</p> <!-- Subtítulo más pequeño -->
        </div>
    </div>
</li>

<li class="mb-3">
    <h3 class="h5">Mejores calificado</h3>
    <!-- Fila de imágenes con descripciones -->
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="http://localhost/RomeroFrancisco/assets/img/monsterhunter.jpg" class="img-fluid mb-2" style="max-height: 150px; width: auto; object-fit: cover;" alt="Mejor Calificado 1">
            <h6 class="mt-1" style="font-size: 14px;">Título Mejor 1</h6> <!-- Título más pequeño -->
            <p class="text-muted" style="font-size: 12px;">$29.99</p> <!-- Precio -->
        </div>
        <div class="col-md-4 text-center">
            <img src="http://localhost/RomeroFrancisco/assets/img/mario.jpg" class="img-fluid mb-2" style="max-height: 150px; width: auto; object-fit: cover;" alt="Mejor Calificado 2">
            <h6 class="mt-1" style="font-size: 14px;">Título Mejor 2</h6> <!-- Título más pequeño -->
            <p class="text-muted" style="font-size: 12px;">$24.99</p> <!-- Precio -->
        </div>
        <div class="col-md-4 text-center">
            <img src="http://localhost/RomeroFrancisco/assets/img/imagen2.jpg" class="img-fluid mb-2" style="max-height: 150px; width: auto; object-fit: cover;" alt="Mejor Calificado 3">
            <h6 class="mt-1" style="font-size: 14px;">Título Mejor 3</h6> <!-- Título más pequeño -->
            <p class="text-muted" style="font-size: 12px;">$34.99</p> <!-- Precio -->
        </div>
    </div>
</li>

<li class="mb-3">
    <h3 class="h5">Clásicos Atemporales</h3>
    <!-- Fila de imágenes con descripciones -->
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="http://localhost/RomeroFrancisco/assets/img/black.jpg" class="img-fluid mb-2" style="max-height: 150px; width: auto; object-fit: cover;" alt="Clásico 1">
            <h6 class="mt-1" style="font-size: 14px;">Título Clásico 1</h6> <!-- Título más pequeño -->
            <p class="text-muted" style="font-size: 12px;">$19.99</p> <!-- Precio -->
        </div>
        <div class="col-md-4 text-center">
            <img src="http://localhost/RomeroFrancisco/assets/img/godofwar.jpg" class="img-fluid mb-2" style="max-height: 150px; width: auto; object-fit: cover;" alt="Clásico 2">
            <h6 class="mt-1" style="font-size: 14px;">Título Clásico 2</h6> <!-- Título más pequeño -->
            <p class="text-muted" style="font-size: 12px;">$39.99</p> <!-- Precio -->
        </div>
        <div class="col-md-4 text-center">
            <img src="http://localhost/RomeroFrancisco/assets/img/Doom-64.jpg" class="img-fluid mb-2" style="max-height: 150px; width: auto; object-fit: cover;" alt="Clásico 3">
            <h6 class="mt-1" style="font-size: 14px;">Título Clásico 3</h6> <!-- Título más pequeño -->
            <p class="text-muted" style="font-size: 12px;">$29.99</p> <!-- Precio -->
        </div>
    </div>
</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>








