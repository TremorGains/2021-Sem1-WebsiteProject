<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Ocean Cruise Getaway: Payment"/>
		<meta name="keywords" content="Ocean, Holiday, HTML, Vacation, Payment"/>
		<meta name="author" content="Ryan Faraone"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>
		<link href="styles/layout.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		<title>The Ocean's Spirit: Payment</title>
		<script src="scripts/confirmpayment.js"></script>
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
		<article id="form">
		<h2>Booking</h2>
		<form id="bookform" method="post" action="process_order.php" novalidate="novalidate">
			<fieldset>
			<legend>Your Booking</legend>
				<p>Your Name: <span id="confirm_name"></span></p>
				<p>Email: <span id="confirm_email"></span></p>
				<p>Phone Number: <span id="confirm_phone"></span></p>
				<p>Address: <span id="confirm_address"></span></p>
				<p>Trip booked: <span  id="confirm_trip"></span></p>
				<p>Number of People: <span  id="confirm_people"></span></p>
				<p>Total Cost: $<span  id="confirm_cost"></span></p>
			</fieldset>
			<fieldset>
				<legend>Payment Information</legend>
				<label for="cardtype">Credit Card Type: </label>
				<select name="cardtype" id="cardtype">
					<option value="" selected="selected">Credit Card Type</option>
					<option value="mastercard">Mastercard</option>
					<option value="visa">Visa</option>
					<option value="americanexpress">American Express</option>
				</select> <br />
				<label for="name">Name on Credit Card: </label>
				<input type="text" name="name" id="name"/>
				<label for="cardnumber">Credit Card Number: </label>
				<input type="text" name="cardnumber" id="cardnumber"/><br />
				<label for="expiredate">Credit Card Expiry Date: </label>
				<input type="text" name="expiredate" id="expiredate" size="3"/>
				<label for="cvv">Card Verification Value (CVV): </label>
				<input type="text" name="cvv" id="cvv" size="3"/>
			</fieldset>
			<input type="hidden" name="firstname" id="firstname" />
			<input type="hidden" name="surname" id="surname" />
			<input type="hidden" name="email" id="email" />
			<input type="hidden" name="phone" id="phone" />
			<input type="hidden" name="address" id="address" />
			<input type="hidden" name="town" id="town" />
			<input type="hidden" name="state" id="state" />
			<input type="hidden" name="postcode" id="postcode" />
			<input type="hidden" name="trip" id="trip" />
			<input type="hidden" name="people" id="people" />
			<input type="hidden" name="cost" id="cost" />
			
			<input type="hidden" name="contact" id="contact" />
			<input type="hidden" name="query" id="query" />
			<input type="hidden" name="issueinfo" id="issueinfo" />
			<input type="submit" value="Check Out"/>
			<button type="button" id="cancelButton">Cancel Order</button>
		</form>
		</article>
		<?php
			require_once "includes/footer.inc";
		?>
	</body>
</html>