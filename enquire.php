<?php
	session_start();
	$_SESSION = array();
	session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Ocean Cruise Getaway: Questions and Enquiries"/>
		<meta name="keywords" content="Ocean, Holiday, HTML, Vacation, Enquiries"/>
		<meta name="author" content="Ryan Faraone"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>
		<link href="styles/layout.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		<title>The Ocean's Spirit: Questions and Enquiries</title>
		<script src="scripts/datavalidate.js"></script>
	</head>
	<body>
		<?php
			require_once "includes/header.inc";
		?>
		<nav>
			<a class="menu" id="page1" href="index.php">Home Page</a>
			<a class="menu" id="page2" href="product.php">Vacation Packages</a>
			<a class="menu" id="page4" href="about.php">About Me</a>
			<a class="menu" id="page5" href="enhancements.php">Enhancements</a>
		</nav>
		<article id="form">
			<h2>Contact Us</h2>
			<p>If you have any questions regarding bookings, cruise facilities, or any problems; please fill out the information below and we will get back to you as soon as possible.</p>
			<form id ="regform" method="post" action="payment.php" novalidate="novalidate">
				<fieldset>
					<legend>Contact Information</legend>
					<p>
						<label for="firstname">Given Name: </label>
						<input type="text" maxlength="25" name="firstname" id="firstname" pattern="[a-zA-Z]+" required="required"/>
						<label for="surname">Family Name: </label>
						<input type="text" maxlength="25" name="surname" id="surname" pattern="[a-zA-Z]+" required="required"/>
					</p>
					<p>
						<label for="email">Email Address: </label>
						<input type="email" name="email" id="email" required="required"/>
						<label for="phone">Phone Number: </label>
						<input type="text" maxlength="10" name="phone" id="phone" pattern="\d{10}" required="required" placeholder="04&#8727;&#8727;-&#8727;&#8727;&#8727;-&#8727;&#8727;&#8727;"/>
					</p>
				</fieldset>
				<fieldset>
					<legend>Address</legend>
					<p><label for="address">Street Address: </label>
					<input type="text" maxlength="40" name="address" id="address" required="required"/>
					<label for="town">Suburb/Town: </label>
					<input type="text" maxlength="20" name="town" id="town" required="required"/></p>
					<p><label for="state">State: </label>
					<select name="state" id="state" required="required">
						<option value="" selected="selected">--State--</option>
						<option value="vic">VIC</option>
						<option value="nsw">NSW</option>
						<option value="qld">QLD</option>
						<option value="nt">NT</option>
						<option value="wa">WA</option>
						<option value="sa">SA</option>
						<option value="tas">TAS</option>
						<option value="act">ACT</option>
					</select>
					<label for="postcode">Postcode: </label>
					<input type="text" maxlength="4" size="3" name="postcode" id="postcode" pattern="\d{4}" required="required"/></p>
				</fieldset>
				<fieldset>
					<legend>Booking Enquiries</legend>
					<p>Preferred Contact Method:</p>
					<p><input type="radio" name="contact" id="preferemail" value="email" required="required"/>
					<label>Email</label>
					<input type="radio" name="contact" id="preferpost" value="post"/>
					<label>Post</label>
					<input type="radio" name="contact" id="preferphone" value="phone"/>
					<label>Phone</label></p>
					<p><label for="package">Package: </label>
					<select name="package" id="package" required="required">
						<option value="">Please Select Package</option>
						<option value="tsr">The Scenic Route: $210</option>
						<option value="abofa">A Breath of Fresh Air: $435</option>
						<option value="tuv">The ULTIMATE Vacation: $1385</option>
					</select></p>
					<label for="people">Number of People: </label>
					<input type="text" size="3" name="people" id="people" required="required"/>
					<fieldset id="query">
						<legend>Package Query: </legend>
						<label>Booking</label>
						<input type="checkbox" name="query[]" id="booking" value="booking" required="required"/>
						<label>Facilities</label>
						<input type="checkbox" name="query[]" id="facilities" value="facilities"/>
						<label>Dietary Requirements</label>
						<input type="checkbox" name="query[]" id="dietary" value="dietary"/>
						<label>Accomodation</label>
						<input type="checkbox" name="query[]" id="accomodation" value="accomodation"/>
						<label>Other</label>
						<input type="checkbox" name="query[]" id="other" value="other"/>
					</fieldset>
					<p>Description of Query<br />
					<textarea name="issueinfo" id="issueinfo" rows="4" cols="40" placeholder="Write description of your query here..."></textarea></p>
				</fieldset>
				<input type="submit" value="Pay Now" />
				<input type="reset" value="Reset" />
			</form>
		</article>
		<?php
			require_once "includes/footer.inc";
		?>
	</body>
</html>