<section class="title-section" style="position: relative; height: 300px; display: flex; align-items: center; justify-content: center; overflow: hidden;">
    <!-- Video de fondo -->
    <video autoplay muted loop style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
        <source src="http://localhost/RomeroFrancisco/assets/img/wild.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
    </video>
    <!-- Nombre de la página -->
    <h1 class="display-3 text-white" style="position: relative; z-index: 2; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);">TECNALIX</h1>
</section>

<section class="container my-5" style="margin-top: 0;">
    <!-- Cuadro centrado -->
    <div class="row justify-content-center">
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
                                                <h4>Título 1</h4>
                                                <h6 class="text-muted">Subtítulo 1</h6>
                                                <p>Esta es una breve descripción sobre la imagen mostrada en el carrusel.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex align-items-center">
                                            <img src="http://localhost/RomeroFrancisco/assets/img/imagen2.jpg" class="d-block img-fluid" style="max-height: 300px; object-fit: contain;" alt="Imagen 2">
                                            <div class="ms-3 text-start">
                                                <h4>Título 2</h4>
                                                <h6 class="text-muted">Subtítulo 2</h6>
                                                <p>Breve descripción que explica lo que aparece en esta imagen del carrusel.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex align-items-center">
                                            <img src="http://localhost/RomeroFrancisco/assets/img/imagen3.jpg" class="d-block img-fluid" style="max-height: 300px; object-fit: contain;" alt="Imagen 3">
                                            <div class="ms-3 text-start">
                                                <h4>Título 3</h4>
                                                <h6 class="text-muted">Subtítulo 3</h6>
                                                <p>Texto breve que acompaña y describe el contenido de esta imagen.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex align-items-center">
                                            <img src="http://localhost/RomeroFrancisco/assets/img/imagen4.jpg" class="d-block img-fluid" style="max-height: 300px; object-fit: contain;" alt="Imagen 4">
                                            <div class="ms-3 text-start">
                                                <h4>Título 4</h4>
                                                <h6 class="text-muted">Subtítulo 4</h6>
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
                                    <img src="http://localhost/RomeroFrancisco/assets/img/imagen1.jpg" class="img-thumbnail" style="max-height: 120px; max-width: 120px; object-fit: contain;" alt="Miniatura 1">
                                </div>
                                <div class="col-6">
                                    <img src="http://localhost/RomeroFrancisco/assets/img/imagen2.jpg" class="img-thumbnail" style="max-height: 120px; max-width: 120px; object-fit: contain;" alt="Miniatura 2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img src="http://localhost/RomeroFrancisco/assets/img/imagen3.jpg" class="img-thumbnail" style="max-height: 120px; max-width: 120px; object-fit: contain;" alt="Miniatura 3">
                                </div>
                                <div class="col-6">
                                    <img src="http://localhost/RomeroFrancisco/assets/img/imagen4.jpg" class="img-thumbnail" style="max-height: 120px; max-width: 120px; object-fit: contain;" alt="Miniatura 4">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Continuación del contenido -->
                <li class="mb-3">
                    <h3 class="h5">Ofertas</h3>
                </li>
                <li class="mb-3">
                    <h3 class="h5">Mejores calificado</h3>
                </li>
                <li class="mb-3">
                    <h3 class="h5">Clásicos Atemporales</h3>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>









