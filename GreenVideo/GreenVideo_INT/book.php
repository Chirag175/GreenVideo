<?php
	session_start();

	if(isset($_SESSION['email']))
		$user = "Logged in : ".$_SESSION['fname']." ".$_SESSION['lname'];
	else
		$user = "LOGIN/SIGNUP";
?>
<!-- Responsible for initiating the booking process of the user chosen product -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="author" content="Chirag Tamhane"/>
	<link rel="icon" type="image/gif" href="images/logo.png"/>
	<title>Book - GreenVideo (International)</title>
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

	<?php

	if(!isset($_GET['book']))
		header('Location: catalog.php');
	else
	{
		$book = $_GET['book'];
		if ($book[0] == 'm') {

			$con = mysqli_connect("localhost","root","","product_list");

			$mov = "SELECT * FROM `movies` WHERE id = '$book[1]'";

			$mov_result = mysqli_query($con,$mov);
			$record = mysqli_fetch_assoc($mov_result);

			$id=$record['id'];
			$name=$record['name'];
			$genre=$record['genre'];
			$rating=$record['rating'];
			$price_buy=round($record['price']*3/4);
			$price_rent=round(($price_buy*0.1)+0.001);
			$imgpath=$record['imgpath'];
			$imdbpath=$record['imdbpath'];
			$bookpath=$record['bookpath'];

			echo "
			<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>
			<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js'></script>
			<link rel='stylesheet' type='text/css' href='https://davidwalsh.name/demo/jquery-ui-css/custom-theme/jquery-ui-1.7.2.custom.css'>
			<script type='text/javascript' src='js/cal.js'></script>
				<div class='container'>
					<div class='card' style='background-color: white; color: black;'>
						<div class='card-body'>
							<img src='$imgpath' height='500' style='float: left; border: 0.25px solid grey;'/>
							<div>
			    				<h2 class='card-title' style='text-align: center;'>$name</h2>
			    				<hr align='right' width='47.5%' style='margin-right: 27.5px;'>
			    				<br><br>
			    				<form align='center' name='booktype' id='booktype' method='post' action='finalbook.php'>
			    					<input name='product' id='product' value='m$id' hidden />
			    					<input name='itemname' id='itemname' value='$name' hidden />
			    					Order Date :
			    					<input type='text' name='date' id='date' size='30' placeholder='Click to select a date' autocomplete=off required/>
			    					<br><br><br>
				    				<hr align='right' width='47.5%' style='margin-right: 27.5px;'>
				    				<br>
				    				<input name='btype' id='btype' type='submit' class='btn btn-outline-danger' value='Buy - $price_buy USD'/>
			    					<input name='btype' id='btype' type='submit' class='btn btn-outline-success' value='Rent - $price_rent USD/day'></input>
			    				</form>
							</div>
						</div>
					</div>
				</div>
				<br>";
		}
		else {

			$con = mysqli_connect("localhost","root","","product_list");

			$tv = "SELECT * FROM `tv` WHERE id = '$book[1]'";

			$tv_result = mysqli_query($con,$tv);
			$record = mysqli_fetch_assoc($tv_result);

			$id=$record['id'];
			$name=$record['name'];
			$genre=$record['genre'];
			$rating=$record['rating'];
			$price_buy=round($record['price']*3/4);
			$price_rent=round(($price_buy*0.1)+0.001);
			$imgpath=$record['imgpath'];
			$imdbpath=$record['imdbpath'];
			$bookpath=$record['bookpath'];

				echo "
				<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>
			<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js'></script>
			<link rel='stylesheet' type='text/css' href='https://davidwalsh.name/demo/jquery-ui-css/custom-theme/jquery-ui-1.7.2.custom.css'>
			<script type='text/javascript' src='js/cal.js'></script>
				<div class='container'>
					<div class='card' style='background-color: white; color: black;'>
						<div class='card-body'>
							<img src='$imgpath' height='500' style='float: left; border: 0.25px solid grey;'/>
							<div>
			    				<h2 class='card-title' style='text-align: center;'>$name</h2>
			    				<hr align='right' width='47.5%' style='margin-right: 27.5px;'>
			    				<form align='center' name='booktype' id='booktype' method='post' action='finalbook.php'>
									<input name='product' id='product' value='t$id' hidden />
									<input name='itemname' id='itemname' value='$name' hidden />
									Order Date :
			    					<input type='text' name='date' id='date' size='30' placeholder='Click to select a date' autocomplete=off required/>
			    					<br>
				    				<hr align='right' width='47.5%' style='margin-right: 27.5px;'>
				    				<br>
				    				<input name='btype' type='submit' class='btn btn-outline-danger' value='Buy - $price_buy USD'/>
			    					<input name='btype' type='submit' class='btn btn-outline-success' value='Rent - $price_rent USD/day'/>
			    				</form>
							</div>
						</div>
					</div>
				</div>
				<br>";
			}
		}
		include 'footer.php';
	?>
</body>
</html>