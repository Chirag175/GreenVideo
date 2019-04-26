<?php

// The last step of the booking process is handled by this document. If the user isn't logged in, then the user is redirected to the account.php page where either they can log in or register and then log in after which they would be again automatically redirected to the page they left from, the final stage of the booking process with the user chosen product already selected.

session_start();

$_SESSION['product'] = $_POST['product'];

if(!isset($_SESSION['email'])){
	echo "Please Login or SignUp first!";
	header("refresh:1;url=account.php");
}
else{

$user = "Logged in : ".$_SESSION['fname']." ".$_SESSION['lname'];

$em = $_SESSION['email'];

$con = mysqli_connect("localhost","root","","user_info");

$lookup = "select email, phone, add_1, add_2, city, state, zipcode from user_details_au where email='$em'";

$result = mysqli_query($con,$lookup);
$record = mysqli_fetch_assoc($result);

$product_id = $_POST['product'];
$booktype = $_POST['btype'];
$date = $_POST['date'];
$email = $record['email'];
$phone = $record['phone'];
$add_1 = $record['add_1'];
$add_2 = $record['add_2'];
$city = $record['city'];
$state = $record['state'];
$zipcode = $record['zipcode'];

$sql = "insert into order_list(product_id, booktype, date, email, phone, add_1, add_2, city, state, zipcode) values('$product_id', '$booktype', '$date','$email','$phone','$add_1','$add_2','$city','$state','$zipcode')";

$name = $_POST['itemname']; // Stores the product name
if($booktype[0] == "R") { // Stores the booking type i.e., Rent or Purchase
	$booked = "Rented";
}
else
	$booked = "Purchased";

$booktext = "$name is $booked on $date"; // To form the text that has to be displayed by the QR Code

if(mysqli_query($con,$sql)) {
	echo '
	<html>
		<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="author" content="Chirag Tamhane"/>
		<link rel="icon" type="image/gif" href="images/logo.png"/>
		<title>Booking Confirmation - GreenVideo (Australia)</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
		</head>
		<body>
		  	<nav class="navbar fixed-top navbar-light bg-dark">
		    	<a href="greenvideo_au.php" style="margin-left: auto; margin-right: auto;">
		      		<img src="images/logo1.png" height="35" alt="GreenVideo">
		    	</a>
		    </nav>
		<br/><br/><br/><br/><div class="mx-5" style="text-align: center; border: 2px solid green; border-radius: 10px;"><br/>&nbsp;Your request has been successfully submited!<br/>&nbsp;Scan the following QR Code for confirmation!<br/><br/>';
	echo "<img style='-webkit-user-select: none;' src='https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=$booktext'><br/>"; // Submits a request to qrserver via it's API which returns an image with our QR Code
	echo '
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	&nbsp; <br/>
	<a href="greenvideo_au.php" class="btn btn-outline-danger">Go Back</a> <br/>&nbsp;
	</div>
	<div class="container-fluid fixed-bottom" style="color: white; background-color: black; width: 100%;  left: 0; bottom: 0;">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" style="text-align: center;">
				<a href="greenvideo_au.php" style="text-decoration: none; color: white;">
					<img src="images/logo.png" width="25" alt="greenvideo"/>
		    		GreenVideo
		    	</a>
		    </div>
			<div class="col-sm-4" style="text-align: right;">
				<?php echo "Copyright © ".date("Y")." GreenVideo. All rights reserved."; ?>
			</div>
		</div>
	</div></body></html>';
}
else{
	echo "Failed to submit your request! Please try again!";
	header("location: {$_SERVER['HTTP_REFERER']}");
}
}

?>