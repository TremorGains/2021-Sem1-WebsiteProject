<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Ocean Cruise Getaway: Process Order"/>
		<meta name="keywords" content="Ocean, Holiday, HTML, Vacation, Process Order"/>
		<meta name="author" content="Ryan Faraone"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>
		<link href="styles/layout.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		<title>The Ocean's Spirit: Process Order</title>
	</head>
	<body>
		<?php
			require_once "includes/header.inc";
		?>
		<nav>
			<a class="menu" id="page1" href="index.php">Home Page</a>
			<a class="menu" id="page2" href="product.php">Vacation Packages</a>
			<a class="menu" id="page3" href="enquire.php">Questions and Enquiries</a>
			<a class="menu" id="page4" href="about.php">About Me</a>
			<a class="menu" id="page5" href="enhancements.php">Enhancements</a>
		</nav>
		<?php
			session_start();
			echo "<form method='post' action='fix_order2.php'>";
			echo "<fieldset>";
			echo "<legend>Enter the Following Details Correctly</legend>";
			if(isset($_SESSION["firstname"])) {
				$firstname = $_SESSION["firstname"];
				echo "<p><label for='firstname'>Given Name: </label>";
				echo "<input type='text' maxlength='25' name='firstname' id='firstname' placeholder='$firstname'/></p>";
			}
			if(isset($_SESSION["surname"])) {
				$surname = $_SESSION["surname"];
				echo "<p><label for='surname'>Family Name: </label>";
				echo "<input type='text' maxlength='25' name='surname' id='surname' placeholder='$surname'/></p>";
			}
			if(isset($_SESSION["email"])) {
				$email = $_SESSION["email"];
				echo "<p><label for='email'>Email Address: </label>";
				echo "<input type='email' name='email' id='email' placeholder='$email'/></p>";
			}
			if(isset($_SESSION["phone"])) {
				$phone = $_SESSION["phone"];
				echo "<p><label for='phone'>Phone Number: </label>";
				echo "<input type='text' maxlength='10' name='phone' id='phone' placeholder='$phone'/></p>";
			}
			if(isset($_SESSION["address"])) {
				$address = $_SESSION["address"];
				echo "<p><label for='address'>Street Address: </label>";
				echo "<input type='text' maxlength='40' name='address' id='address' placeholder='$address'/></p>";
			}
			if(isset($_SESSION["town"])) {
				$town = $_SESSION["town"];
				echo "<p><label for='town'>Suburb/Town: </label>";
				echo "<input type='text' maxlength='20' name='town' id='town' placeholder='$town'/></p>";
			}
			if(isset($_SESSION["state"])) {
				$state = $_SESSION["state"];
				echo "<p><label for='state'>State: </label>";
				echo "<select name='state' id='state'>";
				echo "<option value='' selected='selected'>--State--</option>";
				echo "<option value='vic'>VIC</option>";
				echo "<option value='nsw'>NSW</option>";
				echo "<option value='qld'>QLD</option>";
				echo "<option value='nt'>NT</option>";
				echo "<option value='wa'>WA</option>";
				echo "<option value='sa'>SA</option>";
				echo "<option value='tas'>TAS</option>";
				echo "<option value='act'>ACT</option>";
				echo "</select></p>";
			}
			if(isset($_SESSION["postcode"])) {
				$postcode = $_SESSION["postcode"];
				echo "<p><label for='postcode'>Postcode: </label>";
				echo "<input type='text' maxlength='4' size='3' name='postcode' id='postcode' placeholder='$postcode'/></p>";
			}
			if(isset($_SESSION["contact"])) {
				$contact = $_SESSION["contact"];
				echo "<p>Preferred Contact Method:</p>";
				echo "<p><input type='radio' name='contact' id='preferemail' value='email'/>";
				echo "<label>Email</label>";
				echo "<input type='radio' name='contact' id='preferpost' value='post'/>";
				echo "<label>Post</label>";
				echo "<input type='radio' name='contact' id='preferphone' value='phone'/>";
				echo "<label>Phone</label></p>";
			}
			if(isset($_SESSION["trip"])) {
				$trip = $_SESSION["trip"];
				echo "<p><label for='trip'>Trip: </label>";
				echo "<select name='trip' id='trip'>";
				echo "<option value='' selected='selected'>Please Select Trip</option>";
				echo "<option value='tsr'>The Scenic Route: $210</option>";
				echo "<option value='abofa'>A Breath of Fresh Air: $435</option>";
				echo "<option value='tuv'>The ULTIMATE Vacation: $1385</option>";
				echo "</select></p>";
			}
			if(isset($_SESSION["people"])) {
				$people = $_SESSION["people"];
				echo "<p><label for='people'>Number of People: </label>";
				echo "<input type='text' size='3' name='people' id='people' placeholder='$people'/></p>";
			}
			if(isset($_SESSION["cardtype"])) {
				$cardtype = $_SESSION["cardtype"];
				echo "<p><label for='cardtype'>Credit Card Type: </label>";
				echo "<select name='cardtype' id='cardtype'>";
				echo "<option value='' selected='selected'>Credit Card Type</option>";
				echo "<option value='mastercard'>Mastercard</option>";
				echo "<option value='visa'>Visa</option>";
				echo "<option value='americanexpress'>American Express</option>";
				echo "</select></p>";
			}
			if(isset($_SESSION["cardname"])) {
				$cardname = $_SESSION["cardname"];
				echo "<p><label for='cardname'>Name on Credit Card: </label>";
				echo "<input type='text' name='cardname' id='cardname'/></p>";
			}
			if(isset($_SESSION["cardnumber"])) {
				$cardnumber = $_SESSION["cardnumber"];
				echo "<p><label for='cardnumber'>Credit Card Number: </label>";
				echo "<input type='text' name='cardnumber' id='cardnumber'/></p>";
			}
			if(isset($_SESSION["expirydate"])) {
				$expirydate = $_SESSION["expirydate"];
				echo "<p><label for='expiredate'>Credit Card Expiry Date: </label>";
				echo "<input type='text' name='expirydate' id='expirydate' size='3'/></p>";
			}
			if(isset($_SESSION["cvv"])) {
				$cvv = $_SESSION["cvv"];
				echo "<p><label for='cvv'>Card Verification Value (CVV): </label>";
				echo "<input type='text' name='cvv' id='cvv' size='3'/></p>";
			}
			echo "</fieldset>";
			echo "<input type='submit' value='Fix'/></p>";
			echo "</form>";
		?>
		<?php
			require_once "includes/footer.inc";
		?>
	</body>
</html>