<nav class="navbar main-navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <i class="fas fa-qrcode"></i>
            <span class="fw-bold fs-4 text-white">QR Page Builder</span>
        </a>

        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        >
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
            <a class="nav-link active" href="#">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Plantillas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Mis QR</a>
            </li>
            <li class="nav-item ms-lg-2">
            <a class="btn btn-outline-light btn-sm px-3" href="#">Crear Nuevo</a>
            </li>
        </ul>
        </div>
    </div>
</nav>