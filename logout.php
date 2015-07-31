<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment3 - Internet Technologies" />
		<meta name="keywords"    content="PHP, MySql" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Vendor - Log Out</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 
		?>
	<section>	
		<?php
			session_start();
			$_SESSION = array();//unset all session variables
			session_destroy();
			header('location:index.php');	
		?>
	</section>
	
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	
	</body>
</html>
