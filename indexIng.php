<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="shortcut icon" href="Imagenes/Logop.png"/>
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

  <!-- ++++++++++++++ Primera Parte ++++++++++++++++++++++++++++ -->


	<div class="fondo1">

    
		 <!-- Menu -->
    <header>
        <a class="toggle"><i class="fas fa-bars"></i> Menu</a>
        <ul class="active">
          <li><a type="btn" href="indexIng.php" >Home</a></li>
          <li><a href="NosotrosIng.php">About</a></li>
          <li><a href="GaleriaIng.php">Gallery</a></li>
          <li><a href="ServiciosIng.php">Services</a></li>
          <li><a href="ContactenosIng.php">Contact</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Language  <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="text-center"><a href="land.php?idk=es" style="color: black">Español</a></li>
              <li class="text-center"><a href="land.php?idk=in" style="color: black">Ingles</a></li>
            </ul>
          </li>
        </ul>
        
    </header>

    <!-- Logo Movil -->
    <div class="col-lg-12 hidden-lg" style="padding: 5% 0% 0 25%">
     <img src="Imagenes/Logope.png">
    </div>


    <!-- Logo Escritorio -->
    <div class="col-lg-12 visible-lg">
        <div class="col-md-12 col-lg-3"></div>
        <div class="col-md-12 col-lg-6" style="padding-top: 1%">
          <div class="jumbotron text-center cuadroprin">
            <img src="Imagenes/Logo2.png">
            <div class="caption">
            <h3 style="font-size: 30px;font-family: 'Acme', sans-serif;">COME AND KNOW US</h3>
            <h5 style="font-size: 20px;font-family: 'Acme', sans-serif;">A place designed for you</h5>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-3"></div>
    </div>

	</div>







  <!-- ++++++++++++++ Segunda Parte ++++++++++++++++++++++++++++ -->



	<div class="Madera">
    <div class="row">
      <div class="col-lg-12 text-center">


        <!-- Titulo -->
        <h2 class="titulo1 visible-lg">Our services</h2>
        <h2 class="titulo2 hidden-lg" style="padding-top:5%">Our services</h2>
        <!-- subtitulo -->
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <h4 class="subtitulo1 visible-lg">
            <strong>Infinity of options for infinite tastes</strong>
          </h4>
        </div>
        <div class="col-lg-4"></div>



        <!-- Contenido -->
        <div class="col-lg-12 text-center">

          <!-- Orilla -->
          <div class="col-xs-0 col-md-0 col-lg-2"></div>

          <!-- Cabañas -->
          <div class="col-xs-12 col-md-12 col-lg-2 text-center">
            <a href="ServicioiosIng.php#Servicios">
              <div class="caja">
                  <div class="image"></div>
                  <div class="content text-center">
                    <i class="fas fa-campground fa-8x" style="padding-left: 10px;padding-top: 20px;"></i>
                    <h4 style="padding:3px; font-size: 40px;">Cottage</h4>
                  </div>
              </div>
            </a>
          </div>

          <!-- Eventos -->
          <div class="col-xs-12 col-md-12 col-lg-2">
              <a href="ServicioiosIng.php#Servicios">
                <div class="caja">
                    <div class="image"></div>
                  <div class="content text-center">
                    <i class="fas fa-utensils fa-8x" style="padding-left: 8px;padding-top: 20px;"></i>
                    <h4 style="padding:3px; font-size: 40px;">Events</h4>
                  </div>
              </div>
              </a>
          </div>

          <!-- juegos -->
          <div class="col-xs-12 col-md-12 col-lg-2">
              <a href="ServicioiosIng.php#Servicios">
                <div class="caja">
                    <div class="image"></div>
                  <div class="content text-center">
                    <i class="fas fa-futbol fa-8x" style="padding-left: 8px;padding-top: 20px;"></i>
                    <h4 style="padding-left: 10px; font-size: 40px;">Sports</h4>
                  </div>
              </div>
              </a>
          </div>

          <!-- piscina -->
          <div class="col-xs-12 col-md-12 col-lg-2">
              <a href="ServicioiosIng.php#Servicios">
                <div class="caja">
                    <div class="image"></div>
                  <div class="content text-center">
                    <i class="fas fa-swimmer fa-8x" style="padding-left: 8px;padding-top: 20px;"></i>
                    <h4 style="padding-left: 8px; font-size: 40px;">Pool</h4>
                  </div>
              </div>
              </a>
          </div>

          <!-- Orilla -->
          <div class="col-xs-0 col-md-0 col-lg-2"></div>

        </div>

      </div>
    </div>
  </div>




  <!-- ++++++++++++++ Tercera Parte ++++++++++++++++++++++++++++ -->





	<div class="fondo2"></div>





  <!-- ++++++++++++++ Cuarta Parte ++++++++++++++++++++++++++++ -->





	<div class="Madera">
    <div class="row">
      <div class="col-lg-12 text-center">


        <!-- Titulo -->
        <h2 class="titulo1 visible-lg">Experiences</h2>
        <h2 class="titulo2 hidden-lg">Experiences</h2>

        <!-- subtitulos -->
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <h4 class="subtitulo1 visible-lg">
            <strong> Know the excellent experiences you can live</strong></h4>
        </div>
        <div class="col-lg-3"></div>




        <!-- EXPERIENCIAS A-->
        <div class="col-lg-12 text-center">

          <div class="col-xs-0 col-md-0 col-lg-2"></div>

          <!-- Experiencia 1 -->
          <div class="col-xs-12 col-md-6 col-lg-4">

                <div class="thumbnail CajaExp">
                  <img src="Imagenes/ExRomantica.jpg" class="visible-lg" style="height:200px; width:100%">
                  <img src="Imagenes/ExRomantica.jpg" class="hidden-lg" style="height:300px; width:100%">
                  <div class="caption">
                    <h3 style="color: #fff; font-size: 45px;" class="hidden-lg">Romantic Experience</h3>
                    <h3 style="color: #fff;font-size: 30px;" class="visible-lg">Romantic Experience</h3>
                    <p><a href="ServiciosIng.php#Exp" class="btn btn-default btnExp" role="button">More</a></p>
                  </div>
                </div>

          </div>

          <!-- Experiencia 2 -->
          <div class="col-xs-12 col-md-6 col-lg-4">

            <div class="thumbnail CajaExp">
              <img src="Imagenes/ExFamiliar.jpg" class="visible-lg" style="height:200px; width:100%">
              <img src="Imagenes/ExFamiliar.jpg" class="hidden-lg" style="height:300px; width:100%">
              <div class="caption">
                <h3 style="color: #fff; font-size: 50px;" class="hidden-lg">Family Experience</h3>
                <h3 style="color: #fff;font-size: 30px;" class="visible-lg">Family Experience</h3>
                <p><a href="ServiciosIng.php#Exp" class="btn btn-default btnExp" role="button">More</a></p>
              </div>
            </div>

          </div>

          <div class="col-xs-0 col-md-0 col-lg-2"></div>
        </div>




        <!-- EXPERIENCIAS B-->
        <div class="col-lg-12 text-center">

          <div class="col-xs-0 col-md-0 col-lg-2"></div>

          <!-- Experiencia 3 -->
          <div class="col-xs-12 col-md-6 col-lg-4">

                <div class="thumbnail CajaExp">
                  <img src="Imagenes/ExAventura.jpg" class="visible-lg" style="height:200px; width:100%">
                  <img src="Imagenes/ExAventura.jpg" class="hidden-lg" style="height:300px; width:100%">
                  <div class="caption">
                    <h3 style="color: #fff; font-size: 50px;" class="hidden-lg">Adventure Experience</h3>
                    <h3 style="color: #fff;font-size: 30px;" class="visible-lg">Adventure Experience</h3>
                    <p><a href="ServiciosIng.php#Exp" class="btn btnExp" role="button">More</a></p>
                  </div>
                </div>

          </div>

          <!-- Experiencia 4 -->
          <div class="col-xs-12 col-md-6 col-lg-4">

            <div class="thumbnail CajaExp">
              <img src="Imagenes/ExGastronomica.jpg" class="visible-lg" style="height:200px; width:100%">
              <img src="Imagenes/ExGastronomica.jpg" class="hidden-lg" style="height:300px; width:100%">
              <div class="caption">
                <h3 style="color: #fff; font-size: 40px;" class="hidden-lg">Gastronomic Experience</h3>
                <h3 style="color: #fff; font-size: 30px;" class="visible-lg">Gastronomic Experience</h3>
                <p><a href="ServiciosIng.php#Exp" class="btn btnExp" role="button">More</a></p>
              </div>
            </div>

          </div>

          <div class="col-xs-0 col-md-0 col-lg-2"></div>
        </div>


      </div>
    </div>
  </div>






