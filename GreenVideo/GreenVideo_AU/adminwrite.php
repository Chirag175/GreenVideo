<!-- Responsible for displaying the 'Write' page to add a new post -->
<?php
	session_start();

	if(isset($_SESSION['email_admin']))
		$admin = "Logged in : ".$_SESSION['name_admin'];
	else
		header("Location: blog.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="author" content="Chirag Tamhane"/>
	<link rel="icon" type="image/gif" href="images/logo.png"/>
	<title>Contact Us - GreenVideo (Australia)</title>
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
	<nav class="navbar fixed-top navbar-light bg-dark">
		<a class="navbar-brand" href="greenvideo_au.php">
			<img src="images/logo1.png" height="35" alt="GreenVideo">
		</a>
		<a class="navmenu" href="adminaccount.php">
			<?php
			  echo "$admin";
			?>
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
      <!-- The Search Form - Used to search the video database -->
    	<form class="form-inline" method="get" action="catalog.php">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" id="search" required>
			<div class="search">
				<button class="btn btn-light my-2 my-sm-0" type="submit"> 
					<i class="fas fa-search"></i>
				</button>
			</div>
    	</form>
  	</nav>
	<br>
	<hr>
	<br>
	<div class="container">
		<div class="card bg-dark">
			<div class='card-body'>
				<br>
				<h1 align="center" style="color: white;">Write a Post</h1>
				<form align="center" method="post" action="write_receive.php" class="form1">
					<input type="text" name="title" id="title" placeholder="Title" class="feedback-input" required>
					<br>
					<textarea name="content" id="content" placeholder="Type your content here..." class="feedback-input" required></textarea>
					<input type="submit" class="sub" value="SUBMIT"/>
				</form>
			</div>
		</div>
	</div>
	<br>
	<div class="container-fluid" style="color: white; background-color: black; width: 100%;  left: 0; bottom: 0; position: fixed;">
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
	</div>
</body>
</html>