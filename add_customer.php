<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment3 - Internet Technologies" />
		<meta name="keywords"    content="PHP, MySql" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Customer Registration Successful</title>
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
						$sql_table = "customers";
						if (isset($_POST['firstname']))							//check if form data exists
							{
								$first_name = trim($_POST["firstname"]);
								$last_name = trim($_POST["lastname"]);
								$bstreet_add = trim($_POST["bstreetaddress"]);
								$bsuburb = trim($_POST["bsuburbtown"]);
								$bstate = trim($_POST["bstate"]);
								$bpostcode = trim($_POST["bpostcode"]);
								$dstreet_add = trim($_POST["dstreetaddress"]);
								$dsuburb = trim($_POST["dsuburbtown"]);
								$dstate = trim($_POST["dstate"]);
								$dpostcode = trim($_POST["dpostcode"]);
								$emailid = trim($_POST["emailid"]);
								$phoneno = trim($_POST["phoneno"]);	
								
								$sqlString_create = "CREATE TABLE IF NOT EXISTS customers (
												Customer_ID int(11) NOT NULL AUTO_INCREMENT,
												First_Name varchar(20) NOT NULL,
												Last_Name varchar(20) NOT NULL,
												BStreet_Add varchar(40) NOT NULL,
												BSuburb varchar(20) NOT NULL,
												BState varchar(5) NOT NULL,
												BPostcode int(4) NOT NULL,
												DStreet_Add varchar(40) NOT NULL,
												DSuburb varchar(20) NOT NULL,
												DState varchar(5) NOT NULL,
												DPostcode int(4) NOT NULL,
												EmailID varchar(100) NOT NULL,
												Phone_no varchar(11) NOT NULL,
												PRIMARY KEY (Customer_ID))"; 
					
								$result_create = @mysqli_query($conn, $sqlString_create);
								
								
								//Set up the SQL command to add the data into the table
								$query = "INSERT INTO $sql_table (First_Name, Last_Name, BStreet_Add, BSuburb, BState, BPostcode, 
																DStreet_Add, DSuburb, DState, DPostcode, EmailID, Phone_no) 
											VALUES ('$first_name', '$last_name', '$bstreet_add', '$bsuburb', '$bstate', '$bpostcode',
													'$dstreet_add', '$dsuburb', '$dstate', '$dpostcode', '$emailid', '$phoneno')";
								
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
										echo "<p>Your Detail is successfully recorded.</p>";
										
										//Set up the SQL command to add the data into the table
										$query_id = "SELECT MAX(Customer_ID) As Customer_ID FROM customers";
										
										//Execute the query and store result into the result pointer
										$result_id = mysqli_query($conn, $query_id);
										
										//Checks if the execution was successful
										if(!$result_id)
											{
												echo "<p>Something is wrong with ", $query_id, "</p>";
											}
										else
											{																		
												//Retrieve current record pointed by the result pointer
												while ($row = mysqli_fetch_assoc($result_id))
													{
														$get_customer_id = $row["Customer_ID"];
														echo "<p>Your Customer ID is : ", $get_customer_id, "</p>";	
														
														session_start();														
														if (!isset ($_SESSION["customer_id"])) 	// check if session variable exists 
															{ 								
																$_SESSION["customer_id"] = 0; 	// create and set the session variable 
															} 
															
														$_SESSION["customer_id"] = $get_customer_id;
													}
												
												echo "<p>You can use this ID to place an order ";
												
												//Fresh up the memory, after using the result pointer
												mysqli_free_result($result_id);
											}	//If successful select query operation
										
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
