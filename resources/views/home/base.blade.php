<!DOCTYPE html>
<html lang="es">
<!-- Mirrored from pixner.net/golftio/main/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 19:08:52 GMT -->
<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- #title -->
    <title>CLUB TENNIS| Iquitos</title>
    <!-- #keywords -->
    <meta name="keywords" content="Golf, Golftio">
    <!-- #description -->
    <meta name="description" content="Club Tennis de Iquitos">

    

    <!-- ==== css dependencies start ==== -->
    <!-- bootstrap five css -->
    {{-- <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css"> --}}
    <!-- font awesome six css -->


    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <!-- glyphter css -->
    <link rel="stylesheet" href="assets/vendor/glyphter/css/golftio.css">
    <!-- nice select css -->
    <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/vendor/magnific-popup/css/magnific-popup.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/vendor/slick/css/slick.css">
    <!-- odometer css -->
    <link rel="stylesheet" href="assets/vendor/odometer/css/odometer.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/vendor/animate/animate.css"> 

    <!-- ==== / css dependencies end ==== -->

    <!-- main css -->
    <link rel="stylesheet" href="assets/css/main.css">


    {{-- CSS de bootstrap solitos --}}
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
</head>

<body>

     {{-- <!-- Modal -->
  <div class="modal fade" id="modalMensaje" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Mensaje</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Este es el contenido del modal
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div> --}}



       {{-- Ventan Login --}}
       <form action="" method="POST">@csrf
        <!-- Modal -->
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inicie Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Usuario</label>
                    <input type="text" class="form form-control" name="name" id="name">
                    <label for="">Contraseña</label>
                    <input type="password" class="form form-control" name="password" id="password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </div>
  
            </div>
            </div>
        </div>
      </form>
    {{-- End Ventana Login --}}

    <!-- ==== preloader start ==== -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>

                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>

                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>

                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>

                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>

                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>

                    <span data-text-preloader="G" class="letters-loading">
                        G
                    </span>
                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- ==== / preloader end ==== -->

    <!-- ==== header start ==== -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="nav">
                        <div class="nav__content">
                            <div class="nav__logo">
                                <a href="index.html">
                                    <img src="assets/images/pelota_tennis.png" style="height: 55px;width:55px;" alt="Logo">
                                    CLUB TENNIS
                                </a>
                            </div>
                            <div class="nav__menu">
                                <div class="nav__menu-logo d-flex d-xl-none">
                                    <a href="index.html" class="text-center hide-nav">
                                        <img src="assets/images/pelota_tennis.png"  style="height: 55px;width:55px;" alt="Logo">
                                    </a>
                                    <a href="javascript:void(0)" class="nav__menu-close">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </div>

                                <ul class="nav__menu-items">
                                    <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                            Inicio
                                        </a>

                                    </li>
                                    <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                            Nosotros
                                        </a>
                                        <ul class="nav__dropdown">
                                            <li>
                                                <a class="nav__dropdown-item hide-nav" href="#">Misión y Visión</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav"
                                                    href="#">Historia</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav__menu-item nav__menu-item--dropdown">
                                        <a href="javascript:void(0)" class="nav__menu-link nav__menu-link--dropdown">
                                            Eventos
                                        </a>
                                        <ul class="nav__dropdown">
                                            <li>
                                                <a class="nav__dropdown-item hide-nav"
                                                    href="training.html">Actividad Dia de la Madre</a>
                                            </li>
                                            <li>
                                                <a class="nav__dropdown-item hide-nav"
                                                    href="training-details.html">Campeonato Tennis Junior</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav__menu-item d-block d-md-none">
                                        {{-- <a id="btnLogin" class="cmn-button cmn-button--secondary">Ingresar</a> --}}
                                        {{-- <a href="sign-up.html" class="cmn-button">Sign Up</a> --}}
                                    </li>
                                </ul>
                                <div class="social">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="nav__uncollapsed">
                                <a href="cart.html" class="cart">
                                    <i class="golftio-cart"></i>
                                </a>
                                <div class="nav__uncollapsed-item d-none d-md-flex">
                                    <a id="btnLogin" class="cmn-button cmn-button--secondary">Ingresar</a>
                                    {{-- <a href="sign-up.html" class="cmn-button">Sign Up</a> --}}
                                </div>

                                <button class="nav__bar d-block d-xl-none">
                                    <span class="icon-bar top-bar"></span>
                                    <span class="icon-bar middle-bar"></span>
                                    <span class="icon-bar bottom-bar"></span>
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="backdrop"></div>
    </header>
    <!-- ==== / header end ==== -->

    <!-- ==== banner section start ==== -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="banner__content wow fadeInUp" data-wow-duration="0.4s">
                        <h5 class="banner__content-sub-title">Obtén una experiencia única</h5>
                        <h1 class="banner__content-title">Explota tus habilidades en campeonatos</h1>
                        <p class="primary-text banner__content-text">Nuestro Staff siempre dedicado .</p>
                        <div class="banner__content-cta">
                            <a href="join-club.html" class="cmn-button">Unirme al Club</a>
                            <a href="about-us.html" class="cmn-button cmn-button--secondary">Nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / banner section end ==== -->

    <!-- ==== overview section start ==== -->
    <div class="overview section section--space-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-10 col-xxl-9 order-last order-xl-first">
                    <div class="overview__inner wow fadeInUp" data-wow-duration="0.4s">
                        <div class="row section__row">
                            <div class="col-sm-6 col-lg-3 section__col">
                                <div class="overview__inner-card">
                                    <div class="overview__inner-card__icon">
                                        <i class="golftio-ball"></i>
                                    </div>
                                    <div class="overview__inner-card__content">
                                        <h5><a href="training-details.html">Prácticas de Tennis</a></h5>
                                        <p class="secondary-text">Clases de Tennis Personalizadas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 section__col">
                                <div class="overview__inner-card">
                                    <div class="overview__inner-card__icon">
                                        <i class="golftio-shot-great-upper"></i>
                                    </div>
                                    <div class="overview__inner-card__content">
                                        <h5><a href="training-details.html">Campeonatos</a></h5>
                                        <p class="secondary-text">Campeonatos con premios</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 section__col">
                                <div class="overview__inner-card">
                                    <div class="overview__inner-card__icon">
                                        <i class="golftio-gym"></i>
                                    </div>
                                    <div class="overview__inner-card__content">
                                        <h5><a href="training-details.html">Gimnasio</a></h5>
                                        <p class="secondary-text">Gimnasio con los mejores equipos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 section__col">
                                <div class="overview__inner-card">
                                    <div class="overview__inner-card__icon">
                                        <i class="golftio-flag"></i>
                                    </div>
                                    <div class="overview__inner-card__content">
                                        <h5><a href="training-details.html">Eventos</a></h5>
                                        <p class="secondary-text">Otros Eventos deportivos</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-xxl-3 d-none d-xl-block">
                    <div class="overview__thumb text-center">
                        <img src="assets/images/golf-ball.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / overview section end ==== -->

    <!-- ==== about section start ==== -->
    <section class="section about">
        <div class="container">
            <div class="row section__row align-items-center">
                <div class="col-lg-6 col-xl-5 section__col order-last order-lg-first">
                    <div class="about__thumb dir-rtl wow fadeInUp" data-wow-duration="0.4s">
                        <img src="assets/images/about-thumb.png" alt="Image" class="unset">
                        
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1 section__col">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">About us</h5>
                        <h2 class="section__content-title">Canchas Sintéticas Nuevas</h2>
                        <p class="section__content-text">Tenemos muchos beneficios para los socios, canchas de fulbito,
                            basket, tennis, gimnasio  mucho más.</p>
                        <div class="about__section-inner">
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class="golftio-flag"></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>Professional Team</h5>
                                    <p class="secondary-text">Modern & latest equipment with expert coaching</p>
                                </div>
                            </div>
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class="golftio-shot-great-upper"></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>Professional Trainings</h5>
                                    <p class="secondary-text">Modern & latest equipment with expert coaching</p>
                                </div>
                            </div>
                            <div class="about__section-inner__single">
                                <div class="about__section-inner__single-thumb">
                                    <i class="golftio-sticks"></i>
                                </div>
                                <div class="about__section-inner__single-content">
                                    <h5>Practice Facilities</h5>
                                    <p class="secondary-text">Modern & latest equipment with expert coaching</p>
                                </div>
                            </div>
                        </div>
                        <div class="section__content-cta">
                            <a href="about-us.html" class="cmn-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / about section end ==== -->

    <!-- ==== club section start ==== -->
    <section class="section club" data-background="assets/images/flag-bg.png">
        <div class="container">
            <div class="row section__row">
                <div class="col-lg-6 section__col">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">Club View</h5>
                        <h2 class="section__content-title">Play and enjoy our club for free</h2>
                        <p class="section__content-text">We offer a lot of courses of varying difficulty and beautiful
                            scenery that golfers of all skill levels can enjoy. You will learn golf from professionals
                            with our competent and experienced staff. You will have a great fun with our magnificent
                            illuminated field.</p>
                        <div class="section__content-inner">
                            <ul>
                                <li><i class="golftio-pin-checked"></i>300+ Golf Competitions</li>
                                <li><i class="golftio-pin-checked"></i>Proficient on Golf</li>
                                <li><i class="golftio-pin-checked"></i>Amateur Championships</li>
                                <li><i class="golftio-pin-checked"></i>Individual Support </li>
                            </ul>
                        </div>
                        <div class="section__content-cta">
                            <a href="join-club.html" class="cmn-button">Join Our Club</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-xl-5 offset-xl-1 section__col d-none d-lg-block">
                    <div class="club__thumb wow fadeInUp" data-wow-duration="0.4s">
                        <img src="assets/images/club-thumb.png" alt="Image" class="unset">
                        <div class="club__thumb-experience">
                            <h3><span class="odometer" data-odometer-final="30"></span> <span>+</span></h3>
                            <p>Years <br> of experience</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ==== / club section end ==== -->

    <!-- ==== training section start ==== -->
    <section class="section training wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        {{-- <h5 class="section__header-sub-title">Trainings</h5> --}}
                        <h2 class="section__header-title">Noticias</h2>
                        <p>Noticias Importantes </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-12">
                    <div class="training__slider">
                        <div class="training__slider-single">
                            <div class="training__slider-single__thumb">
                                <a href="training-details.html"><img src="assets/images/training/one.png"
                                        alt="Image"></a>
                                {{-- <div class="training__slider-single__thumb-small">
                                    <i class="golftio-shot-down"></i>
                                </div> --}}
                            </div>
                            <div class="training__slider-single__content">
                                <h5>Body Position</h5>
                                <p class="secondary-text">We teach you how to get the right body position in the
                                    strokes. You can contact us for any question you may have about this course.</p>
                                <a href="training-details.html" class="cmn-button">View more</a>
                            </div>
                        </div>
                        <div class="training__slider-single">
                            <div class="training__slider-single__thumb">
                                <a href="training-details.html"><img src="assets/images/training/two.png"
                                        alt="Image"></a>
                                <div class="training__slider-single__thumb-small">
                                    <i class="golftio-shot-upper"></i>
                                </div>
                            </div>
                            <div class="training__slider-single__content">
                                <h5>Body Rotation</h5>
                                <p class="secondary-text">We teach you how to get the right body position in the
                                    strokes. You can contact us for any question you may have about this course.</p>
                                <a href="training-details.html" class="cmn-button">View more</a>
                            </div>
                        </div>
                        <div class="training__slider-single">
                            <div class="training__slider-single__thumb">
                                <a href="training-details.html"><img src="assets/images/training/three.png"
                                        alt="Image"></a>
                                {{-- <div class="training__slider-single__thumb-small">
                                    <i class="golftio-shot-done"></i>
                                </div> --}}
                            </div>
                            <div class="training__slider-single__content">
                                <h5>Chip Shot</h5>
                                <p class="secondary-text">We teach you how to get the right body position in the
                                    strokes. You can contact us for any question you may have about this course.</p>
                                <a href="training-details.html" class="cmn-button">View more</a>
                            </div>
                        </div>
                        <div class="training__slider-single">
                            <div class="training__slider-single__thumb">
                                <a href="training-details.html"><img src="assets/images/training/one.png"
                                        alt="Image"></a>
                                {{-- <div class="training__slider-single__thumb-small">
                                    <i class="golftio-shot-down"></i>
                                </div> --}}
                            </div>
                            <div class="training__slider-single__content">
                                <h5>Body Position</h5>
                                <p class="secondary-text">We teach you how to get the right body position in the
                                    strokes. You can contact us for any question you may have about this course.</p>
                                <a href="training-details.html" class="cmn-button">View more</a>
                            </div>
                        </div>
                        <div class="training__slider-single">
                            <div class="training__slider-single__thumb">
                                <a href="training-details.html"><img src="assets/images/training/two.png"
                                        alt="Image"></a>
                                {{-- <div class="training__slider-single__thumb-small">
                                    <i class="golftio-shot-upper"></i>
                                </div> --}}
                            </div>
                            <div class="training__slider-single__content">
                                <h5>Body Rotation</h5>
                                <p class="secondary-text">We teach you how to get the right body position in the
                                    strokes. You can contact us for any question you may have about this course.</p>
                                <a href="training-details.html" class="cmn-button">View more</a>
                            </div>
                        </div>
                        <div class="training__slider-single">
                            <div class="training__slider-single__thumb">
                                <a href="training-details.html"><img src="assets/images/training/three.png"
                                        alt="Image"></a>
                                <div class="training__slider-single__thumb-small">
                                    <i class="golftio-shot-done"></i>
                                </div>
                            </div>
                            <div class="training__slider-single__content">
                                <h5>Chip Shot</h5>
                                <p class="secondary-text">We teach you how to get the right body position in the
                                    strokes. You can contact us for any question you may have about this course.</p>
                                <a href="training-details.html" class="cmn-button">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-navigation">
                        <button class="next-training cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button class="prev-training cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / training section end ==== -->

    <!-- ==== counter section start ==== -->
    {{-- <section class="section counter">
        <div class="container">
            <div class="row section__row">
                <div class="col-sm-6 col-lg-3 section__col">
                    <div class="counter__card">
                        <div class="counter__card-thumb">
                            <i class="golftio-users"></i>
                        </div>
                        <div class="counter__card-content">
                            <h2><span class="odometer" data-odometer-final="850"></span> <span>+</span></h2>
                            <p class="primary-text">Active Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 section__col">
                    <div class="counter__card">
                        <div class="counter__card-thumb">
                            <i class="golftio-shot-ground"></i>
                        </div>
                        <div class="counter__card-content">
                            <h2><span class="odometer" data-odometer-final="70"></span> <span>+</span></h2>
                            <p class="primary-text">Professional Trainer</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 section__col">
                    <div class="counter__card">
                        <div class="counter__card-thumb">
                            <i class="golftio-trophy"></i>
                        </div>
                        <div class="counter__card-content">
                            <h2><span class="odometer" data-odometer-final="50"></span> <span>+</span></h2>
                            <p class="primary-text">Award Winning</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 section__col">
                    <div class="counter__card">
                        <div class="counter__card-thumb">
                            <i class="golftio-user-shield"></i>
                        </div>
                        <div class="counter__card-content">
                            <h2><span class="odometer" data-odometer-final="60"></span> <span>+</span></h2>
                            <p class="primary-text">Available Field</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==== / counter section end ==== -->

    <!-- ==== pricing section start ==== -->
    {{-- <section class="section pricing wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-lg-6 col-xl-7">
                    <div class="section__header">
                        <h5 class="section__header-sub-title">Pricing Plan</h5>
                        <h2 class="section__header-title">Exclusive offer
                            Choose our offer now</h2>
                        <p>Golftio Sports Club is a golf club with a history that goes back to XX century. From a
                            cricket club to soccer tournaments,</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center section__row">
                <div class="col-sm-10 col-md-6 col-lg-4 section__col">
                    <div class="pricing__card">
                        <div class="pricing__card-head">
                            <h2><span class="primary-text">$</span>59<span class="primary-text">/Mo</span></h2>
                            <h5>Junior</h5>
                            <p class="secondary-text">Persons aged 18 and under.</p>
                            <div class="pricing__card-head__thumb">
                                <i class="golftio-shot-down"></i>
                            </div>
                        </div>
                        <div class="pricing__card-body">
                            <ul>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>Weekday</li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>9 hole course</li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>10% Discount </li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>One-time free training
                                </li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>100 free balls per day
                                </li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>Course and facility access
                                </li>
                            </ul>
                        </div>
                        <div class="pricing__card-cta">
                            <a href="join-club.html" class="cmn-button">Get Membership</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4 section__col">
                    <div class="pricing__card">
                        <div class="pricing__card-head">
                            <h2><span class="primary-text">$</span>99<span class="primary-text">/Mo</span></h2>
                            <h5>Intermediate</h5>
                            <p class="secondary-text">For adults over 25 years.</p>
                            <div class="pricing__card-head__thumb">
                                <i class="golftio-shot-upper"></i>
                            </div>
                        </div>
                        <div class="pricing__card-body">
                            <ul>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>Weekend Seasonal</li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>18 hole course</li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>15% Discount </li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>3+ free training
                                </li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>200 free balls per day
                                </li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>Course and facility access
                                </li>
                            </ul>
                        </div>
                        <div class="pricing__card-cta">
                            <a href="join-club.html" class="cmn-button">Get Membership</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4 section__col">
                    <div class="pricing__card">
                        <div class="pricing__card-head">
                            <h2><span class="primary-text">$</span> 199<span class="primary-text">/Mo</span></h2>
                            <h5>Professional</h5>
                            <p class="secondary-text">For adults over 30+ years.</p>
                            <div class="pricing__card-head__thumb">
                                <i class="golftio-shot-ground"></i>
                            </div>
                        </div>
                        <div class="pricing__card-body">
                            <ul>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>Weekday</li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>30 hole course</li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>30% Discount </li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>5+ free training
                                </li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>500 free balls per day
                                </li>
                                <li class="secondary-text"><i class="golftio-pin-checked"></i>Course and facility access
                                </li>
                            </ul>
                        </div>
                        <div class="pricing__card-cta">
                            <a href="join-club.html" class="cmn-button">Get Membership</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==== / pricing section end ==== -->

    <!-- ==== testimonial section start ==== -->
    <section class="section testimonial wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        {{-- <h5 class="section__header-sub-title">Testimonial</h5> --}}
                        <h2 class="section__header-title">Testimonios</h2>
                        <p>Comentarios de nuestros socios acerca del club</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-12">
                    <div class="testimonial__slider">
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>Las canchas son muy limpias y nuevas, el servicio es excelente</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assets/images/testimonial/one.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Jenelia D'suza</h6>
                                    <p class="secondary-text">Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>Tienen de todo el gimnasio siempre esta impecable hay entrenadores para asesorarte en los deportes más populares.</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assets/images/testimonial/two.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Sarika Paleccha</h6>
                                    <p class="secondary-text">Player</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>Excelente club todo es placer</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assets/images/testimonial/three.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Brad Hogds</h6>
                                    <p class="secondary-text">Junior Player</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assets/images/testimonial/one.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Jenelia D'suza</h6>
                                    <p class="secondary-text">Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assets/images/testimonial/two.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Sarika Paleccha</h6>
                                    <p class="secondary-text">Player</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__slider-card">
                            <div class="testimonial__slider-card__body">
                                <div class="testimonial__slider-card__body-review">
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                    <i class="golftio-star"></i>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in</p>
                            </div>
                            <div class="testimonial__slider-card__author">
                                <div class="testimonial__slider-card__author-thumb">
                                    <img src="assets/images/testimonial/three.png" alt="Image">
                                </div>
                                <div class="testimonial__slider-card__author-info">
                                    <h6>Brad Hogds</h6>
                                    <p class="secondary-text">Junior Player</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-navigation">
                        <button class="next-testimonial cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button class="prev-testimonial cmn-button cmn-button--secondary">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / testimonial section end ==== -->

    <!-- ==== shop section start ==== -->
    <section class="section shop wow fadeInUp" data-wow-duration="0.4s" data-background=".png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h5 class="section__header-sub-title">Professional shop</h5>
                        <h2 class="section__header-title">Featured products</h2>
                        <p>Golftio Sports Club is a golf club with a history that goes back to XX century. From a
                            cricket club to soccer tournaments,</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center section__row">
                <div class="col-sm-10 col-md-6 col-xl-4 section__col">
                    <div class="shop__card">
                        <div class="shop__card-thumb">
                            <a href="product-details.html">
                                <img src="assets/images/shop/stick.png" alt="Image">
                            </a>
                        </div>
                        <div class="shop__card-info">
                            <h5><a href="product-details.html">Training Stick</a></h5>
                            <p>$165.00 <span>$252.00</span></p>
                        </div>
                        <div class="shop__card-review">
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                        </div>
                        <div class="shop__card-cta">
                            <a href="cart.html" class="cmn-button">Add Cart</a>
                            <a href="sign-up.html" class="cmn-button cmn-button--secondary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-xl-4 section__col">
                    <div class="shop__card">
                        <div class="shop__card-thumb">
                            <a href="product-details.html">
                                <img src="assets/images/shop/ball.png" alt="Image">
                            </a>
                        </div>
                        <div class="shop__card-info">
                            <h5><a href="product-details.html">Golf Ball</a></h5>
                            <p>$165.00 <span>$252.00</span></p>
                        </div>
                        <div class="shop__card-review">
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                        </div>
                        <div class="shop__card-cta">
                            <a href="cart.html" class="cmn-button">Add Cart</a>
                            <a href="sign-up.html" class="cmn-button cmn-button--secondary">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-xl-4 section__col">
                    <div class="shop__card">
                        <div class="shop__card-thumb">
                            <a href="product-details.html">
                                <img src="assets/images/shop/gloves.png" alt="Image">
                            </a>
                        </div>
                        <div class="shop__card-info">
                            <h5><a href="product-details.html">White Gloves</a></h5>
                            <p>$165.00 <span>$252.00</span></p>
                        </div>
                        <div class="shop__card-review">
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                            <i class="golftio-star"></i>
                        </div>
                        <div class="shop__card-cta">
                            <a href="cart.html" class="cmn-button">Add Cart</a>
                            <a href="sign-up.html" class="cmn-button cmn-button--secondary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section__cta">
                        <a href="shop.html" class="cmn-button">See all products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / shop section end ==== -->

    <!-- ==== team section start ==== -->
    <section class="section team wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row section__row align-items-center">
                <div class="col-lg-6 col-xl-6 section__col">
                    <div class="team__slider">
                        <div class="team__slider-card">
                            <div class="team__slider-card__thumb">
                                <img src="assets/images/team/one.png" alt="Team">
                            </div>
                            <div class="team__slider-card__content">
                                <h5>Jerome Bell</h5>
                                <p class="secondary-text">Golfer</p>
                                <div class="social">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team__slider-card">
                            <div class="team__slider-card__thumb">
                                <img src="assets/images/team/two.png" alt="Team">
                            </div>
                            <div class="team__slider-card__content">
                                <h5>Andrea Reed</h5>
                                <p class="secondary-text">Golfer</p>
                                <div class="social">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team__slider-card">
                            <div class="team__slider-card__thumb">
                                <img src="assets/images/team/one.png" alt="Team">
                            </div>
                            <div class="team__slider-card__content">
                                <h5>Jerome Bell</h5>
                                <p class="secondary-text">Golfer</p>
                                <div class="social">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team__slider-card">
                            <div class="team__slider-card__thumb">
                                <img src="assets/images/team/two.png" alt="Team">
                            </div>
                            <div class="team__slider-card__content">
                                <h5>Andrea Reed</h5>
                                <p class="secondary-text">Golfer</p>
                                <div class="social">
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-navigation justify-content-start">
                                <button class="next-team cmn-button cmn-button--secondary">
                                    <i class="fa-solid fa-angle-left"></i>
                                </button>
                                <button class="prev-team cmn-button cmn-button--secondary">
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1 order-first order-lg-last section__col">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">Our Team</h5>
                        <h2 class="section__content-title">Meet Our Experts</h2>
                        <p class="section__content-text">Our professional team will make sure that you find the right
                            course and the best trainer to receive maximum efficiency. All our trainers are professional
                            golf players with the highest...</p>
                        <div class="section__content-inner">
                            <ul>
                                <li><i class="golftio-pin-checked"></i>5-15+ years experience</li>
                                <li><i class="golftio-pin-checked"></i>Get our best adviser</li>
                                <li><i class="golftio-pin-checked"></i>Get our best trainers</li>
                                <li><i class="golftio-pin-checked"></i>Individual Support</li>
                            </ul>
                        </div>
                        <div class="section__content-cta">
                            <a href="about-us.html" class="cmn-button">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / team section end ==== -->

    <!-- ==== join club section start ==== -->
    <section class="section join-club">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__content">
                        <h5 class="section__content-sub-title">Join Club</h5>
                        <h2 class="section__content-title">Join our club</h2>
                        <div class="join-club__form">
                            <form action="#" method="post" name="joinClubForm">
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="text" name="user-name" id="userName" required
                                            placeholder="Your Name *">
                                    </div>
                                    <div class="input-single">
                                        <input type="text" name="user-phone" id="userPhone" required
                                            placeholder="Your Phone *">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="email" name="user-email" id="userEmail" required
                                            placeholder="Your Email *">
                                    </div>
                                    <div class="input-single">
                                        <input type="text" name="user-url" id="userUrl" placeholder="Website URL ">
                                    </div>
                                </div>
                                <div class="input-single">
                                    <textarea name="user-message" id="userMessage" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="cmn-button">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / join club section end ==== -->

    <!-- ==== sponsor section start ==== -->
    <div class="sponsor wow fadeInUp" data-wow-duration="0.4s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sponsor__inner">
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/one.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/two.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/three.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/four.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/five.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/six.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/one.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/one.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/two.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/three.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/four.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/five.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/six.png" alt="Sponsor">
                        </div>
                        <div class="sponsor__inner-card">
                            <img src="assets/images/sponsor/one.png" alt="Sponsor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / sponsor section end ==== -->

    <!-- ==== footer start ==== -->
    <footer class="footer">
        <div class="container">
            <div class="row section__row">
                <div class="col-md-6 col-lg-4 col-xl-3 section__col">
                    <div class="footer__single">
                        <a href="index.html">
                            <img src="assets/images/logo-light.png" alt="Logo">
                        </a>
                        <div class="footer__single-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry...</p>
                            <div class="social">
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-3 section__col">
                    <div class="footer__single">
                        <h5>Quick Links</h5>
                        <div class="footer__single-content">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="facility.html">Facility</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 section__col">
                    <div class="footer__single">
                        <h5>Address</h5>
                        <div class="footer__single-content">
                            <div class="footer__single-content__group">
                                <p>(480) 555-0103</p>
                                <p>(406) 555-0120</p>
                            </div>
                            <div class="footer__single-content__group">
                                <p><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="385c5d59565659165b4d4a4c514b785d40595548545d165b5755">[email&#160;protected]</a></p>
                                <p><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0c68696e7e6d22646360784c69746d617c6069226f6361">[email&#160;protected]</a></p>
                            </div>
                            <div class="footer__single-content__group">
                                <p>285 Great North Road, Grey Lynn, Auckland 1021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 section__col">
                    <h5>Newsletter</h5>
                    <div class="footer__single">
                        <div class="footer__single-content">
                            <p>Subscribe our newsletter to get our latest update & news </p>
                            <form action="#" method="post" name="newsletterForm">
                                <div class="newsletter">
                                    <input type="email" name="news-mail" id="newsMail" placeholder="Your email address"
                                        required>
                                    <button type="submit">
                                        <i class="golftio-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <p>Copyright &copy; <span id="copyYear"></span> Golftio. All Rights Reserved </p>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="support.html">Support</a></li>
                                    <li><a href="terms-conditions.html">Terms of Use</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==== / footer end ==== -->

    <!-- scroll to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==== js dependencies start ==== -->


 





  <script src="../../../js/jquery.js"></script>
  <script src="../../../js/bootstrap.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>






    <!-- jquery -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/vendor/jquery/jquery-3.6.3.min.js"></script>
    <!-- bootstrap five js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- nice select js -->
    <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <!-- slick js -->
    <script src="assets/vendor/slick/js/slick.min.js"></script>
    <!-- odometer js -->
    <script src="assets/vendor/odometer/js/odometer.min.js"></script>
    <!-- viewport js -->
    <script src="assets/vendor/viewport/viewport.jquery.js"></script>
    <!-- jquery ui js -->
    <script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="assets/vendor/wow/wow.min.js"></script>

    <!-- ==== / js dependencies end ==== -->

    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
    
   
    
    <script>
        $("#btnLogin").on('click', function(e) {
            e.preventDefault();
            $("#modalLogin").modal('show');
        });
        // $("#btnLogin2").on('click', function(e) {
        // e.preventDefault();
        // $("#modalLogin").modal('show');
        // });
        
    </script>

    
  



</body>


<!-- Mirrored from pixner.net/golftio/main/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 19:08:55 GMT -->
</html>