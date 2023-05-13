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
          	<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span class="mr-2"><a href="product.php">Product</a></span></p>
            <h1 class="mb-0 bread">Details Product</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="../asset/images/scarlett.jpg" class="image-popup"><img src="../asset/images/scarlett.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>Scarlett Body Lotion</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span>Rp.215.000</span></p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">80 piece available</p>
	          	</div>
          	</div>
          	<p><a href="beli_sekarang.php" class="btn btn-black py-3 px-5">Beli Sekarang</a></p>
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
						<a href="detail_cetaphil.php" class="img-prod"><img class="img-fluid" src="../asset/images/cetapil.jpg"
								alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 px-3">
							<h3><a href="detail_cetaphil.php">Cetaphil Facial Cleanser</a></h3>
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
								<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="cart.phbeli_sekarang.php" class="buy-now text-center py-2">Beli Sekarang<span><i
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
								<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="beli_sekarang.php" class="buy-now text-center py-2">Beli Sekarang<span><i
											class="ion-ios-cart ml-1"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="detail_colgate.php" class="img-prod"><img class="img-fluid" src="../asset/images/colgate.jpg"
								alt="Colorlib Template">
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
								<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="beli_sekarang.php" class="buy-now text-center py-2">Beli Sekarang<span><i
											class="ion-ios-cart ml-1"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="detail_scarlet.php" class="img-prod"><img class="img-fluid" src="../asset/images/scarlett.jpg"
								alt="Colorlib Template">
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
								<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Tambah Troli <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="beli_sekarang.php" class="buy-now text-center py-2">Beli Sekarang<span><i
											class="ion-ios-cart ml-1"></i></span></a>
							</p>
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
							<a href="beli_sekarang.php" class="buy-now text-center py-2">Beli Sekarang<span><i
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
							<a href="beli_sekarang.php" class="buy-now text-center py-2">Beli Sekarang<span><i
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
						<h3><a href="detail_hendbody.php">Handbody Lotion</a></h3>
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
							<a href="beli_sekarang.php" class="buy-now text-center py-2">Beli Sekarang<span><i
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
							<a href="beli_sekarang.php" class="buy-now text-center py-2">Beli Sekarang<span><i
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