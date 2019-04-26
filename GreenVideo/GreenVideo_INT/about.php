<!-- Responsible for displaying the 'About' page of Green Video company -->
<?php
	session_start();

	if(isset($_SESSION['email']))
		$user = "Logged in : ".$_SESSION['fname']." ".$_SESSION['lname'];
	else
		$user = "LOGIN/SIGNUP";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="author" content="Chirag Tamhane"/>
	<link rel="icon" type="image/gif" href="images/logo.png"/>
	<title>About Us - GreenVideo (International)</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body style="background-image:url(images/bgimage.jpg)">
	<?php
		include 'header.php';
	?>
	<br>
	<hr>
	<br>
	<div class="container bg-dark" style="color: white;">
		<br>
		<h1 align="center">ABOUT US</h1>
		<hr>
		<h2>Green Video</h2>
		<p>From a little general store to being the largest movie and tv show rental chain in Australia, we've ensured that customer service is top-notch. Currently operating over 200 Green Video stores in Australia, we ensure that your entertainment needs won't be compromised.</p>
		<p>Your unprecedented love and response towards us has always motivated to keep growing until every corner of Australia has a Green Video store. To make things easier and convenient for both of us, we've introduced a brand new Green Video website to cater your entertainment needs like before but online. For the first time, you can book any movie or tv show from our catalog straight from home with absolutely no extra cost.</p>
		<br>
		<hr>
		<h2>Our Family</h2>
		<p>We aren't a big corporate treating our employees as just employees but we believe we are a huge family with highly talented and hardworking members who take pride in helping Green Video reach even greater heights and ensure no customer is left unsatisfied. The amount of excitement we have towards our work is surely reflected in our customer service and overall satisfaction.</p>
		<br>
		<hr>
		<h2>How We Started</h2>
		<p>In 1973, Louis Donovan started Donovan's General Supplies. In 1988, Louis’s son, Mario Donovan, took over the store. In the 1990s, the store got “stuck” with a huge quantity of videos and decided to sell or rent. This was similar to recycling and hence in 1998, inspired from this process, Green Video was founded.</p>
		<br>
		<hr>
		<h2>Store Hours</h2>
		<p>Most Green Video stores are open from 9-to-9 (from 9 AM to 9 PM) every weekday, though hours may vary by location. Please call your local store to confirm. Also, video availability is subject to demand and supply.</p>
		<br>
		<hr>
	</div>
	<br>
	<br>
	<?php
		include 'footer.php';
	?>
</body>
</html>