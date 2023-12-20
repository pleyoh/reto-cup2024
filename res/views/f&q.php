<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preguntas Recurrentes</title>
  <link rel="stylesheet" href="./res/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <?php
  include './res/components/header.php';
  ?>

  <main class="container mt-4">
    <h2 class="text-center mb-4">Preguntas Recurrentes</h2>

    <!-- Tarjeta 1 -->
    <div class="card mb-3">
      <div class="card-header bg-primary text-white" id="pregunta1">
        <h4 class="mb-0">
          <button class="btn btn-link text-decoration-none text-white" data-bs-toggle="collapse"
            data-bs-target="#respuesta1" aria-expanded="true" aria-controls="respuesta1">
            ¿Cuándo se celebra el torneo?
          </button>
        </h4>
      </div>

      <div id="respuesta1" class="collapse show" aria-labelledby="pregunta1">
        <div class="card-body">
          Se celebra el jueves 14 y el viernes 15 de marzo en el horario de mañana y tarde.
        </div>
      </div>
    </div>

    <!-- Tarjeta 2 (replica este bloque para más preguntas) -->
    <div class="card mb-3">
      <div class="card-header bg-primary text-white" id="pregunta2">
        <h4 class="mb-0">
          <button class="btn btn-link text-decoration-none text-white collapsed" data-bs-toggle="collapse"
            data-bs-target="#respuesta2" aria-expanded="false" aria-controls="respuesta2">
            ¿Cuándo se entregan los premios del torneo?
          </button>
        </h4>
      </div>

      <div>
        <h4> ¿Dónde podré depositar la comida que pueda donar? </h4>
        <p> Si quiere donar comida puede enviar un correo al correo <b>info@iesaugustocup.es </b>para solicitar más
          información, y si no puede ir al pabellón del instituto donde habrá cajas donde pueda depositar la comida que
          esté dispuesto a donar. </p>
      </div>

      <div>
        <h4>¿Dónde irán a parar todos los fondos que se recaudarán durante el torneo? </h4>
        <p> Irán destinadas a familias o a personas que lo necesiten con urgencia, como puede ser familias ucranianas
          que se vieron obligadas a venir a España.</p>
      </div>

      <div>
        <h4> ¿Quién repartirá todos los kilos de comida recaudados? </h4>
        <p>Los kilos recaudados lo repartirían las ONGS que participen en el torneo.</p>
      </div>

      <div>
        <h4> ¿Dónde puedo ver los partidos si no he podido verlos en directo? </h4>
        <p>En nuestra red social Twitch puede ver todos los partidos que se han jugado en esta segunda versión de la IES
          Augusto Cup.
        </p>
      </div>

      <div>
        <h4>¿Dónde se va a celebrar el torneo? </h4>
        <p>Se celebrará en las pistas deportivas del instituto IES Augusto González de Linares. </p>
      </div>

      <!-- Están todas las f&q-->

    </div>

    <!-- Agregar más tarjetas según sea necesario -->

  </main>

  <?php
  include './res/components/footer.php';
  ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>