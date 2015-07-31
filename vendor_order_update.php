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
					
					if (isset($_GET['status']))							//check if form data exists
						{
							session_start();
							//Set up the SQL command to add the data into the table
							$query = "Update $sql_table SET Order_Status='". trim($_GET['status']) 
									. "' Where Order_ID = ". trim($_SESSION["update_id"]) . "";
							
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
		<form id="vendor_order_update" method="GET" action = "vendor_order_update.php">
			<fieldset id="update_order">
				<legend>Update Orders</legend>
				<p>
					<label for="order_id">Order ID: 
						<?php
							session_start();
							if (isset($_GET['update_id']))							//check if form data exists
								{
									$_SESSION["update_id"] = $_GET['update_id'];
								}
								
							echo trim($_SESSION["update_id"]);  
						?> 
					</label>
					
				</p>
				<p>
					<label for="status">Status : </label>
					<select name="status" id="status">
						<option value="Pending">Pending</option>
						<option value="Fulfilled">Fulfilled</option>
						<option value="Paid">Paid</option>
					</select>
				</p>
				<p>
					<input type="submit" value="Update" />
					<input type="reset" value="Reset" />
				</p>
				<p><a href="vendor_order.php"> Back to Order detail Page </a></p>
			</fieldset>
		</form>
	</section>
	
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	
	</body>
</html>
