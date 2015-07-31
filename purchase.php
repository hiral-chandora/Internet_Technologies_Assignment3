<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment2 - Internet Technologies" />
		<meta name="keywords"    content="HTML, Javascript" />
		<meta name="author"      content="Hiral Chandora" />
		<!-- title of page -->
		<title>Product Purchase Page</title>
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
			<div id="showstatus"></div>
			<div>
				<a href="select.php"> Back to Product Selection Page </a>
				<a href="customer.php"> Back to Customer Registration Page </a>
			</div>
			<fieldset id="customerdata">
				<legend>Your details</legend>				
				<div id="custdata"></div>
			</fieldset>
			<br />
			<form id="purchaseform" method="post" action="add_purchase.php">
				<fieldset id="purchase">
					<legend>Your Credit Card Payment details</legend>
						<fieldset id="cardtype">
							<legend>Credit Card Type:</legend>
							<input type="radio" name="cardtype" id="visa" value="V" checked="checked"/>
							<label for="visa">Visa</label><br />						
							<input type="radio" name="cardtype" id="mastercard" value="M"/>
							<label for="mastercard">Master Card</label><br />
							<input type="radio" name="cardtype" id="american" value="A"/>
							<label for="american">American Express</label><br />						
							<input type="radio" name="cardtype" id="other" value="O"/>
							<label for="other">Other</label><br />
						</fieldset>
						
						<p>
							<label for="cardname">Name on Credit Card : </label>
							<input type="text" name="cardname" id="cardname" maxlength="30" pattern="[A-Za-z ]+" required="required"/>
						</p>
						
						<p>
							<label for="cardno">Credit Card Number : </label>
							<input type="text" name="cardno" id="cardno" maxlength="16" pattern="\d{16}" required="required"/>
						</p>
						
						<p>
							<label for="cardexpdate">Credit Card Expiry Date : </label>
							<input type="text" name="cardexpdate" id="cardexpdate" maxlength="5" pattern="(0[1-9]|1[012])-\d{2}" required="required"/>
						</p>
						<p>
							<input type="submit" value="Payment" />
							<input type="reset" value="Reset" />
						</p>
				</fieldset>
			</form>
			
			<?php
				if (isset($_POST['fromplace']))	
					$fromplace = trim($_POST["fromplace"]);
				else
					$fromplace = '';
				
				if (isset($_POST['toplace']))	
					$toplace = trim($_POST["toplace"]);
				else
					$toplace = '';
				
				if (isset($_POST['departdate']))	
					$departdate = trim($_POST["departdate"]);
				else
					$departdate = '';
					
				if (isset($_POST['classtype']))	
					$classtype = trim($_POST["classtype"]);
				else
					$classtype = '';			
	
				if (isset($_POST['ExtraService']))
					$extraservice = $_POST["ExtraService"];
				else
					$extraservice = '';			
				
				$valextraservice = '';
				if(!empty($extraservice)) 
					{
						$N = count($extraservice);	
						for($i=0; $i < $N; $i++)
						{
						  $valextraservice = $valextraservice . $extraservice[$i] . ", ";
						}
					} 
				
				session_start();														
				
				$_SESSION["fromplace"] = $fromplace;
				$_SESSION["toplace"] = $toplace;
				$_SESSION["departdate"] = $departdate;
				$_SESSION["classtype"] = $classtype;
				$_SESSION["extraservice"] = $valextraservice;
			?>
		</section>
		<?php 
			include('footer.php'); 		//Add Content of footer from php file
		?>
	</body>
</html>
