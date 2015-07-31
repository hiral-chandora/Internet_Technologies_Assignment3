<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment1 - Internet Technologies" />
		<meta name="keywords"    content="HTML, CSS" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Home</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 
		?>
	<section>	
		<!-- Article 1 -->
		<article>
			<div class="image-wrapper left">
				<img src ="images/home_article_banner_1.jpg" alt="Our Fleet Photo" />
			</div>
			<div class="content-wrapper">
				<h2>Our Fleet</h2>
				<h3>Your comfort comes first</h3>
				<p>Our fleet is one of the youngest in the world, meaning that along with exceptional service and inflight entertainment, you can rely on the utmost in comfort and the latest in cabin design no matter where you are seated. Most of our fleet make your experience world class in every class.From Private Suites and Shower Spas in First Class to flat-bed seats in Business Class to extra room and custom lighting in Economy Class, and inflight Wi-Fi throughout the aircraft, it is as close as it comes to flying in your own private jet.
				</p>
			</div>
			<div class="clear"></div>
		</article>
		
		<!-- Article 2 -->
		<article>
			<div class="image-wrapper right">
				<img src ="images/home_article_banner_2.jpg" alt="Lounge Photo" />
			</div>
			<div class="content-wrapper">			
				<h2>Our Lounges</h2>
				<h3>Freshen up, energise or unwind before your flight</h3>
				<p>Our signature lounges across the globe ensure the memorable moments begin before you even step on board the aircraft.</p>
				<p>Our Lounges at Dubai International Airport and at more than 50 international airports across six continents are available to passengers in upper cabin classes and from our elite frequent flyer tiers. Spas and beauty treatments,gourmet buffets and bar service, or just a comfortable armchair with your favourite newspaper, time in one of our lounges is always time well spent.</p>
			</div>
			<div class="clear"></div>
		</article>
	</section>
	
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	
	</body>
</html>
