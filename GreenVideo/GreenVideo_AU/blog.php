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
		$con = mysqli_connect("localhost","root","","blog_data");

		$post = "SELECT * FROM `blogposts` ORDER BY id DESC";

		$result = mysqli_query($con,$post);

		echo "
				<h1 class='container-fluid card' style='text-align: center; background-color: white; color: black;'>
					<div class='card-body'> 
						RECENT POSTS
					</div>
				</h1>
				<br>
			";
		if(isset($_SESSION['email_admin'])){
		
			echo "
				<div class='row'>
					<div class='col-sm-5'></div>
					<a href='adminwrite.php' class='col-sm-2 btn btn-outline-success card' style='text-align: center; color: green; background-color: white;'>Write a Post!</a>
				</div>
				<br><hr><br>
			";			
		}
		if(mysqli_num_rows($result) == 0)
			echo "
					<br>
					<div class='row'>
						<div class='col-sm-4'></div>
						<div class='col-sm-4 card' style='color: white; background-color: black;'>
							<h3 style='text-align: center;'>
								Nothing came up... <br> Maybe Try Again Later?
							</h3>
						</div>
					</div>
					<br><hr><br>
				";
		else
			while ($record = mysqli_fetch_assoc($result)) { 
				$id=$record['id'];
				$email=$record['email'];
				$time_date=$record['time_date'];
				$title=$record['title'];
				$content=$record['content'];

				$adm = "SELECT name_admin FROM `admindata` WHERE email_admin like '$email'";
				$adm_result = mysqli_query($con,$adm);
				$adm_record = mysqli_fetch_assoc($adm_result);
				$name = $adm_record['name_admin'];

				$limit = 420;
				$upd_content = substr($content, 0, $limit);

				$request1 = $id."content";
				$request2 = $id."link";

				echo "
					<div class='container'>
						<div class='card' style='background-color: white; color: black;'>
							<div class='card-body'>
								<div class='row'>
						    		<div class='col-sm-9'>
						    			<h3 class='card-title' style='color: green; float: left;'>
											$title
										</h3>
									</div>
									<div class='col-sm-3'>
										<p class='card-text' style='background-color: #202020; color: white; text-align: center;'>
											Written By : $name
						    				<br>
						    				&#128197 $time_date
										</p>
									</div>
								</div>
								<br>
								<div style='font-size: 15px; font-weight: 700; color: #202020;' id='$request1'>  
									$upd_content...
								</div>
								<form method='POST' action='read.php'>
									<input type='text' name='identify' id='identify' value='$id' hidden></input>
									<input type='submit' name='Read More' value='Read More' class='card-link btn btn-outline-success' style='float: right;'></input>
								</form>
							</div>
						</div>
					</div>
					<br>
				";
			}
	?>
	<br>
	<?php
		include 'footer.php';
	?>
</body>
</html>