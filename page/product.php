<?php

session_start();

if(!isset($_SESSION['loggedin'])){
	header('location:login.php');
	exit();
}

?>

<?php
require_once './templetes/nav.php';
?>
<div class="hero-wrap hero-bread" style="background-image: url('../asset/images/bg_6.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span><span>Product</span></p>
				<h1 class="mb-0 bread">Product</h1>
			</div>
		</div>
	</div>
</div>
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="product">
					<a href="detail_cetaphil.php" class="img-prod"><img class="img-fluid"
							src="../asset/images/cetapil.jpg" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 px-3">
						<h3><a id="nama" name="nama" href="detail_cetaphil.php">Cetaphil Facial Cleanser</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price">Rp.140.000</p>
							</div>
							<div>
								<p class="text-right">
									<a href="detail_cetaphil.php"><span>Details</span></a>
								</p>
							</div>
						</div>
						<p class="bottom-area d-flex px-3">
							<a href="cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
										class="ion-ios-add ml-1"></i></span></a>
							<a href="detail_cetaphil.php" class="buy-now text-center py-2">Beli Sekarang<span><i
										class="ion-ios-cart ml-1"></i></span></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="product">
					<a href="detail_loreal.php" class="img-prod"><img class="img-fluid" src="../asset/images/loreal.jpg"
							alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 px-3">
						<h3><a href="detail_loreal.php">Loarel Paris Hair Care</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>Rp.190.000</span></p>
							</div>
							<div>
								<p class="text-right">
									<a href="detail_loreal.php"><span>Details</span></a>
								</p>
							</div>
						</div>
						<p class="bottom-area d-flex px-3">
							<a href="cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
										class="ion-ios-add ml-1"></i></span></a>
							<a href="detail_loreal.php" class="buy-now text-center py-2">Beli Sekarang<span><i
										class="ion-ios-cart ml-1"></i></span></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="product">
					<a href="detail_colgate.php" class="img-prod"><img class="img-fluid"
							src="../asset/images/colgate.jpg" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 px-3">
						<h3><a href="detail_colgate.php">Colgate Teeth Care</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>Rp.145.000</span></p>
							</div>
							<div>
								<p class="text-right">
									<a href="detail_colgate.php"><span>Details</span></a>
								</p>
							</div>
						</div>
						<p class="bottom-area d-flex px-3">
							<a href="cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
										class="ion-ios-add ml-1"></i></span></a>
							<a href="detail_colgate.php" class="buy-now text-center py-2">Beli Sekarang<span><i
										class="ion-ios-cart ml-1"></i></span></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="product">
					<a href="detail_scarlet.php" class="img-prod"><img class="img-fluid"
							src="../asset/images/scarlett.jpg" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 px-3">
						<h3><a href="detail_scarlet.php">Scarlett Body Lotion</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>Rp.215.000</span></p>
							</div>
							<div>
								<p class="text-right">
									<a href="detail_scarlet.php"><span>Details</span></a>
								</p>
							</div>
						</div>
						<p class="bottom-area d-flex px-3">
							<a href="cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
										class="ion-ios-add ml-1"></i></span></a>
							<a href="detail_scarlet.php" class="buy-now text-center py-2">Beli Sekarang<span><i
										class="ion-ios-cart ml-1"></i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="product">
					<a href="detail_masker.php" class="img-prod"><img class="img-fluid" src="../asset/images/masker.jpg"
							alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 px-3">
						<h3><a href="detail_masker.php">Masker Wajah Tea Tree</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price">Rp.10.000</p>
							</div>
							<div>
								<p class="text-right">
									<a href="detail_masker.php"><span>Details</span></a>
								</p>
							</div>
						</div>
						<p class="bottom-area d-flex px-3">
							<a href="cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
										class="ion-ios-add ml-1"></i></span></a>
							<a href="detail_masker.php" class="buy-now text-center py-2" name="beli_Sekarang">Beli Sekarang<span><i
										class="ion-ios-cart ml-1"></i></span></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="product">
					<a href="detail_imboost.php" class="img-prod"><img class="img-fluid"
							src="../asset/images/imboos.jpg" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 px-3">
						<h3><a href="detail_imboost.php">Imboost Force</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>Rp.27.000</span></p>
							</div>
							<div>
								<p class="text-right">
									<a href="detail_imboost.php"><span>Details</span></a>
								</p>
							</div>
						</div>
						<p class="bottom-area d-flex px-3">
							<a href="cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
										class="ion-ios-add ml-1"></i></span></a>
							<a href="detail_imboost.php" class="buy-now text-center py-2">Beli Sekarang<span><i
										class="ion-ios-cart ml-1"></i></span></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="product">
					<a href="detail_hendbody.php" class="img-prod"><img class="img-fluid"
							src="../asset/images/hendbody.jpg" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 px-3">
						<h3><a href="detail_hendbody.php">Hendbody Lotion</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>Rp.12.000</span></p>
							</div>
							<div>
								<p class="text-right">
									<a href="detail_hendbody.php"><span>Details</span></a>
								</p>
							</div>
						</div>
						<p class="bottom-area d-flex px-3">
							<a href="cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
										class="ion-ios-add ml-1"></i></span></a>
							<a href="detail_hendbody.php" class="buy-now text-center py-2">Beli Sekarang<span><i
										class="ion-ios-cart ml-1"></i></span></a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="product">
					<a href="detail_mastin.php" class="img-prod"><img class="img-fluid"
							src="../asset/images/mastin.jpg" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 px-3">
						<h3><a href="detail_mastin.php">Mastin Kulit Manggis</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>Rp.25.000</span></p>
							</div>
							<div>
								<p class="text-right">
									<a href="detail_mastin.php"><span>Details</span></a>
								</p>
							</div>
						</div>
						<p class="bottom-area d-flex px-3">
							<a href="cart.php" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
										class="ion-ios-add ml-1"></i></span></a>
							<a href="detail_mastin.php" class="buy-now text-center py-2">Beli Sekarang<span><i
										class="ion-ios-cart ml-1"></i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
require_once './templetes/foot.php';
?>