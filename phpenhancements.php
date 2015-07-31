<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment3 - Internet Technologies" />
		<meta name="keywords"    content="PHP, MySql" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>PHP Enhancement List</title>
		<!-- Reference to External CSS -->
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php 
			include('header.php'); 			// include php file of header and menu 
		?>
	<section>	
		<h3> List Of Enhancements:</h3>
		<ol>
			<li>
				Automatically Create the orders and customer table, if those tables do not exists.
				<p>
				For this enhancement programmer needs to check whether the table is already exits or not in database, in which he is trying to insert values. If it is not exists he has to write query related to it for example : "Create table if not exists" and create table.
				</p>
			</li>
			
			<li>
				Provide the vendor with the ability to select the field on which to sort the order in which the records are displayed.
				<p>
				Vendor should be allowed to choose the field on which he wants filtering and which type of filtering. Based on selection made programmer needs to get those criteria and make query according to that.
				</p>
			</li>
			
			<li>
				Create a vendor log in page to use the stored information to control access to the vendor website. Ensure the vendor website can not be entered directly using a URL.
				<p>
				Vendor should be logged in to use vendor website. For this programmer needs to check whether it is logged in or not with the help of session or any method to store login detail. If vendor try to enter directly to website, he should not be allowed to do so. Login is must.
				</p>
			</li>
			
			<li>
				Create a log out page with a link from the vendor web page. Ensure the vendor web site cannot be entered directly using a URL after logging out.
				<p>
				Vendor should be logged in to use vendor website. After successfully logged out vendor should not be allowed to use any data. For that programmer needs to unset all session variables and destroy its value. So that vendor has to login in again to use data.
				</p>
			</li>
			
			<li>
				Use of Compound Query
				<p>
				On vendor website, as per essential requirement it should show data from order table only. But with the help of compound query like joining can help to produce report from two tables. It shows customers names which come from customer table where as other information are coming from orders table.
				</p>
			</li>
		</ol>
	</section>
	
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	
	</body>
</html>
