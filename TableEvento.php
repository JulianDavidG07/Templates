<?php /* Template Name: Congreso de Química Clínica */ ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php //wp_head(); ?>

  <title>
    A la Vanguardia Tecnológica – 2024 | Valtek
  </title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <link rel="icon" type="image/png" href="https://www.valtek.cl/wp-content/uploads/2024/06/Vanguardia.png" />

  <!--- BOOTSTRAP CSS --->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet">


  <script type="module">
    var modals = document.querySelectorAll('.modal');

    modals.forEach(function (modal) {
      modal.addEventListener('show.bs.modal', function (event) {
        var iframe = modal.querySelector('iframe');
        if (!iframe.src) {
          iframe.src = iframe.getAttribute('data-src');
        }
      });
    });

    //loader youtube
    const loaderContainer = document.querySelector('.loader-container');
    const videoContainer = document.querySelector('.video-container');

    // Mostrar loader al cargar la página
    loaderContainer.style.display = 'flex';

    // Ocultar loader después de 4 segundos
    setTimeout(function () {
      loaderContainer.style.display = 'none';
      videoContainer.style.display = 'block'; // Mostrar el contenedor del video
    }, 4000); // 4 segundos

  </script>


</head>

<style>
  :root {
    --red-primary: #cb3419;
    --black-primary: #262626;
  }

  * {
    font-family: "Mulish", sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
  }

  /***
  .hero-container_::before {
    content: "¡Inscripciones agotadas!";
    background: #fe0f01;
    opacity: 0.9;
    color: white;
    font-weight: 700;
    width: 478px;
    display: inline-flex;
    position: absolute;
    padding: 8px;
    transform: rotate(312deg);
    left: -117px;
    top: 102px;
    font-size: 20px;
    justify-content: center;
  }
  ****/

  .carousel.slide {
    background: gray;
    width: 100%;
    height: 100%;
    min-height: 400px;
  }

  .carousel-item img {
    height: 100%;
    object-fit: cover;
  }

  .carousel-inner,
  .carousel-item {
    height: 100%;
  }

  .carousel-caption {
    background: #f3ebeb61;
    backdrop-filter: blur(4px);
    color: black;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: var(--red-primary) !important;
    padding: 20px 10px;
  }


  .spinner {
    width: 42px;
    height: 42px;
    border: 14.4px #cb3419 double;
    border-left-style: solid;
    border-radius: 50%;
    animation: spinner-aib1d7 0.75s infinite linear;
  }

  @keyframes spinner-aib1d7 {
    to {
      transform: rotate(360deg);
    }
  }

  .video-container {
    display: none;
    /* Ocultar el contenedor del video inicialmente */
  }


  .card-title {
    text-align: center !important;
  }

  .img-hero-div img {
    max-width: 100%;
  }


  blockquote {
    font-size: 20px;
    font-weight: 600;
    max-width: 800px !important;
    line-height: 1.4;
    position: relative;
    margin: 0;
    padding: .5rem;
  }

  blockquote:before,
  blockquote:after {
    position: absolute;
    color: #f1efe6;
    font-size: 112px;
  }

  blockquote:before {
    content: '“';
    left: -6%;
    top: -68px;
    height: 40px;
  }

  blockquote:after {
    content: '”';
    right: 6%;
    bottom: 30px;
    height: 34px;
  }

  cite {
    line-height: 3;
    text-align: left;
  }


  .pais {
    display: none !important;
  }

  .strong-pais {
    display: inline-block;
    margin-bottom: 15px;
  }

  .p-speaker {
    max-width: 420px;
    margin: auto;
  }

  .section-invitados_ * {
    text-wrap: balance;
  }

  .border-right-0 {
    border-right: 0 !important;
  }

  .border-left-0 {
    border-left: 0 !important;
  }


  .modal-content {
    min-height: 60vh !important;
  }

  .modal-content iframe {
    height: 100% !important;
    min-height: 60vh !important;
  }

  /**** CARDS EQUIPOS ****/
  .card-e {
    max-width: 100%;
    flex-direction: column;
    background-color: #fbf7f796 !important;
    border: 1px solid #dbd6d6;
    box-shadow: 0 7px 7px rgba(0, 0, 0, 0.18);
  }

  .card-e:hover {
    border: 0.6px solid gray;
  }

  .card-e-top {
    position: relative;
    display: flex;
    flex-direction: row;
  }

  .card-e-tag {
    background-color: transparent;
    color: var(--red-primary) !important;
    border: 1px solid var(--red-primary);
    font-weight: 800;
    position: absolute;
    right: 5px;
    top: 5px;
    padding: 1px 6px;
    border-radius: 5px;
    font-size: 12px;
  }

  .btn-primary {
    font-size: 14px;
    padding: 4px 20px;
    background-color: var(--red-primary) !important;
    border: 1px solid var(--red-primary) !important;
  }

  .btn-primary:hover {
    color: var(--red-primary) !important;
    background-color: transparent !important;
    border: 1px solid var(--red-primary) !important;
  }

  .card-e iframe {
    max-width: 100% !important;
    min-width: 100% !important;
    max-height: 195px !important;
    border-radius: 0 0 5px 5px !important;
  }

  .bg-dark-subtle {
    background-color: #ebebeb !important
  }

  .card-e.card.bg-light-subtle .card-title {
    color: dimgrey;
  }

  .card-e img {
    aspect-ratio: 1;
    object-fit: contain;
    max-width: 42% !important;
    min-width: 120px;
    margin: auto;
    padding: 0.5em;
    border-radius: 0.7em;
    transition: transform 0.3s ease-in-out;
  }

  .card-e:hover img {
    transform: scale(1.1);
  }

  .card-e .card-body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }


  @media screen and (max-width: 768px) {
    .card-e {
      flex-direction: column;
    }

    blockquote {
      max-width: 82% !important;
    }
  }

  /******* END CARDS EQUIPOS *********/


  .forminator-button-submit {
    background-color: #cb3419 !important;
    color: #fff !important;
    border-radius: 0px !important;
    padding: 16px 6px !important;
    margin-top: 10px !important;
  }

  .linkedin-btn svg {
    transition: transform 0.3s ease-in-out;
  }

  .linkedin-btn svg:hover {
    transform: scale(1.1);
  }

  ul {
    list-style-type: square;
    /* Utiliza bullets cuadrados */
  }

  ul li {
    margin-bottom: 12px !important;
    font-weight: 700;
  }

  ul li::marker {
    color: var(--red-primary) !important;
    font-size: 20px;
  }

  .logo-1 {
    max-width: 120px;
  }

  .logo-2 {
    max-width: 200px;
  }

  .black-text_ {
    color: var(--black-primary) !important;
  }

  .row {
    margin: 0 !important;
  }

  .logo-valtek {
    width: 390px !important;
    max-width: 100% !important;
  }


  .description_ {
    background-image: url(https://www.valtek.cl/wp-content/uploads/2024/04/starts.png);
    background-repeat: no-repeat;
    background-position: center right;
  }

  .destacado-fecha_ {
    border-left: 4px solid var(--red-primary);
    padding: 12px 30px;
  }

  .destacado-fecha_ * {
    font-size: 20px;
    color: var(--black-primary);
  }

  .section-invitados_ {
    background-color: #fcfcfc;
    background-image: url(https://www.valtek.cl/wp-content/uploads/2024/04/starts.png);
    background-repeat: no-repeat;
    background-position: top left;
  }

  .img-dr_ img {
    max-width: 100%;
    width: 120px;
    height: 120px;
    object-fit: cover;
    object-position: top;
    border-radius: 100px;
    margin-bottom: 15px;
  }

  .box-form {
    max-width: 840px;
    margin: 0 auto 40px;
  }

  .box-form .forminator-label[for] {
    display: none !important;
  }

  .forminator-input {
    border: 0.5px solid #B6B6B6 !important;
    padding: 10px 23px 10px 23px !important;
    border-radius: 8px !important;
    background-color: #FFFFFF !important;
    box-shadow: 0px 4px 4px 0px #0000000A !important;
  }

  .box-form p {
    margin: 0;
  }

  .box-form a {
    color: var(red-primary) !important;
  }

  .box-form .forminator-button-submit {
    display: block !important;
    width: 100% !important;
  }

  textarea {
    field-sizing: content;
    box-sizing: border-box;
    padding: 12px;
    width: 100%;
    min-height: 60px;
  }

  .forminator-phone input {
    padding-left: 58px !important;
  }

  .h1,
  h1 {
    font-size: 34px !important;
    color: var(--red-primary);
    font-weight: 700 !important;
    text-wrap: balance;
  }

  .h2,
  h2 {
    font-size: 28px !important;
    color: var(--red-primary);
    font-weight: 700 !important;
    text-wrap: balance;
  }

  .h3,
  h3 {
    font-size: 20px !important;
    color: var(--red-primary);
    font-weight: 600 !important;
    text-wrap: balance;
  }

  .btn-form {
    border-radius: 100px;
    background-color: var(--red-primary);
    color: white;
    padding: 10px 30px;
    text-decoration: none;
  }

  /* TABLE HORARIOS */
  .cinta-green {
    background-color: #17b78fa6;
    backdrop-filter: blur(2px);
    color: white;
    position: sticky;
    top: 0;
    z-index: 99;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    padding: 12px 10px;
    margin-bottom: 50px;
  }

  .table-b tr td:nth-child(3) {
    max-width: 1000px;
  }

  .table-b .table>:not(caption)>*>* {
    background-color: transparent !important;
    min-width: 115px;
  }

  .table-b .bg-blue_ {
    background: #f1f5f7;
  }

  .table-b .black-text-table {
    margin: 0 0 8px;
    color: #5E5E5E;
    font-weight: 700;
    font-size: 18px;
    line-height: 1.2;
  }

  .table-b .green-text-table {
    margin: 0 0 12px;
    color: #17b78f;
    font-weight: 700;
    font-size: 18px;
    line-height: 1.2;
  }

  .table-vertical-borders * {
    color: gray;
  }

  .table-vertical-borders {
    max-width: 600px;
    margin: auto;
  }

  .table-vertical-borders tbody {
    position: relative;
  }

  .table-vertical-borders td,
  .table-vertical-borders th {
    position: relative;
    border: none;
  }

  .table-vertical-borders tbody td {
    padding-top: 0 !important;
    padding-bottom: 7%;
    font-weight: 700;
    color: #5E5E5E;
  }

  .table-vertical-borders tbody td:nth-child(2) {
    padding-left: 6%;
  }

  .table-vertical-borders tbody tr:last-child td {
    padding-bottom: 0 !important;
  }

  .table-vertical-borders td:not(:first-child)::before,
  .table-vertical-borders th:not(:first-child)::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 1px;
  }

  .table-vertical-borders td:not(:last-child)::after,
  .table-vertical-borders th:not(:last-child)::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    width: 1px;
    background: linear-gradient(to bottom, #5E5E5E 50%, transparent 50%);
    background-size: 1px 10px;
    /* Ajusta 10px para controlar la longitud de los guiones */
  }


  /* Estilo específico para el primer <td> de la tabla */
  .table-vertical-borders tr:first-child td:first-child::before {
    content: '';
    position: absolute;
    width: 14px;
    height: 14px;
    background-color: #5E5E5E;
    right: -7px;
    top: 0;
    z-index: 9;
    border-radius: 50px;
  }

  /* Estilo específico para el ultimo <td> de la tabla */
  .table-vertical-borders tr:last-child td:last-child::after {
    content: '';
    position: absolute;
    width: 14px;
    height: 14px;
    background-color: #5E5E5E;
    left: -7px;
    bottom: 0;
    z-index: 9;
    border-radius: 50px;
  }






  @media screen and (max-width: 992px) {
    .hero-container_ {
      background-position: top center !important;
    }
  }

  @media screen and (max-width: 576px) {
    img {
      max-width: 100% !important;
    }

    .iframe-m_ iframe {
      height: 200px !important;
    }

    .logo-1 {
      width: 110px !important;
    }

    .logo-2 {
      width: 150px !important;
    }

    .box-form {
      max-width: 90%;
      margin: auto;
    }
  }
</style>

<body>
  <main>

    <section>
      <div class="row">
        <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center py-3">
          <img src="https://www.valtek.cl/wp-content/uploads/2024/07/Val.png" alt="Val" loading="lazy"
            style="max-width: 250px;">
        </div>
        <div class="col-12 col-lg-6 p-0 d-flex justify-content-center align-items-center">
          <!----- START SLIDER ------->
          <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel"
            style="background: gray;">

            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>

              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>

              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>

              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>

              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>

              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/07/1.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                  <h5>Ricardo Schwartz</h5>
                  <p>Gerente General de Valtek</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/07/2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                  <h5>Gabriela Berg</h5>
                  <p>Argentina</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/07/3.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                  <h5>Segio Bernadini</h5>
                  <p>Italia</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/07/4.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                  <h5>Bernardo de Almeida</h5>
                  <p>Brasil</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/07/5.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                  <h5>Joaquín Carrillo Farga</h5>
                  <p>México</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/07/6.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                  <h5>Alejandra Corso</h5>
                  <p>Argentina</p>
                </div>
              </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!----- END SLIDER ---------->
        </div>
      </div>
    </section>

    <!--- RED FLAG --->
    <div class="m-0 p-0" style="margin-top: -18px !important; position: relative; z-index: 999;">
      <img src="https://www.valtek.cl/wp-content/uploads/2024/04/Vector-Red.png" alt="before-img_" loading="lazy" />
    </div>


    <!--- Video --->
    <section class="container mt-3 mt-md-5">
      <div class="row justify-content-center">
        <div class="col-12 p-0 iframe-m_ d-flex justify-content-center align-items-center">

          <div class="video-container" style="width: 100%;">
            <iframe id="youtube-iframe" width="100%" height="376"
              src="https://www.youtube.com/embed/HNGzznXNC_M?si=tTB7m9ZK-MFWasA2" title="Valtek Evento" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <!----------------------->

          <div class="loader-container">
            <div class="loader">
              <div class="spinner"></div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!--- FORMULARIO DE INSCRIPCIÓN --->
    <section class="mt-5" id="form-curso">
      <div class="container pt-3">
        <h2 style="max-width: 900px;" class="text-center mx-auto mt-2 my-5">
          Suscríbete y entérate de nuestras novedades, lanzamientos y próximos eventos.
        </h2>
        <div class="box-form">

          <?php //echo do_shortcode('[forminator_form id="11804"]'); ?>

        </div>
      </div>
    </section>

    <!--- HERO SECTION NEW 
    <div class="img-hero-div">
      <img class="d-md-none img-banner-mobile-new_"
        src="https://www.valtek.cl/wp-content/uploads/2024/06/Hero-Mobile.png" alt="Hero Vanguardia Mobile">
      <img class="d-none d-md-block img-banner-new_" src="https://www.valtek.cl/wp-content/uploads/2024/06/Hero.png"
        alt="Hero Vanguardia">
    </div>
    --->

    <!--- HERO SECTION 
    <div class="pt-4 pb-5 hero-container_" style="
          position: relative;
          background-image: url(https://www.valtek.cl/wp-content/uploads/2024/04/starts.png);
          background-size: contain;
          background-position: top right;
          overflow: hidden;
        ">
      <div class="container">
        <div class="row py-5 justify-content-center align-items-center m-0">
          <blockquote>
            Una instancia para revisar las últimas tendencias, avances y tecnología en diagnóstico clínico desarrolladas
            en exposiciones de destacados expertos internacionales.
          </blockquote>
          <cite>Valtek</cite>

        </div>
      </div>
    </div> --->


    <!--- SECTION INVITADOS --->
    <div style="
          border-top: 1px dashed #f5f5f5 !important;
          width: 100%;
          height: 2px;
        "></div>
    <section class="section-invitados_">
      <div class="container pb-0 pb-md-0 py-5">
        <h2 class="text-center mt-4 mb- mx-auto">Expositores internacionales:</h2>

        <div class="row justify-content-center pt-4 pb-2 gy-5">

          <div class="col-12 col-md-4  mb-5">
            <div class="text-center">
              <!--
              <strong class="mb-3 d-inline-block">
                Actualización en resistencia bacteriana
              </strong>
              <div class="img-dr_">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/04/German-Esparza.jpg" alt="Dr. Germán Esparza"
                  loading="lazy">
              </div>
              --->
              <h3>Dr. Sergio Bernardini</h3>
              <strong class="strong-pais"> Italia </strong>
              <p class="p-speaker" style="font-size: 14px;">
                Médico, PhD. Profesor titular de Bioquímica Clínica y Biología Molecular Clínica, Departamento de
                Medicina Interna de la Universidad de Roma Tor Vergata. Médico jefe de la Unidad de Biología Molecular
                Clínica del Hospital Universitario Tor Vergata.
              </p>
            </div>
          </div>

          <div class="col-12 col-md-4 mb-5">
            <div class="text-center">
              <!--
              <strong class="mb-3 d-inline-block">
                Actualización en resistencia bacteriana
              </strong>
              <div class="img-dr_">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/04/German-Esparza.jpg" alt="Dr. Germán Esparza"
                  loading="lazy">
              </div>
              --->
              <h3>Dra. Gabriela Berg</h3>
              <strong class="strong-pais"> Argentina </strong>
              <p class="p-speaker" style="font-size: 14px;">
                Bioquímica, Farmacéutica, PhD. Especialista en Gestión Laboratorio Clínico de la UBA. Investigadora
                Principal del CONICET. Vicedirectora del Instituto de Fisiopatología y Bioquímica Clínica INFIBIOC-UBA.
              </p>
            </div>
          </div>

          <div class="col-12 col-md-4 mb-5">
            <div class="text-center">
              <!--
              <strong class="mb-3 d-inline-block">
                Actualización en resistencia bacteriana
              </strong>
              <div class="img-dr_">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/04/German-Esparza.jpg" alt="Dr. Germán Esparza"
                  loading="lazy">
              </div>
              --->
              <h3>Dra. Alejandra Corso</h3>
              <strong class="strong-pais"> Argentina </strong>
              <p class="p-speaker" style="font-size: 14px;">
                Jefa de Servicio Antimicrobianos Laboratorio Nacional/Regional de Referencia en Resistencia a los
                Antimicrobianos INEI-ANLIS “Dr. C. Malbrán”.
              </p>
            </div>
          </div>

          <div class="col-12 col-md-4 mb-5">
            <div class="text-center">
              <!--
              <strong class="mb-3 d-inline-block">
                Actualización en resistencia bacteriana
              </strong>
              <div class="img-dr_">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/04/German-Esparza.jpg" alt="Dr. Germán Esparza"
                  loading="lazy">
              </div>
              --->
              <h3>Bernardo de Almeida</h3>
              <strong class="strong-pais"> Brasil </strong>
              <p class="p-speaker" style="font-size: 14px;">
                Médico infectólogo. Máster en Medicina Interna con foco en enfermedades infecciosas de la Universidad
                Federal de Paraná. Director Médico de HiLab.
              </p>
            </div>
          </div>

          <div class="col-12 col-md-4 mb-5">
            <div class="text-center">
              <!--
              <strong class="mb-3 d-inline-block">
                Actualización en resistencia bacteriana
              </strong>
              <div class="img-dr_">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/04/German-Esparza.jpg" alt="Dr. Germán Esparza"
                  loading="lazy">
              </div>
              --->
              <h3>Joaquín Carrillo Farga</h3>
              <strong class="strong-pais"> México </strong>
              <p class="p-speaker" style="font-size: 14px;">
                Médico de la UNAM. Especialista en anatomía patológica y Anatomopatólogo del Instituto Nacional de la
                Nutrición e Instituto Nacional de Pediatría México. Jefe del Departamento de Histología de la Facultad
                de Medicina de la UNAM. Rector del Instituto de Hematopatología.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!--- EQUIPOS --->
    <section class="point-care_ mt-4 pt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-11 col-md-10 text-center">
            <h2 class="mb-4"> Equipos que participaron en este evento </h2>
          </div>
        </div>

        <div class="row">

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <div class="card-e-tag">
                  Equipo Mindray
                </div>
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/m680.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Mindray M680</h5>
                  </div>

                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folleto1">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folleto1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Mindray M680 </h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/M680.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/M680.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->

                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/1dxy1opXc4w?si=i9xRsqovxJuXnmgs"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <div class="card-e-tag">
                  Equipo Mindray
                </div>
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/0988-ENG.webp" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Mindray M980​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folleto2">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folleto2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Mindray M980</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/M980.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/M980.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/0JBcmbs9aYQ?si=b3q6gAl_a_3IoSP6"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <div class="card-e-tag">
                  Equipo Mindray
                </div>
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/M1000.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Mindray M1000</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folleto3">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folleto3" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Mindray M1000</h2>
                          <button type="button" class=" btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/Mindray-M1000-c.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/Mindray-M1000-c.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/S0kEERvnH7A?si=x7t0ugdN59gWkG4G"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <div class="card-e-tag">
                  Equipo Mindray
                </div>
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/mc-80.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Mindray MC 80​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folleto4">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folleto4" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Mindray MC 80</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/Mindray-MC-80.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/Mindray-MC-80.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/t8chaolR-YY?si=e52xzXMORqmbmBIa"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <div class="card-e-tag">
                  Equipo Mindray
                </div>
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/bc-780.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Mindray BC 780</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folleto5">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folleto5" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Mindray BC 780</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/BC-760-y-BC-780.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/BC-760-y-BC-780.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/JOm2vImEuk4?si=7aBKDyw7isY3Y--p"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/HS24.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Hybrispot 12 PCR Auto​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folleto6">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folleto6" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Hybrispot 12 PCR Auto</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/Hybrispot-12.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/Hybrispot-12.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/VuZ0nFjidQ0?si=ASdkDigz1fYVosGR"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/Auto-MS-1000.png" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Auto MS 1000 Maldi-TOF​​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folleto7">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folleto7" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Auto MS 1000 Maldi-TOF</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/Autof-MS-1000.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/Autof-MS-1000.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/08XkCGwtbPE?si=2_i5bnJ2PdeQGWXo"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/naissa-open.webp" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Naissa​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folleto8">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folleto8" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Naissa</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/Naissa.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/Naissa.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/xKmlQWbLarE?si=d_xnsBBkR925Vk02"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/Gestao1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Gestao Web de area Informática Médica</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folleto9">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folleto9" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Gestao Web de area Informática Médica</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/GestaoWeb.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/GestaoWeb.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/I4Dg96nNs1k?si=wJw3Bcd3oXmuf2qL"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

        </div>

      </div>
    </section>


    <!--- POINT CARE EQUIPOS --->
    <section class="point-care_ mt-4 pt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-11 col-md-10 text-center">
            <h2 class="mb-4">Analizadores Point of Care</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/volt-device-transformed.webp"
                  class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Hilab Volt​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folletovolt">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folletovolt" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Hilab Volt</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/Brochure-Volt.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/Brochure-Volt.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/wkKvp2_cUNo?si=k8_MOYOG_KXXIlKh"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/05/lens-desk.png" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Hilab Lens​​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folletolens">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folletolens" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Hilab Lens​</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/Brochure-LENS.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/Brochure-LENS.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/AU0VTCw6o94?si=rRQeNLUxls9QOebA"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/05/flow-desk-01-01.webp" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">​Hilab Flow​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folletoflow">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folletoflow" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">​Hilab Flow</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/Brochure-Hilab-Flow.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/Brochure-Hilab-Flow.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/qC_wjdxfSN0?si=BqptT8bsEri9KmBp"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <!-- LASTS -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/Universal-Sensor.webp" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">Xprecia Prime – Universal Biosensor​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folletoprime">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folletoprime" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">Xprecia Prime – Universal Biosensor</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/UBI-Xprecia-prime.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/UBI-Xprecia-prime.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/Ggarwjpdi7s?si=ujPWM10B9MYg14_G"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/SG1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">SG1Seamaty</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folletosg1">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folletosg1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">SG1Seamaty</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe data-src="https://www.valtek.cl/wp-content/uploads/2024/06/SG1.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/SG1.pdf" class="btn btn-primary">Ver
                            folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/28zjwh9WPEA?si=h4dRE5vyUuCGmyXl"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-e bg-dark-subtle mt-4">
              <div class="card-e-top">
                <img src="https://www.valtek.cl/wp-content/uploads/2024/06/EDAN.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="text-section">
                    <h5 class="card-title fw-bold">EDAN i20​</h5>
                  </div>
                  <!--- MODAL PDF ---->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#folletoedan">
                    Ver folleto
                  </button>

                  <div class="modal fade" id="folletoedan" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h2 class="modal-title fs-5" id="exampleModalLabel">EDAN i20</h2>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <iframe
                            data-src="https://www.valtek.cl/wp-content/uploads/2024/06/EDAN-i20-series-data-sheet.pdf"
                            style="width: 100%; height: 500px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                          <a href="https://www.valtek.cl/wp-content/uploads/2024/06/EDAN-i20-series-data-sheet.pdf"
                            class="btn btn-primary">Ver folleto</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--- END MODAL PDF ---->
                </div>
              </div>
              <iframe width="560" height="315" src="https://www.youtube.com/embed/XsNkx28pS8U?si=GiP-X1P1l7g658br"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Tables -->

    <!--- SECTION TABLA 1 --->
    <div class="position-relative mt-5">
      <div class="cinta-green">
        Programa Sala 1
      </div>
      <section class="table-b pt-4">
        <div class="container">
          <table class="table table-vertical-borders">
            <!--
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          ---->
            <tbody>
              <tr>
                <td>8:30 am</td>
                <td class="black-text-table">Recepción</td>
              </tr>
              <!--- ---->
              <tr>
                <td>9:00 am</td>
                <td>
                  <p class="green-text-table">Introducción</p>
                  <p class="black-text-table">Ricardo Schwartz - Gerente General de Valtek</p>
                </td>
              </tr>
              <!--- ---->
              <tr>
                <td>9:30 am</td>
                <td>
                  <p class="green-text-table">Cardiovascular risk stratification, a fundamental challenge for laboratory
                    medicine </p>
                  <p class="black-text-table">Segio Bernadini – Italia</p>
                </td>
              </tr>
              <!--- ---->
              <tr>
                <td>11:00 am</td>
                <td class="black-text-table">Break y demostración Point of care</td>
              </tr>
              <!--- ---->
              <tr>
                <td>11:30 am</td>
                <td>
                  <p class="green-text-table">Dislipemia del paciente diabético, abordaje desde el laboratorio.</p>
                  <p class="black-text-table">Gabriela Berg – Argentina </p>
                </td>
              </tr>
              <!--- ---->
              <tr>
                <td>12:40 am</td>
                <td class="black-text-table">
                  <p class="green-text-table">Lanzamiento y showroom de nuevas soluciones tecnológicas
                  </p>
                  <p class="black-text-table">Almuerzo</p>
                </td>
              </tr>
              <!--- ---->
              <tr>
                <td>14:30 pm</td>
                <td>
                  <p class="green-text-table">Utilidad de métodos diagnóstico para la identificación temprana de
                    mecanismos de resistencia en bacterias de impacto clínico.</p>
                  <p class="black-text-table">Alejandra Corso – Argentina</p>
                </td>
              </tr>
              <!--- ---->
              <tr>
                <td>16:00 pm</td>
                <td>
                  <p class="green-text-table">Leucemia mielomonocítica juvenil. Diagnóstico y fisiopatogenia molecular.
                  </p>
                  <p class="black-text-table">Joaquín Carrillo Farga – México</p>
                </td>
              </tr>
              <!--- ---->
              <tr>
                <td>18:00 pm</td>
                <td class="black-text-table">Cierre y cóctel</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <div style="height: 40px;"></div>

    <!--- SECTION TABLA 2 --->
    <div class="position-relative">
      <div class="cinta-green mt-5">
        Programa Sala 2
      </div>
      <section class="table-b pt-4">
        <div class="container">
          <table class="table table-vertical-borders">
            <!--
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          ---->
            <tbody>
              <tr>
                <td>14:30 pm</td>
                <td class="black-text-table">Recepción</td>
              </tr>
              <!--- ---->
              <tr>
                <td>14:45 pm</td>
                <td>
                  <p class="green-text-table">Introducción</p>
                  <p class="black-text-table">Ricardo Schwartz - Gerente General de Valtek</p>
                </td>
              </tr>
              <!--- ---->
              <tr>
                <td>15:00 pm</td>
                <td>
                  <p class="green-text-table">Inteligência Artificial aplicada a Testes Point of Care. </p>
                  <p class="black-text-table">Bernardo de Almeida - Brasil</p>
                  <span style="font-style: italic; font-weight: 400!important;">*Traducción simultánea disponible de
                    portugués a español disponible</span>
                </td>
              </tr>
              <!--- ---->
              <tr>
                <td>16:00 pm</td>
                <td class="black-text-table">
                  <p class="green-text-table">Lanzamiento software de soluciones médicas: GestaoWeb. Gestión de
                    pacientes
                    en tratamiento anticoagulante oral.</p>
                  <p class="black-text-table">Diego Fuentes - Chile</p>
                </td>
              </tr>
              <!--- ---->
              <tr>
                <td>18:00 pm</td>
                <td class="black-text-table">Cierre y cóctel</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>


    <!--- Texto descriptivo --->
    <section class="mt-5 mb-5" id="form-curso">
      <div class="container pt-3 mt-5">
        <div class="text-center">
          <p>
            Sigue a Valtek en LinkedIn para mantenerte actualizado sobre las últimas noticias y eventos.
          </p>
          <a class="linkedin-btn" href="https://cl.linkedin.com/company/valtek-diagnostics">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
              <path fill="#0288D1"
                d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z" />
              <path fill="#FFF"
                d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <section class="d-none justify-content-center align-items-center pt-5 pb-5 mb-3">
      <a class="btn-form" href="#form-curso">
        Inscríbete hoy
      </a>
    </section>
  </main>

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- FOOTER WORDPRESS -->
  <?php //wp_footer(); ?>
</body>

</html>
