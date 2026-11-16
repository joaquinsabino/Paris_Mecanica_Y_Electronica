<?php
$titulo_pagina = "Inicio - Paris Mecánica";
include 'includes/header.php';
include 'includes/nav.php';
?>

<!-- Botón exclusivo de Inicio -->
<div class="boton-inicio">
    <a class="boton_nosotros" href="nosotros.php">
        NOSOTROS
    </a>
</div>

<main>

    <!-- Imagen de fondo -->
    <section class="seccion-inicio">

        <!-- Video por delante del fondo -->
        <div class="contenedor-video">
            <div class="video-delante">
                <video class="video" autoplay muted loop playsinline>
                    <source src="imagenes/Diapositiva_Video_PaginaWeb.mp4"
                            type="video/mp4">
                </video>
            </div>
        </div>

    </section>

</main>

<?php include 'includes/footer.php'; ?>