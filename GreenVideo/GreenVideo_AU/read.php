<!-- Responsible for displaying the 'Blog' page of Green Video company along with the Blogposts from various authors to establish a place for the community -->
<?php
	session_start();

	if(isset($_SESSION['email_admin']))
		$admin = "Logged in : ".$_SESSION['name_admin'];
	else
		$admin = "LOGIN";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="author" content="Chirag Tamhane"/>
	<link rel="icon" type="image/gif" href="images/logo.png"/>
	<title>Blog - GreenVideo (Australia)</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.js"></script>
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
	<?php

		$id = $_POST['identify'];

		$con = mysqli_connect("localhost","root","","blog_data");

		$post = "SELECT * FROM `blogposts` WHERE id LIKE '$id'";

		$result = mysqli_query($con,$post);

		$record = mysqli_fetch_assoc($result); 
		
		$email=$record['email'];
		$time_date=$record['time_date'];
		$title=$record['title'];
		$content=$record['content'];

		$adm = "SELECT name_admin FROM `admindata` WHERE email_admin like '$email'";
		$adm_result = mysqli_query($con,$adm);
		$adm_record = mysqli_fetch_assoc($adm_result);
		$name = $adm_record['name_admin'];

		echo "
			<br>
			<hr>
			<br>
			<div class='container'>
				<div class='card' style='background-color: white; color: black;'>
					<div class='card-body'>
						<div class='row'>
				    		<div class='col-sm-9'>
				    			<h4 class='card-title' style='color: green; float: left;'>
									$title
								</h4>
							</div>
							<div class='col-sm-3'>
								<p class='card-text' style='background-color: #202020; color: white;'>
									&nbspWritten By : $name
				    				<br>
				    				&nbsp&#128197 $time_date
								</p>
							</div>
						</div>
						<br>
						<div style='font-size: 15px; font-weight: 700; color: #202020;'>  
							$content
						</div>
						<a href='blog.php' class='card-link btn btn-outline-danger' style='float: right;'>
							Go Back
						</a>
					</div>
				</div>
			</div>
			<br>
		";
	?>
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