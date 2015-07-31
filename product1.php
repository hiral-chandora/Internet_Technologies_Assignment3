<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment1 - Internet Technologies" />
		<meta name="keywords"    content="HTML, CSS" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Flights to Chicago</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 			
		?>
	<section>
		
		<article>			
			<aside>
				<h2>Flights to Chicago</h2>
				<img src ="images/flight_to_chicago_inner_img.jpg" alt="Flights to Chicago" />
			</aside>
			<div class="content-wrapper">
				<h2>Overview</h2>
				
				<p>You can enjoy our world-class service with daily flights to the Windy City. </p>
				<p>Every flight to Chicago offers the comfort of our First Class Private Suites, lie-flat seats in Business Class and gourmet meals throughout all classes of travel. Enjoy up to 1,600 channels of movies, music and more on your Chicago flight, with our inflight entertainment system.</p>
				<h3>Travel to Chicago</h3>
				<p>Our flights to Chicago arrive at the O’Hare International Airport, about 28km from the city centre. Chicago Transit Authority offers the country’s second largest public transportation system, so buses, trains and taxi services are easily accessible for travel into Chicago’s centre.</p>
				
				<h2>Guide</h2>
				<h3>About Chicago</h3>
				<p>Known as the “Windy City” or the “Second City”, Chicago is a quintessentially American town. Its iconic cityscape is complemented by Lake Michigan’s inviting coastline, and the streets are perfect for walking tours, allowing you to experience the city’s rich history, shopping, dining and entertainment up close.</p>
				<h3>Attractions and shopping</h3>
				<p>Well known for its breathtaking cityscape and architectural wonders, you can find one of the country’s tallest building, the Willis Tower, in Chicago. The John Hancock Center is perfect for a panoramic view of the city. Visit the modern architectural must-see attractions scattered across the city, including the Cloud Gate sculpture, Frank Gehry's swooping silver band shell in Millennium Park or the Art Institute of Chicago, the second largest art museum in the United States.</p>
				<h3>Dining and entertainment</h3>
				<p>There are dining options for every taste including the high-end culinary spots Alinea and Moto, which are on the cutting edge of the molecular gastronomy trend. For something more traditional, try Chicago’s legendary deep-dish pizza.</p>
				<a href="product.php"> Back </a>
			</div>
			<div class="clear"></div>
		</article>
	</section>
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	</body>
</html>
