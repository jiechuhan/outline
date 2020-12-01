<?php 
	include_once "lib/php/functions.php"; 
	include_once "parts/templates.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Landing Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image: url(img/dark_night.jpg)">
		<div class="fill-parent display-flex flex-align-center flex-justify-center">
			<div class="card soft">
				Products!
			</div>
		</div>
	</div>

	<div class="container">
		<div class="card soft">
			<h2>Information</h2>
			<p>You'll love these products</p>
		</div>
	</div>

	<div class="container">
		<h2>Latest Cake</h2>
		<?php recommendedCategory("cake"); ?>
		<h2>Latest Drink</h2>
		<?php recommendedCategory("drink"); ?>
	</div>
	
</body>
</html>