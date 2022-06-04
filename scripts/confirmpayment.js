/*
Filename: confirmpayment.js
Target HTML: payment.html
Purpose: Confirm data before a payment is made
Author: Ryan Faraone
Date Written: 22/4/2021
*/
"use strict";

function validate() {
	var errMsg = "";
	var result = true;
	var expiredate = document.getElementById("expiredate").value;
	var cardtype = document.getElementById("cardtype").value;
	var cardname = document.getElementById("name").value;
	var cardnumber = document.getElementById("cardnumber").value;
	var cvv = document.getElementById("cvv").value;
	
	if (cardtype == "") {
		errMsg = errMsg + "Please select your credit card type.\n";
		result = false;
	}
	
	if (!cardname.match(/^([a-zA-Z ]+|[a-zA-Z ]+[-]{1}[a-zA-Z ]+)$/)) {
		errMsg = errMsg + "The name on your credit card can only include alpha characters.\n";
		result = false;
	}
	
	if (isNaN(cardnumber)) {
		errMsg = errMsg + "The credit card number cannot contain characters other than numbers.\n";
		result = false;
	}
	
	if (cardnumber == "") {
		errMsg = errMsg + "Please enter your credit card number.\n";
		result = false;
	}
	
	if (!cardnumber.match(/^\d{16}$/) && cvv != "") {
		errMsg = errMsg + "The credit card number can only contain 16 digits.\n";
		result = false;
	}
	
	if (expiredate == "") {
		errMsg = errMsg + "Please enter your credit card's expiry date.\n";
		result = false;
	}
	
	if (!expiredate.match(/^(0[1-9]|1[0-2])[/]{1}[0-9]{2}$/)) {
		errMsg = errMsg + "Credit Card Expiry Date is invalid.\n";
		result = false;
	}
	
	if (isNaN(cvv)) {
		errMsg = errMsg + "The CVV number cannot contain characters other than numbers.\n";
		result = false;
	}
	
	if (!cvv.match(/^\d{3}$/) && cvv != "") {
		errMsg = errMsg + "The CVV number can only contain 3 digits.\n";
		result = false;
	}
	
	if (cvv == "") {
		errMsg = errMsg + "Please enter your CVV number.\n";
		result = false;
	}
	
	if (errMsg != "") {
		alert(errMsg)
	}
	
	return result;
}

function getBooking() {
	var cost = 0;
	if(sessionStorage.firstname != undefined){
		document.getElementById("confirm_name").textContent = sessionStorage.firstname + " " + sessionStorage.surname;
		document.getElementById("confirm_email").textContent = sessionStorage.email;
		document.getElementById("confirm_phone").textContent = sessionStorage.phone;
		document.getElementById("confirm_address").textContent = sessionStorage.address + " " + sessionStorage.town + " " + sessionStorage.state + ", " + sessionStorage.postcode;
		document.getElementById("confirm_trip").textContent = sessionStorage.trip;
		document.getElementById("confirm_people").textContent = sessionStorage.people;
		cost = calcCost(sessionStorage.trip, sessionStorage.people);
		document.getElementById("confirm_cost").textContent = cost;
		
		document.getElementById("firstname").value = sessionStorage.firstname;
		document.getElementById("surname").value = sessionStorage.surname;
		document.getElementById("email").value = sessionStorage.email;
		document.getElementById("phone").value = sessionStorage.phone;
		document.getElementById("address").value = sessionStorage.address;
		document.getElementById("town").value = sessionStorage.town;
		document.getElementById("state").value = sessionStorage.state;
		document.getElementById("postcode").value = sessionStorage.postcode
		document.getElementById("trip").value = sessionStorage.trip;
		document.getElementById("people").value = sessionStorage.people;
		document.getElementById("cost").value = cost;
		
		document.getElementById("contact").value = sessionStorage.contact;
		document.getElementById("query").value = sessionStorage.query;
		document.getElementById("issueinfo").value = sessionStorage.issueinfo;
	}
}

function calcCost(trip, people) {
	var cost = 0;
	if (trip.search("Scenic") != -1) cost = 210;
	if (trip.search("Fresh")!= -1) cost = 435;
	if (trip.search("ULTIMATE")!= -1) cost = 1385;
	return cost * people;
}


function cancelBooking() {
	window.location.href = "enquire.html";
}

function init () {
	var bookForm = document.getElementById("bookform");
	
	var debug = false;
	if(debug) {
		bookForm.onsubmit = validate;
	}
	
	getBooking()
	
	var cancel = document.getElementById("cancelButton");
	cancel.onclick = cancelBooking;
 }

window.onload = init;