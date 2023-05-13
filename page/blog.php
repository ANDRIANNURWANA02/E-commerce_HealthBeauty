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
				<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span>Blog</span></p>
				<h1 class="mb-0 bread">Blog</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 ftco-animate">
				<div class="row">
					<div class="col-md-12 d-flex ftco-animate">
						<div class="blog-entry align-self-stretch d-md-flex">
							<a href="blog-single.php" class="block-20"
								style="background-image: url('../asset/images/cetapil.jpg');">
							</a>
							<div class="text d-block pl-md-4">
								<div class="meta mb-3">
									<div><a href="#">April 9, 2019</a></div>
									<div><a
											href="https://www.google.com/search?q=health+beauty&tbm=nws&sxsrf=APwXEddttIkViZ3ZmnMxDZHHHWH-PKUBrA:1683297742810&source=lnms&sa=X&ved=2ahUKEwjWn4vgtN7-AhWN6jgGHYCWBn8Q_AUoAnoECAEQBA&biw=1280&bih=601&dpr=1.5">Admin</a>
									</div>
									<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
								</div>
								<h3 class="heading"><a
										href="https://www.google.com/search?q=health+beauty&tbm=vid&sxsrf=APwXEdf4Mlb-5L1xgNN1gz7IaQGdSjtZQw:1683297792294&source=lnms&sa=X&ved=2ahUKEwjIzdf3tN7-AhVt7jgGHd8EDNoQ_AUoBHoECAEQBg&biw=1280&bih=601&dpr=1.5">cetaphil
										Facial Cleanser</a></h3>
								<p><a href="detail_cetaphil.php" class="btn btn-primary py-2 px-3">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-12 d-flex ftco-animate">
						<div class="blog-entry align-self-stretch d-md-flex">
							<a href="blog-single.php" class="block-20"
								style="background-image: url('../asset/images/loreal.jpg');">
							</a>
							<div class="text d-block pl-md-4">
								<div class="meta mb-3">
									<div><a href="#">April 9, 2019</a></div>
									<div><a
											href="https://www.google.com/search?q=health+beauty&tbm=nws&sxsrf=APwXEddttIkViZ3ZmnMxDZHHHWH-PKUBrA:1683297742810&source=lnms&sa=X&ved=2ahUKEwjWn4vgtN7-AhWN6jgGHYCWBn8Q_AUoAnoECAEQBA&biw=1280&bih=601&dpr=1.5">Admin</a>
									</div>
									<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
								</div>
								<h3 class="heading"><a
										href="https://www.google.com/search?q=health+beauty&tbm=vid&sxsrf=APwXEdf4Mlb-5L1xgNN1gz7IaQGdSjtZQw:1683297792294&source=lnms&sa=X&ved=2ahUKEwjIzdf3tN7-AhVt7jgGHd8EDNoQ_AUoBHoECAEQBg&biw=1280&bih=601&dpr=1.5">Loreal
										Paris Hair Care</a></h3>
								<p><a href="detail_loreal.php" class="btn btn-primary py-2 px-3">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-12 d-flex ftco-animate">
						<div class="blog-entry align-self-stretch d-md-flex">
							<a href="blog-single.php" class="block-20"
								style="background-image: url('../asset/images/colgate.jpg');">
							</a>
							<div class="text d-block pl-md-4">
								<div class="meta mb-3">
									<div><a href="#">April 9, 2019</a></div>
									<div><a
											href="https://www.google.com/search?q=health+beauty&tbm=nws&sxsrf=APwXEddttIkViZ3ZmnMxDZHHHWH-PKUBrA:1683297742810&source=lnms&sa=X&ved=2ahUKEwjWn4vgtN7-AhWN6jgGHYCWBn8Q_AUoAnoECAEQBA&biw=1280&bih=601&dpr=1.5">Admin</a>
									</div>
									<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
								</div>
								<h3 class="heading"><a
										href="https://www.google.com/search?q=health+beauty&tbm=vid&sxsrf=APwXEdf4Mlb-5L1xgNN1gz7IaQGdSjtZQw:1683297792294&source=lnms&sa=X&ved=2ahUKEwjIzdf3tN7-AhVt7jgGHd8EDNoQ_AUoBHoECAEQBg&biw=1280&bih=601&dpr=1.5">Colgate
										Teeth Care</a></h3>
								<p><a href="detail_colgate.php" class="btn btn-primary py-2 px-3">Details</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-12 d-flex ftco-animate">
						<div class="blog-entry align-self-stretch d-md-flex">
							<a href="blog-single.php" class="block-20"
								style="background-image: url('../asset/images/scarlett.jpg');">
							</a>
							<div class="text d-block pl-md-4">
								<div class="meta mb-3">
									<div><a href="#">April 9, 2019</a></div>
									<div><a
											href="https://www.google.com/search?q=health+beauty&tbm=nws&sxsrf=APwXEddttIkViZ3ZmnMxDZHHHWH-PKUBrA:1683297742810&source=lnms&sa=X&ved=2ahUKEwjWn4vgtN7-AhWN6jgGHYCWBn8Q_AUoAnoECAEQBA&biw=1280&bih=601&dpr=1.5">Admin</a>
									</div>
									<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
								</div>
								<h3 class="heading"><a
										href="https://www.google.com/search?q=health+beauty&tbm=vid&sxsrf=APwXEdf4Mlb-5L1xgNN1gz7IaQGdSjtZQw:1683297792294&source=lnms&sa=X&ved=2ahUKEwjIzdf3tN7-AhVt7jgGHd8EDNoQ_AUoBHoECAEQBg&biw=1280&bih=601&dpr=1.5">Scarlett
										Body Lotion</a></h3>
								<p><a href="detail_scarlet.php" class="btn btn-primary py-2 px-3">Details</a></p>
							</div>
						</div>
					</div>

				</div>
			</div> <!-- .col-md-8 -->
			<div class="col-lg-4 sidebar ftco-animate">
				<div class="sidebar-box">
					<form action="#" class="search-form">
						<div class="form-group">
							<span class="icon ion-ios-search"></span>
							<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
						</div>
					</form>
				</div>
				<div class="sidebar-box ftco-animate">
					<h3 CLASS="heading">Categories</h3>
					<ul class="categories">
						<li><a href="product.php">Health</a></li>
						<li><a href="product.php">Beauty</a></li>
					</ul>
				</div>


</section> <!-- .section -->
<?php
require_once './templetes/foot.php';
?>