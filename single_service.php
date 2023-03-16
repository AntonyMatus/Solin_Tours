
<!-- <?php 
    require 'Admin/config.php';

    $id = intval($_GET['id']);

    $sqlTour = "SELECT P.id, P.name, P.body, P.cover, P.dollar_change, P.price_adult, P.rest_year_adult, P.price_child, P.rest_year_child, F.name AS filter FROM tours P JOIN category F ON P.category_id = F.id WHERE P.id = :id"; 
    $queryTour = $pdo->prepare($sqlTour);
    $queryTour->bindParam(':id', $id, PDO::PARAM_INT);
    $queryTour->execute();
    $tour = $queryTour->fetch(PDO::FETCH_OBJ);

?> -->
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title><?php echo $tour->name ?> – Solin Tours Cozumel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Litho is a clean and modern design, BootStrap 5 responsive, business and portfolio multipurpose HTML5 template with 37+ ready homepage demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="template/images/logos/Recurso 2.svg">
        <link rel="apple-touch-icon" href="template/images/logos/Recurso 2.svg">
        <link rel="apple-touch-icon" sizes="72x72" href="template/images/logos/Recurso 2.svg">
        <link rel="apple-touch-icon" sizes="114x114" href="template/images/logos/Recurso 2.svg">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="template/css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="template/css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="template/css/style.css" />
        <link rel="stylesheet" type="text/css" href="template/css/responsive.css" />
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
            <nav class="navbar top-space navbar-expand-lg navbar-boxed navbar-dark bg-client3 header-dark fixed-top header-reverse-scroll">
                <div class="container-fluid nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="index.php">
                            <img src="template/images/logos/Recurso 4.svg" data-at2x="template/images/logos/Recurso 4.svg" alt="" class="default-logo">
                            <img src="template/images/logos/Recurso 1.svg" data-at2x="template/images/logos/Recurso 1.svg" alt="" class="alt-logo">
                            <img src="template/images/logos/Recurso 1.svg" data-at2x="template/images/logos/Recurso 1.svg" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto col-lg-8 menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="index.php#intro" class="nav-link">Introducción</a>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="index.php#destinos" class="nav-link">Destinos</a>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="index.php#paquetes" class="nav-link">Paquetes</a>
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="index.php#testimonios" class="nav-link">Testimonios</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-lg-2 text-end pe-0">
                        <span class="nav-bar-contact text-medium alt-font font-weight-500 d-none d-sm-block">
                            <i class="feather icon-feather-phone-call margin-10px-right"></i>
                            +52 1 987 112 1002
                        </span>
                    </div>
                </div>
            </nav>
        </header>
        <!-- end header -->
        <div class="main-content bg-light-gray">
            
            
            <!-- start section -->
            <section class="bg-light-gray background-position-left-bottom background-no-repeat">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class="d-grid justify-content-center col-12 col-lg-10 position-relative z-index-1 md-margin-50px-bottom sm-margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                            <img src="Admin/assets/images/tours/<?php echo $tour->cover ?>" alt="" width="800px" height="600px">
                        </div>
                        <div class="col-12 col-lg-10 offset-lg-1 mt-5rem">
                            <h5 class="alt-font font-weight-500 text-extra-dark-gray w-100 margin-25px-bottom letter-spacing-minus-1-half lg-w-90 md-margin-35px-bottom wow animate__fadeInRight" data-wow-delay="0.1s"><?php echo $tour->name ?></h5>
                            <?php echo $tour->body ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <section class="big-section bg-light-gray wow animate__fadeIn">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 text-center margin-four-bottom">
                            <h6 class="alt-font text-extra-dark-gray font-weight-500">Lista de Precios</h6>
                            <span>Tipo de Cambio <?php echo $tour->dollar_change ?> MXN</span>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-8 col-lg-8 col-md-8">
                            <ul class="list-style-08">
                                <li class="border-bottom border-color-black-transparent">
                                    <div class="w-80 lg-w-75 xs-w-80 last-paragraph-no-margin">
                                        <span class="font-weight-500 text-extra-medium text-extra-dark-gray">Adultos</span>
                                        <p><?php echo $tour->rest_year_adult ?></p>
                                    </div>
                                    <div class="font-weight-500 text-extra-medium text-extra-dark-gray">$<?php echo $tour->price_adult ?> MXN</div>
                                    
                                </li>
                                <li class="border-bottom border-color-black-transparent">
                                    <div class="w-80 lg-w-75 xs-w-80 last-paragraph-no-margin">
                                        <span class="font-weight-500 text-extra-medium text-extra-dark-gray">Menores </span>
                                        <p><?php echo $tour->rest_year_child ?></p>
                                    </div>
                                    <div class="font-weight-500 text-extra-medium text-extra-dark-gray">$<?php echo $tour->price_child ?> MXN</div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            
            <!-- end section -->
            <section class="cover-background overlap-height" style="background-image:url('template/images/vacaciones.jpeg');">
                <div class="opacity-extra-medium bg-dark-slate-blue"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-7 col-lg-8 col-sm-8 text-center z-index-1 overlap-gap-section wow animate__fadeIn" data-wow-delay="0.4s">
                            <span class="line-icon-Summer icon-extra-large text-white margin-30px-bottom"></span>
                            <h4 class="alt-font font-weight-500 text-white letter-spacing-minus-1px margin-35px-bottom xs-margin-25px-bottom">Reserva haciendo click abajo</h4>
                            <i class="line-icon-Triangle-ArrowDown icon-medium align-middle text-white margin-35px-bottom"></i> <br>
                            <a href="https://wa.link/7mr6wg" class="btn btn-large btn-white d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr "><i class="fab fa-whatsapp text-dark"></i> Whatsapp</a>
                        </div>
                    </div>
                </div>
            </section>
            
            
        </div>
        <!-- start footer -->
        <footer class="footer-consulting footer-dark bg-client3">
            <div class="footer-top padding-six-tb lg-padding-eight-tb md-padding-50px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start footer column -->
                        <div class="col-12 col-lg-5 col-sm-6 order-sm-1 order-lg-0 last-paragraph-no-margin md-margin-40px-bottom xs-margin-25px-bottom d-grid justify-items-center">
                            <img src="template/images/logos/Recurso 3.svg" alt="logo" width="150px"  height="150px" class="margin-30px-bottom"> 
                            <p class="alt-font text-white">
                                Somos una empresa mexicana enfocada y dedicada al área de actividades turística en la Isla de Cozumel y sus alrededores. Somos nativos locales en esta isla los cuales nos permite tener más facilidad de atención directa con los clientes, procurando siempre su bienestar y seguridad.
                            </p>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-2 col-sm-5 offset-sm-1 offset-lg-0 order-sm-4 order-lg-0 xs-margin-25px-bottom">
                            
                        </div>
                        <!-- end footer column -->                    
                        <!-- start footer column -->
                        <div class="col-12 col-lg-4 offset-xl-1 col-lg-4 col-sm-6 order-sm-3 order-lg-0 margin-50px-top">                       
                            <h4 id="info" class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom font-size-2rem">Información de contacto</h3>
                            
                            <p class="text-white" id="tel"><strong>Phone: 9871121002 </strong> </p>
                            <p class="text-white" id="email"><strong>Email: Solintourscozumel@gmail.com </strong> </p>
                            <p class="text-white" id="direc"><strong>Address: Cozumel Q.Roo </strong> </p>
                            <div class="social-icon-style-12">
                                <ul class="extra-small-icon light">
                                    <li><a class="facebook " href="https://www.facebook.com/MonseReb" target="_blank"><i class="fab fa-facebook-f text-white"></i></a></li>
                                    <li><a class="instagram" href="https://www.instagram.com/solin.tours.cozumel/" target="_blank"><i class="fab fa-instagram text-white"></i></a></li>
                                    <li><a class="whatsapp" href="https://www.tiktok.com/@solin.tours.cozumel" target="_blank"><i class="fab fa-tiktok text-white"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- end footer column -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom padding-35px-tb border-top border-width-1px border-color-white-transparent">
                <div class="container"> 
                    <div class="row align-items-center">
                        
                        <div class="col-12 col-md-12 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                            <p class="text-white"><a href="Admin/index.php" class="mx-2"><i class="fas fa-user text-white"></i></a> Solin Tours 2023 &copy; Desarrollado por  <a href="https://www.buho-solutions.com" target="_blank" class="text-white text-tussock text-white-hover font-weight-500">Buho Solutions</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="template/js/jquery.min.js"></script>
        <script type="text/javascript" src="template/js/theme-vendors.min.js"></script>
        <script type="text/javascript" src="template/js/main.js"></script>
    </body>
</html>