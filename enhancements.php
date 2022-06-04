<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Ocean Cruise Getaway: Enhancements"/>
		<meta name="keywords" content="Ocean, Holiday, HTML, Vacation, Enhancements"/>
		<meta name="author" content="Ryan Faraone"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>
		<link href="styles/layout.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		<title>The Ocean's Spirit: Enhancements</title>
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
		</nav>
		<article>
			<h2>My Addition to the Webpages</h2>
			<h3>Responsive Design: </h3>
			<p id="links">A responsive design has been implemented into the webpages to accomodate devices with a tablet sized display. (750px-1024px)<br />
			This assignment only requires the webpages to be properly formatted for a regular computer monitor screen, however the implementation of this responsive design exceeds this by allowing for more devices to be compatible and allow for more devices to view the content as it was intended.<br />
			
			<ul id="css">
				<li><a href="index.php">Navigation Bar:</a> The font size is changed in order for none of the links will overlap with content on a tablet-sized display. Height of Navigation Bar is also changed to accomodate new font size and allow hover background colour to still overlap navigation bar background colour.</li>
				<li><a href="index.php#mainimg">Home Page's Main Graphic:</a> The padding of the image is changed in order to be properly centred in a tablet-sized display.</li>
				<li><a href="product.php#aside">Product Page's Aside:</a> Width of Aside and the images inside is lowered in order for the webpage's main content to be easily viewed.</li>
				<li><a href="about.php#dl">About Page's Definition List:</a> Font size of Definition List is lowered in order to not overly push figure or timetable away and to reduce interference of content with each other.</li>
			</ul>
			</p>
		</article>
		<?php
			require_once "includes/footer.inc";
		?>
	</body>
</html>