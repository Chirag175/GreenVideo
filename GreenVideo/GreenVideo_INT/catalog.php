<!-- Responsible for displaying the video database in the form of an interactive catalog -->
<?php
	session_start();

	if(isset($_SESSION['email']))
		$user = "Logged in : ".$_SESSION['fname']." ".$_SESSION['lname'];
	else
		$user = "LOGIN/SIGNUP";
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="author" content="Chirag Tamhane"/>
	<link rel="icon" type="image/gif" href="images/logo.png"/>
	<title>Catalog - GreenVideo (International)</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<?php
		include 'header.php';
	?>
	<br>
	<hr>
	<br>
	<div class="container">
		<br>
		<h2>Sort By</h2>
		<br> 
		<!-- The 'Sort By Genre' form is designed to filter the video database according to the selected genre -->
		<form name="genreform" id="genreform" method="get" action="catalog.php">
			<p style="font-size: 25px; float: left;">Genre : &nbsp</p>
			<input name="genre" type="submit" class="btn btn-danger" value="Action"/>
			<input name="genre" type="submit" class="btn btn-warning" value="Adventure"/>
			<input name="genre" type="submit" class="btn btn-info" value="Animation"/>
			<input name="genre" type="submit" class="btn btn-success" value="Comedy"/>
			<input name="genre" type="submit" class="btn btn-secondary" value="Crime"/>
			<input name="genre" type="submit" class="btn btn-primary" value="Drama"/>
			<input name="genre" type="submit" class="btn btn-info" value="Fantasy"/>
			<input name="genre" type="submit" class="btn btn-dark" value="Horror">
			<input name="genre" type="submit" class="btn btn-warning" value="Mystery"/>
			<input name="genre" type="submit" class="btn btn-danger" value="Romance"/>
			<input name="genre" type="submit" class="btn btn-secondary" value="Sci-Fi"/>
			<input name="genre" type="submit" class="btn btn-success" value="Thriller"/>
		</form>
		<br>
		<!-- The 'Sort By Rating' form is designed to filter the video database according to the selected audience rating -->
		<form name="ratingform" id="ratingform" method="get" action="catalog.php">
			<p style="font-size: 25px; float: left;">Rating : &nbsp</p>
			<input name="rating" type="submit" class="btn btn-danger" value="PG"/>
			<input name="rating" type="submit" class="btn btn-warning" value="PG-13"/>
			<input name="rating" type="submit" class="btn btn-info" value="PG-14"/>
			<input name="rating" type="submit" class="btn btn-success" value="MA"/>
			<input name="rating" type="submit" class="btn btn-primary" value="R"/>
		</form>
		<br>
		<hr>
	</div>
	<br>
