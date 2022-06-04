<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Ocean Cruise Getaway: Index"/>
		<meta name="keywords" content="Ocean, Holiday, HTML, Vacation, Index"/>
		<meta name="author" content="Ryan Faraone"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>
		<link href="styles/layout.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		<title>The Ocean's Spirit: Index</title>
	</head>
	<body>
		<?php
			require_once "includes/header.inc";
		?>
		<nav>
		
			<a class="menu" id="page2" href="product.php">Vacation Packages</a>
			<a class="menu" id="page3" href="enquire.php">Questions and Enquiries</a>
			<a class="menu" id="page4" href="about.php">About Me</a>
			<a class="menu" id="page5" href="enhancements.php">Enhancements</a>
		
		</nav>
		<figure>
			<img id="mainimg" src="images/main.jpg" alt="Photo of Boat" />
		</figure>
		<?php
			require_once "includes/footer.inc";
		?>
	</body>
</html>