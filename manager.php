<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Ocean Cruise Getaway: Manager"/>
		<meta name="keywords" content="Ocean, Holiday, HTML, Vacation, Manager"/>
		<meta name="author" content="Ryan Faraone"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>
		<link href="styles/layout.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		<title>The Ocean's Spirit: Manager</title>
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
			function sanitise_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			
			require_once ("settings.php");
			
			if(!isset($_GET["search"])) {
				echo "<form method='get' action='manager.php?search'>";
				echo "<fieldset>";
				echo "<h1>Please Select Database Search Option</h1>";
				echo "<p><input type='radio' name='search' id='allorders' value='allorders'/>";
				echo "<label>All Orders</label></p>";
				echo "<p><input type='radio' name='search' id='name' value='name'/>";
				echo "<label>Search by Name</label></p>";
				echo "<p><input type='radio' name='search' id='trip' value='trip'/>";
				echo "<label>Search by Trip</label></p>";
				echo "<p><input type='radio' name='search' id='pending' value='pending'/>";
				echo "<label>Pending Orders</label></p>";
				echo "<p><input type='radio' name='search' id='cost' value='cost'/>";
				echo "<label>Sort by Cost</label></p>";
				echo "<input type='submit' value='Select'/></p>";
				echo "</fieldset>";
				echo "</form>";
			} else {
				$search = $_GET["search"];
				if($search == "allorders") {
					$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	
					if(!$conn) {
						echo "<p>Database Connection Faliure</p>";
					} else {
						$query = "SELECT * FROM orders";
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
								echo "<td>{$row['cardtype']}</td>";
								echo "<td>{$row['cardname']}</td>";
								echo "<td>{$row['cardnumber']}</td>";
								echo "<td>{$row['cardexpire']}</td>";
								echo "<td>{$row['cvv']}</td>";
								echo "<td>{$row['order_time']}</td>";
								echo "<td>{$row['order_status']}</td></tr>";
								$row = mysqli_fetch_assoc($result);
							}
						}
						mysqli_close($conn);
					}
					
					echo "<p><a href='manager.php'>Return</a></p>";
				} else if($search == "name") {
					if(!isset($_GET["firstname"]) and !isset($_GET["firstname"])) {
						echo "<form method='get' action='manager.php?search&firstname&lastname'>";
						echo "<fieldset><legend>Search for Name</legend>";
						echo "<p class='row'>	<label for='firstname'>Firstname: </label>";
						echo "<input type='text' name='firstname' id='firstname' /></p>";
						echo "<p class='row'>	<label for='lastname'>Lastname: </label>";
						echo "<input type='text' name='lastname' id='lastname' /></p>";
						echo "<input type='hidden' name='search' value='name'";
						echo "<p>	<input type='submit' value='Search Name' /></p>";
						echo "</fieldset>";
						echo "</form>";
					} else {
						$firstname = sanitise_input($_GET["firstname"]);
						$lastname = sanitise_input($_GET["lastname"]);
						
						if(empty($firstname) and empty($lastname)) {
							echo "<p>Please enter values in <a href='manager.php?search=name'>Search</a></p>";
						} else {
							$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
						
							if(!$conn) {
								echo "<p>Database Connection Faliure</p>";
							} else {
								if(empty($firstname) or empty($lastname)) {
									if(!empty($firstname)) {
										$query = "SELECT * FROM orders WHERE firstname LIKE '$firstname%'";
									} else if(!empty($lastname)) {
										$query = "SELECT * FROM orders WHERE surname LIKE '$lastname%'";
									}
								} else if(!empty($firstname) and !empty($lastname)) {
									$query = "SELECT * FROM orders WHERE firstname LIKE '$firstname%' AND surname LIKE '$lastname%'";
								}
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
										echo "<td>{$row['cardtype']}</td>";
										echo "<td>{$row['cardname']}</td>";
										echo "<td>{$row['cardnumber']}</td>";
										echo "<td>{$row['cardexpire']}</td>";
										echo "<td>{$row['cvv']}</td>";
										echo "<td>{$row['order_time']}</td>";
										echo "<td>{$row['order_status']}</td></tr>";
										$row = mysqli_fetch_assoc($result);
									}
								}
								mysqli_close($conn);
							}
						}
					
						echo "<p><a href='manager.php'>Return</a></p>";
					}
				} else if($search == "trip") {
					if(!isset($_GET["trip"])) {
						echo "<form method='get' action='manager.php?search&trip'>";
						echo "<fieldset><legend>Search for Trip</legend>";
						echo "<p><input type='radio' name='trip' id='tsr' value='tsr'/>";
						echo "<label>The Scenic Route</label></p>";
						echo "<p><input type='radio' name='trip' id='abofa' value='abofa'/>";
						echo "<label>A Breath of Fresh Air</label></p>";
						echo "<p><input type='radio' name='trip' id='tuv' value='tuv'/>";
						echo "<label>The ULTIMATE Vacation</label></p>";
						echo "<input type='hidden' name='search' value='trip'";
						echo "<p><input type='submit' value='Search for Trip' /></p>";
						echo "</fieldset>";
						echo "</form>";
					} else {
						$trip = $_GET["trip"];
						
						$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
						
						if(!$conn) {
							echo "<p>Database Connection Faliure</p>";
						} else {
							$query = "SELECT * FROM orders WHERE trip = '$trip'";
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
									echo "<td>{$row['cardtype']}</td>";
									echo "<td>{$row['cardname']}</td>";
									echo "<td>{$row['cardnumber']}</td>";
									echo "<td>{$row['cardexpire']}</td>";
									echo "<td>{$row['cvv']}</td>";
									echo "<td>{$row['order_time']}</td>";
									echo "<td>{$row['order_status']}</td></tr>";
									$row = mysqli_fetch_assoc($result);
								}
							}
							mysqli_close($conn);
						}
						echo "<p><a href='manager.php'>Return</a></p>";
					}
				} else if($search == "pending") {
					if(isset($_GET["update"])) {
						$update = $_GET["update"];
						$order_id = $_GET["id"];
						if(!isset($_GET["status"])) {
							echo "<form method='get' action='manager.php?search&update&id&status'>";
							echo "<fieldset><legend>Update Order ", $order_id , "'s Status</legend>";
							echo "<p><input type='radio' name='status' id='fulfilled' value='FULFILLED'/>";
							echo "<label>Fulfilled</label></p>";
							echo "<p><input type='radio' name='status' id='paid' value='PAID'/>";
							echo "<label>Paid</label></p>";
							echo "<p><input type='radio' name='status' id='archived' value='ARCHIVED'/>";
							echo "<label>Archived</label></p>";
							echo "<input type='hidden' name='search' value='pending'/>";
							echo "<input type='hidden' name='update' value='$update'/>";
							echo "<input type='hidden' name='id' value='$order_id'/>";
							echo "<p><input type='submit' value='Update Status' /></p>";
							echo "</fieldset>";
							echo "</form>";
						} else {
							$order_status = $_GET["status"];
							$order_id = $_GET["id"];
							$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
						
							if(!$conn) {
								echo "<p>Database Connection Faliure</p>";
							} else {
								$query = "UPDATE orders SET order_status='$order_status' WHERE order_id='$order_id'";
								$result = mysqli_query($conn, $query);
								
								$query = "SELECT * FROM orders WHERE order_id='$order_id'";
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
										echo "<td>{$row['cardtype']}</td>";
										echo "<td>{$row['cardname']}</td>";
										echo "<td>{$row['cardnumber']}</td>";
										echo "<td>{$row['cardexpire']}</td>";
										echo "<td>{$row['cvv']}</td>";
										echo "<td>{$row['order_time']}</td>";
										echo "<td>{$row['order_status']}</td></tr>";
										$row = mysqli_fetch_assoc($result);
									}
								}
								mysqli_close($conn);
							}
							echo "<p><a href='manager.php'>Return</a></p>";
						}
					} else if(isset($_GET["delete"])) {
						$delete = $_GET["delete"];
						$order_id = $_GET["id"];
						if(!isset($_GET["status"])) {
							echo "<form method='get' action='manager.php?search&delete&id&status'>";
							echo "<fieldset><legend>Cancel Order ", $order_id , "</legend>";
							echo "<p>Are you sure you want to cancel order $order_id?</p>";
							echo "<input type='hidden' name='search' value='pending'/>";
							echo "<input type='hidden' name='delete' value='$delete'/>";
							echo "<input type='hidden' name='id' value='$order_id'/>";
							echo "<input type='hidden' name='status' value='yes'/>";
							echo "<p><input type='submit' value='Cancel Order' />     ";
							echo "  <a href='manager.php'>Return</a></p>";
							echo "</fieldset>";
							echo "</form>";
						} else {
							$delete = $_GET["delete"];
							$order_id = $_GET["id"];
							$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
						
							if(!$conn) {
								echo "<p>Database Connection Faliure</p>";
							} else {
								$query = "DELETE FROM orders WHERE order_id='$order_id'";
								$result = mysqli_query($conn, $query);
					
								mysqli_close($conn);
							}
							echo "<p>Order $order_id has been cancelled.</p>";
							echo "<p><a href='manager.php'>Return</a></p>";
						}
					} else {
						$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
		
						if(!$conn) {
							echo "<p>Database Connection Faliure</p>";
						} else {
							$query = "SELECT * FROM orders WHERE order_status = 'PENDING'";
							$result = mysqli_query($conn, $query);
							if($result) {
								echo "<table border='1'>";
								echo "<tr><th>Order ID</th><th>Firstname</th><th>Surname</th><th>Email</th><th>Phone</th><th>Address</th><th>Town</th><th>State</th><th>Postcode</th><th>Trip</th><th>People</th><th>Order Cost</th><th>Card Type</th><th>Card Name</th><th>Card Number</th><th>Card Expiry Date</th><th>CVV</th><th>Order Time</th><th>Order Status</th><th>Edit</th><th>Delete</th></tr>";
								$row = mysqli_fetch_assoc($result);
								while ($row) {
									$id = $row['order_id'];
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
									echo "<td>{$row['cardtype']}</td>";
									echo "<td>{$row['cardname']}</td>";
									echo "<td>{$row['cardnumber']}</td>";
									echo "<td>{$row['cardexpire']}</td>";
									echo "<td>{$row['cvv']}</td>";
									echo "<td>{$row['order_time']}</td>";
									echo "<td>{$row['order_status']}</td>";
									echo "<td><a href='manager.php?search=pending&update=yes&id=$id'>Edit</a></td>";
									echo "<td><a href='manager.php?search=pending&delete=yes&id=$id'>Cancel</a></td></tr>";
									$row = mysqli_fetch_assoc($result);
								}
							}
							mysqli_close($conn);
						}
						
						echo "<p><a href='manager.php'>Return</a></p>";
					}
				} else if($search == "cost") {
					$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	
					if(!$conn) {
						echo "<p>Database Connection Faliure</p>";
					} else {
						$query = "SELECT * FROM orders ORDER BY order_cost";
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
								echo "<td>{$row['cardtype']}</td>";
								echo "<td>{$row['cardname']}</td>";
								echo "<td>{$row['cardnumber']}</td>";
								echo "<td>{$row['cardexpire']}</td>";
								echo "<td>{$row['cvv']}</td>";
								echo "<td>{$row['order_time']}</td>";
								echo "<td>{$row['order_status']}</td></tr>";
								$row = mysqli_fetch_assoc($result);
							}
						}
						mysqli_close($conn);
					}
					
					echo "<p><a href='manager.php'>Return</a></p>";
				}
			}
			
		?>
		<?php
			require_once "includes/footer.inc";
		?>
	</body>
</html>