<!-- seccion para el video y logo de arriba -->
<section class="title-section">
    <!-- video de fondo que se repite siempre -->
    <video autoplay muted loop class="background-video" id="videoBackground">
        <!-- archivo del video -->
        <source src="public/assets/img/wild.mp4" type="video/mp4">
        <!-- mensaje si el navegador no puede mostrar el video -->
        tu navegador no soporta la reproduccion de videos.
    </video>
    <!-- imagen del logo que va arriba del video -->
    <img src="public/assets/img/TituloFondo.png" alt="Logo Game-Box" class="title-image img-fluid">
</section>

<!-- seccion principal donde esta todo el contenido -->
<section class="container-fluid main-section">
    <!-- contenedor para centrar las cosas -->
    <div class="container">
        <!-- fila para alinear el contenido -->
        <div class="row justify-content-center">
            <!-- caja blanca donde va todo, con bordes y padding -->
            <div class="col-md-10 p-4 border rounded" id="content-box">
                <!-- lista para las secciones como lo mas vendido y ofertas -->
                <ul class="list-unstyled mb-4">
                    <!-- item para lo mas vendido -->
                    <li class="mb-3">
                        <!-- titulo de la seccion -->
                        <h3 class="h5">Lo más vendido</h3>
                    </li>
                    <!-- item para el carrusel con las imagenes grandes -->
                    <li class="mb-4">
                        <!-- fila para el carrusel y las miniaturas -->
                        <div class="row">
                            <!-- columna para el carrusel, ocupa mas espacio -->
                            <div class="col-md-8 mb-3 mb-md-0">
                                <!-- carrusel que cambia las imagenes -->
                                <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                    <!-- contenedor de las imagenes del carrusel -->
                                    <div class="carousel-inner">
                                        <!-- primer juego del carrusel, esta activo por defecto -->
                                        <div class="carousel-item active">
                                            <!-- contenedor para la imagen y texto -->
                                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                                <!-- imagen del juego -->
                                                <img src="public/assets/img/imagen1.jpg" class="d-block img-fluid carousel-image" alt="Imagen 1">
                                                <!-- texto con el nombre, precio y descripcion -->
                                                <div class="ms-md-3 text-start mt-3 mt-lg-0">
                                                    <h4>Dark Souls</h4>
                                                    <h5 class="price-text">$29.99</h5>
                                                    <p>dark souls es una serie de juegos de rol de accion creada por hidetaka miyazaki de fromsoftware y publicada por bandai namco entertainment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- segundo juego del carrusel -->
                                        <div class="carousel-item">
                                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                                <img src="public/assets/img/imagen2.jpg" class="d-block img-fluid carousel-image" alt="Imagen 2">
                                                <div class="ms-md-3 text-start mt-3 mt-lg-0">
                                                    <h4>The Legend Of Zelda</h4>
                                                    <h5 class="price-text">$24.99</h5>
                                                    <p>videojuego de accion-aventura de 2017 de la serie the legend of zelda, desarrollado por la filial nintendo epd en colaboracion con monolith soft y publicado por nintendo para las consolas wii u y nintendo switch</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- tercer juego del carrusel -->
                                        <div class="carousel-item">
                                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                                <img src="public/assets/img/imagen3.jpg" class="d-block img-fluid carousel-image" alt="Imagen 3">
                                                <div class="ms-md-3 text-start mt-3 mt-lg-0">
                                                    <h4>Minecraft</h4>
                                                    <h5 class="price-text">$21.99</h5>
                                                    <p>minecraft es un videojuego de mundo abierto que permite a los jugadores explorar, construir y sobrevivir en un entorno generado de manera procedimental.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- cuarto juego del carrusel -->
                                        <div class="carousel-item">
                                            <div class="d-flex flex-column flex-lg-row align-items-center">
                                                <img src="public/assets/img/imagen4.jpg" class="d-block img-fluid carousel-image" alt="Imagen 4">
                                                <div class="ms-md-3 text-start mt-3 mt-lg-0">
                                                    <h4>Crash Bandicoot 4: It's About Time</h4>
                                                    <h5 class="price-text">$23.99</h5>
                                                    <p>videojuego de plataformas desarrollado por toys for bob y publicado por activision en 2020. se lanzo originalmente para playstation 4 y xbox one, con lanzamientos para nintendo switch, playstation 5, xbox series x|s y windows en 2021.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- boton para ir a la imagen anterior -->
                                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Anterior</span>
                                    </button>
                                    <!-- boton para ir a la imagen siguiente -->
                                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Siguiente</span>
                                    </button>
                                </div>
                            </div>
                            <!-- columna para las miniaturas, ocupa menos espacio -->
                            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                                <!-- contenedor para las miniaturas, cambia de forma segun el tamano de pantalla -->
                                <div class="row w-100 flex-row flex-md-column flex-lg-row">
                                    <!-- miniatura del primer juego -->
                                    <div class="col-3 col-md-12 col-lg-6 mb-2">
                                        <img src="public/assets/img/imagen1.jpg" class="img-thumbnail clickable-thumbnail thumbnail-image img-fluid" data-bs-target="#imageCarousel" data-bs-slide-to="0" alt="Miniatura 1">
                                    </div>
                                    <!-- miniatura del segundo juego -->
                                    <div class="col-3 col-md-12 col-lg-6 mb-2">
                                        <img src="public/assets/img/imagen2.jpg" class="img-thumbnail clickable-thumbnail thumbnail-image img-fluid" data-bs-target="#imageCarousel" data-bs-slide-to="1" alt="Miniatura 2">
                                    </div>
                                    <!-- miniatura del tercer juego -->
                                    <div class="col-3 col-md-12 col-lg-6 mb-2">
                                        <img src="public/assets/img/imagen3.jpg" class="img-thumbnail clickable-thumbnail thumbnail-image img-fluid" data-bs-target="#imageCarousel" data-bs-slide-to="2" alt="Miniatura 3">
                                    </div>
                                    <!-- miniatura del cuarto juego -->
                                    <div class="col-3 col-md-12 col-lg-6 mb-2">
                                        <img src="public/assets/img/imagen4.jpg" class="img-thumbnail clickable-thumbnail thumbnail-image img-fluid" data-bs-target="#imageCarousel" data-bs-slide-to="3" alt="Miniatura 4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- seccion de ofertas -->
                    <li class="mb-3">
                        <!-- titulo de la seccion -->
                        <h3 class="h5">Ofertas</h3>
                        <!-- contenedor para los juegos en oferta -->
                        <div class="d-flex flex-wrap">
                            <!-- primer juego en oferta -->
                            <div class="text-center mb-3" style="width: 33.33%;">
                                <img src="public/assets/img/imagen1.jpg" class="img-fluid mb-2 section-image" alt="Oferta 1" style="max-height: 150px;">
                                <h6 class="mt-1 section-title">Dark Souls</h6>
                                <p class="section-price price-text">$29.99</p>
                            </div>
                            <!-- segundo juego en oferta -->
                            <div class="text-center mb-3" style="width: 33.33%;">
                                <img src="public/assets/img/spidermnan.jpg" class="img-fluid mb-2 section-image" alt="Oferta 2" style="max-height: 150px;">
                                <h6 class="mt-1 section-title">Spider-man</h6>
                                <p class="section-price price-text">$29.99</p>
                            </div>
                            <!-- tercer juego en oferta -->
                            <div class="text-center mb-3" style="width: 33.33%;">
                                <img src="public/assets/img/No-More-Heroes.jpg" class="img-fluid mb-2 section-image" alt="Oferta 3" style="max-height: 150px;">
                                <h6 class="mt-1 section-title">No More Heroes</h6>
                                <p class="section-price price-text">$35.99</p>
                            </div>
                        </div>
                    </li>

                    <!-- seccion de mejores calificados -->
                    <li class="mb-3">
                        <!-- titulo de la seccion -->
                        <h3 class="h5">Mejores calificado</h3>
                        <!-- contenedor para los juegos mejor calificados -->
                        <div class="d-flex flex-wrap">
                            <!-- primer juego mejor calificado -->
                            <div class="text-center mb-3" style="width: 33.33%;">
                                <img src="public/assets/img/monsterhunter.jpg" class="img-fluid mb-2 section-image" alt="Mejor Calificado 1" style="max-height: 150px;">
                                <h6 class="mt-1 section-title">Monster Hunter</h6>
                                <p class="section-price price-text">$29.99</p>
                            </div>
                            <!-- segundo juego mejor calificado -->
                            <div class="text-center mb-3" style="width: 33.33%;">
                                <img src="public/assets/img/mario.jpg" class="img-fluid mb-2 section-image" alt="Mejor Calificado 2" style="max-height: 150px;">
                                <h6 class="mt-1 section-title">Mario Kart 8</h6>
                                <p class="section-price price-text">$24.99</p>
                            </div>
                            <!-- tercer juego mejor calificado -->
                            <div class="text-center mb-3" style="width: 33.33%;">
                                <img src="public/assets/img/imagen2.jpg" class="img-fluid mb-2 section-image" alt="Mejor Calificado 3" style="max-height: 150px;">
                                <h6 class="mt-1 section-title">The legend of Zelda</h6>
                                <p class="section-price price-text">$34.99</p>
                            </div>
                        </div>
                    </li>

                    <!-- seccion de clasicos atemporales -->
                    <li class="mb-3">
                        <!-- titulo de la seccion -->
                        <h3 class="h5">Clásicos Atemporales</h3>
                        <!-- contenedor para los juegos clasicos -->
                        <div class="d-flex flex-wrap">
                            <!-- primer juego clasico -->
                            <div class="text-center mb-3" style="width: 33.33%;">
                                <img src="public/assets/img/black.jpg" class="img-fluid mb-2 section-image" alt="Clásico 1" style="max-height: 150px;">
                                <h6 class="mt-1 section-title">Black</h6>
                                <p class="section-price price-text">$19.99</p>
                            </div>
                            <!-- segundo juego clasico -->
                            <div class="text-center mb-3" style="width: 33.33%;">
                                <img src="public/assets/img/godofwar.jpg" class="img-fluid mb-2 section-image" alt="Clásico 2" style="max-height: 150px;">
                                <h6 class="mt-1 section-title">God Of War</h6>
                                <p class="section-price price-text">$39.99</p>
                            </div>
                            <!-- tercer juego clasico -->
                            <div class="text-center mb-3" style="width: 33.33%;">
                                <img src="public/assets/img/Doom-64.jpg" class="img-fluid mb-2 section-image" alt="Clásico 3" style="max-height: 150px;">
                                <h6 class="mt-1 section-title">Doom 64</h6>
                                <p class="section-price price-text">$29.99</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- script para que funcione el carrusel -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>