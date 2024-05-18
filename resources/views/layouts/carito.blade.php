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
		<title>Simposio 2024</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="/">Simposio<span>.</span></a>
				
				

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item ">
							<a class="nav-link" href="{{ url('/') }}">Inicio</a>
						</li>
						<li><a class="nav-link" href="{{ url('/Souvenir') }}">Souvenir</a></li>
						<li><a class="nav-link" href="{{ url('/Expositores') }}">Expositores</a></li>
						<li><a class="nav-link" href="{{ url('/Organizadores') }}">Organizadores</a></li>
					</ul>
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="{{ url('/Login') }}"><img src="images/ic_svg_1/user.svg"></a></li>
						<li class="active"><a class="nav-link" href="{{ url('/Carito') }}"><img src="images/ic_svg_1/cart.svg"></a></li>
					</ul>
				</div>
			</div>

		</nav>		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Cart</h1>
							</div>
						</div>
						<div class="col-lg-7">

						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->



		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                  <div class="site-blocks-table">
                    <table class="shopping-table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <a href="/Souvenir" class="btn btn-outline-black btn-sm btn-block">Continuar comprando</a>
                    </div>

                      <div class="col-md-6 justify-content-end mb-4">
                          <div class="col-md-7">
                              <div class="row">
                                  <div class="col-md-12 text-right border-bottom mb-5">
                                      <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                  </div>
                              </div>
                              <div class="row mb-5">
                                  <div class="col-md-6">
                                      <span class="text-black">Total</span>
                                  </div>
                                  <div class="col-md-6 text-right">
                                      <strong class="text-black" id="total-products"></strong>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-12">
                                      <a href="{{ url('/Verificacion') }}" class="btn btn-black btn-lg py-3 btn-block">Proceder a pagar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                <div class="col-md-6 pl-5">

                </div>
              </div>
            </div>
          </div>


		<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">


			<div class="row g-5 mb-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">¿Que es un simposio?<span></span></a></div>
					<p class="mb-4">El simposio es la mejor forma de reunir a expertos y sacar provecho de los saberes de cada uno con relación a un tema.</p>

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

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
            <script src="js/shopping_cart/shopping_page.js" type="module"></script>
	</body>

</html>
