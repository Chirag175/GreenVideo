<?php

// Responsible for carrying admin account functions like logging in and logout for the blog.

// Used to start a session allowing the use of session variables.
session_start();

// Defines a function to logout by clearing the session.
function logout(){
	echo "You have successfully logged out!";
	session_unset();
	session_destroy();
	header("refresh:1;url=account.php");
}

// If logged in, then the logout button appears on the adminaccount.php page and when clicked, the logout function is called.
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logout']))
    logout();

// If logged in, the following code displays a logout button.
if(isset($_SESSION['email_admin'])){
	echo 
	"
		<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
		You are already logged in!
		<br>
		<form action='adminaccount.php' method='post'>
		    <input type='submit' name='logout' value='Want to logout?' class='btn btn-danger'/>
		</form>
	";
}
else // If the user isn't logged in, then the entire Login page is displayed enabling the user to login if registered previously.
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
	  		<a class="navmenu" href="adminaccount.php">
	    		LOGIN
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
					<form align="center" method="post" action="adminlookup.php" class="form1">
						<input type="email" name="email_admin" id="email_admin" placeholder="Email Address" class="feedback-input" required>
						<input type="password" name="pass_admin" id="pass_admin" placeholder="Password" class="feedback-input" required>
						<br><br>
						<input type="submit" class="sub" value="SUBMIT"/>
					</form>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="color: white; background-color: black; text-align: center; width: 100%; left: 0; bottom: 0; position: fixed;">
			<a href="greenvideo_au.php" style="text-decoration: none; color: white;">
				<img src="images/logo.png" width="25" alt="greenvideo"/>
		    	GreenVideo
		    </a>
		</div>
	</body>
	</html>
	';
}

?>