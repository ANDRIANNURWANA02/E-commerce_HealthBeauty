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
          	<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<form action="proses_cart.php" method="POST">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(../asset/images/cetaphil.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Cetaphil Facial Cleanser</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">Rp.140.000</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">Rp.140.000</td>
						      </tr>

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(../asset/images/loreal.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Loarel Paris Hair Care</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">Rp.190.000</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">Rp.190.000</td>
						      </tr>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-center">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rp.330.000</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>Rp.0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>30%</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>Rp.280.8000</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</form>
			</div>
		</section>

<?php
require_once './templetes/foot.php';
?>