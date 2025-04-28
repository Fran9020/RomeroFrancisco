<section class="title-section">
    <!-- Video de fondo -->
    <video autoplay muted loop class="background-video">
        <source src="http://localhost/RomeroFrancisco/public/assets/img/wild.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
    </video>
    <!-- Imagen centrada -->
    <img src="http://localhost/RomeroFrancisco/public/assets/img/TituloFondo.png" alt="Logo Game-Box" class="title-image">
</section>

<!-- Script para manejar varios videos -->
<script>
    // Lista de videos
    const videos = [
        "http://localhost/RomeroFrancisco/public/assets/img/wild.mp4", // Primer video
        "http://localhost/RomeroFrancisco/public/assets/img/Fortnite.mp4", // Segundo video
        "http://localhost/RomeroFrancisco/public/assets/img/elden.mp4" // Tercer video
    ];

    // Seleccionar el elemento video
    const videoElement = document.getElementById("videoBackground");
    let currentIndex = 0;

    // Cambiar al siguiente video cuando termine
    videoElement.addEventListener("ended", () => {
        currentIndex = (currentIndex + 1) % videos.length; // Mover al siguiente video en la lista
        videoElement.src = videos[currentIndex];
        videoElement.play(); // Reproducir el siguiente video
    });
</script>

<!-- Contenedor principal con fondo azul -->
<section class="container-fluid main-section">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Cuadro blanco centrado -->
            <div class="col-md-10 p-4 border rounded" id="content-box">
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
                                                <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen1.jpg" class="d-block img-fluid carousel-image" alt="Imagen 1">
                                                <div class="ms-3 text-start">
                                                    <h4>Dark Souls</h4>
                                                    <h5 class=" price-text">$29.99</h5>
                                                    <p>Dark Souls es una serie de juegos de rol de acción creada por Hidetaka Miyazaki de FromSoftware y publicada por Bandai Namco Entertainment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex align-items-center">
                                                <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen2.jpg" class="d-block img-fluid carousel-image" alt="Imagen 2">
                                                <div class="ms-3 text-start">
                                                    <h4>The Legend Of Zelda</h4>
                                                    <h5 class=" price-text">$24.99</h5>
                                                    <p>videojuego de acción-aventura de 2017 de la serie The Legend of Zelda, desarrollado por la 
                                                        filial Nintendo EPD en colaboración con Monolith Soft y publicado por Nintendo para las 
                                                        consolas Wii U y Nintendo Switch</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex align-items-center">
                                                <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen3.jpg" class="d-block img-fluid carousel-image" alt="Imagen 3">
                                                <div class="ms-3 text-start">
                                                    <h4>Minecraft</h4>
                                                    <h5 class=" price-text">$21.99</h5>
                                                    <p>Minecraft es un videojuego de mundo abierto que permite a los jugadores explorar, construir y sobrevivir en un entorno generado de manera procedimental.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="d-flex align-items-center">
                                                <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen4.jpg" class="d-block img-fluid carousel-image" alt="Imagen 4">
                                                <div class="ms-3 text-start">
                                                    <h4>Crash Bandicoot 4: It's About Time</h4>
                                                    <h5 class=" price-text">$23.99</h5>
                                                    <p>videojuego de plataformas desarrollado por Toys for Bob y publicado por Activision en 2020. Se lanzó originalmente para PlayStation 4 y 
                                                        Xbox One, con lanzamientos para Nintendo Switch, PlayStation 5, Xbox Series X|S y Windows en 2021.</p>
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
                                        <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen1.jpg" class="img-thumbnail clickable-thumbnail thumbnail-image" data-bs-target="#imageCarousel" data-bs-slide-to="0" alt="Miniatura 1">
                                    </div>
                                    <div class="col-6">
                                        <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen2.jpg" class="img-thumbnail clickable-thumbnail thumbnail-image" data-bs-target="#imageCarousel" data-bs-slide-to="1" alt="Miniatura 2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen3.jpg" class="img-thumbnail clickable-thumbnail thumbnail-image" data-bs-target="#imageCarousel" data-bs-slide-to="2" alt="Miniatura 3">
                                    </div>
                                    <div class="col-6">
                                        <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen4.jpg" class="img-thumbnail clickable-thumbnail thumbnail-image" data-bs-target="#imageCarousel" data-bs-slide-to="3" alt="Miniatura 4">
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
                                <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen1.jpg" class="img-fluid mb-2 section-image" alt="Oferta 1">
                                <h6 class="mt-1 section-title">Dark Souls</h6>
                                <p class=" section-price price-text">$29.99</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="http://localhost/RomeroFrancisco/public/assets/img/spidermnan.jpg" class="img-fluid mb-2 section-image" alt="Oferta 2">
                                <h6 class="mt-1 section-title">Spider-man</h6>
                                <p class=" section-price price-text">$29.99</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="http://localhost/RomeroFrancisco/public/assets/img/No-More-Heroes.jpg" class="img-fluid mb-2 section-image" alt="Oferta 3">
                                <h6 class="mt-1 section-title">No More Heroes</h6>
                                <p class=" section-price price-text">$35.99</p>
                            </div>
                        </div>
                    </li>

                    <li class="mb-3">
                        <h3 class="h5">Mejores calificado</h3>
                        <!-- Fila de imágenes con descripciones -->
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="http://localhost/RomeroFrancisco/public/assets/img/monsterhunter.jpg" class="img-fluid mb-2 section-image" alt="Mejor Calificado 1">
                                <h6 class="mt-1 section-title">Monster Hunter</h6>
                                <p class=" section-price price-text">$29.99</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="http://localhost/RomeroFrancisco/public/assets/img/mario.jpg" class="img-fluid mb-2 section-image" alt="Mejor Calificado 2">
                                <h6 class="mt-1 section-title">Mario Kart 8</h6>
                                <p class=" section-price price-text">$24.99</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="http://localhost/RomeroFrancisco/public/assets/img/imagen2.jpg" class="img-fluid mb-2 section-image" alt="Mejor Calificado 3">
                                <h6 class="mt-1 section-title">The legend of Zelda</h6>
                                <p class=" section-price price-text">$34.99</p>
                            </div>
                        </div>
                    </li>

                    <li class="mb-3">
                        <h3 class="h5">Clásicos Atemporales</h3>
                        <!-- Fila de imágenes con descripciones -->
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="http://localhost/RomeroFrancisco/public/assets/img/black.jpg" class="img-fluid mb-2 section-image" alt="Clásico 1">
                                <h6 class="mt-1 section-title">Black</h6>
                                <p class=" section-price price-text">$19.99</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="http://localhost/RomeroFrancisco/public/assets/img/godofwar.jpg" class="img-fluid mb-2 section-image" alt="Clásico 2">
                                <h6 class="mt-1 section-title">God Of War</h6>
                                <p class=" section-price price-text">$39.99</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="http://localhost/RomeroFrancisco/public/assets/img/Doom-64.jpg" class="img-fluid mb-2 section-image" alt="Clásico 3">
                                <h6 class="mt-1 section-title">Doom 64</h6>
                                <p class=" section-price price-text">$29.99</p>
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