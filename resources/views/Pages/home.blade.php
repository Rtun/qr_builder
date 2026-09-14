@extends('layouts.app')

@push('styles')
    @vite(['resources/css/sass/home.scss'])
@endpush

@section('title', 'Inicio - QR Page Builder')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="img-content">
                <img src="images/hero.webp" alt="Hero Qr builder" class="img-fluid">
            </div>
            <div class="content">
                <div class="text-content mb-3">
                    <h1>QR Page Builder</h1>
                    <h4>Esta es una web hecha a medida para el desarollo de un sistema de creador de paginas mediante QR</h4>
                </div>

                <div class="button-content d-flex gap-3 mt-4">
                    <a href="#" class="btn btn-hero app-modal">Probar Qr Builder</a>
                    <a href="#" class="btn btn-hero app-modal">Probar Qr Builder</a>
                </div>
            </div>
        </div>
    </section>

    <section class="info-section py-5 bg-white" id="info">
        <div class="container py-lg-4">
            
            <!-- Encabezado de la Sección -->
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <span class="badge bg-primary-subtle text-primary fw-semibold px-3 py-2 rounded-pill mb-2">
                    ¿Por qué elegirnos?
                    </span>
                    <h2 class="display-6 fw-bold text-dark">Todo lo que necesitas para tus Códigos QR</h2>
                    <p class="text-secondary lead fs-6">
                    Genera códigos estéticos, rápidos y compatibles con cualquier dispositivo en cuestión de segundos.
                    </p>
                </div>
            </div>

            <!-- Grilla de Tarjetas de Información -->
            <div class="row g-4 mb-5">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card info-card h-100 border-0 shadow-sm p-3">
                <div class="card-body">
                    <div class="icon-box bg-primary-subtle text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                    </svg>
                    </div>
                    <h5 class="card-title fw-bold text-dark mb-2">Generación Instantánea</h5>
                    <p class="card-text text-secondary">
                    Procesamiento inmediato desde el cliente o servidor. Tus códigos se renderizan en formato SVG vectorial sin pérdida de calidad.
                    </p>
                </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card info-card h-100 border-0 shadow-sm p-3">
                <div class="card-body">
                    <div class="icon-box bg-success-subtle text-success mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                    </div>
                    <h5 class="card-title fw-bold text-dark mb-2">Personalización Flexible</h5>
                    <p class="card-text text-secondary">
                    Ajusta el tamaño en píxeles y paleta de colores para alinearlos perfectamente a la identidad visual de tu marca.
                    </p>
                </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card info-card h-100 border-0 shadow-sm p-3">
                <div class="card-body">
                    <div class="icon-box bg-warning-subtle text-warning mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                    </div>
                    <h5 class="card-title fw-bold text-dark mb-2">Descarga Directa</h5>
                    <p class="card-text text-secondary">
                    Obtén tus códigos listos para impresión en formato SVG de alta definición o guárdalos directamente en tu dispositivo.
                    </p>
                </div>
                </div>
            </div>
            </div>

                <!-- Llamado a la Acción (CTA) con el Botón a la Ruta -->
                <div class="cta-banner rounded-4 p-4 p-md-5 text-center text-md-start d-flex flex-column flex-md-row align-items-center justify-content-between shadow-sm">
                    <div class="mb-3 mb-md-0">
                        <h3 class="fw-bold text-white mb-1">¿Listo para crear tu primer código QR?</h3>
                        <p class="text-white-50 m-0">Empieza ahora mismo sin necesidad de registro ni configuraciones complejas.</p>
                    </div>
                <div>
                    <!-- AQUÍ PONES TU RUTA NOMBRADA -->
                    <a href="{{ route('configuracion') }}" class="btn btn-light btn-lg px-4 py-2 fw-bold text-primary rounded-pill shadow-sm hover-lift">
                    Crear Código QR
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection