<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Ocean Cruise Getaway: Tickets"/>
		<meta name="keywords" content="Ocean, Holiday, HTML, Vacation, Tickets"/>
		<meta name="author" content="Ryan Faraone"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="styles/stylesheet.css" rel="stylesheet"/>
		<link href="styles/layout.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		<title>The Ocean's Spirit: Tickets</title>
	</head>
	<body>
		<?php
			require_once "includes/header.inc";
		?>
		<nav>
			<a class="menu" id="page1" href="index.php">Home Page</a>
			<a class="menu" id="page3" href="enquire.php">Questions and Enquiries</a>
			<a class="menu" id="page4" href="about.php">About Me</a>
			<a class="menu" id="page5" href="enhancements.php">Enhancements</a>
		</nav>
		<aside id="aside">
			<h3>Customer Photo Highlights</h3>
			<p>Share your experiences with #OceansSpirit for a chance to be featured on our website</p>
			<p><img class="img1" id="img1" src="images/DSC02667.JPG" alt="Photo 1" />
			<img class="img1" id="img1-5" src="images/arcades.jpg" alt="Photo 1.5" /></p><br />
			<p><img class="img2" id="img2" src="images/DSC02768.JPG" alt="Photo 2" />
			<img class="img2" id="img2-5" src="images/boat2.jpg" alt="Photo 2.5" /></p>
			<p><img class="img3" id="img3" src="images/boat.jpg" alt="Photo 3" />
			<img class="img3" id="img3-5" src="images/casino.jpg" alt="Photo 3.5" /></p>
		</aside>
		<article>
			<h2>Vacation Experiences</h2>
			<p>We at The Ocean Spirit Cruiseline offer our customers the choice out of 3 <strong>luxurious</strong> holiday getaways. 
				Each getaway allows our customers the chance to experience sights beyond what is found within modern society, with each package allowing the chance for you to make those memories all the more special.
			</p>
			<p>The packages we offer to you are called:</p>
				<ol>
					<li>The <em>Scenic</em> Route -<br />Enjoy the basics of a holiday cruise through our visits to offshore beautiful landscapes in nature, unknown to those who stay inland.</li>
					<li>A Breath of Fresh Air -<br />Take in the sights and wonders of the ocean as we explore these miracles in a jam-packed one week long expedition.</li>
					<li>The <strong>ULTIMATE</strong> Vacation -<br />Experience a vacation like none other, become one with nature through additional activities and excitement. Brag to your friends about this 3 week long up-close-and-personal experience with the true beauties of our oceans.</li>
				</ol>
			<section id="section1">
				<h3>The <em>Scenic</em> Route</h3>
				<p>Enjoy the sights at a <strong>cheap</strong> and <strong>affordable</strong> price.<br />
					This package includes: </p>
				<ul>
					<li>Access to Free Wifi</li>						
					<li>Bar and Cafeteria Access</li>
					<li>Reading Room Access</li>
					<li>Pool Access</li>
					<li>Arcade Access</li>
				</ul>
			</section>
			<section id="section2">
				<h3>A Breath of Fresh Air</h3>
				<figure>
					<img src="images/DSC02774.JPG" alt="Day-Sail"/>
					<figcaption>Our day-sail boat, ready to explore new sights</figcaption>
				</figure>
				<p>Become one with nature and experience its <strong>alluring beauty</strong> for yourself.<br />
					This package includes: </p>
				<ul>
					<li>All of the previous package's benefits</li>
					<li>Scuba Diving</li>
					<li>Day-Sails of Beautiful Landscapes</li>
				</ul>
			</section>
			<section id="section3">
				<h3>The <strong>ULTIMATE</strong> Vacation</h3>
				<figure>
					<img src="images/DSC03022.JPG" alt="heliride"/>
					<figcaption>Our helicopter departing to show its passengers beautiful landscapes</figcaption>
				</figure>
				<p>Experience a life of <strong>luxury and adventure,</strong> viewing the beauty of nature with a glass of champagne accompanying.<br />
				A <strong>MUST-HAVE</strong> opportunity for those curious about what it means to truly sail the Ocean's Spirit<br />
					This package includes: </p>
				<ul>
					<li>All benefits from previous packages</li>
					<li>Casino Access</li>
					<li>Helicopter Rides</li>
				</ul>
			</section>
			<section id="section4">
				<h3>Find the Package that is Right For You</h3>
				<table>
					<thead>
						<tr>
							<th>Packages</th>
							<th>Cruise Length</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>The <em>Scenic</em> Route</td>
							<td>3 Days</td>
							<td>$210 per person</td>
						</tr>
						<tr>
							<td>A Breath of Fresh Air</td>
							<td>1 Week</td>
							<td>$435 per person</td>
						</tr>
						<tr>
							<td>The <strong>ULTIMATE</strong> Vacation</td>
							<td>3 Weeks</td>
							<td>$1385 per person</td>
						</tr>
					</tbody>
				</table>
			</section>
		</article>
		<?php
			require_once "includes/footer.inc";
		?>
	</body>
</html>