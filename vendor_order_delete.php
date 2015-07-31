<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment3 - Internet Technologies" />
		<meta name="keywords"    content="PHP, MySql" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Vendor - Order Detail</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 
		?>
	<section>	
		<?php
			require_once("settings.php");		//Connection Info
			
			$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
			
			//Checks if connection is successful
			if(!$conn)
				{
					//Displays an error message
					echo "<p>Database connection failure</p>";		//not in production script
				}
			else
				{
					//Upon Successful Connection					
					$sql_table = "orders";
					
					if (isset($_GET['delete_id']))							//check if form data exists
						{
							//Set up the SQL command to add the data into the table
							$query = "Delete FROM $sql_table Where Order_ID = ". trim($_GET['delete_id']) . "";
								
							//Execute the query and store result into the result pointer
							$result = mysqli_query($conn, $query);
							
							//Checks if the execution was successful
							if(!$result)
								{
									echo "<p>Something is wrong with ", $query, "</p>";
								}
							else
								{
									header('location:vendor_order.php');
								}	//If successful query operation

							//Close the database connection
							mysqli_close($conn);
						}
				}	// If Successful database connection
		?>
	</section>
	
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	
	</body>
</html>
