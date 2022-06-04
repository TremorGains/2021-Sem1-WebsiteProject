<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Ocean Cruise Getaway: Receipt"/>
		<meta name="keywords" content="Ocean, Holiday, HTML, Vacation, Receipt"/>
		<meta name="author" content="Ryan Faraone"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>
		<link href="styles/layout.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		<title>The Ocean's Spirit: Receipt</title>
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
			require_once ("settings.php");
			$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	
			if(!$conn) {
				echo "<p>Database Connection Faliure</p>";
			} else {
				$query = "SELECT * FROM orders WHERE order_id=(SELECT max(order_id) FROM orders)";
				$result = mysqli_query($conn, $query);
				if($result) {
					echo "<table border='1'>";
					echo "<tr><th>Order ID</th><th>Firstname</th><th>Surname</th><th>Email</th><th>Phone</th><th>Address</th><th>Town</th><th>State</th><th>Postcode</th><th>Trip</th><th>People</th><th>Order Cost</th><th>Card Type</th><th>Card Name</th><th>Card Number</th><th>Card Expiry Date</th><th>CVV</th><th>Order Time</th><th>Order Status</th></tr>";
					$row = mysqli_fetch_assoc($result);
					while ($row) {
						echo "<tr><td>{$row['order_id']}</td>";
						echo "<td>{$row['firstname']}</td>";
						echo "<td>{$row['surname']}</td>";
						echo "<td>{$row['email']}</td>";
						echo "<td>{$row['phone']}</td>";
						echo "<td>{$row['address']}</td>";
						echo "<td>{$row['town']}</td>";
						echo "<td>{$row['state']}</td>";
						echo "<td>{$row['postcode']}</td>";
						echo "<td>{$row['trip']}</td>";
						echo "<td>{$row['people']}</td>";
						echo "<td>{$row['order_cost']}</td>";
						echo "<td>****</td>";
						echo "<td>****</td>";
						echo "<td>****</td>";
						echo "<td>****</td>";
						echo "<td>****</td>";
						echo "<td>{$row['order_time']}</td>";
						echo "<td>{$row['order_status']}</td></tr>";
						$row = mysqli_fetch_assoc($result);
					}
				}
				mysqli_close($conn);
			}
		?>
		<?php
			require_once "includes/footer.inc";
		?>
	</body>
</html>