<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
		// include_once "parts/templates.php";
	$cart = makeQuery(
		makeConn(), 
		"SELECT * FROM `products` WHERE `id` IN (0, 5, 8, 7) ");

	// print_p($product);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>
	<?php include "parts/meta.php" ?>
</head>
<body>
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<h2>In Your Cart</h2>
		<!-- <div class="card soft">
			<p>What do you got in there?</p>
			<p><a href="product_checkout.php">Checkout</a></p>
		</div> -->
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart, 'cartListTemplate') ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;3.50</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Taxes</strong></div>
						<div class="flex-none">&dollar;3.50</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Actual Total</strong></div>
						<div class="flex-none">&dollar;7.00</div>
					</div>
					<div class="card-section">
						<a href="product_checkout.php" class="form-button">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>