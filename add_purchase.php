<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment3 - Internet Technologies" />
		<meta name="keywords"    content="PHP, MySql" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Order Recorded Successful</title>
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
						if (isset($_POST['cardno']))							//check if form data exists
							{								
								$cardname = trim($_POST["cardname"]);
								$cardno = trim($_POST["cardno"]);
								$cardexpdate = trim($_POST["cardexpdate"]);
								
								session_start();
								$fromplace = $_SESSION["fromplace"];
								$toplace = $_SESSION["toplace"];
								$departdate = $_SESSION["departdate"];
								$classtype = $_SESSION["classtype"];
								$extraservice = $_SESSION["extraservice"];
								
								if (!isset ($_SESSION["customer_id"])) 	// check if session variable exists 
									{ 								
										$_SESSION["customer_id"] = 0; 	// create and set the session variable 
									} 
									
								$customer_id = $_SESSION["customer_id"];		
								$status = "Pending";
								
								$sqlString_create = "CREATE TABLE IF NOT EXISTS orders (
												Order_ID int(11) NOT NULL AUTO_INCREMENT,
												Customer_ID int(11) NOT NULL,
												Order_Date datetime NOT NULL,
												Credit_Card_No varchar(17) NOT NULL,
												Credit_Card_Name varchar(30) NOT NULL,
												Card_Exp_Date varchar(5) NOT NULL,
												Order_Status varchar(10) NOT NULL,
												From_Place varchar(100) NOT NULL,
												To_Place varchar(100) NOT NULL,
												Depart_Date varchar(20) NOT NULL,
												Class_Type varchar(20) NOT NULL,
												Extra_Service varchar(100) NOT NULL,
												PRIMARY KEY (Order_ID))"; 
												
								//echo $sqlString_create;
								$result_create = @mysqli_query($conn, $sqlString_create);
								
								
								//Set up the SQL command to add the data into the table
								$query = "INSERT INTO $sql_table (Customer_ID, Order_Date, Credit_Card_No, Credit_Card_Name, Card_Exp_Date,
																Order_Status, From_Place, To_Place, Depart_Date, Class_Type, Extra_Service) 
											VALUES ('$customer_id', now(), '$cardno', '$cardname', '$cardexpdate', '$status',
													'$fromplace', '$toplace', '$departdate', '$classtype', '$extraservice')";
								
								//Execute the query 
								$result = mysqli_query($conn, $query);
								
								//Checks if the execution was successful
								if(!$result)
									{
										echo "<p>Something is wrong with ", $query, "</p>";
									}
								else
									{
										//Display an operation successful message
										echo "<p>Your Booking Detail is successfully recorded.</p>";
										
									}	//If successful insert query operation

								//Close the database connection
								mysqli_close($conn);
							}
					}	// If Successful database connection
			?>
			<p><a href="select.php"> Go To Product Selection Page </a></p>
		</section>
		
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	</body>
</html>
