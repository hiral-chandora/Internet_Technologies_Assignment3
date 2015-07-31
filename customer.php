<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment2 - Internet Technologies" />
		<meta name="keywords"    content="HTML, Javascript" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Customer Registration</title>
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
			<form id="regform" method="post" action="add_customer.php">
				<fieldset id="customer">
					<legend>Your details</legend>
					<p>
						<label for="firstname">First name : </label>
						<input type="text" name="firstname" id="firstname" maxlength="20" pattern="[A-za-z]+" required="required"/>
					</p> 
					<p>
						<label for="lastname">Last name : </label>
						<input type="text" name="lastname" id="lastname" maxlength="20" pattern="[A-za-z]+" required="required"/>
					</p>
					<p>
						<!-- Firefox does not support the HTML5 date input -->
						<label for="birthdate">Date of Birth : </label>
						<input type="text" id="birthdate" name="birthdate" maxlength="10" placeholder="dd/mm/yyyy" pattern="\d{1,2}/\d{1,2}/\d{4}" required="required"/>
					</p>
					
					<fieldset id="billingaddress">
						<legend>Billing Address</legend>
						<p>
							<label for="bstreetaddress">Street Address : </label>
							<input type="text" name="bstreetaddress" id="bstreetaddress" maxlength="40" required="required"/>
						</p>
						<p>
							<label for="bsuburbtown">Suburb/Town : </label>
							<input type="text" name="bsuburbtown" id="bsuburbtown" maxlength="20" required="required"/>
						</p>
						<p>
							<label for="bstate">State : </label>
							<select name="bstate" id="bstate">
								<option value="none" selected="selected">-- Select --</option>
								<option value="vic">VIC</option>
								<option value="nsw">NSW</option>
								<option value="qld">QLD</option>
								<option value="nt">NT</option>
								<option value="wa">WA</option>
								<option value="sa">SA</option>
								<option value="tas">TAS</option>
								<option value="act">ACT</option>
							</select>
						</p>
						<p>
							<label for="bpostcode">Postcode : </label>
							<input type="text" name="bpostcode" id="bpostcode" maxlength="4" pattern="\d{4}" required="required"/>
						</p>
					</fieldset>
					
					<fieldset id="deliveryaddress">
						<legend>Delivery Address</legend>
						<p>							
							<input type="checkbox" name="sameadd" id="sameadd" value="Y" />
							<label for="sameadd">Same as the Billing Address</label>
						</p>
						<p>
							<label for="dstreetaddress">Street Address : </label>
							<input type="text" name="dstreetaddress" id="dstreetaddress" maxlength="40" required="required"/>
						</p>
						<p>
							<label for="dsuburbtown">Suburb/Town : </label>
							<input type="text" name="dsuburbtown" id="dsuburbtown" maxlength="20" required="required"/>
						</p>
						<p>
							<label for="dstate">State : </label>
							<select name="dstate" id="dstate">
								<option value="none" selected="selected">-- Select --</option>
								<option value="vic">VIC</option>
								<option value="nsw">NSW</option>
								<option value="qld">QLD</option>
								<option value="nt">NT</option>
								<option value="wa">WA</option>
								<option value="sa">SA</option>
								<option value="tas">TAS</option>
								<option value="act">ACT</option>
							</select>
						</p>
						<p>
							<label for="dpostcode">Postcode : </label>
							<input type="text" name="dpostcode" id="dpostcode" maxlength="4" pattern="\d{4}" required="required"/>
						</p>
					</fieldset>
					
					<p>
						<label for="emailid"> Email ID</label>
						<input type="email" id="emailid" name="emailid" placeholder="your_email@example.org.me" required="required"/>
					</p>
					<p>
						<label for="phoneno">Phone number : </label>
						<input type="text" name="phoneno" id="phoneno" maxlength="10" pattern="\d{10}" required="required"/>
					</p>
					
					<p>
						<input type="submit" value="Register" />
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
