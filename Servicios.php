<html>


<head>
  <meta charset="utf-8">
  <title>Servicios</title>
  <link rel="shortcut icon" href="Imagenes/Logo.png"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/Estilos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="css/Animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/js.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.toggle').click(function(){
        $('ul').toggleClass('active');
      })
    })
  </script>
</head>



  <body>




    <!-- ++++++++++++++ PRIMERA PARTE ++++++++++++++++++++++++++++ -->





    <div class="fondoservi1">


      <!-- MENU -->
        <header>
          <a class="toggle"><i class="fas fa-bars"></i> Menu</a>
          <ul class="active">
            <li><a type="btn" href="index.php" >Inicio</a></li>
          <li><a href="Nosotros.php">Nosotros</a></li>
          <li><a href="Galeria.php">Galeria</a></li>
          <li><a href="Servicios.php">Servicios</a></li>
          <li><a href="Contactenos.php">Contactanos</a></li>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Idioma  <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="text-center"><a href="land.php?idk4=es" style="color: black">Español</a></li>
              <li class="text-center"><a href="land.php?idk4=in" style="color: white">Ingles</a></li>  
            </ulblack          </li>
          </ul>
        </header>



      <!-- TITULOS -->
      <div class="col-lg-12 text-center">

        <a name="Servicios"></a>
        <!-- Titulo -->
        <h2 class="titulo1 visible-lg">Servicios e instalaciones</h2>
        <h2 class="titulo2 hidden-lg">Servicios e instalaciones</h2>
        <!-- subtitulo -->
        <div class="col-lg-4"></div>
        <div class="col-lg-4"><h4 class="subtitulo1 visible-lg">Te ofrecemos una amplia gama de servicios</h4></div>
        <div class="col-lg-4"></div>

      </div>



      <!-- SLIDER SERVICIOS -->
      <div class="col-lg-12">
        <div class="row">

        <!-- LATERAL 1 -->
        <div class="col-lg-2"></div>

        <!-- CENTRAL -->
        <div class="col-lg-8" style="padding-top: 4%; padding-bottom: 4%">


            <div class="col-lg-12">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- FOTOS -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="Imagenes/Galeria16.jpg" alt="...">
                    <div class="carousel-caption" style="background: rgba(75,54,33,.7);width: 100%; left: 0">
                      <p style="font-size: 35px;"><strong>Piscina</strong></p>
                      <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#INST1" style="background: #91c470;" href="#" role="button"><strong>Detalles</strong></a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="Imagenes/Galeria5.jpg" alt="...">
                    <div class="carousel-caption" style="background: rgba(75,54,33,.7);width: 100%; left: 0">
                      <p style="font-size: 35px;"><strong>Cabañas</strong></p>
                      <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#INST2" style="background: #91c470;" href="#" role="button"><strong>Detalles</strong></a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="Imagenes/Galeria17.jpg" alt="...">
                    <div class="carousel-caption" style="background: rgba(75,54,33,.7);width: 100%; left: 0">
                      <p style="font-size: 35px;"><strong>Muebles</strong></p>
                      <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#INST3" style="background: #91c470;" href="#" role="button"><strong>Detalles</strong></a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="Imagenes/Galeria9.jpg" alt="...">
                    <div class="carousel-caption" style="background: rgba(75,54,33,.7);width: 100%; left: 0">
                      <p style="font-size: 35px;"><strong>Lago</strong></p>
                      <a class="btn btn-default btn-lg" data-toggle="modal" data-target="#INST4" style="background: #91c470;" href="#" role="button"><strong>Detalles</strong></a>
                    </div>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>  
            </div>

        </div>

        <!-- LATERAL 2 -->
        <div class="col-lg-2"></div>

        </div>
      </div>


    </div>








    <!-- ++++++++++++++ SEGUNDA PARTE ++++++++++++++++++++++++++++ -->






    <div class="fondoservi2">
      <div class="row">


      <!-- TITULOS -->
      <div class="col-lg-12 text-center">
        <a name="Exp"></a>
        <!-- Titulo -->
        <h2 class="titulo1 visible-lg">Experiencias</h2>
        <h2 class="titulo2 hidden-lg">Experiencias</h2>
        <!-- subtitulo -->
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <h4 class="subtitulo1 visible-lg">Experiencias que podrás vivir en nuestras instalaciones</h4>
        </div>
        <div class="col-lg-4"></div>

      </div>




      <!-- CONTENIDO -->
      <div class="col-lg-12 text-center" style="padding-top: 20px;">

        <!-- EXPERIENCIA 1 -->
        <div class="col-xs-6 col-md-6 col-lg-3">
          <div class="jumbotron expServicios1">
            <img class="hidden-lg" src="Imagenes/Familia.png">
            <div class="" style=";background: rgba(75,54,33,.9); color: #fff">
            <h2><b>Experiencia</b></h2>
            <h2><b>Familiar</b></h2>
            </div>
            <p><a class="btn btn-lg btnExp" data-toggle="modal" data-target="#Expe1" href="#" role="button"><strong>Ver</strong></a></p>
          </div>
        </div>

        <!-- EXPERIENCIA 2 -->
        <div class="col-xs-6 col-md-6 col-lg-3">
          <div class="col-lg-12"></div>
          <div class="jumbotron expServicios2">
            <img class="hidden-lg" src="Imagenes/Gastronomia.png">
            <div class="" style="background: rgba(75,54,33,.9);color: #fff">
            <h2><b>Experiencia</b></h2>
            <h2><b>Gastronómica</b></h2>
            </div>
            <p><a class="btn btn-lg btnExp" data-toggle="modal" data-target="#Expe2" href="#" role="button"><strong>Ver</strong></a></p>
          </div>
        </div>

        <!-- EXPERIENCIA 3 -->
        <div class="col-xs-6 col-md-6 col-lg-3">
          <div class="jumbotron expServicios3">
            <img class="hidden-lg" src="Imagenes/Romantica.png">
            <div class="" style="background: rgba(75,54,33,.9); color: #fff">
            <h2><b>Experiencia</b></h2>
            <h2><b>Romántica</b></h2>
            </div>
            <p><a class="btn btn-lg btnExp" data-toggle="modal" data-target="#Expe3" href="#" role="button"><strong>Ver</strong></a></p>
          </div>  
        </div>


        <!-- EXPERIENCIA 4 -->
        <div class="col-xs-6 col-md-6 col-lg-3">
         <div class="jumbotron expServicios4">
            <img class="hidden-lg" src="Imagenes/Aventura.png">
            <div class="" style="background: rgba(75,54,33,.9); color: #fff">
            <h2><b>Experiencia</b></h2>
            <h2><b>Aventura</b></h2>
            </div>
            <p><a class="btn btn-lg btnExp" data-toggle="modal" data-target="#Expe4" href="#" role="button"><strong>Ver</strong></a></p>
          </div>
        </div>


      </div>


    </div>








    <!-- ++++++++++++++ CABECERA ++++++++++++++++++++++++++++ -->




    <div class="Madera2">

      <div class="cabecera">
        <div class="row">

          <div class="col-lg-12" style="padding: 5%; text-align: center;">

            <!-- LOGO GRANDE -->
            <div class="col-lg-4 visible-lg">

               <div class="thumbnail" style="background: transparent;border: 0px">
                  <img src="Imagenes/Logo.png">
                  <div class="caption">
                    <p style="font-family: 'Nunito', sans-serif; color: #fff; font-size: 15px">Hacienda Ecoturistica salto del pomeca. Realiza la ventura de tu vida en las mejores instalaciones, preparadas solo para ti.</p>
                  </div>
               </div>

            </div>

            <!-- DATOS CONTACTO -->
            <div class="col-xs-6 col-md-6 col-lg-4">

                  <table class="table" style="font-size: 20px; color: #fff">
                    <!-- Titulo -->
                    <thead>
                      <tr>
                        <th style="text-align: center;font-family: 'Roboto Condensed', sans-serif;">Datos Contacto</th>
                      </tr>
                    </thead>

                    <!-- Contenido -->
                    <tbody>
                        <tr>
                          <!-- Correo -->
                          <td style="font-family: 'Nunito', sans-serif; text-align: center;">
                          <i class="far fa-envelope"></i> Correo: Haciedno@correo.com</td>
                        </tr>
                        <tr>
                          <!-- Telefono -->
                          <td style="font-family: 'Nunito', sans-serif; text-align: center;">
                          <i class="fas fa-phone-square"></i> Teléfono: 7632373</td>
                        </tr>
                        <tr>
                          <!-- Celular -->
                          <td style="font-family: 'Nunito', sans-serif; text-align: center;">
                          <i class="fas fa-mobile-alt"></i> Celular: 3214560987</td>
                        </tr>
                        <tr>
                          <!-- Ubicacion -->
                          <td style="font-family: 'Nunito', sans-serif; text-align: center;">
                          <i class="fas fa-map-marker-alt"></i> Ubicación: Togui - Boyaca</td>
                        </tr>
                    </tbody>
                  </table>

            </div>

            <!-- PAGINAS A VISITAR -->
            <div class="col-xs-6 col-md-6 col-lg-4">

              <table class="table" style="font-size: 20px; color: #fff">

                <!-- Titulo -->
                <thead>
                  <tr>
                    <th style="text-align: center;font-family: 'Roboto Condensed', sans-serif;">Conocenos</th>
                  </tr>
                </thead>

                <!-- Contenido -->
                <tbody>
                    <tr>
                      <!-- Nosostros -->
                      <td style="text-align: center;"><a href="Nosotros.php" style="font-family: 'Nunito', sans-serif; color: #fff">Sobre nosotros
                      <i class="fas fa-mouse-pointer"></i></a></td>
                    </tr>
                    <tr>
                      <!-- Galeria -->
                      <td style="text-align: center;"><a href="Galeria.php" style="font-family: 'Nunito', sans-serif; color: #fff">Galería
                      <i class="fas fa-mouse-pointer"></i></a></td>
                    </tr>
                    <tr>
                      <!-- Servicios -->
                      <td style="text-align: center;"><a href="Servicios.php" style="font-family: 'Nunito', sans-serif; color: #fff">Servicios
                      <i class="fas fa-mouse-pointer"></i></a></td>
                    </tr>
                    <tr>
                      <!-- Contactenos -->
                      <td style="text-align: center;"><a href="Contactenos.php" style="font-family: 'Nunito', sans-serif; color: #fff">Contactenos
                      <i class="fas fa-mouse-pointer"></i></a></td>
                    </tr>
                </tbody>

              </table>
            </div>

            <!-- LOGO PEQUEÑO -->
            <div class="col-xs-12 col-md-12 col-lg-4 hidden-lg">

               <div class="thumbnail" style="background: transparent;border: 0px">
                  <img src="Imagenes/Logo.png">
               </div>

            </div>


          </div>

        </div>

      </div>

    </div>








    <!-- ++++++++++++++ FIN DE PAGINA +++++++++++++++++++++++++++++++++++ -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->











  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
  <!-- +++++++++++++++     MODALES  INSTALACIONES +++++++++++++++++++++++ -->
  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->




    <!-- ++++++++++++++ MODAL PISCINA ++++++++++++++++++++++++++++ --> 




  <div class="modal fade" id="INST1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(25,25,25,.9);">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title text-center" id="myModalLabel" style="color: #fff; font-size: 40px; font-family: font-family: 'Roboto Condensed', sans-serif;"><strong>Piscina</strong></h4>
        </div>
        <div class="modal-body text-center">
          <img src="Imagenes/Galeria16.jpg" class="img-responsive" alt="Responsive image">  
          <h3 style="color: white"><strong>Descripcion</strong></h3>
          <p style="color: white">es simplemente un texto de relleno de la industria de impresión y tipografía. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la década de 1500, cuando una impresora desconocida tomó </p>

        </div>
        <div class="modal-footer" style="text-align: center;">
          <div class="col-lg-12" style="text-align: center;">

          </div>
          <button type="button" class="btn" data-dismiss="modal" style="background-color: #4c7338ff; color: white">Cerrar</button>
        </div>
      </div>
    </div>
  </div>




    <!-- ++++++++++++++ MODAL CABAÑA ++++++++++++++++++++++++++++ --> 




  <div class="modal fade" id="INST2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(25,25,25,.9);">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title text-center" id="myModalLabel" style="color: #fff; font-size: 40px; font-family: font-family: 'Roboto Condensed', sans-serif;"><strong>Cabañas</strong></h4>
        </div>
        <div class="modal-body text-center">
          <img src="Imagenes/Galeria5.jpg" class="img-responsive" alt="Responsive image">  
          <h3 style="color: white"><strong>Descripcion</strong></h3>
          <p style="color: white">es simplemente un texto de relleno de la industria de impresión y tipografía. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la década de 1500, cuando una impresora desconocida tomó </p>

        </div>
        <div class="modal-footer" style="text-align: center;">
          <div class="col-lg-12" style="text-align: center;">

          </div>
          <button type="button" class="btn" data-dismiss="modal" style="background-color: #4c7338ff; color: white">Cerrar</button>
        </div>
      </div>
    </div>
  </div>






    <!-- ++++++++++++++ MODAL MUEBLES ++++++++++++++++++++++++++++ --> 




  <div class="modal fade" id="INST3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(25,25,25,.9);">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title text-center" id="myModalLabel" style="color: #fff; font-size: 40px; font-family: font-family: 'Roboto Condensed', sans-serif;"><strong>Muebles</strong></h4>
        </div>
        <div class="modal-body text-center">
          <img src="Imagenes/Galeria17.jpg" class="img-responsive" alt="Responsive image">  
          <h3 style="color: white"><strong>Descripcion</strong></h3>
          <p style="color: white">es simplemente un texto de relleno de la industria de impresión y tipografía. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la década de 1500, cuando una impresora desconocida tomó </p>

        </div>
        <div class="modal-footer" style="text-align: center;">
          <div class="col-lg-12" style="text-align: center;">

          </div>
          <button type="button" class="btn" data-dismiss="modal" style="background-color: #4c7338ff; color: white">Cerrar</button>
        </div>
      </div>
    </div>
  </div>




     <!-- ++++++++++++++ MODAL LAGO ++++++++++++++++++++++++++++ --> 




  <div class="modal fade" id="INST4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(25,25,25,.9);">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title text-center" id="myModalLabel" style="color: #fff; font-size: 40px; font-family: font-family: 'Roboto Condensed', sans-serif;"><strong>LAGO</strong></h4>
        </div>
        <div class="modal-body text-center">
          <img src="Imagenes/Galeria9.jpg" class="img-responsive" alt="Responsive image">  
          <h3 style="color: white"><strong>Descripcion</strong></h3>
          <p style="color: white">es simplemente un texto de relleno de la industria de impresión y tipografía. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la década de 1500, cuando una impresora desconocida tomó </p>

        </div>
        <div class="modal-footer" style="text-align: center;">
          <div class="col-lg-12" style="text-align: center;">

          </div>
          <button type="button" class="btn" data-dismiss="modal" style="background-color: #4c7338ff; color: white">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
































  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
  <!-- +++++++++++++++     MODALES  EXPERIENCIA +++++++++++++++++++++++ -->
  <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->






  <!-- ++++++++++++++ MODAL 1 ++++++++++++++++++++++++++++ --> 




  <div class="modal fade" id="Expe1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(25,25,25,.8);">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title text-center" id="myModalLabel" style="color: #fff; font-size: 40px; font-family: font-family: 'Roboto Condensed', sans-serif;"><strong>Experiencia Familiar</strong></h4>
        </div>
        <div class="modal-body text-center">
          <div id="Expea" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="Imagenes/ExFamiliar.jpg" alt="...">
              </div>
              <div class="item">
                <img src="Imagenes/ExFamiliarA.jpg" alt="...">
              </div>
              <div class="item">
                <img src="Imagenes/ExFamiliarB.jpg" alt="...">
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#Expea" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#Expea" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span></a>
          </div>

          <h3 style="color: white"><strong>Descripcion</strong></h3>
          <p style="color: white">es simplemente un texto de relleno de la industria de impresión y tipografía. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la década de 1500, cuando una impresora desconocida tomó </p>

        </div>
        <div class="modal-footer" style="text-align: center;">
          <div class="col-lg-12" style="text-align: center;">

          </div>
          <button type="button" class="btn" data-dismiss="modal" style="background-color: #4c7338ff; color: white">Cerrar</button>
        </div>
      </div>
    </div>
  </div>




  <!-- ++++++++++++++ MODAL 2 ++++++++++++++++++++++++++++ --> 





  <div class="modal fade" id="Expe2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(25,25,25,.8);">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title text-center" id="myModalLabel" style="color: #fff; font-size: 40px; font-family: font-family: 'Roboto Condensed', sans-serif;"><strong>Experiencia Gastronomica</strong></h4>
        </div>
        <div class="modal-body text-center">
          <div id="Expeb" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="Imagenes/ExGastronomica.jpg" alt="...">
              </div>
              <div class="item">
                <img src="Imagenes/ExGastronomicaA.jpg" alt="...">
              </div>
              <div class="item">
                <img src="Imagenes/ExGastronomicaB.jpg" alt="...">
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#Expeb" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#Expeb" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span></a>
          </div>

          <h3 style="color: white"><strong>Descripcion</strong></h3>
          <p style="color: white">es simplemente un texto de relleno de la industria de impresión y tipografía. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la década de 1500, cuando una impresora desconocida tomó </p>

        </div>
        <div class="modal-footer" style="text-align: center;">
          <div class="col-lg-12" style="text-align: center;">

          </div>
          <button type="button" class="btn" data-dismiss="modal" style="background-color: #4c7338ff; color: white">Cerrar</button>
        </div>
      </div>
    </div>
  </div>





  <!-- ++++++++++++++ MODAL 3 ++++++++++++++++++++++++++++ --> 





  <div class="modal fade" id="Expe3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(25,25,25,.8);">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title text-center" id="myModalLabel" style="color: #fff; font-size: 40px; font-family: font-family: 'Roboto Condensed', sans-serif;"><strong>Experiencia Romántica</strong></h4>
        </div>
        <div class="modal-body text-center">
          <div id="Expec" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="Imagenes/ExRomantica.jpg" alt="...">
              </div>
              <div class="item">
                <img src="Imagenes/ExRomanticaA.jpg" alt="...">
              </div>
              <div class="item">
                <img src="Imagenes/ExRomanticaB.jpg" alt="...">
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#Expec" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#Expec" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span></a>
          </div>

          <h3 style="color: white"><strong>Descripcion</strong></h3>
          <p style="color: white">es simplemente un texto de relleno de la industria de impresión y tipografía. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la década de 1500, cuando una impresora desconocida tomó </p>

        </div>
        <div class="modal-footer" style="text-align: center;">
          <div class="col-lg-12" style="text-align: center;">

          </div>
          <button type="button" class="btn" data-dismiss="modal" style="background-color: #4c7338ff; color: white">Cerrar</button>
        </div>
      </div>
    </div>
  </div>





  <!-- ++++++++++++++ MODAL 4 ++++++++++++++++++++++++++++ --> 






  <div class="modal fade" id="Expe4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
      <div class="modal-content" style="background: rgba(25,25,25,.8);">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title text-center" id="myModalLabel" style="color: #fff; font-size: 40px; font-family: font-family: 'Roboto Condensed', sans-serif;"><strong>Experiencia Aventura</strong></h4>
        </div>
        <div class="modal-body text-center">
          <div id="Exped" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="Imagenes/ExAventura.jpg" alt="...">
              </div>
              <div class="item">
                <img src="Imagenes/ExAventuraA.jpg" alt="...">
              </div>
              <div class="item">
                <img src="Imagenes/ExAventuraB.jpg" alt="...">
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#Exped" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#Exped" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span></a>
          </div>

          <h3 style="color: white"><strong>Descripcion</strong></h3>
          <p style="color: white">es simplemente un texto de relleno de la industria de impresión y tipografía. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde la década de 1500, cuando una impresora desconocida tomó </p>

        </div>
        <div class="modal-footer" style="text-align: center;">
          <div class="col-lg-12" style="text-align: center;">

          </div>
          <button type="button" class="btn" data-dismiss="modal" style="background-color: #4c7338ff; color: white">Cerrar</button>
        </div>
      </div>
    </div>
  </div>










  </body>
</html>
