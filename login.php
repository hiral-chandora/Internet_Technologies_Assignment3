<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment3 - Internet Technologies" />
		<meta name="keywords"    content="PHP, MySql" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Vendor Login</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 
		?>
	<section>	
		<form id="admin_login" method="get" action="login.php">
			<fieldset id="login_detail">
				<legend>Login to Vendor Website</legend>
				<p>
					<label for="username">Username : </label>
					<input type="text" name="username" id="username" maxlength="50" required="required"/>
				</p>
				<p>
					<label for="password">Password : </label>
					<input type="password" name="password" id="password" maxlength="100" required="required"/>
				</p>
				<p>
					<input type="submit" value="Login" />
					<input type="reset" value="Reset" />
				</p>
			</fieldset>
		</form>
		
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
					$sql_table = "login";
					
					if (isset($_GET['username']))							//check if form data exists
						{
							//Set up the SQL command to add the data into the table
							$query = "select * FROM $sql_table Where UserName = '". trim($_GET['username']). 
									 "' AND Password = '" . trim($_GET['password']) . "'";
							
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
									session_start();
									if ($numRows == 0)
										{
											echo "<p style='text-align:center; color:red;'>Incorrect Username Or Password.</p>";
										}
									
									else
										{
											
											$_SESSION["login"] = "Admin";
											
											header('location:vendor_order.php');											
											//Fresh up the memory, after using the result pointer
											mysqli_free_result($result);
										}
								}	//If successful query operation

							//Close the database connection
							mysqli_close($conn);
						}
				}	// If Successfully database connection
		?>
	</section>
		
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	
	</body>
</html>
