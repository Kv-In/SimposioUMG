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
		<title> Simposio 2024</title>

	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Simposio<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="{{ url('/') }}">Inicio</a>
						</li>
						<li><a class="nav-link" href="{{ url('/Souvenir') }}">Souvenir</a></li>
						<li><a class="nav-link" href="{{ url('/Expositores') }}">Expositores</a></li>
						<li><a class="nav-link" href="{{ url('/Organizadores') }}">Organizadores</a></li>
						<li><a class="nav-link" href="{{ url('/Informacion') }}">Informacion</a></li>
					</ul>
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="{{ url('/Login') }}"><img src="images/ic_svg_1/user.svg"></a></li>
						<li><a class="nav-link" href="{{ url('/Carito') }}"><img src="images/ic_svg_1/cart.svg"></a></li>
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
								<h1>Simposio <span clsas="d-block">Umg.</span></h1>
								<p class="mb-4">
									¡Te invitamos a nuestro próximo simposio de Ingeniería en Sistemas 2024! Este evento reunirá a destacados expertos de la industria y académicos para explorar las últimas innovaciones y tendencias en el campo de la ingeniería de sistemas.
																</p>
								<p><a href="" class="btn btn-secondary me-2">Mas...</a><a href="#" class="btn btn-white-outline">Incripciones</a></p>
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
		
		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
			  <div class="row">
		  
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
				  <h2 class="mb-4 section-title">Souvenir.</h2>
				  <p class="mb-4">
					Puedes llevarte un Recuerdo del Simposio 2024 exclusivo y limitado para los participantes ...
				  </p>
				  <p><a href="{{ url('/Souvenir') }}" class="btn">Explore...</a></p>
				</div>
		  
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				  <a class="product-item" href="{{ url('/Carito') }}">
					@yield('cont1')
				  </a>
				</div>
		  
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				  <a class="product-item" href="{{ url('/Carito') }}">
					@yield('cont2')
				  </a>
				</div>
		  
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				  <a class="product-item" href="{{ url('/Carito') }}">
					@yield('cont3')
				  </a>
				</div>
		  
				</div>
			</div>
		  </div>
		  
		
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">¡No te Pierdas del Simposio de Ingeniería en Sistemas Umg2024!</h2>
						<p>
							¿Buscas inspiración, aprendizaje y oportunidades en ingeniería de sistemas? 
							¡El Simposio de Ingeniería en Sistemas de la Universidad Umg es tu evento! 
							Con charlas de expertos, networking y actualización profesional, es la 
							oportunidad perfecta para impulsar tu carrera. ¡Únete a nosotros y sé p
								arte del futuro de la ingeniería de sistemas!
						</p>
						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/ic_svg_1/Cofee.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Almuerzo </h3>
									<p>¡Los participantes tendrán la oportunidad
										 de disfrutar de un almuerzo durante el evento!</p>
								</div>
							</div>
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/ic_svg_1/expositores.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Expositores del Evento</h3>
									<p>
										Durante el evento, tendrás la oportunidad de interactuar
										 con una diversidad de expositores provenientes de 
										 diferentes áreas de la ingeniería y disciplinas relacionadas.
									</p>
								</div>
							</div>
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/ic_svg_1/Diploma.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Diploma</h3>
									<p>
										Al participar, serás acreedor de un diploma de participación
										 firmado por los coordinadores de la actividad.
									</p>
								</div>
							</div>
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/ic_svg_1/ticket.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Cupos limitados</h3>
									<p> 
										Cupos limitados para esta actividad que 
										ocurre solo una vez al año. No te quedes
										 sin la experiencia de participar y aprender 
										 sobre el tema que tanto te interesa.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="img-wrap" >
							<img src="images/img_simposio/Simpsio.jfif" alt="Image" class="img-fluid">
						</div>
						<div class="img-wrap2" >
							<img src="images/img_simposio/sim3.jfif" alt="Image" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="popular-product">
			<div class="container">
				<h2 class="section-title mb-4 text-center p-5 ">Expositores</h2>

				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-1.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-2.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-3.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<h2 class="section-title mb-4 text-center p-5 ">Expositores</h2>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-1.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-2.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-3.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">
				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Simposio Umg 2024<span>.</span></a></div>
						<p class="mb-4"></p>
						<ul class="list-unstyled custom-social">
							<li><a href="https://www.facebook.com/SistemasUMGXelaPS?mibextid=ZbWKwL"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash;  
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
		<script src="resources/js/tiny-slider.js"></script>
		<script src="resources/js/custom.js"></script>

		
	</body>

</html>
