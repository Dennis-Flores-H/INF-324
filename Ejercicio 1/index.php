<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catastro - Servicios de La Paz</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Servicios de Catastro</h1>
            <p>Información sobre trámites y fichas de catastro en La Paz</p>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Catastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#tramites">Tipos de Trámite</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fichas">Fichas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de tipos de trámite -->
    <div class="container mt-5" id="tramites">
        <h2 class="mb-4">Tipos de Trámite</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Trámite 1</h5>
                        <p class="card-text">Descripción breve del trámite 1. Incluye información relevante sobre los requisitos y pasos a seguir.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Trámite 2</h5>
                        <p class="card-text">Descripción breve del trámite 2. Incluye información relevante sobre los requisitos y pasos a seguir.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Trámite 3</h5>
                        <p class="card-text">Descripción breve del trámite 3. Incluye información relevante sobre los requisitos y pasos a seguir.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de fichas -->
    <div class="container mt-5" id="fichas">
        <h2 class="mb-4">Fichas de Trámite</h2>
        <p>Descarga las fichas de trámite en formato PDF:</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ficha 1</h5>
                        <a href="path/to/ficha1.pdf" class="btn btn-primary" target="_blank">Descargar PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ficha 2</h5>
                        <a href="path/to/ficha2.pdf" class="btn btn-primary" target="_blank">Descargar PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ficha 3</h5>
                        <a href="path/to/ficha3.pdf" class="btn btn-primary" target="_blank">Descargar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