<!-- ++++++++++++++ Quinta Parte ++++++++++++++++++++++++++++ -->




	<div class="fondo3"></div>





<!-- ++++++++++++++ Sexta Parte ++++++++++++++++++++++++++++ -->  


	<div class="Madera2" style="padding-bottom: 60px">
    <div class="row">

      <!-- REDES SOCIALES -->
      <div class="col-lg-12 text-center">

          <!-- TITULO -->
          <h2 class="titulo1 visible-lg">Social Networks</h2>
          <h2 class="titulo2 hidden-lg">Social Networks</h2>


          <!-- CONTENIDO -->
          <div class="col-xs-0 col-md-0 col-lg-2"></div>
            <!-- Instagram -->
          <div class="col-xs-3 col-md-3 col-lg-2 redes" style="padding-right: 50px;">
            <ul>
              <a href=""><li><i class="fab fa-instagram" aria-hidden="true"></i></li></a>
            </ul>
          </div>
            <!-- Twitter -->
          <div class="col-xs-3 col-md-3 col-lg-2 redes" style="padding-right: 50px;">
            <ul>
              <a href=""><li><i class="fab fa-twitter" aria-hidden="true"></i></li></a>
            </ul>
          </div>
            <!-- Triapsor -->
          <div class="col-xs-3 col-md-3 col-lg-2 redes" style="padding-right: 50px;">
            <ul>
              <a href=""><li><i class="fab fa-tripadvisor" aria-hidden="true"></i></li></a>
            </ul>
          </div>
            <!-- Facebook -->
          <div class="col-xs-3 col-md-3 col-lg-2 redes" style="padding-right: 50px;">
            <ul>
              <a href=""><li><i class="fab fa-facebook-f" aria-hidden="true"></i></li></a>
            </ul>
          </div>
          <div class="col-xs-0 col-md-0 col-lg-2"></div>


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
                  <p style="font-family: 'Nunito', sans-serif; color: #fff; font-size: 15px">Hacienda Ecoturistica salto del pomeca. Make the best of your life in the best facilities, prepared just for you.</p>
                </div>
             </div>

          </div>

          <!-- DATOS CONTACTO -->
          <div class="col-xs-6 col-md-6 col-lg-4">

                <table class="table" style="font-size: 20px; color: #fff">
                  <!-- Titulo -->
                  <thead>
                    <tr>
                      <th style="text-align: center;font-family: 'Roboto Condensed', sans-serif;">Contact details</th>
                    </tr>
                  </thead>

                  <!-- Contenido -->
                  <tbody>
                      <tr>
                        <!-- Correo -->
                        <td style="font-family: 'Nunito', sans-serif;">
                        <i class="far fa-envelope"></i> Email: Haciedno@correo.com</td>
                      </tr>
                      <tr>
                        <!-- Telefono -->
                        <td style="font-family: 'Nunito', sans-serif;">
                        <i class="fas fa-phone-square"></i> Phone: 7632373</td>
                      </tr>
                      <tr>
                        <!-- Celular -->
                        <td style="font-family: 'Nunito', sans-serif;">
                        <i class="fas fa-mobile-alt"></i> Movile: 3214560987</td>
                      </tr>
                      <tr>
                        <!-- Ubicacion -->
                        <td style="font-family: 'Nunito', sans-serif;">
                        <i class="fas fa-map-marker-alt"></i> Location: Togui - Boyaca</td>
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
                  <th style="text-align: center;font-family: 'Roboto Condensed', sans-serif;">Know us</th>
                </tr>
              </thead>

              <!-- Contenido -->
              <tbody>
                  <tr>
                    <!-- Nosostros -->
                    <td><a href="NosotrosIng.php" style="font-family: 'Nunito', sans-serif; color: #fff">About
                    <i class="fas fa-mouse-pointer"></i></a></td>
                  </tr>
                  <tr>
                    <!-- Galeria -->
                    <td><a href="GaleriaIng.php" style="font-family: 'Nunito', sans-serif; color: #fff">Gallery
                    <i class="fas fa-mouse-pointer"></i></a></td>
                  </tr>
                  <tr>
                    <!-- Servicios -->
                    <td><a href="ServiciosIng.php" style="font-family: 'Nunito', sans-serif; color: #fff">Services
                    <i class="fas fa-mouse-pointer"></i></a></td>
                  </tr>
                  <tr>
                    <!-- Contactenos -->
                    <td><a href="ContactenosIng.php" style="font-family: 'Nunito', sans-serif; color: #fff">Contacts
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



<!-- ++++++++++++++ FIN PAGINA ++++++++++++++++++++++++++++ -->


</body>
</html>
