<?php
	session_start();
	function sanitise_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
			
	if(!isset($_SESSION["firstname"])) {
		$firstname = sanitise_input($_POST["firstname"]);
	} else {
		$firstname = sanitise_input($_SESSION["firstname"]);
	}
			
	if(!isset($_SESSION["surname"])) {
		$surname = sanitise_input($_POST["surname"]);
	} else {
		$surname = sanitise_input($_SESSION["surname"]);
	}
			
	if(!isset($_SESSION["email"])) {
		$email = sanitise_input($_POST["email"]);
	} else {
		$email = sanitise_input($_SESSION["email"]);
	}
			
	if(!isset($_SESSION["phone"])) {
		$phone = sanitise_input($_POST["phone"]);
	} else {
		$phone = sanitise_input($_SESSION["phone"]);
	}
			
	if(!isset($_SESSION["address"])) {
		$address = sanitise_input($_POST["address"]);
	} else {
		$address = sanitise_input($_SESSION["address"]);
	}
			
	if(!isset($_SESSION["town"])) {
		$town = sanitise_input($_POST["town"]);
	} else {
		$town = sanitise_input($_SESSION["town"]);
	}
			
	if(!isset($_SESSION["postcode"])) {
		$postcode = sanitise_input($_POST["postcode"]);
	} else {
		$postcode = sanitise_input($_SESSION["postcode"]);
	}
			
	if(!isset($_SESSION["people"])) {
		$people = sanitise_input($_POST["people"]);
	} else {
		$people = sanitise_input($_SESSION["people"]);
	}
			
	if(!isset($_SESSION["cardtype"])) {
		$cardtype = sanitise_input($_POST["cardtype"]);
	} else {
		$cardtype = $_SESSION["cardtype"];
	}
			
	if(!isset($_SESSION["cardname"])) {
		$cardname = sanitise_input($_POST["name"]);
	} else {
		$cardname = sanitise_input($_SESSION["cardname"]);
	}
			
	if(!isset($_SESSION["cardnumber"])) {
		$cardnumber = sanitise_input($_POST["cardnumber"]);
	} else {
		$cardnumber = sanitise_input($_SESSION["cardnumber"]);
	}
			
	if(!isset($_SESSION["expirydate"])) {
		$expirydate = sanitise_input($_POST["expiredate"]);
	} else {
		$expirydate = sanitise_input($_SESSION["expirydate"]);
	}
			
	if(!isset($_SESSION["cvv"])) {
		$cvv = sanitise_input($_POST["cvv"]);
	} else {
		$cvv = sanitise_input($_SESSION["cvv"]);
	}
			
	if(!isset($_SESSION["state"])) {
		$state = $_POST["state"];
	} else {
		$state = $_SESSION["state"];
	}
			
	if(!isset($_SESSION["contact"])) {
		$contact = $_POST["contact"];
	} else {
		$contact = $_SESSION["contact"];
	}
			
	if(!isset($_SESSION["trip"])) {
		$trip = $_POST["trip"];
		if($trip == "The Scenic Route") {
			$trip = tsr;
		}
		if($trip == "A Breath of Fresh Air") {
			$trip = abofa;
		}
		if($trip == "The ULTIMATE Vacation") {
			$trip = tuv;
		}
	} else {
		$trip = $_SESSION["trip"];
	}
			
	if(isset($_POST["cost"])) {
		$cost = $_POST["cost"];
	} else {
		$cost = calc_cost($trip, $people);
	}
			
	function calc_cost($trip, $people) {
		if($trip == "tsr") {
			$cost = $people * 210;
		} else if($trip == "abofa") {
			$cost = $people * 435;
		} else if($trip == "tuv") {
			$cost = $people * 1385;
		} else {
			$cost = 0;
		}
		return $cost;
	}
			
	function test_inputs($firstname, $surname, $email, $phone, $address, $town, $postcode, $people, $cardtype, $cardname, $cardnumber, $expirydate, $cvv, $state, $contact, $trip, $cost) {
		echo "<p>$firstname</p>";
		echo "<p>$surname</p>";
		echo "<p>$email</p>";
		echo "<p>$phone</p>";
		echo "<p>$address</p>";
		echo "<p>$town</p>";
		echo "<p>$postcode</p>";
		echo "<p>$people</p>";
		echo "<p>$cardtype</p>";
		echo "<p>$cardname</p>";
		echo "<p>$cardnumber</p>";
		echo "<p>$expirydate</p>";
		echo "<p>$cvv</p>";
		echo "<p>$state</p>";
		echo "<p>$contact</p>";
		echo "<p>$trip</p>";
		echo "<p>$cost</p>";
	}
			
	function validate_format($firstname, $surname, $email, $phone, $address, $town, $postcode, $people, $cardtype, $cardname, $cardnumber, $expirydate, $cvv, $state, $contact, $trip) {
		$result = true;
				
		if(strlen($firstname) == 0) {
			echo "<p>Error: Enter Firstname.</p>";
			$_SESSION["firstname"] = $firstname;
			$result = false;
		}
		if(!preg_match("/^[a-zA-Z]*$/", $firstname)) {
			echo "<p>Error: Firstname must contain only letters.</p>";
			$_SESSION["firstname"] = $firstname;
			$result = false;
		}
				
		if(strlen($surname) == 0) {
			echo "<p>Error: Enter Surname.</p>";
			$_SESSION["surname"] = $surname;
			$result = false;
		}
		if(!preg_match("/^([a-zA-Z]+|([a-zA-Z]+-{1}[a-zA-Z]+))*$/", $surname)) {
			echo "<p>Error: Surname must contain only letters and/or hyphen.</p>";
			$_SESSION["surname"] = $surname;
			$result = false;
		}
				
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "<p>Error: Email does not follow correct format.</p>";
			$_SESSION["email"] = $email;
			$result = false;
		}
				
		if(strlen($phone) == 0) {
			echo "<p>Error: Enter Phone Number.</p>";
			$_SESSION["phone"] = $phone;
			$result = false;
		}
		if(!preg_match("/^((04){1}\d{8})*$/", $phone)) {
			echo "<p>Error: Phone number can only contain numbers and must start with 04.</p>";
			$_SESSION["phone"] = $phone;
			$result = false;
		}
				
		if(strlen($address) == 0) {
			echo "<p>Error: Enter Address.</p>";
			$_SESSION["address"] = $address;
			$result = false;
		}
				
		if(strlen($town) == 0) {
			echo "<p>Error: Enter Town.</p>";
			$_SESSION["town"] = $town;
			$result = false;
		}
		if(!preg_match("/^[a-zA-Z ]*$/", $town)) {
			echo "<p>Error: Town must only contain letters.</p>";
			$_SESSION["town"] = $town;
			$result = false;
		}
				
		if(strlen($postcode) == 0) {
			echo "<p>Error: Enter Postcode.</p>";
			$_SESSION["postcode"] = $postcode;
			$result = false;
		}
		if(!preg_match("/^(\d{4})*$/", $postcode)) {
			echo "<p>Error: Postcode must contain 4 digits.</p>";
			$_SESSION["postcode"] = $postcode;
			$result = false;
		}
				
		if(strlen($people) == 0) {
			echo "<p>Error: Enter Number of People Attending.</p>";
			$_SESSION["people"] = $people;
			$result = false;
		}
		if(!preg_match("/^\d*$/", $people)) {
			echo "<p>Error: Number of People must be a number.</p>";
			$_SESSION["people"] = $people;
			$result = false;
		}
				
		if($cardtype == "") {
			echo "<p>Error: Select your Card Type.</p>";
			$_SESSION["cardtype"] = $cardtype;
			$result = false;
		}
				
		if(strlen($cardname) == 0) {
			echo "<p>Error: Enter Name used on Card.</p>";
			$_SESSION["cardname"] = $cardname;
			$result = false;
		}
		if(!preg_match("/^([a-zA-Z ]+|[a-zA-Z ]+[-]{1}[a-zA-Z ]+)*$/", $cardname)) {
			echo "<p>Error: Full name can only contain letters and/or hyphen.</p>";
			$_SESSION["cardname"] = $cardname;
			$result = false;
		}
				
		if(strlen($cardnumber) == 0) {
			echo "<p>Error: Enter Card Number.</p>";
			$_SESSION["cardnumber"] = $cardnumber;
			$result = false;
		}
		if(!preg_match("/^(\d{16})*$/", $cardnumber)) {
			echo "<p>Error: Card Number must contain 16 digits.</p>";
			$_SESSION["cardnumber"] = $cardnumber;
			$result = false;
		}
				
		if(strlen($expirydate) == 0) {
			echo "<p>Error: Enter Card Expiry Date.</p>";
			$_SESSION["expirydate"] = $expirydate;
			$result = false;
		}
		if(!preg_match("/^((0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2}))*$/", $expirydate)) {
			echo "<p>Error: Enter a valid expiry date.</p>";
			$_SESSION["expirydate"] = $expirydate;
			$result = false;
		}
		
		if(strlen($cvv) == 0) {
			echo "<p>Error: Enter CVV.</p>";
			$_SESSION["cvv"] = $cvv;
			$result = false;
		}
		if(!preg_match("/^(\d{3})*$/", $cvv)) {
			echo "<p>Error: CVV must contain 3 digits.</p>";
			$_SESSION["cvv"] = $cvv;
			$result = false;
		}
				
		if($state == "") {
			echo "<p>Error: Select your state.</p>";
			$_SESSION["state"] = $state;
			$result = false;
		}
				
		if($contact == "Unknown") {
			echo "<p>Error: Select your preferred method of contact.</p>";
			$_SESSION["contact"] = $contact;
			$result = false;
		}
				
		if($trip == "") {
			echo "<p>Error: Select your trip of choice.</p>";
			$_SESSION["trip"] = $trip;
			$result = false;
		}
				
		if($result == false) {
			header("location:fix_order.php");
		}
	
		return $result;
	}
	//test_inputs($firstname, $surname, $email, $phone, $address, $town, $postcode, $people, $cardtype, $cardname, $cardnumber, $expirydate, $cvv, $state, $contact, $trip, $cost);
	if(validate_format($firstname, $surname, $email, $phone, $address, $town, $postcode, $people, $cardtype, $cardname, $cardnumber, $expirydate, $cvv, $state, $contact, $trip) == true) {
		require_once "settings.php";
		$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
		if($conn) {
			$query = "INSERT INTO orders (firstname, surname, email, phone, address, town, state, postcode, trip, people, order_cost, cardtype, cardname, cardnumber, cardexpire, cvv, order_time) VALUES ('$firstname', '$surname', '$email', '$phone', '$address', '$town', '$state', '$postcode', '$trip', '$people', '$cost', '$cardtype', '$cardname', '$cardnumber', '$expirydate', '$cvv', curdate())";
			$result = mysqli_query($conn, $query);
			mysqli_close($conn);
		} 
		header("location:receipt.php");
	}
?>
