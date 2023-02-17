<?php 
    require 'Admin/config.php';

    $sqlForCategory = "SELECT * FROM category";
    $queryFilters = $pdo->prepare($sqlForCategory);
    $queryFilters->execute(); 
    $categories = $queryFilters->fetchAll(PDO::FETCH_OBJ);

    $sqlFortours = "SELECT P.id, P.name, P.cover, F.name AS category, F.slug AS slug_category FROM tours P JOIN category F ON P.category_id = F.id ORDER BY `id` DESC";
    $queryTours = $pdo->prepare($sqlFortours);
    $queryTours->execute(); 
    $tours = $queryTours->fetchAll(PDO::FETCH_OBJ);

?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Solin Tours Cozumel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Somos una empresa mexicana enfocada y dedicada al área de actividades turística en la Isla de Cozumel y sus alrededores. Somos nativos locales en esta isla los cuales nos permite tener más facilidad de atención directa con los clientes, procurando siempre su bienestar y seguridad">
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
                        <a class="navbar-brand" href="index.html">
                            <img src="template/images/logos/Recurso 4.svg" data-at2x="template/images/logos/Recurso 4.svg" alt="" class="default-logo">
                            <img src="template/images/logos/Recurso 1.svg" data-at2x="template/images/logos/Recurso 1.svg" alt="" class="alt-logo">
                            <img src="template/images/logo-black.png" data-at2x="template/images/logo-black@2x.png" alt="" class="mobile-logo">
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
                                    <a href="#intro" class="nav-link">Introducción</a>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#destinos" class="nav-link">Destinos</a>
                                </li>
                                <li class="nav-item dropdown simple-dropdown">
                                    <a href="#paquetes" class="nav-link">Paquetes</a>
                                </li>
                                <li class="nav-item dropdown megamenu">
                                    <a href="#testimonios" class="nav-link">Testimonios</a>
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
        <div class="main-content">
            <!-- start section -->
            <section class="p-0" >
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="swiper-container white-move full-screen p-0 md-h-650px sm-h-500px" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4500, "disableOnInteraction": false },  "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide cover-background" style="background-image:url('https://via.placeholder.com/1920x1080');">
                                    <div class="container h-100">
                                        <div class="row justify-content-center h-100">
                                            <div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">
                                                <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-white text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom">Lorem ipsum</span>
                                                <h1 class="alt-font font-weight-800 title-large text-white text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-90 mx-auto">Lorem ipsum</h1>
                                                <a href="#" class="btn btn-fancy btn-large btn-dark-gray btn-box-shadow align-self-center">Lorem</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide cover-background" style="background-image:url('https://via.placeholder.com/1920x1080');">
                                    <div class="container h-100">
                                        <div class="row justify-content-center h-100">
                                            <div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">
                                                <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-white text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom">Lorem ipsum</span>
                                                <h1 class="alt-font font-weight-800 title-large text-white text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-90 mx-auto">Lorem ipsum</h1>
                                                <a href="#" class="btn btn-fancy btn-large btn-dark-gray btn-box-shadow align-self-center">Lorem</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide cover-background" style="background-image:url('https://via.placeholder.com/1920x1080');">
                                    <div class="container h-100">
                                        <div class="row justify-content-center h-100">
                                            <div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">
                                                <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-white text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom">Lorem ipsum</span>
                                                <h1 class="alt-font font-weight-800 title-large text-white text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-70 mx-auto">Lorem ipsum</h1>
                                                <a href="#" class="btn btn-fancy btn-large btn-dark-gray btn-box-shadow align-self-center">Lorem</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->                          
                            </div>
                            <!-- start slider pagination -->
                            <div class="swiper-pagination swiper-light-pagination d-sm-none"></div>
                            <!-- end slider pagination -->
                            <!-- start slider navigation -->
                            <div class="swiper-button-next-nav swiper-button-next rounded-circle slider-navigation-style-07 d-none d-sm-flex"><i class="feather icon-feather-arrow-right"></i></div>
                            <div class="swiper-button-previous-nav swiper-button-prev rounded-circle slider-navigation-style-07 d-none d-sm-flex"><i class="feather icon-feather-arrow-left"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="bg-light-gray half-section border-bottom border-color-medium-gray">
                <div class="container">
                    <div class="row">
                        <div class="justify-content-center">
                            <h5 class="text-center text-dark">Nuestros valores</h5>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
                        <!-- start feature box item -->
                        <div class="col md-margin-40px-bottom xs-margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="feature-box d-grid feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon  line-height-0px lg-margin-25px-right">
                                    <i class="line-icon-Headset icon-very-medium text-light-gray"></i>
                                </div>
                                <div class="feature-box-content line-height-22px">
                                    <div class="text-slate-blue alt-font font-weight-500 line-height-20px margin-5px-bottom">Atención</div>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col md-margin-40px-bottom xs-margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="feature-box d-grid feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon  line-height-0px lg-margin-25px-right">
                                    <i class="line-icon-Compass-3 icon-very-medium text-light-gray"></i>
                                </div>
                                <div class="feature-box-content line-height-22px">
                                    <div class="text-slate-blue alt-font font-weight-500 line-height-20px margin-5px-bottom">Puntualidad</div>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col xs-margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="feature-box d-grid feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon  line-height-0px lg-margin-25px-right">
                                    <i class="line-icon-Administrator icon-very-medium text-light-gray"></i>
                                </div>
                                <div class="feature-box-content line-height-22px">
                                    <div class="text-slate-blue alt-font font-weight-500 line-height-20px margin-5px-bottom">	Amabilidad</div>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.8s">
                            <div class="feature-box d-grid feature-box-left-icon-middle last-paragraph-no-margin">
                                <div class="feature-box-icon  line-height-0px lg-margin-25px-right">
                                    <i class="line-icon-Coin icon-very-medium text-light-gray"></i>
                                </div>
                                <div class="feature-box-content line-height-22px">
                                    <div class="text-slate-blue alt-font font-weight-500 line-height-20px margin-5px-bottom">Compromiso</div>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item-->
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="bg-light-gray background-position-left-bottom background-no-repeat" >
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 position-relative z-index-1 md-margin-50px-bottom sm-margin-35px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                            <div class="tilt-box" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                                <img src="template/images/home.jpg" alt="" />
                                <!-- <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube absolute-middle-center video-icon-box video-icon-large">
                                    <span>
                                        <span class="video-icon bg-white box-shadow-extra-large">
                                            <i class="icon-simple-line-control-play text-light-gray"></i>
                                            <span class="video-icon-sonar">
                                                <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                                            </span>
                                        </span>
                                    </span>
                                </a> -->
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 offset-lg-1">
                            <h5 class="alt-font font-weight-500 text-extra-dark-gray w-80 margin-45px-bottom letter-spacing-minus-1-half lg-w-90 md-margin-35px-bottom wow animate__fadeInRight" data-wow-delay="0.1s">¿Quiénes <span class="font-weight-700">somos</span> ?</h5>
                            <p>
                                Somos una empresa mexicana enfocada y dedicada al área de actividades turística en la Isla de Cozumel y sus alrededores. Somos nativos locales en esta isla los cuales nos permite tener más facilidad de atención directa con los clientes, procurando siempre su bienestar y seguridad.
                            </p>
                            <h5 class="alt-font font-weight-500 text-extra-dark-gray w-80 margin-45px-bottom letter-spacing-minus-1-half lg-w-90 md-margin-35px-bottom wow animate__fadeInRight" data-wow-delay="0.1s">Experiencia: </h5>
                            <p>
                                Tenemos 3 años en esta área turística obteniendo siempre buenas recomendaciones de nuestros clientes
                            </p>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="bg-light-gray">
                <div class="container">
                    <div class="row margin-6-rem-bottom md-margin-5-rem-bottom align-items-center">
                        <div class="col-12 col-lg-6 col-md-7 text-center text-md-start sm-margin-10px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray text-uppercase margin-5px-bottom letter-spacing-minus-1px">Mejores Destinos</h5>
                            <p class="m-0 d-block">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto</p>
                        </div>
                    </div>
                    <div class="row text-center row-cols-1 row-cols-lg-4 row-cols-sm-2">
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-01 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="interactive-banners-image border-radius-6px bg-dark-slate-blue">
                                <img src="https://via.placeholder.com/500" class="scale" alt="" />
                                <div class="interactive-banners-hover bg-gradient-extra-dark-gray-transparent">
                                    <div class="d-table h-100 w-100">
                                        <div class="d-table-cell align-bottom padding-3-half-rem-tb xs-padding-6-half-rem-tb">
                                            <a href="#" class="rounded-icon bg-neon-orange interactive-banners-icon"><i class="feather icon-feather-arrow-right text-white"></i></a>
                                            <div class="font-weight-500 line-height-normal alt-font text-white text-large interactive-banners-title">Catamarán Cozumel + Beach club</div>
                                            <div class="font-weight-500 line-height-normal alt-font text-uppercase interactive-banners-sub-title"><a href="#" class="text-white text-medium text-decoration-line-bottom">Explorar Tour</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banner item -->
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-01 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                            <div class="interactive-banners-image border-radius-6px bg-dark-slate-blue">
                                <img src="https://via.placeholder.com/500" class="scale" alt="" />
                                <div class="interactive-banners-hover bg-gradient-extra-dark-gray-transparent">
                                    <div class="d-table h-100 w-100">
                                        <div class="d-table-cell align-bottom padding-3-half-rem-tb xs-padding-6-half-rem-tb">
                                            <a href="#" class="rounded-icon bg-neon-orange interactive-banners-icon"><i class="feather icon-feather-arrow-right text-white"></i></a>
                                            <div class="font-weight-500 line-height-normal alt-font text-white text-large interactive-banners-title">Tradicional al cielo lancha</div>
                                            <div class="font-weight-500 line-height-normal alt-font text-uppercase interactive-banners-sub-title"><a href="#" class="text-white text-medium text-decoration-line-bottom">Explorar Tour</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banner item -->
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-01 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="interactive-banners-image border-radius-6px bg-dark-slate-blue">
                                <img src="https://via.placeholder.com/500" class="scale" alt="" />
                                <div class="interactive-banners-hover bg-gradient-extra-dark-gray-transparent">
                                    <div class="d-table h-100 w-100">
                                        <div class="d-table-cell align-bottom padding-3-half-rem-tb xs-padding-6-half-rem-tb">
                                            <a href="#" class="rounded-icon bg-neon-orange interactive-banners-icon"><i class="feather icon-feather-arrow-right text-white"></i></a>
                                            <div class="font-weight-500 line-height-normal alt-font text-white text-large interactive-banners-title">Clear boat Cozumel</div>
                                            <div class="font-weight-500 line-height-normal alt-font text-uppercase interactive-banners-sub-title"><a href="#" class="text-white text-medium text-decoration-line-bottom">Explorar Tour</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banner item -->
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-01 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.5s">
                            <div class="interactive-banners-image border-radius-6px bg-dark-slate-blue">
                                <img src="https://via.placeholder.com/500" class="scale" alt="" />
                                <div class="interactive-banners-hover bg-gradient-extra-dark-gray-transparent">
                                    <div class="d-table h-100 w-100">
                                        <div class="d-table-cell align-bottom padding-3-half-rem-tb xs-padding-6-half-rem-tb">
                                            <a href="" class="rounded-icon bg-neon-orange interactive-banners-icon">
                                                <i class="feather icon-feather-arrow-right text-white"></i>
                                            </a>
                                            <div class="font-weight-500 line-height-normal alt-font text-white text-large interactive-banners-title">Chichen Itza Delux</div>
                                            <div class="font-weight-500 line-height-normal alt-font text-uppercase interactive-banners-sub-title"><a href="#" class="text-white text-medium text-decoration-line-bottom">Explorar Tour</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banner item -->
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-01 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="interactive-banners-image border-radius-6px bg-dark-slate-blue">
                                <img src="https://via.placeholder.com/500" class="scale" alt="" />
                                <div class="interactive-banners-hover bg-gradient-extra-dark-gray-transparent">
                                    <div class="d-table h-100 w-100">
                                        <div class="d-table-cell align-bottom padding-3-half-rem-tb xs-padding-6-half-rem-tb">
                                            <a href="#" class="rounded-icon bg-neon-orange interactive-banners-icon"><i class="feather icon-feather-arrow-right text-white"></i></a>
                                            <div class="font-weight-500 line-height-normal alt-font text-white text-large interactive-banners-title">Tulum casa tortuga</div>
                                            <div class="font-weight-500 line-height-normal alt-font text-uppercase interactive-banners-sub-title"><a href="#" class="text-white text-medium text-decoration-line-bottom">Explorar Tour</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banner item -->
                        
                        <!-- start interactive banner item -->
                        <div class="col interactive-banners-style-01 xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="interactive-banners-image border-radius-6px bg-dark-slate-blue">
                                <img src="https://via.placeholder.com/500" class="scale" alt="" />
                                <div class="interactive-banners-hover bg-gradient-extra-dark-gray-transparent">
                                    <div class="d-table h-100 w-100">
                                        <div class="d-table-cell align-bottom padding-3-half-rem-tb xs-padding-6-half-rem-tb">
                                            <a href="#" class="rounded-icon bg-neon-orange interactive-banners-icon"><i class="feather icon-feather-arrow-right text-white"></i></a>
                                            <div class="font-weight-500 line-height-normal alt-font text-white text-large interactive-banners-title">Buceo para principiantes</div>
                                            <div class="font-weight-500 line-height-normal alt-font text-uppercase interactive-banners-sub-title"><a href="#" class="text-white text-medium text-decoration-line-bottom">Explorar Tour</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banner item -->
                    </div>
                </div>
            </section>
            <!-- end section -->
            
            <!-- start page title -->
            <section class="half-section2 bg-light-gray parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg2.jpg');">
                <div class="container">
                    <div class="row align-items-stretch justify-content-center extra-small-screen">
                        <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                            <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom text-uppercase">Tours</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end page title -->
            <!-- start section -->
            <section class="padding-four-lr bg-light-gray no-padding-top lg-padding-two-lr sm-no-padding-lr">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <!-- start filter navigation -->
                            <ul class="portfolio-filter grid-filter nav nav-tabs justify-content-center border-0 text-uppercase font-weight-500 alt-font padding-6-rem-bottom md-padding-4-half-rem-bottom sm-padding-2-rem-bottom">
                                <li class="nav active"><a data-filter="*" href="#">Todos</a></li>
                                <?php foreach ($categories as $category) : ?>
                                    <li class="nav"><a data-filter=".<?php echo $category->slug ?>" href="#"> <?php echo $category->name ?> </a></li>
                                <?php endforeach ?>
                            </ul>
                            <!-- end filter navigation -->
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 filter-content">
                            <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <?php foreach ($tours as $tour): ?>
                                    <li class="grid-item <?php echo $tour->slug_category ?> wow animate__fadeIn">
                                    <div class="portfolio-box border-radius-6px box-shadow-large">
                                        <div class="portfolio-image bg-gradient-magenta-orange">
                                            <img src="Admin/assets/images/tours/<?php  echo $tour->cover ?>" alt="<?php echo $tour->name ?>" width="277px" height="222px" />
                                            <div class="portfolio-hover align-items-center justify-content-center d-flex h-100">
                                                <div class="portfolio-icon">
                                                    <a href="Admin/assets/images/tours/<?php  echo $tour->cover ?>" data-group="portfolio-items" class="lightbox-group-gallery-item text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-search icon-very-small" aria-hidden="true"></i></a>
                                                    <a href="single_project.php?id=<?php echo $tour->id ?>" class="text-slate-blue text-slate-blue-hover rounded-circle bg-white"><i class="fas fa-link icon-very-small" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio-caption h-120px bg-white padding-30px-tb lg-padding-20px-tb">
                                            <a href="single-project-page-01.html"><span class="alt-font text-extra-dark-gray font-weight-500"><?php echo $tour->name ?></span></a>
                                            <span class="text-medium d-block margin-one-bottom"><?php echo $tour->category ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            
            <!-- start section -->
            <section class="border-top border-color-medium-gray bg-light-gray">
                <div class="container">
                    <div class="row margin-5-half-rem-bottom align-items-center">
                        <div class="col-12 col-lg-6 col-md-7 text-center text-md-start sm-margin-10px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px text-uppercase margin-5px-bottom">Paquetes Populares</h5>
                            <p class="m-0 d-block">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12 position-relative p-0 wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="swiper-container h-auto padding-15px-all black-move" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav-3", "prevEl": ".swiper-button-previous-nav-3" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 2 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    <!-- start info banner slider item -->
                                    <div class="swiper-slide box-shadow-small box-shadow-extra-large-hover">
                                        <a href="#"><img class="w-100" src="https://via.placeholder.com/525x431" alt="" /></a>
                                        <div class="position-relative bg-white padding-3-rem-all md-padding-4-rem-lr">
                                            <div class="bg-client3 text-small font-weight-500 alt-font text-white text-uppercase position-absolute top-minus-15px right-0px padding-5px-tb padding-20px-lr"></div>
                                            <span class="text-medium text-uppercase d-block margin-5px-bottom">Catamarán + beach club Playa Mía</span>
                                            <a href="#" class="alt-font font-weight-500 d-block margin-30px-bottom line-height-24px text-extra-dark-gray text-neon-orange-hover d-block">Ver mas</a>
                                        </div>
                                    </div>
                                    <!-- end info banner slider item -->
                                    <!-- start info banner slider item -->
                                    <div class="swiper-slide box-shadow-small box-shadow-extra-large-hover">
                                        <a href="#"><img class="w-100" src="https://via.placeholder.com/525x431" alt="" /></a>
                                        <div class="position-relative bg-white padding-3-rem-all md-padding-4-rem-lr">
                                            <div class="bg-client3 text-small font-weight-500 alt-font text-white text-uppercase position-absolute top-minus-15px right-0px padding-5px-tb padding-20px-lr"></div>
                                            <span class="text-medium text-uppercase d-block margin-5px-bottom">Catamarán + Fury beach</span>
                                            <a href="#" class="alt-font font-weight-500 d-block margin-30px-bottom line-height-24px text-extra-dark-gray text-neon-orange-hover d-block">Ver mas</a>
                                        </div>
                                    </div>
                                    <!-- end info banner slider item -->
                                    <!-- start info banner slider item -->
                                    <!-- <div class="swiper-slide box-shadow-small box-shadow-extra-large-hover">
                                        <a href="#"><img src="https://via.placeholder.com/525x431" alt="" /></a>
                                        <div class="position-relative bg-white padding-3-rem-all md-padding-4-rem-lr">
                                            <div class="bg-client3 text-small font-weight-500 alt-font text-white text-uppercase position-absolute top-minus-15px right-0px padding-5px-tb padding-20px-lr">From $700</div>
                                            <span class="text-medium text-uppercase d-block margin-5px-bottom">Lorem</span>
                                            <a href="#" class="alt-font font-weight-500 d-block margin-30px-bottom line-height-24px text-extra-dark-gray text-neon-orange-hover d-block">Lorem ipsum</a>
                                        </div>
                                    </div> -->
                                    <!-- end info banner slider item -->
                                </div> 
                            </div>
                            <div class="swiper-button-next-nav-3 swiper-button-next rounded-circle light slider-navigation-style-07 box-shadow-double-large" tabindex="0" role="button" aria-label="Next slide"><i class="feather icon-feather-arrow-right"></i></div>
                            <div class="swiper-button-previous-nav-3 swiper-button-prev rounded-circle light slider-navigation-style-07 box-shadow-double-large" tabindex="0" role="button" aria-label="Previous slide"><i class="feather icon-feather-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            
            <!-- start section -->
            <section class="border-top border-color-medium-gray bg-gradient-white-light-gray">
                <div class="container">
                    <div class="row margin-5-rem-bottom xs-margin-4-rem-bottom align-items-center">
                        <div class="col-12 col-lg-6 col-md-7 text-center text-md-start sm-margin-10px-bottom wow animate__fadeIn">
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px text-uppercase margin-5px-bottom">Mejores Testimonios</h5>
                            <p class="m-0 d-block">Lorem ipsum</p>
                        </div>
                        
                    </div>
                    <div class="row margin-6-rem-bottom xs-margin-2-half-rem-bottom">
                        <div class="col-12 p-0 wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="swiper-simple-arrow-style-1">
                                <div class="swiper-container padding-15px-all black-move" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav-4", "prevEl": ".swiper-button-previous-nav-4" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay":{ "delay": 3000, "disableOnInteraction": false },  "breakpoints": { "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                                    <div class="swiper-wrapper">
                                        <!-- start testimonial item -->
                                        <div class="swiper-slide text-center">
                                            <div class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white box-shadow-small border-radius-6px last-paragraph-no-margin lg-padding-2-half-rem-all">
                                                <div class="feature-box-icon margin-25px-right">
                                                    <img class="rounded-circle w-65px h-65px" src="https://via.placeholder.com/125x125" alt="Herman Miller"/>
                                                </div>
                                                <div class="feature-box-content">
                                                    <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px">Adriana Sanchez</div>
                                                    <span class="text-small"></span>
                                                </div>
                                                <p class="margin-30px-top text-justify">
                                                    Volveríamos una y otra vez!! Enamorada de cozumel, el servicio de tour en catamaran, increíble el capitán y todo el personal que nos atendieron abordo fue realmente excelente!!.
                                                    Diversión para todos desde nuestra pequeña hasta para nosotros y sin olvidar darte el agradecimiento a Montserray que sin duda alguna una persona que ama su trabajó!! Gracias por todo,
                                                    por siempre estar pendiente y coordinar nuestro tour Mil gracias por todo! Definitivamente altamente recomendaos y volveremos pronto! 
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end testimonial item -->
                                        <!-- start testimonial item -->
                                        <div class="swiper-slide text-center">
                                            <div class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white box-shadow-small border-radius-6px last-paragraph-no-margin lg-padding-2-half-rem-all">
                                                <div class="feature-box-icon margin-20px-right">
                                                    <img class="rounded-circle w-65px h-65px" src="https://via.placeholder.com/125x125" alt="Jeremy Girard"/>
                                                </div>
                                                <div class="feature-box-content">
                                                    <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px">Berenice Díaz</div>
                                                </div>
                                                <p class="margin-30px-top text-justify">
                                                    Excelente atención! Mi esposo y yo quedamos encantados con el servicio, después de mil tours que investigamos ninguno nos daba la confianza como lo hizo Monze y su equipo desde el momento que la contacté!
                                                    y la experiencia de hacer Snorkel en los arrecifes, el Cielo y Cielito fue increíble Mil gracias!!
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end testimonial item -->
                                        <!-- start testimonial item -->
                                        <div class="swiper-slide text-center">
                                            <div class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white box-shadow-small border-radius-6px last-paragraph-no-margin lg-padding-2-half-rem-all">
                                                <div class="feature-box-icon margin-20px-right">
                                                    <img class="rounded-circle w-65px h-65px" src="https://via.placeholder.com/125x125" alt="Jeremy Girard"/>
                                                </div>
                                                <div class="feature-box-content">
                                                    <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px">Nelda Lerma</div>
                                                </div>
                                                <p class="margin-30px-top text-justify">
                                                    Súper recomendados!! Me la puse increíble en mi cumpleaños con mi familia disfrutando de este hermoso tour. Todo súper padre. Nuestro capitán se llamaba
                                                    Marcos y el guía Luis. Súper animados y un excelente servicio. Muchísimas gracias por ayudarme a tener un cumpleaños inolvidable.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end testimonial item -->
                                        <!-- start testimonial item -->
                                        <div class="swiper-slide text-center">
                                            <div class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white box-shadow-small border-radius-6px last-paragraph-no-margin lg-padding-2-half-rem-all">
                                                <div class="feature-box-icon margin-20px-right">
                                                    <img class="rounded-circle w-65px h-65px" src="https://via.placeholder.com/125x125" alt="Jeremy Girard"/>
                                                </div>
                                                <div class="feature-box-content">
                                                    <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px">Jesus Alonso</div>
                                                    <span class="text-small">Google Marketing</span>
                                                </div>
                                                <p class="margin-30px-top text-justify">
                                                    Un tour muy completo una logística excelente y la atención que brinda su personal increible, es un paseo que te muestra lo hermoso que es Cozumel y la mejor manera de recorrerlo sin dañar el paraíso coral 
                                                    y sus aguas color turquesa... lo único malo es cuando termina el tour y tienes que regresar a tu hotel pero simplemente, siempre hay un fin, lo recomiendo ampliamente!. 
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end testimonial item -->
                                    </div>
                                </div>
                                <!-- start slider navigation -->
                                <!--<div class="swiper-button-next-nav-4 swiper-button-next slider-navigation-style-01 light box-shadow-double-large"><i class="feather icon-feather-arrow-right"></i></div>
                                    <div class="swiper-button-previous-nav-4 swiper-button-prev slider-navigation-style-01 light box-shadow-double-large"><i class="feather icon-feather-arrow-left"></i></div>-->
                                <!-- end slider navigation -->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- end section -->
            <!-- start section -->
            <section class="cover-background overlap-height" style="background-image:url('template/images/Imagen1.jpg');">
                <div class="opacity-extra-medium bg-dark-slate-blue"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-6 col-lg-7 col-sm-8 text-center z-index-1 overlap-gap-section wow animate__fadeIn" data-wow-delay="0.4s">
                            <span class="line-icon-Summer icon-extra-large text-white margin-30px-bottom"></span>
                            <h4 class="alt-font font-weight-500 text-white letter-spacing-minus-1px margin-35px-bottom xs-margin-25px-bottom">Lorem Ipsum es simplemente  <span class="font-weight-600">el texto de relleno.</span></h4>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            
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
                        <div class="col-12 col-lg-4 offset-xl-1 col-lg-4 col-sm-6 order-sm-3 order-lg-0">                       
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