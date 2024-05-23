<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Simposio 2024</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="/">Simposio<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li><a class="nav-link" href="{{ url('/Souvenir') }}">Souvenir</a></li>
                    <li><a class="nav-link" href="{{ url('/Expositores') }}">Expositores</a></li>
                    <li class="active"><a class="nav-link" href="{{ url('/Organizadores') }}">Organizadores</a></li>

                </ul>
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    @auth
                        <!-- Profile dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                                    height="30" alt="" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">My profile</a></li>
                                <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Cerrar Sesion
                                        </a>
                                    </form>


                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/Carrito') }}"><img
                                    src="images/ic_svg_1/cart.svg" alt="Cart"></a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ url('/Login') }}"><img
                                    src="images/ic_svg_1/user.svg" alt="Login"></a></li>

                    @endauth
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->


    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>About Us</h1>
                        <p class="mb-4">There are two types of people who will tell you that you cannot make a
                            difference in this world: those who are afraid to try and those who are afraid you will
                            succeed.</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                                class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/umg.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Simposio</h2>
                    <p>Los simposios reúnen a expertos, investigadores y profesionales de un campo específico para
                        compartir sus conocimientos, descubrimientos y avances más recientes. </p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">

                                <p>ofrecen oportunidades valiosas para establecer contactos y crear redes profesionales.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">


                                <p> Al asistir a un simposio, los participantes pueden mantenerse al día con los últimos
                                    avances y tendencias en su campo.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">

                                <p>brindan un escenario para que los investigadores presenten y discutan sus hallazgos y
                                    resultados de investigación con una audiencia relevante.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">

                                <p>los simposios son importantes porque promueven el avance del conocimiento, fomentan
                                    la colaboración entre profesionales.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="images/arte.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->





    <!-- Start Team Section -->
    <div class="untree_co-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-5 mx-auto text-center">
                    <h2 class="section-title">Our Team</h2>
                </div>
            </div>

            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="images/person_1.jpg" class="img-fluid mb-5">
                    <h3 clas><a href="#"><span class="">Lawson</span> Arnold</a></h3>
                    <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                    <p>Separated they live in.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean.</p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="images/person_2.jpg" class="img-fluid mb-5">

                    <h3 clas><a href="#"><span class="">Jeremy</span> Walker</a></h3>
                    <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                    <p>Separated they live in.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean.</p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>

                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="images/person_3.jpg" class="img-fluid mb-5">
                    <h3 clas><a href="#"><span class="">Patrik</span> White</a></h3>
                    <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                    <p>Separated they live in.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean.</p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                    <img src="images/person_4.jpg" class="img-fluid mb-5">

                    <h3 clas><a href="#"><span class="">Kathryn</span> Ryan</a></h3>
                    <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                    <p>Separated they live in.
                        Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean.</p>
                    <p class="mb-0"><a href="#" class="more dark">Learn More <span
                                class="icon-arrow_forward"></span></a></p>


                </div>
                <!-- End Column 4 -->



            </div>
        </div>
    </div>
    <!-- End Team Section -->







    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">


            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">¿Que es un
                            simposio?<span></span></a></div>
                    <p class="mb-4">El simposio es la mejor forma de reunir a expertos y sacar provecho de los
                        saberes de cada uno con relación a un tema.</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Live chat</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash;
                        </p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <script src="resources/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
