<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment3 - Internet Technologies" />
		<meta name="keywords"    content="PHP, MySql" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Customer Order Data</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 
		?>
	<section>	
		<form id="cust_order_search" method="post" action="customer_order_result.php">
			<fieldset id="search_order">
				<legend>Search Orders</legend>
				<p>
					<label for="cust_id">Customer ID: </label>
					<input type="text" name="cust_id" id="cust_id" maxlength="20" required="required"/>
				</p>
				<p>
					<input type="submit" value="Search" />
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
