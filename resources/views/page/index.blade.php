<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Medikaria</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="icon" type="image/png" href="{{ asset('components/lte/img/medikaria_logo.ico') }}" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/font/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/materialize/css/materialize.min.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert/sweet-alert.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('assets/libs/owl-carousel/owl.carousel.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('assets/libs/owl-carousel/owl.transitions.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('assets/libs/owl-carousel/owl.theme.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

  <!-- Choose your default colors -->
  <link rel="stylesheet" href="{{ asset('assets/css/colors/color1.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/colors/color2.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/colors/color3.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/colors/color4.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/colors/color5.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/colors/color6.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/colors/color7.css') }}"> -->
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/colors/color8.css') }}"> -->
  <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
  <![endif]-->
</head>

<body>

  <!-- Preloader -->
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>
    </div><!--preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="{{ asset('images/logo.png') }}" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="right static-menu">
                    <li class="search-form-li">
                      <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                      <div class="search-form-wrap hide">
                        <form action="#" class="">
                          <input type="search" class="search">
                          <button type="submit"><i class="mdi-action-search"></i>
                          </button>
                        </form>
                      </div>
                    </li>
                    <li>
                      <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                        <i class="mdi-navigation-more-vert right"></i>
                      </a>
                    </li>
                  </ul>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="images/person.png" alt="">
                        </div>
                        <h3>medikaria</h3>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>¿Ques es Medikaria?</a>
                    </li>
                    <li><a href="#experience" data-section="#experience" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>¿Cómo funciona?</a>
                    </li>
                    <li><a href="#education" data-section="#education" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Beneficios</a>
                    </li>
                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contacto</a>
                    </li>
                  </ul>
                  <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                    <li>Home</li>
                    <li><a href="blog.html">All Blog</a>
                    </li>
                    <li><a href="blog-with-sidebar.html">Blog with Sidebar</a>
                    </li>
                    <li><a href="single.html">Single Blog</a>
                    </li>
                  </ul>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-inner">
                  <div class="center-align home-content">
                   <!-- <h1 class="home-title">Bienvenido </h1>
                    <h2 class="home-subtitle">Registrate</h2>-->
                    <a href="{{route('auth_show_register_path')}}" class="btn waves-effect waves-light btn-large brand-bg white-text regular-text"><i >Registrate</i>
                    </a>
                    <a href="{{route('auth_show_path')}}" class="btn waves-effect waves-light btn-large brand-bg white-text regular-text"><i >Login</i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
          <div class="container">
            <div class="row">
              <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
          </div>
          <!-- .container end -->
        </div>
      </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">

            <div class="col-sm-12 col-md-4">
              <div class="person-about">
                <h3 class="about-subtitle">¿Que es Medikaria?</h3>
                <p>Medikaria es la solución tecnológica más eficaz del mercado para eficientar el proceso de receta, compra y venta de medicamentos.</p>
                <a class="waves-effect waves-light btn-large brand-bg white-text"><i ></i> Leer más</a>
              </div>
            </div>
            <!-- about me description -->

            <div class="col-sm-6 col-md-4">
              <div class="about-social">
              </div>
            </div>
            <!-- about me info -->

              <div class="col-sm-6 col-md-4">
              <div class="person-img wow fadeIn">
                <img class="z-depth-1" src="images/person.png" alt="">
              </div>
            </div>
            <!-- about me image -->
          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->

        <!-- .container end -->
      </section>

      <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
        <div class="container">
          <div class="row">
            <div class="experience-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head experience-text">
                    <div class="col-sm-12">
                      <h2 class="title">¿Cómo funciona?</h2>
                      <p class="regular-text">El proceso de funcionamiento de Medikaria es muy fácil de llevarse a cabo. Consta de sencillos pasos..</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="experienceSlider" class="clearfix card-element-wrapper">
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">REGISTRATE</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/registra.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Más info...<i class="mdi-navigation-more-vert right"></i></span>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">REGISTRATE<i class="mdi-navigation-close right"></i></span>
                                </div>
                                <p class="rev-content">
                                  Medikaria es la solución tecnológica más eficaz del mercado para eficientar el proceso de receta, compra y venta de medicamentos.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">ALTA PACIENTES</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/doctor.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Más info...<i class="mdi-navigation-more-vert right"></i></span>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">ALTA PACIENTES<i class="mdi-navigation-close right"></i></span>
                                </div>
                                <p class="rev-content">
                                  Medikaria es la solución tecnológica más eficaz del mercado para eficientar el proceso de receta, compra y venta de medicamentos.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">BUSQUEDA MEDICAMENTO</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/medicamento.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Más info...<i class="mdi-navigation-more-vert right"></i></span>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">BUSCA MEDICAMENTO<i class="mdi-navigation-close right"></i></span>
                                </div>
                                <p class="rev-content">
                                  Medikaria es la solución tecnológica más eficaz del mercado para eficientar el proceso de receta, compra y venta de medicamentos.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp edu-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
        <div class="container">
          <div class="row">
            <div class="education-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head education-text">
                    <div class="col-sm-12">
                      <h2 class="title">beneficios</h2>
                      <p class="regular-text">El uso de Medikaria beneficia de una u otra forma a todos los involucrados en el proceso, tanto desde el punto de vista económico, como de tiempo y esfuerzo.</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="educationSlider" class="clearfix card-element-wrapper">

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">DINERO</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/dinero.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Más info...<i class="mdi-navigation-more-vert right"></i></span>
                              </div>
                              <!-- Reveal content-->
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">DINERO<i class="mdi-navigation-close right"></i></span>
                                </div>
                                <p class="rev-content">
                                  Medikaria es la solución tecnológica más eficaz del mercado para eficientar el proceso de receta, compra y venta de medicamentos.
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education end -->

                          <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">TIEMPO</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/tiempo.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Más info...<i class="mdi-navigation-more-vert right"></i></span>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">TIEMPO<i class="mdi-navigation-close right"></i></span>
                                </div>
                                <p class="rev-content">
                                  Medikaria es la solución tecnológica más eficaz del mercado para eficientar el proceso de receta, compra y venta de medicamentos.
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education -->

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">ESFUERZO</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/esfuerzo.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Más info...<i class="mdi-navigation-more-vert right"></i></span>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">ESFUERZO<i class="mdi-navigation-close right"></i></span>
                                </div>
                                <p class="rev-content">
                                  Medikaria es la solución tecnológica más eficaz del mercado para eficientar el proceso de receta, compra y venta de medicamentos.
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education -->

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">EJEMPLO</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="http://placehold.it/400x300" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">EJEMPLO<i class="mdi-navigation-more-vert right"></i></span>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">EJEMPLO<i class="mdi-navigation-close right"></i></span>
                                </div>
                                <p class="rev-content">
                                  Medikaria es la solución tecnológica más eficaz del mercado para eficientar el proceso de receta, compra y venta de medicamentos.
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp edu-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- #resume Section end -->

    <!-- Portfolio Section start -->

    <!-- #portfolio Section end -->

    <!-- Team Section end -->

    <!-- #team Section end -->

    <!-- Funfacts Section end -->

    <!-- #funfacts Section end -->

    <!-- Testimonial Section end -->

    <!-- #testimonial Section end -->

    <!-- Blog Section end -->

    <!-- #blog Section end -->

    <!-- Contact Section end -->
    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head contact-text">
                  <div class="col-sm-12">
                    <h2 class="title">Contacto</h2>
                    <p class="regular-text">QUERÉTARO</p>
                    <ul class="clearfix contact-info">
                      <li><a href="">(442) 343 0371</a>
                      </li>
                      <li><a href="">contacto@medikaria.com</a>
                      </li>
                      <li><a href="">www.medikaria.com</a>
                      </li>
                    </ul>
                  </div>
                </div> <!-- contact text end -->

                <div class="clearfix contact-form">

                <!-- Map Start -->
<!-- Map end -->

                <!-- Contact Form start -->
                  <div class="col-sm-5">
                    <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                      <form action="#" id="contactForm" novalidate>
                        <div class="input-field">
                          <input id="contact_name" type="text" name="contactName" class="validate input-box">
                          <label for="contact_name" class="input-label">Nombre</label>
                        </div>
                        <div class="input-field">
                          <input id="email" type="email" name="contactEmail" class="validate input-box">
                          <label for="email" class="input-label">Email</label>
                        </div>
                        <div class="input-field">
                          <input id="subject" type="text" name="contactSubject" class="validate input-box">
                          <label for="subject" class="input-label">Asunto</label>
                        </div>
                        <div class="input-field textarea-input">
                          <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;"></textarea>
                          <label for="textarea1" class="input-label">Mensaje</label>
                        </div>
                        <div class="input-field submit-wrap clearfix">
                          <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">Enviar mensaje</button>
                          <div class="right form-loader-area">
                            <svg class="circular size-20" height="20" width="20">
                              <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                            </svg>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div> <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons">
                <li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                </li>
              </ul> <!-- ./social icons end -->
              <div class="right copyright">
                <p>MaterialX &copy; All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->


  <!-- JavaScripts -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/detectmobilebrowser.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/waypoints.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="{{ asset('assets/js/gmaps.js') }}"></script>
  <script src="{{ asset('assets/libs/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/libs/materialize/js/materialize.min.js') }}"></script>
  <script src="{{ asset('assets/libs/jwplayer/jwplayer.js') }}"></script>
  <script src="{{ asset('assets/libs/sweetalert/sweet-alert.min.js') }}"></script>
  <script src="{{ asset('assets/js/common.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
