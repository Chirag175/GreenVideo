<!-- Responsible for displaying the 'Contact' page of Green Video company along with the Contact Form to collect user feedback -->
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
	<title>Contact Us - GreenVideo (International)</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

		.form1 { max-width:420px; margin:50px auto; }

		.feedback-input {
		  color:white;
		  font-family: Helvetica, Arial, sans-serif;
		  font-weight:500;
		  font-size: 18px;
		  border-radius: 5px;
		  line-height: 22px;
		  background-color: transparent;
		  border:2px solid white;
		  transition: all 0.3s;
		  padding: 13px;
		  margin-bottom: 15px;
		  width:100%;
		  box-sizing: border-box;
		  outline:0;
		}

		.feedback-input:focus { border:2px solid white; }

		textarea {
		  height: 150px;
		  line-height: 150%;
		  resize:vertical;
		}

		.sub {
		  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
		  width: 100%;
		  background:#CC6666;
		  border-radius:5px;
		  border:0;
		  cursor:pointer;
		  color:white;
		  font-size:24px;
		  padding-top:10px;
		  padding-bottom:10px;
		  transition: all 0.3s;
		  margin-top:-4px;
		  font-weight:700;
		}
		.sub:hover { background:#24d627; }
	</style>
</head>
<body style="background-image:url(images/bgimage.jpg)">
	<?php
		include 'header.php';
	?>
	<br>
	<hr>
	<br>
	<div class="container">
		<div class="card bg-dark">
			<div class='card-body'>
				<br>
				<h1 align="center" style="color: white;">CONTACT US</h1>
				<form align="center" method="post" action="contact_receive.php" class="form1">
					<input type="text" name="name" id="name" placeholder="Full Name" class="feedback-input" required>
					<br>
					<input type="email" name="email" id="email" placeholder="Email Address" class="feedback-input" required>
					<br>
					<input type="text" name="phone" id="phone" placeholder="Phone Number" class="feedback-input">
					<br>
					<input type="text" name="subject" id="subject" placeholder="Subject" class="feedback-input" required>
					<br>
					<textarea name="message" id="message" placeholder="Enter your message here..." class="feedback-input" required></textarea>
					<input type="submit" class="sub" value="SUBMIT"/>
				</form>
			</div>
		</div>
	</div>
	<br>
	<?php
		include 'footer.php';
	?>
</body>
</html>