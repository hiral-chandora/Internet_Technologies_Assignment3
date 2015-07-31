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
		<p style="text-align:right;">
			<a href="logout.php"> Log Out </a>
		</p>
		<form method="post" action="vendor_order.php">
			<fieldset><legend>Order Search</legend>
				<p>	<label for="cust_id">Customer ID: </label>
					<input type="text" name="cust_id" id="cust_id"/>
				</p>
				<p>	<label for="order_date">Date of Order: </label>
					<input type="text" id="order_date" name="order_date" maxlength="10" placeholder="yyyy-mm-dd" 
					pattern="\d{4}-\d{2}-\d{2}"/>
				</p>
				<p>			
					<label for="sort_by">Sorting on :</label>
						<select name="sort_by" id="sort_by">
							<option value="orders.Order_ID" selected="selected">Order ID</option>
							<option value="orders.Customer_ID">Customer ID</option>
							<option value="customers.First_Name">Customer Name</option>
							<option value="orders.Order_Date">Booking Date</option>
							<option value="orders.Order_Status">Status</option>
						</select>
					
					<label for="sort_as"> As :</label>
						<select name="sort_as" id="sort_as">
							<option value="ASC" selected="selected">Ascending</option>
							<option value="DESC">Descending</option>
						</select>
				</p>
				<p>	
					<input type="submit" value="Search for Order" />
				</p>
			</fieldset>
		</form>
		<br />
		<br />
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
					session_start();
					
					if(!(isset($_SESSION['login'])))
						{
							header('location:login.php');	
						}
						
					//Upon Successful Connection					
					$sql_table = "orders";
					
					$sql_where_cond = '';
					$sql_sort_cond = '';
					
					if (isset($_POST["cust_id"]) && isset($_POST["order_date"]))
						{
							if ((!trim($_POST["cust_id"]) == "") && (!trim($_POST["order_date"]) == ""))
								$sql_where_cond = " Where orders.Customer_ID = '". trim($_POST["cust_id"]) 
										. "' And date(orders.Order_Date) = '" . trim($_POST["order_date"]) . "'";
							else if (!trim($_POST["cust_id"]) == "")
								$sql_where_cond = " Where orders.Customer_ID = '". trim($_POST["cust_id"]) . "'";
							else if (!trim($_POST["order_date"]) == "")
								$sql_where_cond = " Where date(orders.Order_Date) = '" . trim($_POST["order_date"]) . "'";
						}
					
					if (isset($_POST["sort_by"]))
						{
							$sql_sort_cond = " Order By " . $_POST["sort_by"] . " " . $_POST["sort_as"];
						}
						
					//Set up the SQL command to add the data into the table
					$query = "select orders.*, CONCAT(customers.First_Name, ' ', customers.Last_Name) As Customer_Name, customers.First_Name
								FROM $sql_table LEFT JOIN customers ON orders.Customer_ID = customers.Customer_ID" 
							. $sql_where_cond . $sql_sort_cond;
					
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
										."<th scope=\"col\">Customer ID</th>"
										."<th scope=\"col\">Customer Name</th>"
										."<th scope=\"col\">Booking Date</th>"
										."<th scope=\"col\">Status</th>"
										."<th scope=\"col\">Booking Detail</th>"							
										."<th scope=\"col\"></th>"
										."<th scope=\"col\"></th>"
										."</tr>";
										
									//Retrieve current record pointed by the result pointer
									while ($row = mysqli_fetch_assoc($result))
										{
											echo "<tr>";
											echo "<td>", $row["Order_ID"], "</td>";
											echo "<td>", $row["Customer_ID"], "</td>";
											echo "<td style='text-align:left;'>", $row["Customer_Name"], "</td>";
											echo "<td>", date('d/m/Y', strtotime( $row["Order_Date"])), "</td>";
											echo "<td>", $row["Order_Status"], "</td>";
											
											echo "<td style='text-align:left;'> From : ", $row["From_Place"], "<br />
														To : ", $row["To_Place"] ,"<br />
														Departure date: ", $row["Depart_Date"] ,"<br />
														Class Type : " , $row["Class_Type"] ,"</td>";
											
											echo "<td><a href='vendor_order_update.php?update_id=". trim($row["Order_ID"]) ."'> Edit </a></td>";
											echo "<td><a href='vendor_order_delete.php?delete_id=". trim($row["Order_ID"]) ."'> Delete </a></td>";
											echo "</tr>";
										}
									echo "</table>";
									
									//Fresh up the memory, after using the result pointer
									mysqli_free_result($result);
								}							
						}	//If successful query operation

					//Close the database connection
					mysqli_close($conn);
						
				}	// If Successful database connection
		?>
	</section>
	
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	
	</body>
</html>
