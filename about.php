<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Ocean Cruise Getaway: About"/>
		<meta name="keywords" content="Ocean, Holiday, HTML, Vacation, About"/>
		<meta name="author" content="Ryan Faraone"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>
		<link href="styles/layout.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		<title>The Ocean's Spirit: About Me</title>
	</head>
	<body>
		<?php
			require_once "includes/header.inc";
		?>
		<nav>
			<a class="menu" id="page1" href="index.php">Home Page</a>
			<a class="menu" id="page2" href="product.php">Vacation Packages</a>
			<a class="menu" id="page3" href="enquire.php">Questions and Enquiries</a>
			<a class="menu" id="page5" href="enhancements.php">Enhancements</a>
		</nav>
		<article>
			<h2 id="about">About Me</h2>
			<figure id="me">
				<img src="images/me.png" alt="Photo of Me"/>
				<figcaption>Photo of Me</figcaption>
			</figure>
			<dl id="dl">
				<dt>Name:</dt>
				<dd>Ryan Faraone</dd>
				<dt>Student ID:</dt>
				<dd>s103600322</dd>
				<dt>Course:</dt>
				<dd>Bachelor of Computer Science (Professional)</dd>
				<dt>Email:</dt>
				<dd><a href="mailto:103600322@student.swin.edu.au">103600322@student.swin.edu.au</a></dd>
			</dl>
			<table>
				<caption>My Swinburne Timetable</caption>
				<thead>
					<tr>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday - Odd Weeks</th>
						<th>Thursday - Even Weeks</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td> </td>
						<td> </td>
						<td> </td>
						<td>COS10009 Workshop 2 (2) 8:30am-10:30am</td>
						<td>COS10009 Workshop 1 (6) 8:30am-10:30am</td>
					</tr>
					<tr>
						<td> </td>
						<td>COS10009 Live Online 1 (1) 10:00am-12:00pm</td>
						<td> </td>
						<td>COS10009 Lab 2 (2) 10:30am-12:30pm</td>
						<td>COS10009 Lab 1 (4) 10:30am-12:30pm</td>
					</tr>
					<tr>
						<td>COS10011 Live Online 1 (1) 11:30am-1:30pm</td>
						<td>COS10011 Lab 1 (8) 12:30pm-1:30pm</td>
						<td>COS10003 Live Online 1 (1) 1:00pm-3:00pm</td>
						<td>COS10003 Tutorial 1 (11) 12:30pm-2:30pm</td>
						<td> </td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
						<td> </td>
						<td>TNE10006 Lab 2 (26) 2:30pm-5:30pm</td>
						<td>TNE10006 Lab 1 (25) 2:30pm-5:30pm</td>
					</tr>
					<tr>
						<td>TNE10006 Live Online 1 (1) 6:00pm-8:00pm</td>
						<td> </td>
						<td> </td>
						<td> </td>
						<td> </td>
					</tr>
				</tbody>
			</table>
		</article>
		<?php
			require_once "includes/footer.inc";
		?>
	</body>
</html>