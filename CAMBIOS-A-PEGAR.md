////////////////////////////// head ///////////////////////////////////////
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TODO: rellenar esto -->
  <meta name="author" contant="..." />
  <meta name="description" contant="..." />
  <title>Pagina prinicpal</title>
  <link rel="stylesheet" href="./res/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>


////////////////////////////// header ///////////////////////////////////////
  <header class="d-flex justify-content-between">
    <nav class="navbar navbar-expand-xl d-flex flex-row pb-0">
      <!-- Logo de la izquierda -->
      <div class="contenedor1 me-5 d-flex align-items-center gap-3 flex-row">
        <div class="d-flex flex-row flex align-items-center gap-3 ms-4">
          <img src="./res/img/logos/logoleon.png" alt="Mini Logo" class="logo-nav">
          <a class="navbar-brand" href="./index-bootstrap.html">IES Augusto Cup</a>
        </div>

        <!-- Boton del desplegable -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="container-fluid mt-2 pb-1">
        <!-- Enlace de la pagina principal -->

        <!-- Inicio de los elementos del menu -->
        <div class="collapse navbar-collapse ms-3" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link activo" aria-current="page" href="#">Inicio</a>
            </li>

            <!-- Lista de equipos -->
            <li class="nav-item">
              <a class="nav-link activo" aria-current="page" href="#">Equipos</a>
            </li>

            <!-- Lista de Organizacion -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Organizacion
              </a>
              <!-- Elementos del sub menu -->
              <ul class="dropdown-menu  bg-dark">
                <li><a class="dropdown-item" href="res/views/organizacion/comisionorganizacion.html">Comisión de
                    organización</a></li>
                <li><a class="dropdown-item" href="res/views/organizacion/retos.html">Retos</a></li>

              </ul>
            </li>
            <!-- Lista de Torneo -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-auto-close="outside"
                data-bs-toggle="dropdown" aria-expanded="false">Torneo
              </a>
              <!-- Elementos del sub menu -->
              <ul class="dropdown-menu  bg-dark">
                <li><a class="dropdown-item" href="res/views/torneo/torneosolidario.html">Torneo solidario</a></li>

                <li class="dropstart">
                  <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Torneo deportivo</a>
                  <ul class="dropdown-menu  bg-dark">
                    <li><a class="dropdown-item"
                        href="res/views/torneo/torneo-deportivo/sistemacompeticion.html">Sistema de competición</a></li>
                    <li><a class="dropdown-item"
                        href="res/views/torneo/torneo-deportivo/clasificacion.html">Clasificación</a></li>
                    <li><a class="dropdown-item" href="res/views/torneo/torneo-deportivo/resultados.html">Resultados</a>
                    </li>
                    <li><a class="dropdown-item" href="res/views/torneo/torneo-deportivo/galeriaImg.html">Galería</a>
                    </li>
                  </ul>
                </li>
                <!-- Lista de Objetivos-->
                <!-- Elementos del sub menu -->
              </ul>
            </li>
            <!-- Lista de Organizacion -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Objetivos
              </a>
              <!-- Elementos del sub menu -->
              <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item" href="res/views/objetivos/objetivosGenerales.html">Generales</a></li>
                <li><a class="dropdown-item" href="#">ODS</a></li>

                <!-- Agregar equipos a conveniencia -->
              </ul>
            </li>
            <!--!  -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-auto-close="outside"
                data-bs-toggle="dropdown" aria-expanded="false">Colaboraciones
              </a>
              <!-- Elementos del sub menu -->
              <ul class="dropdown-menu  bg-dark">
                <li class="dropstart">
                  <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Apoyos al proyecto</a>
                  <ul class="dropdown-menu  bg-dark">
                    <li><a class="dropdown-item" href="res/views/colaboraciones/apoyos/apoyos_IESPeñacastillo.html">IES
                        Peñacastillo</a></li>
                    <li><a class="dropdown-item" href="res/views/colaboraciones/apoyos/apoyos_IESAGL.html">IES AGL</a>
                    </li>
                    <li><a class="dropdown-item" href="res/views/colaboraciones/apoyos/apoyos_asociacionNV.html">Nueva
                        Vida</a></li>
                  </ul>
                </li>
                <li class="dropstart">
                  <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Patrocinadores</a>
                  <ul class="dropdown-menu  bg-dark">
                    <li><a class="dropdown-item"
                        href="res/views/colaboraciones/patrocinadores/cantabriaInformatica.html">Cantabria
                        Informatica</a></li>
                    <li><a class="dropdown-item" href="res/views/colaboraciones/patrocinadores/cic.html">CIC</a></li>
                    <li><a class="dropdown-item" href="res/views/colaboraciones/patrocinadores/deode.html">DEODE</a>
                    </li>
                    <li><a class="dropdown-item"
                        href="res/views/colaboraciones/patrocinadores/fondoseuropeos.html">Fondos Europeos</a></li>
                    <li><a class="dropdown-item"
                        href="res/views/colaboraciones/patrocinadores/infortec.html">Infortec</a></li>
                    <li><a class="dropdown-item" href="#">Ministerio</a></li>
                    <li><a class="dropdown-item" href="res/views/colaboraciones/apoyos/apoyos_asociacionNV.html">Nueva
                        Vida</a></li>
                    <li><a class="dropdown-item" href="res/views/colaboraciones/patrocinadores/seidor.html">Seidor</a>
                    </li>
                    <li><a class="dropdown-item" href="res/views/colaboraciones/patrocinadores/siali.html">Siali</a>
                    </li>


                    <li><a class="dropdown-item" href="res/views/colaboraciones/patrocinadores/soincon.html">SOINCON</a>
                    </li>
                  </ul>
                </li>
                <!-- Lista de Objetivos-->
                <!-- Elementos del sub menu -->
              </ul>
            </li>
            <!--!  -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Contacto
              </a>
              <!-- Elementos del sub menu -->
              <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item" href="res/views/contacto/ubicacion.html">Ubicación</a></li>
                <li><a class="dropdown-item" href="res/views/contacto/formulario.html">Formulario de contacto</a></li>
                <li><a class="dropdown-item" href="res/views/contacto/donaciones.html">Donación</a></li>

                <!-- Agregar equipos a conveniencia -->
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="res/views/f&q.html">F&Q</a>
            </li>

          </ul>

          <!-- Redes  -->
          <div class=" redes align-self-center">
            <a href="https://www.instagram.com/ies_augusto_cup/" class="me-4"><img src="./res/img/iconos/instagram.png"
                alt="Instagram" class="iconos-redes"></a>
          </div>

        </div>

      </div>
    </nav>

  </header>

