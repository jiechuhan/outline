<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>Product List</h2>

<!-- 			<ul>
			<li><a href="product_item.php?id=1">Prodcut 1</a></li>
			<li><a href="product_item.php?id=2">Prodcut 2</a></li>
			<li><a href="product_item.php?id=3">Prodcut 3</a></li>
			<li><a href="product_item.php?id=4">Prodcut 4</a></li>
		</ul> -->

		<?php 

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		$result = makeQuery(
			makeConn(),
			"
			SELECT *
			FROM `products`
			ORDER BY `date_create` DESC
			LIMIT 12
			"
		);

		echo "<div class='productlist grid gap'>", array_reduce($result, 'productListTemplate'), "</div>";




		 ?>
	</div>




</body>
</html>