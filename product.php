<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment1 - Internet Technologies" />
		<meta name="keywords"    content="HTML, CSS" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Products</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 			
		?>
    <section>
			<article>
			<div class="image-wrapper small left">
			<a href="product1.php"><img src ="images/product_chicago.jpg" alt="Chicago" /></a>
			</div>
			<div class="content-wrapper">
		<h3>Chicago, United States</h3>
		
		<p>we will fly daily to America’s third largest city. Central to the growth of the United States of America, Chicago is a bustling city, plentiful for shopping and top restaurants. Chicago boasts green open spaces and a wealth of attractions to keep visitors busy. Come explore America’s “Windy City”.</p>
		</div>
		<div class="clear"></div>
		</article>
		
		<article>
		<div class="image-wrapper small left">	
		<a href="product2.php"><img src ="images/product_cairo.jpg" alt="Cairo" /></a>
		</div>
		<div class="content-wrapper">
		<h3>Cairo, Egypt</h3>
		<p>Fly to Cairo with us and discover the Egyptian capital on the River Nile, where the Great Pyramids meet with a modern city.</p>
		</div>
		<div class="clear"></div>
		</article>
		
		<article>
		<div class="image-wrapper small left">
		<a href="product3.php"><img src ="images/product_dubai.jpg" alt="Dubai" /></a>
		</div>
		<div class="content-wrapper">
		<h3>Dubai</h3>
		<p>Fly to Dubai and discover one of the world’s fastest-growing cities, and a place where ultra-modern development sits alongside traditional Arabian culture.</p>
		</div>
		<div class="clear"></div>
		</article>
		
		<article>
		<div class="image-wrapper small left">
		<img src ="images/product_india.jpg" alt="Ahmedabad" />
		</div>
		<div class="content-wrapper">
		<h3>Ahmedabad, India</h3>
		<p>Fly to Ahmedabad and discover the textiles, temples and thalis of India’s fast growing and prosperous city.</p>
		</div>
		<div class="clear"></div>
		</article>
	</section>
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	</body>
</html>