////////////////////////////// footer ///////////////////////////////////////
<footer class="d-flex flex-column pt-3">
    <div class="d-flex flex-column justify-content-around pb-4 gap-3">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <p>Patrocinadores</p>
        <!-- Agregar colaboradores a conveniencia -->
        <div class="d-flex flex-column patrocinadores2 gap-3">
          <div class="d-flex flex-row gap-5 justify-content-center">
            <!-- TODO: cambiar ruta -->
            <a href="#"><img src="../../img/logos/Logo_Deode.png" alt="Deode"></a>
            <!-- TODO: cambiar ruta -->
            <a href="#"><img src="../../img/logos/LOGO_COLOR_Seidor.png" alt="Seidor"></a>
            <!-- TODO: cambiar ruta -->
            <a href="#"><img src="../../img/logos/cit.png" alt="Cit"></a>
            <!-- TODO: cambiar ruta -->
            <a href="#"><img src="../../img/logos/Infortec.png" alt="Infortec"></a>
          </div>
          <div class="d-flex flex-row gap-5 justify-content-center">
            <a href="#"><img class="siali" src="../../img/logos/Siali_tech.png" alt="Siali"></a>
            <a href="#"><img src="../../img/logos/Soincon.png" alt="Soincon"></a>
            <a
              href="https://www.hacienda.gob.es/es-ES/Areas%20Tematicas/Fondos%20de%20la%20Union%20Europea/Paginas/default.aspx"><img
                src="../../img/logos/fondos-europeos.png" alt="Fondos Europeos"></a>
            <a href="#"><img src="../../img/logos/Nueva Vida.png" alt="Nueva Vida"></a>
          </div>
        </div>
      </div>
      <!-- lo otro -->
      <div class=" text-center">
        <p>Apoyos al Proyecto</p>
        <div class="d-flex flex-row gap-5 apoyos justify-content-center">
          <a href="https://www.cantabria.es/"><img class="img-apoyo" src="../../img/logos/Gobierno_de_Cantabria.png"
              alt="Gobierno de Cantabria"></a>
          <a href="https://www.educacionyfp.gob.es/portada.html"><img class="img-apoyo"
              src="../../img/logos/Ministerio de Educación y Formación Profesional.png"
              alt="Ministerio de Educación y Formación Profesional"></a>
          <a href="#"><img class="img-apoyo" src="../../img/logos/IES_AUG.png" alt="IES AUG"></a>
        </div>
      </div>
    </div>


    <!-- RSS -->
    <div class="row text-center cosas">
      <p>2023 IES AUG - retoaglcup@gmail.com - <a href="#">Aviso Legal</a> - <a
          href="http://localhost/Cup2024/reto-cup2024/noticia_torneo.xml"><img
            src="../../img/logos/valid-rss-rogers.png" alt="[Valid RSS]" title="Validate my RSS feed" /></a></p>
    </div>
  </footer>