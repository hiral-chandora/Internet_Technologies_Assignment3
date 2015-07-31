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
					
					if (isset($_POST['cust_id']))							//check if form data exists
						{
							//Set up the SQL command to add the data into the table
							$query = "select * FROM $sql_table Where Customer_ID = '". trim($_POST['cust_id']). "'";
							
							//Execute the query and store result into the result pointer
							$result = mysqli_query($conn, $query);
							
							//Checks if the execution was successful
							if(!$result)
								{
									echo "<p>Something is wrong with ", $query, "</p>";
								}
							else
								{
									$numRows = mysqli_num_rows($result);
									if ($numRows == 0)
										{
											echo "<p style='text-align:center;'>No Records Found.</p>";
										}
									
									else
										{
											echo "<p style='text-align:center;'>Total <b>" .$numRows . " </b> Records found.</p>";
										
											//Display the retrieved records
											echo "<table border=\"1\">";
											echo "<tr>"
												."<th scope=\"col\">Order ID</th>"
												."<th scope=\"col\">From Place</th>"
												."<th scope=\"col\">To Place</th>"
												."<th scope=\"col\">Departure Date</th>"
												."<th scope=\"col\">Class</th>"
												."<th scope=\"col\">Date</th>"
												."<th scope=\"col\">Status</th>"
												."</tr>";
												
											//Retrive current record pointed by the result pointer
											while ($row = mysqli_fetch_assoc($result))
												{
													echo "<tr>";
													echo "<td>", $row["Order_ID"], "</td>";
													echo "<td>", $row["From_Place"], "</td>";
													echo "<td>", $row["To_Place"], "</td>";
													echo "<td>", $row["Depart_Date"], "</td>";
													echo "<td>", $row["Class_Type"], "</td>";
													echo "<td>", $row["Order_Date"], "</td>";
													echo "<td>", $row["Order_Status"], "</td>";
													echo "</tr>";
												}
											echo "</table>";
											
											//Fresh up the memory, after using the result pointer
											mysqli_free_result($result);
										}
								}	//If successful query operation

							//Close the database connection
							mysqli_close($conn);
						}
				}	// If Successfull database connection
		?>
		<p><a href="customer_order_search.php"> Back to Search Page </a></p>
	</section>
	
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	
	</body>
</html>
