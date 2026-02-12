<?php include("header.php"); ?>


<div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
    
    
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>


    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="img/slide1.jpg" class="d-block w-100" style="height:300px; object-fit:cover;" alt="Transporte Nacional">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-4 rounded">
                <h2 class="fw-bold">Transporte Nacional</h2>
                <p>Servicio seguro y puntual en todo el país.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/slide2.jpg" class="d-block w-100" style="height:300px; object-fit:cover;" alt="Carga Pesada">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-4 rounded">
                <h2 class="fw-bold">Carga Pesada</h2>
                <p>Movilización especializada para industria.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/slide3.jpg" class="d-block w-100" style="height:300px; object-fit:cover;" alt="Logística Empresarial">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-4 rounded">
                <h2 class="fw-bold">Logística Empresarial</h2>
                <p>Optimización de rutas y distribución eficiente.</p>
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


<div class="container mb-5">

    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Soluciones Logísticas Confiables</h1>
        <p class="lead text-muted">Especialistas en transporte nacional y carga pesada</p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Transporte Nacional</h5>
                    <p class="card-text">Cobertura en todo el país con puntualidad garantizada y monitoreo constante.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Carga Pesada</h5>
                    <p class="card-text">Movilización segura para maquinaria industrial y proyectos especiales.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow border-0">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Logística Empresarial</h5>
                    <p class="card-text">Optimización de rutas, almacenamiento y distribución eficiente.</p>
                </div>
            </div>
        </div>

    </div>

</div>

<?php include("footer.php"); ?>
