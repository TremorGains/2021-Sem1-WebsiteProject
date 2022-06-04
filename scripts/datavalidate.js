/*
Filename: datavalidate.js
Target HTML: enquire.html
Purpose: Validate data submitted in form
Author: Ryan Faraone
Date Written: 22/4/2021
*/
"use strict";

function validate() {
	var errMsg = "";
	var result = true;
	var state = document.getElementById("state").value;
	var postcode = document.getElementById("postcode").value;
	var firstname = document.getElementById("firstname").value;
	var surname = document.getElementById("surname").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var address = document.getElementById("address").value;
	var town = document.getElementById("town").value;
	var trip = document.getElementById("package").value;
	var people = document.getElementById("people").value;
	var booking = document.getElementById("booking").checked;
	var facilities = document.getElementById("facilities").checked;
	var dietary = document.getElementById("dietary").checked;
	var accomodation = document.getElementById("accomodation").checked;
	var other = document.getElementById("other").checked;
	var query = getQuery()
	var issueinfo = document.getElementById("issueinfo").value;
	
	var contact = checkContact();
	
	var debug = false;
	if(debug) {
		if (!firstname.match(/^[a-zA-Z]+$/)) {
			errMsg = errMsg + "Your first name can only include alpha characters.\n";
			result = false;
		}
		
		if (!surname.match(/^([a-zA-Z]+|([a-zA-Z]+-{1}[a-zA-Z]+))$/)) {
			errMsg = errMsg + "Your last name must only contain alpha characters and/or a hyphen.\n";
			result = false;
		}
		
		if (!email.match(/^[a-zA-Z\d]+@{1}[a-zA-Z]+(.com){1}(.au)?$/)) {
			errMsg = errMsg + "Please enter your email in the correct format.\n";
			result = false;
		}
		
		if (isNaN(phone)) {
			errMsg = errMsg + "Your phone number can only contain numbers.\n";
			result = false;
		}
		
		if (!phone.match(/^(04){1}\d{8}$/)) {
			errMsg = errMsg + "Please enter your phone number in the correct format.\n";
			result = false;
		}
		
		if (address == "") {
			errMsg = errMsg + "Please enter your home address.\n";
			result = false;
		}
		
		if (town == "") {
			errMsg = errMsg + "Please enter your suburb/town.\n";
			result = false;
		}
		
		if (!town.match(/^[a-zA-Z ]*$/)) {
			errMsg = errMsg + "Your suburb/town can only contain alpha characters.\n";
			result = false;
		}
		
		if (state == "") {
			errMsg = errMsg + "Please select the state that you live in.\n";
			result = false;
		}
		
		if (postcode == "") {
			errMsg = errMsg + "Please enter in your postcode.\n";
			result = false;
		}
		
		if (!postcode.match(/^\d{4}$/) && postcode != "") {
			errMsg = errMsg + "Please enter in a valid postcode.\n";
			result = false;
		}
		
		if (trip == "") {
			errMsg = errMsg + "Please select the trip that you wish to experience.\n";
			result = false;
		}
		
		if (isNaN(people)) {
			errMsg = errMsg + "Number of people can not include characters other than numbers.\n";
			result = false;
		}
		
		if (people == "") {
			errMsg = errMsg + "Please enter number of people attending.\n";
			result = false;
		}

		if (!(booking || facilities || dietary || accomodation || other)) {
			errMsg += "Please identify the topic/s of your query.\n";
			result = false;
		}
		
		if (issueinfo == "") {
			errMsg += "Please explain your issue or query.\n";
			result = false;
		}
		
		if (errMsg != "") {
			alert(errMsg);
		}
	}
	
	if (result) {
		storeBooking(firstname, surname, state, postcode, email, phone, address, town, trip, people, query, issueinfo, contact)
	}
	
	return result;
}

function checkContact() {
	var contact = "Unknown";
	if(document.getElementById("preferemail").checked == true) {
		contact = "email";
	}
	if(document.getElementById("preferpost").checked == true) {
		contact = "post";
	}
	if(document.getElementById("preferphone").checked == true) {
		contact = "phone";
	}
	return contact;
}

function getQuery() {
	var query = "Unknown";
	var queryTopics = document.getElementById("query").getElementsByTagName("input");
	
	for (var i = 0; i < queryTopics.length; i++) {
		if (queryTopics[i].checked) {
			query = queryTopics[i].value;
		}
	}
	return query
}

function storeBooking (firstname, surname, state, postcode, email, phone, address, town, trip, people, query, issueinfo, contact) {
	
	if(trip) {
		switch(trip) {
			case "tsr":
				trip = "The Scenic Route";
				break;
			case "abofa":
				trip = "A Breath of Fresh Air";
				break;
			case "tuv":
				trip = "The ULTIMATE Vacation";
				break;
		}
	}
	
	sessionStorage.firstname = firstname;
	sessionStorage.surname = surname;
	sessionStorage.state = state;
	sessionStorage.postcode = postcode;
	sessionStorage.email = email;
	sessionStorage.phone = phone;
	sessionStorage.address = address;
	sessionStorage.town = town;
	sessionStorage.trip = trip;
	sessionStorage.people = people;
	sessionStorage.query = query;
	sessionStorage.issueinfo = issueinfo;
	
	sessionStorage.contact = contact;
}	

function init() {
	var regForm = document.getElementById("regform");
	regForm.onsubmit = validate;
}

window.onload = init;