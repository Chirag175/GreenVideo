<?php

// Responsible for carrying user account functions like logging in, signing up and logout.

// Used to start a session allowing the use of session variables.
session_start();

// Defines a function to logout by clearing the session.
function logout(){
	echo "You have successfully logged out!";
	session_unset();
	session_destroy();
	header("refresh:1;url=account.php");
}

// If logged in, then the logout button appears on the account.php page and when clicked, the logout function is called.
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logout']))
    logout();

// If logged in, the following code displays a logout button.
if(isset($_SESSION['email'])){
	echo 
	"
		<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
		You are already logged in!
		<br>
		<form action='account.php' method='post'>
		    <input type='submit' name='logout' value='Want to logout?' class='btn btn-danger'/>
		</form>
	";
}
else // If the user isn't logged in, then the entire Login/SignUp page is displayed enabling the user to login or signup if not registered previously.
{
	echo
	'
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="author" content="Chirag Tamhane"/>
		<link rel="icon" type="image/gif" href="images/logo.png"/>
		<title>Login/SignUp - GreenVideo (Australia)</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

			.form1 { max-width:500px; margin:50px auto; }

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
			  font-family: "Montserrat", Arial, Helvetica, sans-serif;
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
		<nav class="navbar fixed-top navbar-light bg-dark">
	  		<a class="navbar-brand" href="greenvideo_au.php">
	    		<img src="images/logo1.png" height="35" alt="GreenVideo">
	  		</a>
	  		<a class="navmenu" href="account.php">
	    		LOGIN/SIGNUP
	  		</a>
	  		<a class="navmenu" href="blog.php" style="margin-left: 20px;">
				BLOG
			</a>
	  		<div class="menu">
	  			<a class="navmenu" href="about.php">
	    			ABOUT
	  			</a>
				<a class="navmenu" href="contact.php">
					CONTACT
				</a>
	  		</div>
	  		<form class="form-inline" method="get" action="catalog.php" >
	    		<input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" id="search" required>
	    		<div class="search">
	    		<button class="btn btn-light my-2 my-sm-0" type="submit">	
	    			<i class="fas fa-search"></i>
	    		</button>
	    		</div>
	  		</form>
		</nav>
		<br id="login">
		<hr>
		<br>
		<div class="container">
			<div class="card bg-dark">
				<div class="card-body">
					<br>
					<h1 align="center" style="color: white;">LOGIN</h1>
					<form align="center" method="post" action="lookup.php" class="form1">
						<input type="email" name="email" id="email" placeholder="Email Address" class="feedback-input" required>
						<input type="password" name="pass" id="pass" placeholder="Password" class="feedback-input" required>
						<br>
						<a href="#signup">Not Yet Registered? SignUp here!</a>
						<br><br>
						<input type="submit" class="sub" value="SUBMIT"/>
					</form>
				</div>
			</div>
			<div id="signup"></div>
			<br>
			<br>
			<div class="card bg-dark">
				<div class="card-body">
					<br>
					<h1 align="center" style="color: white;">SIGN UP</h1>
					<form align="center" method="post" action="insert.php" class="form1">
						<input type="text" name="fname" id="fname" pattern="[A-Za-z]+" placeholder="First Name" class="feedback-input" style="width: 50%; float: left;" required>
						<input type="text" name="lname" id="lname" pattern="[A-Za-z]+" placeholder="Last Name" class="feedback-input" style="width: 50%; float: right;" required>
						<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email Address" class="feedback-input" style="width: 50%; float: left;" required>
						<input type="text" name="phone" id="phone" pattern="[0-9]{5,12}" placeholder="Phone Number" class="feedback-input" style="width: 50%; float: right;">
						<div style="width: 50%; float: left; border-radius: 5px; border:2px solid white; box-sizing: border-box; margin-bottom: 0.25px; margin-top: 0.25px;">
							<p style="width: 22.5%; float: left; color: white; padding-left: 0px; padding-top: 5px; margin-bottom: 0.25px; margin-top: 0.25px;">Birth Date:</p>
							<input type="date" name="bdate" id="bdate" placeholder="Birth Date" class="feedback-input" min="1893-12-12" max="2005-12-31" style="width: 77.5%; float: right; border: 0px; margin-bottom: 0.25px; margin-top: 0.25px;" required>
						</div>
						<select id="gender" class="feedback-input" name="gender" style="width: 50%; float: right; padding-top: 15px; padding-bottom:17px;" required>
							<div>
								<option value="Female" style="color: black;">Female</option>
								<option value="Male" style="color: black;">Male</option>
							</div>
						</select>
						<input type="text" name="add_1" id="add_1" placeholder="Address Line 1" class="feedback-input" required>
						<input type="text" name="add_2" id="add_2" placeholder="Address Line 2" class="feedback-input">
						<input type="text" name="city" id="city" pattern="[A-Za-z]+" placeholder="City" class="feedback-input" required>
						<input type="text" name="state" id="state" pattern="[A-Za-z]+" placeholder="State" class="feedback-input" required>
						<input type="text" name="zipcode" id="zipcode" pattern="[0-9]+" placeholder="Zip Code" class="feedback-input" required>
						<input type="password" name="pass" id="pass" placeholder="Password" class="feedback-input" style="width: 50%; float: left;" required>
						<input type="password" name="cpass" id="cpass" placeholder="Confirm Password" class="feedback-input" style="width: 50%; float: right;" required>
						<br>
						<a href="#login">Already Registered? Login here!</a>
						<br><br>
						<input type="submit" class="sub" value="SUBMIT"/>
					</form>
				</div>
			</div>
		</div>
		<br>
		<div class="container-fluid" style="color: white; background-color: black; width: 100%;  left: 0; bottom: 0;">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" style="text-align: center;">
				<a href="greenvideo_au.php" style="text-decoration: none; color: white;">
					<img src="images/logo.png" width="25" alt="greenvideo"/>
		    		GreenVideo
		    	</a>
		    </div>
			<div class="col-sm-4" style="text-align: right;">'; ?>
				<?php echo "Copyright © ".date("Y")." GreenVideo. All rights reserved.
			</div>
		</div>
	</div>
	</body>
	</html>
	";
}

?>