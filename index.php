<?php

session_start();

if(!isset($_SESSION['loggedin'])){
	header('location:./page/login.php');
	exit();
}

?>


<!DOCTYPE php>
<php lang="en">

	<head>
		<title>Health&Beauty</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

		<link rel="stylesheet" href="./asset/css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="./asset/css/animate.css">

		<link rel="stylesheet" href="./asset/css/owl.carousel.min.css">
		<link rel="stylesheet" href="./asset/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="./asset/css/magnific-popup.css">

		<link rel="stylesheet" href="./asset/css/aos.css">

		<link rel="stylesheet" href="./asset/css/ionicons.min.css">

		<link rel="stylesheet" href="./asset/css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="./asset/css/jquery.timepicker.css">


		<link rel="stylesheet" href="./asset/css/flaticon.css">
		<link rel="stylesheet" href="./asset/css/icomoon.css">
		<link rel="stylesheet" href="./asset/css/style.css">
	</head>

	<body class="goto-here">
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">Health&Beauty</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
					aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>

						<li class="nav-item"><a href="./page/product.php" class="nav-link">Product</a></li>
						<li class="nav-item"><a href="./page/blog.php" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="./page/about.php" class="nav-link">About</a></li>
						<li class="nav-item"><a href="./page/contact.php" class="nav-link">Contact</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="login.php" id="dropdown04" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Log-In</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
								<a class="dropdown-item" href="./page/login.php">Log-In</a>
								<a class="dropdown-item" href="./page/logout.php">Log-Out</a>
								<a class="dropdown-item" href="./page/register.php">Register</a>
								<a class="dropdown-item" href="./page/checkout.php">Checkout</a>
							</div>
						</li>
						<li class="nav-item cta cta-colored"><a href="./page/cart.php" class="nav-link"><span
									class="icon-shopping_cart"></span>[0]</a></li>

					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->

		<section id="home-section" class="hero">
			<div class="home-slider js-fullheight owl-carousel">
				<div class="slider-item js-fullheight">
					<div class="overlay"></div>
					<div class="container-fluid p-0">
						<div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
							data-scrollax-parent="true">
							<div class="one-third order-md-last img js-fullheight"
								style="background-image:url(./asset/images/health1.jpg);">
							</div>
							<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
								data-scrollax=" properties: { translateY: '70%' }">
								<div class="text">
									<span class="subheading">Health&Beauty eCommerce Shop</span>
									<div class="horizontal">
										<h3 class="vr" style="background-image: url(./asset/images/health1.jpg);"></h3>
										<h1 class="mb-4 mt-3">Catch Your Own <br><span>Stylish &amp; Look</span></h1>
										<p>A small river named Duden flows by their place and supplies it with the
											necessary
											regelialia. It is a paradisematic country.</p>

										<p><a href="./page/product.php" class="btn btn-primary px-5 py-3 mt-3">Discover
												Now</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="slider-item js-fullheight">
					<div class="overlay"></div>
					<div class="container-fluid p-0">
						<div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
							data-scrollax-parent="true">
							<div class="one-third order-md-last img js-fullheight"
								style="background-image:url(./asset/images/beauty1.jpg);">
							</div>
							<div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
								data-scrollax=" properties: { translateY: '70%' }">
								<div class="text">
									<span class="subheading">Health&Beauty eCommerce Shop</span>
									<div class="horizontal">
										<h3 class="vr" style="background-image: url(./asset/images/beauty1.jpg);"></h3>
										<h1 class="mb-4 mt-3">A Thouroughly <span>Modern</span> Woman</h1>
										<p>A small river named Duden flows by their place and supplies it with the
											necessary
											regelialia. It is a paradisematic country.</p>

										<p><a href="./page/product.php" class="btn btn-primary px-5 py-3 mt-3">Shop Now</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">

				<div class="row justify-content-center mb-3 pb-3">
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
						<h2 class="mb-4 mt-5">Keunggulan Health&Beauty</h2>
					</div>
					<p class="text-center">
						dalam rangka membantu customer kami menyediakan website e-commers untuk mempermudah dalam
						berbelanja produk yang kamu idamkan.
					</p>
				</div>
				<div class="row ftco-services">
					<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-12 services">
							<div class="icon d-flex justify-content-center align-items-center mb-4">
								<span class="flaticon-002-recommended"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Kebijakan Pengembalian</h3>
								<p>Penganmbalian barang dapat dilakukan jika terdapat kerusakan pada produk kami akan
									tetapi jika produk tersebut sudah di pakai kami tidak bisa memproses kebijakan
									pengenbalian</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-12 services">
							<div class="icon d-flex justify-content-center align-items-center mb-4">
								<span class="flaticon-001-box"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Kemasan Premium</h3>
								<p>dalam proses pengiriman ke cumstomer kami sudah memastikan bahwa kemasan kami ini
									sudah layak kirim.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
						<div class="media block-12 services">
							<div class="icon d-flex justify-content-center align-items-center mb-4">
								<span class="flaticon-003-medal"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">Kualitas Unggul</h3>
								<p>Kami menjamin bahwa produk kami adalah produk yang unggkul dan terbaik.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
		</section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<h2 class="mb-4">Best Seller</h2>
						<p>Rekomendasi produk hanya untuk kamu</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="product">
							<a href="./page/detail_cetaphil.php" class="img-prod"><img class="img-fluid"
									src=".\asset\images\cetapil.jpg" alt="Colorlib Template">
								<span class="status">30%</span>
								<div class="overlay"></div>
							</a>
							<div class="text py-3 px-3">
								<h3><a href="./page/detail_cetaphil.php">Cetaphil Facial Cleanser</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span class="price-sale">Rp.98.000</span></p>
									</div>
									<div class="rating">
										<p class="text-right">
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										</p>
									</div>
								</div>
								<p class="bottom-area d-flex px-3">
									<a href="./page/cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
												class="ion-ios-add ml-1"></i></span></a>
									<a href="./page/detail_cetaphil.php" class="buy-now text-center py-2">Beli Sekarang<span><i
												class="ion-ios-cart ml-1"></i></span></a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="product">
							<a href="./page/detail_loreal.php" class="img-prod"><img class="img-fluid"
									src="./asset/images/loreal.jpg" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 px-3">
								<h3><a href="./page/detail_loreal.php">Loarel Paris Hair Care</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span>Rp.190.000</span></p>
									</div>
									<div class="rating">
										<p class="text-right">
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										</p>
									</div>
								</div>
								<p class="bottom-area d-flex px-3">
									<a href="./page/cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
												class="ion-ios-add ml-1"></i></span></a>
									<a href="./page/detail_loreal.php" class="buy-now text-center py-2">Beli Sekarang<span><i
												class="ion-ios-cart ml-1"></i></span></a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="product">
							<a href="./page/detail_colgate.php" class="img-prod"><img class="img-fluid"
									src="./asset/images/colgate.jpg" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 px-3">
								<h3><a href="./page/detail_colgate.php">Colgate Teeth Care</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span>Rp.145.000</span></p>
									</div>
									<div class="rating">
										<p class="text-right">
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										</p>
									</div>
								</div>
								<p class="bottom-area d-flex px-3">
									<a href="./page/cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
												class="ion-ios-add ml-1"></i></span></a>
									<a href="./page/detail_colgate.php" class="buy-now text-center py-2">Beli Sekarang<span><i
												class="ion-ios-cart ml-1"></i></span></a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="product">
							<a href="./page/detail_scarlet.php" class="img-prod"><img class="img-fluid"
									src="./asset/images/scarlett.jpg" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 px-3">
								<h3><a href="./page/detail_scarlet.php">scarlett Body Lotion</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span>Rp.215.000</span></p>
									</div>
									<div class="rating">
										<p class="text-right">
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										</p>
									</div>
								</div>
								<p class="bottom-area d-flex px-3">
									<a href="./page/cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
												class="ion-ios-add ml-1"></i></span></a>
									<a href="./page/detail_scarlet.php" class="buy-now text-center py-2">Beli Sekarang<span><i
												class="ion-ios-cart ml-1"></i></span></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ftco-section-parallax">
			<div class="parallax-img d-flex align-items-center">
				<div class="container">
					<div class="row d-flex justify-content-center py-5">
						<div class="col-md-7 text-center heading-section ftco-animate">
							<h2>Subcribe to our Newsletter</h2>
							<div class="row d-flex justify-content-center mt-5">
								<div class="col-md-8">
									<form action="#" class="subscribe-form">
										<div class="form-group d-flex">
											<input type="text" class="form-control" placeholder="Enter email address">
											<input type="submit" value="Subscribe" class="submit px-3">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="ftco-footer bg-light ftco-section">
			<div class="container">
				<div class="row">
					<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Health&Beauty</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
							</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
								<li class="ftco-animate"><a href="https://www.linkedin.com/feed/"><span
											class="icon-linkedin"></span></a></li>
								<li class="ftco-animate"><a href="https://web.facebook.com/"><span
											class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="https://www.instagram.com/?hl=id"><span
											class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Menu</h2>
							<ul class="list-unstyled">
								<li><a href="./page/product.php" class="py-2 d-block">Shop</a></li>
								<li><a href="./page/about.php" class="py-2 d-block">About</a></li>
								<li><a href="https://www.google.com/search?tbm=bks&q=haelth+beuty" class="py-2 d-block">Journal</a></li>
								<li><a href="./page/contact.php" class="py-2 d-block">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Help</h2>
							<div class="d-flex">
								<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
									<li><a href="#" class="py-2 d-block">Shipping Information</a></li>
									<li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
									<li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
									<li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><a href="#" class="py-2 d-block">FAQs</a></li>
									<li><a href="#" class="py-2 d-block">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Have a Questions?</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon icon-map-marker"></span><span class="text">Bogor</span></li>
									<li><a href="#"><span class="icon icon-phone"></span><span class="text">+62
												8567899</span></a></li>
									<li><a href="#"><span class="icon icon-envelope"></span><span
												class="text">andrian@gmail.com</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> All rights reserved |
							Health&Beauty
							<i class="icon-heart color-danger" aria-hidden="true"></i> <b>Develop By Andrian Nurwana</b>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>



		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
				<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
				<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
					stroke="#F96D00" />
			</svg></div>


		<script src="./asset/js/jquery.min.js"></script>
		<script src="./asset/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="./asset/js/popper.min.js"></script>
		<script src="./asset/js/bootstrap.min.js"></script>
		<script src="./asset/js/jquery.easing.1.3.js"></script>
		<script src="./asset/js/jquery.waypoints.min.js"></script>
		<script src="./asset/js/jquery.stellar.min.js"></script>
		<script src="./asset/js/owl.carousel.min.js"></script>
		<script src="./asset/js/jquery.magnific-popup.min.js"></script>
		<script src="./asset/js/aos.js"></script>
		<script src="./asset/js/jquery.animateNumber.min.js"></script>
		<script src="./asset/js/bootstrap-datepicker.js"></script>
		<script src="./asset/js/scrollax.min.js"></script>
		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="./asset/js/google-map.js"></script>
		<script src="./asset/js/main.js"></script>

	</body>

</php>