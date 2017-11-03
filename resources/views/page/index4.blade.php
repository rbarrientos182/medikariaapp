<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Basic page information -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Clas-design">
  <title>Medikaria</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/png" href="{{ asset('components/lte/img/medikaria_logo.ico') }}" />

  <!-- Custom Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

  <!-- Bootstrap CSS Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">

  <!-- Template CSS Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- Animate CSS  -->
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

  <!-- FontAwesome 4.3.0 Icons  -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome-4.3/css/font-awesome.min.css') }}">

  <!-- Et-line Icons  -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/et-line-font/style.css') }}">

  <!-- BXslider CSS  -->
  <link rel="stylesheet" href="{{ asset('assets/css/bxslider/jquery.bxslider.css') }}">

  <!-- Owl carousel -->
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel/owl.theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel/owl.transitions.css') }}">

  <!-- Magnific-Popup CSS Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup/magnific-popup.css') }}">

  <!-- YTplayer CSS Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/YTPlayer/jquery.mb.YTPlayer.min.css') }}">

  <!-- Superslides CSS Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/superslides.css') }}">

  <!-- Vegas Slideshow -->
  <link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}">

  <!-- Morphext CSS Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/morphext.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>

  <!-- Preload the Whole Page -->
  <div id="preloader">
    <div id="loading-animation">&nbsp;</div>
  </div>

  <!-- Navbar -->
  <header class="header">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo1.png')}}" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-nav">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a class="section-scroll" href="#wrapper">Inicio</a></li>
            <li><a class="section-scroll" href="#feature-section-3">¿QUE ES MEDIKARIA?</a></li>
            <li><a class="section-scroll" href="#team-section">¿CÓMO FUNCIONA?</a></li>
            <li><a class="section-scroll" href="#choose-section">BENEFICIOS</a></li>
            <li><a class="section-scroll" href="#contact-section">CONTACTO</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  </header>
  <!-- End Navbar -->

  <div id="wrapper">

    <!-- Hero
    ================================================== -->
    <section>
      <div id="hero-section" class="creative-hero-page" data-stellar-background-ratio="0">
        <div class="hero-content">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-lg-7">
                <div class="hero-text">
                  <h1>ES MUY FÁCIL DE USAR</h1>
                  <p class="hero">EN DESARROLLO</p>
                </div> <!-- End hero-text -->
                <div class="call-to-action">
                  <a href="{{route('auth_show_register_path')}}" class="section-scroll btn btn-md btn-primary">REGÍSTRATE</a>
                  <span class="spacebtn"></span>
                  <a href="{{route('auth_show_path')}}" class="section-scroll btn btn-md btn-clean">INICIAR SESIÓN</a>
                </div>
              </div> <!-- end col-md-6 -->
            </div> <!-- end row -->
          </div> <!-- End container -->
        </div> <!-- End hero-content -->
      </div> <!-- End hero-section -->
    </section>
    <!-- End hero section -->

    <!-- Feature-section-2
    ================================================== -->
    <section>
      <div id="feature-section-3" class="pad-sec">
        <div class="container">
          <div class="row">

            <div class="col-md-7 col-md-push-5">
              <div class="feature-3-image text-center">
                <img src="{{asset('assets/images/feature/devices3.png')}}" alt="">
              </div>
            </div>

            <div class="col-md-5 col-md-pull-7" class='texto'>
              <h4>¿Que es medikaria?</h4>
              <p class='texto'>Medikaria es la solución tecnológica más eficaz del mercado para eficientar el proceso de receta, compra y venta de medicamentos.<br><br>
								Medikaria es una plataforma tecnológica que sirve como enlace entre los médicos, los pacientes y las farmacias, al hacer que el proceso del pedido, la compra, el pago y la entrega de los medicamentos -comunes, antibióticos o controlados- sea más sencillo, cómodo, económico y eficiente.
							</p>
              <!-- Accordion -->
                <!--<dt>
                    <a href="" class="">Our mission</a>
                </dt>
                <dd>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.
                </dd>
                <dt>
                    <a href="" class="">Why choose us</a>
                </dt>
                <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.
                </dd>
              </dl>
              <!-- End Accordion -->
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- End Feature-section-2 -->

       <!-- Team section
    ================================================== -->
    <section>
      <div id="team-section" class="pad-sec1">
        <div class="container">

          <div class="title-section pad-bt-80">
            <div class="row">
              <div class="col-sm-6">
                <h2>¿Cómo funciona?</h2>
                <div class="divider"></div>
              </div> <!-- End col-sm-6 -->
              <div class="col-sm-6">
                <p class='texto1'>El funcionamiento de Medikaria es muy sencillo. Tan sólo hay que seguir los siguientes pasos:</p>
              </div> <!-- End col-sm-6 -->
            </div> <!-- End row -->
          </div> <!-- End title-section -->

          <div class="team-members">
            <div class="row">

              <div class="col-sm-4">
                <div class="member-team text-center">
                  <div class="team-image">
                    <img src="{{asset('assets/images/team/333.jpg')}}" alt="">
                    <div class="overlay">
                      <div class="vertical-align-table">
                        <div class="vertical-align-cell">
                          <p>El médico se registra con sus datos personales y profesionales, incluyendo IFE, RFC y Cédula Profesional.<br>
                          El médico ofrece al paciente ahorrar tiempo y dinero en la compra y entrega en su domicilio de los medicamentos de la receta MEDIANTE EL USO DE  MEDIKARIA.</p>

                        </div> <!-- end vertical-align-cell -->
                      </div><!--  end vertical-align-table -->
                    </div> <!-- end overlay -->
                  </div> <!-- end team-image -->
                  <h2>Registro de médicos</h2>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="member-team text-center">
                  <div class="team-image">
                    <img src="{{asset('assets/images/team/2.png')}}" alt="">
                    <div class="overlay">
                      <div class="vertical-align-table">
                        <div class="vertical-align-cell">
                          <p>Se registra los datos del paciente (Nombre, Edad, Sexo, Peso, Estatura, Dirección, el Teléfono y su Correo electrónico), así como el diagnóstico médico o padecimiento, los medicamentos a tomar, la dosis, la periodicidad y los días totales a tomarse.<br></p>
                        </div> <!-- end vertical-align-cell -->
                      </div><!--  end vertical-align-table -->
                    </div> <!-- end overlay -->
                  </div> <!-- end team-image -->
                  <h2>Alta Pacientes</h2>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="member-team text-center">
                  <div class="team-image">
                    <img src="{{asset('assets/images/team/1.png')}}" alt="">
                    <div class="overlay">
                      <div class="vertical-align-table">
                        <div class="vertical-align-cell">
                          <p>Medikaria hace el enlace con las farmacias afiliadas que están en la zona cercana al domicilio del paciente, (hace un cruce de búsqueda entre las Farmacias cercanas al domicilio –vía GPS o similar- y cuáles de esas tienen los medicamentos seleccionados), y devuelve una lista de opciones en la cuales aparecen, en orden por precio (de menor a mayor), las cotizaciones de las farmacias cercanas a dicho domicilio, que efectivamente cuentan con los medicamentos. Estas cotizaciones llegan con Nombre de la Farmacia, Monto Total a Pagar, y Tiempo Estimado de entrega en el domicilio del paciente.</p>

                        </div> <!-- end vertical-align-cell -->
                      </div><!--  end vertical-align-table -->
                    </div> <!-- end overlay -->
                  </div> <!-- end team-image -->
                  <h2>Busqueda Medicamentos</h2>
                </div>
              </div>

							<div class="col-sm-4">
                <div class="member-team text-center">
                  <div class="team-image">
                    <img src="{{asset('assets/images/team/2.png')}}" alt="">
                    <div class="overlay">
                      <div class="vertical-align-table">
                        <div class="vertical-align-cell">
													<p>Ya que el paciente decidió qué opción de farmacia y envío tomar, y aceptar así dicha compra, se hace el pago de los medicamentos ala farmacia mediante la plataforma.</p>
                        </div> <!-- end vertical-align-cell -->
                      </div><!--  end vertical-align-table -->
                    </div> <!-- end overlay -->
                  </div> <!-- end team-image -->
                  <h2>Compra y envío de medicamentos</h2>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="member-team text-center">
                  <div class="team-image">
                    <img src="{{asset('assets/images/team/1.png')}}" alt="">
                    <div class="overlay">
                      <div class="vertical-align-table">
                        <div class="vertical-align-cell">
                          <p>Al utilizar completamente la plataforma de Medikaria, por cada compra que el paciente realiza mediante ésta a través de la cuenta del médico, éste último recibe un porcentaje por cada medicamento vendido por la farmacia.<br>Es un GANAR-GANAR para todos.</p>
                        </div> <!-- end vertical-align-cell -->
                      </div><!--  end vertical-align-table -->
                    </div> <!-- end overlay -->
                  </div> <!-- end team-image -->
                  <h2>Ganacias para medicos</h2>
                </div>
              </div>

            </div>
          </div>
          <!-- End team-members -->



        </div> <!-- end container -->
      </div> <!-- end team-section -->
    </section>
    <!-- End team-section -->

    <!-- Video section
    ================================================== -->
    <section>
      <div id="video-section" class="pad-sec">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <div class="video-section-content text-center">
                <a href="http://vimeo.com/channels/staffpicks/116829150" class="video-pop-up"><i class="fa fa-play"></i></a>
                <div class="video-head">Introducción Video</div>
                <div class="video-sub-heading">Presentación</div>
              </div>
            </div> <!-- end col-sm-6 -->
          </div> <!-- end row -->
        </div> <!-- end container -->

        <!-- Bakground -->
        <div id="bgndVideo" class="player"
        data-property="{videoURL:'http://youtu.be/BsekcY04xvQ',containment:'#video-section', showControls:false, loop:true, autoPlay:true, mute:true, startAt:0, opacity:1, addRaster:false, quality:'default'}">
        </div>
      </div>
    </section>
    <!-- End Video section -->

    <!-- Choose
    ================================================== -->
    <section>
      <div id="choose-section" class="pad-sec">
        <div class="container">

          <div class="title-section pad-bt-80">
            <div class="row">
              <div class="col-sm-6">
                <h7>BENEFICIOS</h7>
                <div class="divider"></div>
              </div> <!-- End col-sm-6 -->
              <div class="col-sm-6">
                <p class='texto'>El uso de Medikaria beneficia de una u otra forma a todos los involucrados en el proceso, tanto desde el punto de vista económico, como de tiempo y esfuerzo.</p>
              </div> <!-- End col-sm-6 -->
            </div> <!-- End row -->
          </div> <!-- End title-section -->

          <div class="row">

            <div class="col-md-6 col-md-push-5 col-md-offset-1">

              <div class="choose-services">
                <ul class="choose-list">

                  <!-- feature -->
                  <li>
                    <div class="choose-box animated out" data-animation="fadeInRight" data-delay="0">
                      <span class="iconbox"><i class="#"></i></span>
                      <div class="choose-box-content">
                        <h6>Para los médicos</h6>
                        <p class= 'texto2'>LES AYUDA a asegurarse de que sus pacientes tomen los medicamentos en tiempo y forma, de tal manera que los tratamientos sean más eficaces.<br>
                        LES GENERA UN INGRESO  por comisión por cada compra generada a las farmacias.<br>
                        LES GENERA ESTADÍSTICAS de medicamentos recetados –y comprados en farmacias- para así poder ser acreedores a incentivos de parte de los Laboratorios Médicos.</p>
                      </div>
                    </div>
                  </li>

                  <!-- feature -->
                  <li>
                    <div class="choose-box animated out" data-animation="fadeInRight" data-delay="0">
                      <span class="iconbox"><i class="#"></i></span>
                      <div class="choose-box-content">
                        <h6>Para los pacientes</h6>
												<p class= 'texto2'>LES ASEGURA de que los medicamentos recetados por el médico sean EXACTAMENTE los requeridos, de tal manera que los tratamientos que tomen sean más eficaces.<br>
												LES GENERA AHORROS en la compra de sus medicamentos.<br>
												LES BRINDA LA COMODIDAD de no tener que andar en búsqueda de los medicamentos de farmacia en farmacia, al recibirlos en su domicilio.</p>
											</div>
                    </div>
                  </li>

                  <!-- feature -->
                  <li>
                    <div class="choose-box animated out" data-animation="fadeInRight" data-delay="0">
                      <span class="iconbox"><i class="#"></i></span>
                      <div class="choose-box-content">
                        <h6>Para las farmacias</h6>
												<p class= 'texto2'>LES GENERA VENTAS EXTRAS con bajo gasto de operación.<br>
												LES AYUDA a mantener -con orden y electrónicamente- el control de las RECETAS vs SURTIDO de medicamentos, antibióticos y controlados.<br>
												LES GENERA ESTADÍSTICAS de medicamentos vendidos, para así poder ser mejorar sus inventarios, además de ser acreedores a incentivos de parte de los Laboratorios Médicos.</p>
										</div>
                    </div>
                  </li>
                </ul> <!-- end choose-list -->
              </div>
            </div> <!-- end col-md-6 -->

            <div class="col-md-5 col-md-pull-7">
              <div class="choose-image animated out" data-animation="fadeInLeft" data-delay="0">
                <img src="assets/images/temp/ipad.png" alt="">
              </div> <!-- end choose-image -->
            </div> <!-- end col-md-5 -->

          </div> <!-- end row -->
        </div> <!-- end container -->
      </div>
    </section>
    <!-- End choose-section -->

    <!-- Sep-section
    ================================================== -->
    <section>
      <div class="sep-section"></div>
    </section>

    <!-- Blog-section
    ================================================== -->

    <!-- Sep-section
    ================================================== -->
    <section>
      <div class="sep-section"></div>
    </section>

    <!-- Google map
    ================================================== -->
    <!-- End Google map -->

    <!-- Contact-section
    ================================================== -->
    <section>
      <div id="contact-section" class="pad-sec2">

        <div class="container">

          <div class="title-section text-center pad-bt-100">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2>Contacto</h2>
                <div class="divider"></div>
              <!--  <p>Sed ac mattis justo. Vestibulum facilisis at arcu ac porta. Vivamus at ipsum at quam hendrerit gravida.</p>-->
              </div> <!-- End col-sm-6 -->
            </div> <!-- End row -->
          </div> <!-- End title-section -->

          <div class="location-section">
            <div class="row">


              <div class="col-sm-4">
                <div class="location-item text-center">
                  <div class="icon">
                    <i class="icon-phone"></i>
                  </div>
                  <h5 class="text-uppercase">Números</h5>
                  <div class="texto22">
                    (442) 343 0371 <br> (442) 343 0371
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="location-item text-center">
                  <div class="icon">
                    <i class="icon-envelope"></i>
                  </div>
                  <h5 class="text-uppercase">Correo</h5>
                  <div class="texto22">
                    contacto@medikaria.com <br>
                  </div>
                </div>
              </div>


            </div>
          </div>

          <div class="form-wrapper">
            <div class="row">
              <div class="col-md-12">

                <!-- form fields -->
                <form action="assets/php/contact.php" method="post" name="contactform" id="contactform" class=" animated out" data-animation="fadeInUp" data-delay="0">

                  <fieldset>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <input class="form-control" type="text" name="name" id="name" placeholder="Nombre">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <input class="form-control" type="email" name="email" id="email" placeholder="Correo">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <input class="form-control" type="text" name="subject" id="subject" placeholder="Asunto">
                        </div>
                      </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <textarea class="form-control" name="message" id="message" placeholder="Mensaje..."></textarea>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <!-- submit button -->
                  <div class="form-group">
                    <input type="submit" name="submit" value="Eviar mensaje" id="submit" class="btn btn-sm btn-dark">
                  </div>

                  <div id="alert"></div>

                </form>

              </div> <!-- end col-md-8 -->
            </div> <!-- end row -->
          </div>  <!-- end form-wrapper -->

        </div> <!-- end container -->
      </div> <!-- End contact-section -->
    </section>

  </div> <!-- End wrapper -->

  <!-- Footer
  ================================================== -->
  <footer>


    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p>PENACHOZ</p>
          </div>
          <div class="col-md-6">
            <!--<ul class="footer-menu text-right">
              <li><a href="#.html">Home</a></li>
              <li><a href="#.html">About</a></li>
              <li><a href="#.html">Services</a></li>
              <li><a href="#.html">Portfolio</a></li>
              <li><a href="#.html">Blog</a></li>
              <li><a href="#.html">Contact</a></li>
            </ul> -->
          </div>  <!-- end col-md-6   -->
        </div> <!-- end row      -->
      </div> <!-- end container -->
    </div> <!-- end footer-line -->

    </footer>
  <!-- End footer -->

  <!-- Back-to-top
  ================================================== -->
  <div class="back-to-top">
    <i class="fa fa-angle-up fa-3x"></i>
  </div> <!-- end back-to-top -->

  <!-- JS libraries and scripts -->
  <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.smoothscroll.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.imagesloaded.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.isotope.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.placeholder.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.superslides.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.burger-menu.js') }}"></script>
  <script src="{{ asset('assets/js/burger-menu-scroll.js') }}"></script>
  <script src="{{ asset('assets/js/vegas.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.morphext.min.js') }}"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="{{ asset('assets/js/jquery.gmaps.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
