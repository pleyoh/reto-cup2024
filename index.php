<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina prinicpal</title>
  <!-- TODO: rellenar esto -->
  <meta name="author" contant="Andrii Sherbakov, ..." />
  <meta name="description" contant="..." />
  <!-- icon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- css links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./res/css/style.css">
</head>

<body>
  <?php
  include './res/components/header.php';
  ?>

  <main>

    <div class="container portada">
      <div class="negrura">
        <h1><strong><span style="text-wrap: nowrap;">Torneo Solidario</span><br><span style="text-wrap: nowrap;">IES
              Augusto CUP</span></strong></h1>
        <a href="#"><button class="btn btn-ong"><strong>ONG</strong></button></a>
      </div>
      <div class="patrocinadores1">
        <a href="https://www.cantabria.es/"><img src="./res/img/logos/Gobierno_de_Cantabria.png" alt="Gobierno de Cantabria"></a>
        <a href="https://www.educacionyfp.gob.es/portada.html"><img src="./res/img/logos/Ministerio de Educación y Formación Profesional.png" alt="Ministerio de Educación y Formación Profesional"></a>
        <a href="https://www.hacienda.gob.es/es-ES/Areas%20Tematicas/Fondos%20de%20la%20Union%20Europea/Paginas/default.aspx"><img src="./res/img/logos/Fondos Europeos.png" alt="Fondos Europeos"></a>

        <a href="#"><img src="./res/img/logos/Nueva Vida.png" alt="Nueva Vida"></a>
        <a href="#"><img src="./res/img/logos/IES_AUG.png" alt="IES AUG"></a>
        <a href="#"><img src="./res/img/logos/Logo_Deode.png" alt="Fondos Europeos"></a>
        <a href="#"><img src="./res/img/logos/LOGO_COLOR_Seidor.png" alt="Seidor"></a>
        <a href="#"><img src="./res/img/logos/cit.png" alt="Seidor"></a>
        <a href="#"><img src="./res/img/logos/Infortec.png" alt="Infortec"></a>
        <a href="#"><img class="siali" src="./res/img/logos/Siali_tech.png" alt="Siali"></a>
        <a href="#"><img src="./res/img/logos/Soincon.png" alt="Soincon"></a>
      </div>
    </div>

    <!-- Deslizador de imagenes -->
    <div id="carouselExampleIndicators" class="carousel slide">
      <h1>Noticias</h1>
      <div class="carousel-indicators">
        <!-- Agregar un boton nuevo por cada imagen nueva, aumentar los contadores de 'data-bs-slide-to' y 'aria-label' -->
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <!-- Imagen inicial -->
        <div class="carousel-item active">
          <img src="./res/img/_DSF2489.jpg" class="d-block w-100" alt="Imagen1">
        </div>
        <!-- Agregar las imagenes que hagan falta copiando este div y modificando el src del img -->
        <div class="carousel-item">
          <img src="./res/img/_DSF3080.jpg" class="d-block w-100" alt="Imagen2">
        </div>
        <div class="carousel-item">
          <img src="./res/img/_DSF2891.jpg" class="d-block w-100" alt="Imagen3">
        </div>
        <div class="carousel-item">
          <img src="./res/img/_DSF2718.jpg" class="d-block w-100" alt="Imagen4">
        </div>
        <div class="carousel-item">
          <img src="./res/img/_MG_2911.jpg" class="d-block w-100" alt="Imagen5">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </main>

  <?php
  include './res/components/footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>


</html>