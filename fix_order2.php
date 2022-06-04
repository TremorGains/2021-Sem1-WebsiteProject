<?php
	session_start();
	if(isset($_POST["firstname"])) {
		$firstname = $_POST["firstname"];
		$_SESSION["firstname"] = $firstname;
	}
	if(isset($_POST["surname"])) {
		$surname = $_POST["surname"];
		$_SESSION["surname"] = $surname;
	}
	if(isset($_POST["email"])) {
		$email = $_POST["email"];
		$_SESSION["email"] = $email;
	}
	if(isset($_POST["phone"])) {
		$phone = $_POST["phone"];
		$_SESSION["phone"] = $phone;
	}
	if(isset($_POST["address"])) {
		$address = $_POST["address"];
		$_SESSION["address"] = $address;
	}
	if(isset($_POST["town"])) {
		$town = $_POST["town"];
		$_SESSION["town"] = $town;
	}
	if(isset($_POST["state"])) {
		$state = $_POST["state"];
		$_SESSION["state"] = $state;
	}
	if(isset($_POST["postcode"])) {
		$postcode = $_POST["postcode"];
		$_SESSION["postcode"] = $postcode;
	}
	if(isset($_POST["contact"])) {
		$contact = $_POST["contact"];
		$_SESSION["contact"] = $contact;
	}
	if(isset($_POST["trip"])) {
		$trip = $_POST["trip"];
		$_SESSION["trip"] = $trip;
	}
	if(isset($_POST["people"])) {
		$people = $_POST["people"];
		$_SESSION["people"] = $people;
	}
	if(isset($_POST["cardtype"])) {
		$cardtype = $_POST["cardtype"];
		$_SESSION["cardtype"] = $cardtype;
	}
	if(isset($_POST["cardname"])) {
		$cardname = $_POST["cardname"];
		$_SESSION["cardname"] = $cardname;
	}
	if(isset($_POST["cardnumber"])) {
		$cardnumber = $_POST["cardnumber"];
		$_SESSION["cardnumber"] = $cardnumber;
	}
	if(isset($_POST["expirydate"])) {
		$expirydate = $_POST["expirydate"];
		$_SESSION["expirydate"] = $expirydate;
	}
	if(isset($_POST["cvv"])) {
		$cvv = $_POST["cvv"];
		$_SESSION["cvv"] = $cvv;
	}
	
	function test_values($firstname, $surname, $email, $phone, $address, $town, $postcode, $people, $cardtype, $cardname, $cardnumber, $expirydate, $cvv, $state, $contact, $trip) {
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
	}
	//test_values($firstname, $surname, $email, $phone, $address, $town, $postcode, $people, $cardtype, $cardname, $cardnumber, $expirydate, $cvv, $state, $contact, $trip);
	header("location:process_order.php");
?>