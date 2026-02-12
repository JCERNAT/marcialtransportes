<?php include("header.php"); ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="img/img1.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block p-4">
                <h2 class="fw-bold">Transporte Nacional</h2>
                <p>Servicio seguro, rápido y con cobertura en todo el país.</p>
                <a href="contacto.php" class="btn btn-primary">Cotizar Ahora</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/img2.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block p-4">
                <h2 class="fw-bold">Carga Pesada</h2>
                <p>Especialistas en traslado de maquinaria industrial.</p>
                <a href="servicios.php" class="btn btn-primary">Ver Servicios</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/img3.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block p-4">
                <h2 class="fw-bold">Logística Empresarial</h2>
                <p>Optimización de rutas y distribución eficiente.</p>
                <a href="contacto.php" class="btn btn-primary">Contáctanos</a>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>


<div class="container my-5 text-center">
    <h1 class="display-5 fw-bold">Soluciones Logísticas Confiables</h1>
    <p class="lead text-muted">
        Más de 10 años brindando servicios de transporte con seguridad, eficiencia y puntualidad.
    </p>
</div>

<div class="container mb-5">
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Transporte Nacional</h5>
                    <p>Distribución en todo el territorio nacional con monitoreo constante.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Carga Pesada</h5>
                    <p>Movilización segura de maquinaria industrial y proyectos especiales.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <div class="card-body text-center">
                    <h5 class="fw-bold">Logística Empresarial</h5>
                    <p>Optimización estratégica de rutas y procesos logísticos.</p>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="bg-light py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">¿Por qué elegirnos?</h2>

        <div class="row g-4">

            <div class="col-md-3">
                <h3 class="fw-bold text-primary">+10</h3>
                <p>Años de experiencia</p>
            </div>

            <div class="col-md-3">
                <h3 class="fw-bold text-primary">100%</h3>
                <p>Compromiso y puntualidad</p>
            </div>

            <div class="col-md-3">
                <h3 class="fw-bold text-primary">24/7</h3>
                <p>Atención al cliente</p>
            </div>

            <div class="col-md-3">
                <h3 class="fw-bold text-primary">Cobertura</h3>
                <p>Nacional garantizada</p>
            </div>

        </div>
    </div>
</div>
<div class="container text-center my-5">
    <h2 class="fw-bold mb-3">Solicita tu Cotización Hoy</h2>
    <p class="mb-4">Estamos listos para ayudarte con tus necesidades logísticas.</p>
    <a href="contacto.php" class="btn btn-primary btn-lg">Contactar Ahora</a>
</div>

<?php include("footer.php"); ?>
