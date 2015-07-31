<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment1 - Internet Technologies" />
		<meta name="keywords"    content="HTML, CSS" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Product Selection Page</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
		<!-- <script src="jquery.js"></script>
		<script src="alternative.js"></script> -->
		<script src="product.js"></script> 
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 
		?>
		<section>
	
			<form id="selectform" method="post" action="purchase.php">
			<!-- action="http://mercury.ict.swin.edu.au/it000000/formtest.php"> -->
			<fieldset id="productdetail">
				<legend>Select Your Trip Detail</legend>
				<p>
					<label for="fromplace">From : </label>
					<select name="fromplace" id="fromplace">
						<option value="none" selected="selected">-- Select --</option>
						<option value="Ahmedabad,India">Ahmedabad,India</option>
						<option value="Cairo,Egypt">Cairo,Egypt</option>
						<option value="Chicago,US">Chicago,US</option>
						<option value="Dubai">Dubai</option>
					</select>
				</p>
				
				<p>
					<label for="toplace">To : </label>
					<select name="toplace" id="toplace">
						<option value="none" selected="selected">-- Select --</option>
						<option value="Ahmedabad,India">Ahmedabad,India</option>
						<option value="Cairo,Egypt">Cairo,Egypt</option>
						<option value="Chicago,US">Chicago,US</option>
						<option value="Dubai">Dubai</option>
					</select>
				</p>
				
				<p>
					<!-- Firefox does not support the HTML5 date input -->
					<label for="departdate">Date of Departure : </label>
					<input type="text" id="departdate" name="departdate" maxlength="10" placeholder="dd/mm/yyyy" pattern="\d{1,2}/\d{1,2}/\d{4}" required="required"/>
				</p>
				
				<fieldset id="classtype">
					<legend>Class Type:</legend>
					<input type="radio" name="classtype" id="business" value="Business"/>
					<label for="business">Business</label><br />						
					<input type="radio" name="classtype" id="economy" value="Economy" checked="checked"/>
					<label for="economy">Economy</label><br />
				</fieldset>	
				
				<p>
					<label>Extra Services/Facilities : </label><br />
					<input type="checkbox" name="ExtraService[]" id="Travel" value="Travel" />
					<label for="Travel">Travel Service After Flight To Reach to Hotel</label>
					<br />
					<input type="checkbox" name="ExtraService[]" id="Hotel" value="Hotel" />
					<label for="Hotel">Hotel Booking</label>
					<br />
					<input type="checkbox" name="ExtraService[]" id="Food" value="Food" />
					<label for="Food">Food Facility at Destination Place</label>
					<br />
					<input type="checkbox" name="ExtraService[]" id="CityTrip" value="CityTrip" />
					<label for="CityTrip">City Trip</label>
					<br />
				</p>
				<p>
					<input type="submit" value="Add My Trip" />
					<input type="reset" value="Reset" />
				</p>
			</fieldset>
			</form>
		</section>
		
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	</body>
</html>