<!-- PHP begins. -->
	<?php

	// Used to choose the desired function according to the chosen search query.
	if(isset($_GET['search']) != 1 && isset($_GET['rating']) != 1 && isset($_GET['genre']) != 1) // Redirects to homepage incase no search query has been passed.
		header('Location: greenvideo_INT.php');
	else
	if (isset($_GET['search'])) // Calls the 'Search by String' function.
    	search();
  	else
	if (isset($_GET['rating'])) // Calls the 'Search by Chosen Audience Rating' function.
		rat_search($_GET['rating']);
  	else // Calls the 'Search by Chosen Genre' function.
  		gen_search($_GET['genre']);

  	// Defines the 'Search by String' function.
	function search(){
		$con = mysqli_connect("localhost","root","","product_list");

		$search = $_GET['search'];

		$mov = "SELECT * FROM `movies` WHERE name like '%$search%'";
		$tv = "SELECT * FROM `tv` WHERE name like '%$search%'";

		$mov_result = mysqli_query($con,$mov);
		$tv_result = mysqli_query($con,$tv);

		$count_mov = 0;
		$count_tv = 0;

		if(mysqli_num_rows($mov_result)>0 || mysqli_num_rows($tv_result)>0){
			echo "<h2 style='text-align: center;'> MOVIES </h2>";
			if(mysqli_num_rows($mov_result) == 0)
				echo "
						<br>
						<h3 style='text-align: center;'> Nothing came up... </h3>
						<br><hr><br>
					";
			else
				while ($record = mysqli_fetch_assoc($mov_result)) { 
					$count_mov = $count_mov + 1;
					$id=$record['id'];
					$name=$record['name'];
					$genre=$record['genre'];
					$rating=$record['rating'];
					$imgpath=$record['imgpath'];
					$imdbpath=$record['imdbpath'];
					$bookpath=$record['bookpath'];
					echo "
					<div class='container'>
						<div class='card'>
							<div class='card-body'>
								<img src='$imgpath' height='100' style='float: left; border: 0.25px solid grey;'/>
								<div style='float: right;'>
				    				<h4 class='card-title'>$name</h4>
									<p class='card-text'> 
										$genre &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> $rating </div>
									</p>
									<a href='$bookpath' class='card-link btn btn-outline-success'>Book Now</a>
									<a href='$imdbpath' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
								</div>
							</div>
						</div>
					</div>
					<br>";
				}
			echo "<h2 style='text-align: center;'> TV SHOWS </h2>";
			if(mysqli_num_rows($tv_result) == 0)
				echo "
						<br>
						<h3 style='text-align: center;'> Nothing came up... </h3>
						<br><hr><br>
					";
			else
				while ($record = mysqli_fetch_assoc($tv_result)) { 
					$count_tv = $count_tv + 1;
					$id=$record['id'];
					$name=$record['name'];
					$genre=$record['genre'];
					$rating=$record['rating'];
					$imgpath=$record['imgpath'];
					$imdbpath=$record['imdbpath'];
					$bookpath=$record['bookpath'];
					echo "
					<div class='container'>
						<div class='card'>
							<div class='card-body'>
								<img src='$imgpath' height='100' style='float: left; border: 0.25px solid grey;'/>
								<div style='float: right;'>
				    				<h4 class='card-title'>$name</h4>
									<p class='card-text'> 
										$genre &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> $rating </div>
									</p>
									<a href='$bookpath' class='card-link btn btn-outline-success'>Book Now</a>
									<a href='$imdbpath' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
								</div>
							</div>
						</div>
					</div>
					<br>";
				}
		}
		else
			nothing_came_up();
	}

	// Defines the 'Search by Chosen Genre' function.
	function gen_search($str){
		
		$gen_con = mysqli_connect("localhost","root","","product_list");
		$gen_mov = "SELECT * FROM `movies` WHERE genre like '%$str%'";
		$gen_tv = "SELECT * FROM `tv` WHERE genre like '%$str%'";
		
		$gen_mov_result = mysqli_query($gen_con,$gen_mov);
		$gen_tv_result = mysqli_query($gen_con,$gen_tv);

		if(mysqli_num_rows($gen_mov_result)>0||mysqli_num_rows($gen_tv_result)>0){
			echo "<h2 style='text-align: center;'> MOVIES </h2>";
			if(mysqli_num_rows($gen_mov_result) == 0)
				echo "
						<br>
						<h3 style='text-align: center;'> Nothing came up... </h3>
						<br><hr><br>
					";
			else
				while ($record = mysqli_fetch_assoc($gen_mov_result)) { 
					$id=$record['id'];
					$name=$record['name'];
					$genre=$record['genre'];
					$rating=$record['rating'];
					$imgpath=$record['imgpath'];
					$imdbpath=$record['imdbpath'];
					$bookpath=$record['bookpath'];
					echo "	
					<div class='container'>
						<div class='card'>
							<div class='card-body'>
								<img src='$imgpath' height='100' style='float: left; border: 0.25px solid grey;'/>
								<div style='float: right;'>
				    				<h4 class='card-title'>$name</h4>
									<p class='card-text'> 
										$genre &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> $rating </div>
									</p>
									<a href='$bookpath' class='card-link btn btn-outline-success'>Book Now</a>
									<a href='$imdbpath' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
								</div>
							</div>
						</div>
					</div>
					<br>";
				}
			echo "<h2 style='text-align: center;'> TV SHOWS </h2>";
			if(mysqli_num_rows($gen_tv_result) == 0)
				echo "
						<br>
						<h3 style='text-align: center;'> Nothing came up... </h3>
						<br><hr><br>
					";
			else{
				while ($record = mysqli_fetch_assoc($gen_tv_result)) { 
					$id=$record['id'];
					$name=$record['name'];
					$genre=$record['genre'];
					$rating=$record['rating'];
					$imgpath=$record['imgpath'];
					$imdbpath=$record['imdbpath'];
					$bookpath=$record['bookpath'];
					echo "	
					<div class='container'>
						<div class='card'>
							<div class='card-body'>
								<img src='$imgpath' height='100' style='float: left; border: 0.25px solid grey;'/>
								<div style='float: right;'>
				    				<h4 class='card-title'>$name</h4>
									<p class='card-text'> 
										$genre &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> $rating </div>
									</p>
									<a href='$bookpath' class='card-link btn btn-outline-success'>Book Now</a>
									<a href='$imdbpath' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
								</div>
							</div>
						</div>
					</div>
					<br>";
				}
				echo "<br>";
			}
		}
		else
			nothing_came_up();
	}

	// Defines the 'Search by Chosen Audience Rating' function.
	function rat_search($str){
		
		$rating_con = mysqli_connect("localhost","root","","product_list");
		$rating_mov = "SELECT * FROM `movies` WHERE rating = '$str'";
		$rating_tv = "SELECT * FROM `tv` WHERE rating = '$str'";
		
		$rating_mov_result = mysqli_query($rating_con,$rating_mov);
		$rating_tv_result = mysqli_query($rating_con,$rating_tv);

		if(mysqli_num_rows($rating_mov_result)>0||mysqli_num_rows($rating_tv_result)>0){
			echo "<h2 style='text-align: center;'> MOVIES </h2>";
			if(mysqli_num_rows($rating_mov_result) == 0)
				echo "
						<br>
						<h3 style='text-align: center;'> Nothing came up... </h3>
						<br><hr><br>
					";
			else
				while ($record = mysqli_fetch_assoc($rating_mov_result)) { 
					$id=$record['id'];
					$name=$record['name'];
					$genre=$record['genre'];
					$rating=$record['rating'];
					$imgpath=$record['imgpath'];
					$imdbpath=$record['imdbpath'];
					$bookpath=$record['bookpath'];
					echo "	
					<div class='container'>
						<div class='card'>
							<div class='card-body'>
								<img src='$imgpath' height='100' style='float: left; border: 0.25px solid grey;'/>
								<div style='float: right;'>
				    				<h4 class='card-title'>$name</h4>
									<p class='card-text'> 
										$genre &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> $rating </div>
									</p>
									<a href='$bookpath' class='card-link btn btn-outline-success'>Book Now</a>
									<a href='$imdbpath' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
								</div>
							</div>
						</div>
					</div>
					<br>";
				}
			echo "<h2 style='text-align: center;'> TV SHOWS </h2>";
			if(mysqli_num_rows($rating_tv_result) == 0)
				echo "
						<br>
						<h3 style='text-align: center;'> Nothing came up... </h3>
						<br><hr><br>
					";
			else
				while ($record = mysqli_fetch_assoc($rating_tv_result)) { 
					$id=$record['id'];
					$name=$record['name'];
					$genre=$record['genre'];
					$rating=$record['rating'];
					$imgpath=$record['imgpath'];
					$imdbpath=$record['imdbpath'];
					$bookpath=$record['bookpath'];
					echo "	
					<div class='container'>
						<div class='card'>
							<div class='card-body'>
								<img src='$imgpath' height='100' style='float: left; border: 0.25px solid grey;'/>
								<div style='float: right;'>
				    				<h4 class='card-title'>$name</h4>
									<p class='card-text'> 
										$genre &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> $rating </div>
									</p>
									<a href='$bookpath' class='card-link btn btn-outline-success'>Book Now</a>
									<a href='$imdbpath' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
								</div>
							</div>
						</div>
					</div>
					<br>";
				}
		}
		else
			nothing_came_up();
	}

	// Incase, nothing comes up from the search query, then the nothing_came_up function is called to display a set of recommended videos to prevent the user from being disappointed and help with choosing an appropriate video.
	function nothing_came_up(){
		echo "
			<div class='container'>	
				<h1 style='text-align: center;'> Sorry, Nothing came up for that.. </h1>
				<br>
				<hr>
				<h2 style='text-align: center;'> How about you try these? </2>
				<br>
				<br>
				<h2 style='text-align: center;'> MOVIES </h2>
				<div class='card'>
					<div class='card-body'>
						<img src='images/Movies_1.jpg' height='100' style='float: left; border: 0.25px solid grey;'/>
						<div style='float: right;'>
		    				<h4 class='card-title'>The Nutcracker and the Four Realms</h4>
							<p class='card-text'> 
								Adventure , Family , Fantasy &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> PG </div>
							</p>
							<a href='book.php?book=m1' class='card-link btn btn-outline-success'>Book Now</a>
							<a href='https://www.imdb.com/title/tt5523010/' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
						</div>
					</div>
				</div>
				<br>
				<div class='card'>
					<div class='card-body'>
						<img src='images/Movies_2.jpg' height='100' style='float: left; border: 0.25px solid grey;'/>
						<div style='float: right;'>
		    				<h4 class='card-title'>Fantastic Beasts: The Crimes of Grindelwald</h4>
							<p class='card-text'> 
								Adventure , Family , Fantasy &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> PG-13 </div>
							</p>
							<a href='book.php?book=m2' class='card-link btn btn-outline-success'>Book Now</a>
							<a href='https://www.imdb.com/title/tt4123430/' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
						</div>
					</div>
				</div>
				<br>
				<h2 style='text-align: center;'> TV SHOWS </h2>
				<div class='card'>
					<div class='card-body'>
						<img src='images/TV_1.jpg' height='100' style='float: left; border: 0.25px solid grey;'/>
						<div style='float: right;'>
		    				<h4 class='card-title'>Sherlock</h4>
							<p class='card-text'> 
								Crime , Drama , Mystery &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> PG-14 </div>
							</p>
							<a href='book.php?book=t1' class='card-link btn btn-outline-success'>Book Now</a>
							<a href='https://www.imdb.com/title/tt1475582/' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
						</div>
					</div>
				</div>
				<br>
				<div class='card'>
					<div class='card-body'>
						<img src='images/TV_2.jpg' height='100' style='float: left; border: 0.25px solid grey;'/>
						<div style='float: right;'>
		    				<h4 class='card-title'>Rick and Morty</h4>
							<p class='card-text'> 
								Animation , Adventure , Comedy &nbsp &nbsp &nbsp <div style='font-size: 15px; font-weight: 700;'> MA </div>
							</p>
							<a href='book.php?book=t2' class='card-link btn btn-outline-success'>Book Now</a>
							<a href='https://www.imdb.com/title/tt2861424/' class='card-link btn btn-outline-danger' target='_blank'>View Info</a>
						</div>
					</div>
				</div>
				<br>
				<h2> Or search for something else? </h2>
				<br>
				<br>
			</div>
			";
	}
		include 'footer.php';
	?>
</body>
</html>