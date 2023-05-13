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
          	<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span>About</span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">

				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<h2 class="mb-4 mt-5">Keunggulan Health&Beauty</h2>
					</div>
					<p>
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
								<h3 class="heading">Kebijakan Penganbalian</h3>
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
	
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(../asset/images/bg_6.jpg);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Partner</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-6 heading-section ftco-animate">
            <h2 class="mb-4 text-center">Team</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(../asset/images/andri.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Andrian Nurwana</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(../asset/images/andri.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Andrian Nurwana</p>
                    <span class="position">Web Frontend</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(../asset/images/andri.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Andrian Nurwana</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(../asset/images/andri.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Andrian Nurwana</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(../asset/images/andri.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="name">Andrian Nurwana</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		<hr>

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
    <?php
require_once './templetes/foot.php';
    ?>