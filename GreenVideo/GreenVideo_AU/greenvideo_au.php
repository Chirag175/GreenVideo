<!-- DOCTYPE is an instruction to the web browser about what version of HTML the page is written in just as this document is written in HTML 5 -->
<!doctype html>
<?php
	session_start();

	if(isset($_SESSION['email']))
		$user = "Logged in : ".$_SESSION['fname']." ".$_SESSION['lname'];
	else
		$user = "LOGIN/SIGNUP";
?>
<!-- The lang attribute specifies the language of the element's content which happens to be the entire HTML document in this case -->
<html lang="en">
<!-- The head element containes information regarding the HTML document (more for the browsers than for visitors) provided in the meta tags along with linking the CSS and Javascript files that affect the document overall -->
<head> 
	<meta charset="utf-8"> <!-- Defines the character set -->
	<meta name="viewport" content="width=device-width, initial-scale=1"/> <!-- Defines the viewing port specifications -->
	<meta name="author" content="Chirag Tamhane"/> <!-- Defines the author's name -->
	<link rel="icon" type="image/gif" href="images/logo.png"/> <!-- Embeds the webpage's icon -->
	<title>GreenVideo (Australia)</title> <!-- Defines the title of the webpage -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!-- Embeds the bootstrap CSS file -->
	<link rel="stylesheet" type="text/css" href="css/custom.css"> <!-- Embeds a custom CSS file -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> <!-- Embeds a set of icons via the internet -->
	<script src="js/jquery-3.3.1.slim.min.js"></script> <!-- Embeds the jquery file -->
	<script src="js/bootstrap.js"></script> <!-- Embeds the bootstrap Js file -->
	<script type="text/javascript" src="js/book.js"></script> <!-- Embeds a custom Js file designed to handle booking requests -->
</head>
<body>
	<!-- Defines a navigation bar - The Fixed Header -->
	<?php
		include 'header.php';
	?>
	<hr>
	<br>
	<!-- The main slideshow on the homepage - The Carousel is a pre-defined bootstrap class which contains slideshow functionalities -->
	<div id="carouselMain" class="carousel slide" data-ride="carousel">
		<!-- Defines the carousel's current slide indicator -->
		<ol class="carousel-indicators">
		    <li data-target="#carouselMain" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselMain" data-slide-to="1"></li>
		    <li data-target="#carouselMain" data-slide-to="2"></li>
		    <li data-target="#carouselMain" data-slide-to="3"></li>
		    <li data-target="#carouselMain" data-slide-to="4"></li>
		</ol>
		<!-- Defines the carousel's slides along with the associated images -->
		<div class="carousel-inner">
			<!-- Defines an individual slide -->
			<!-- The 'active' class is used to select the slide the slideshow will begin from -->
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="images/header1.png" alt="FirstSlide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/header2.png" alt="SecondSlide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/header3.png" alt="ThirdSlide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="images/header4.png" alt="FourthSlide">
		    </div>
			<div class="carousel-item">
		      <img class="d-block w-100" src="images/header5.png" alt="FifthSlide">
		    </div>
		</div>
		<!-- The carousel's controls are defined here - Previous and Next -->
		<a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<hr>
	<div class="container">
		<!-- The Featured Movies' slideshow is defined here -->
		<h1 class="text-center mb-3">FEATURED MOVIES</h1>
	  	<div id="Movies" class="carousel slide" data-ride="carousel">
	  		<!-- Each slide is defined here -->
	    	<div class="carousel-inner row w-100 mx-auto">
	      		<!-- This time, each slide is composed of three cards with each card representing a product -->
	      		<div class="carousel-item col-md-12 active">
	      			<div class="card-deck">
		        		<div class="card my-4">
							<img class="card-img-top" src="images/Movies_1.jpg" height="350" alt="TheNutcrackerandtheFourRealms"/>
							<div class="card-body">
		    					<h4 class="card-title">The Nutcracker and the Four Realms</h4>
		    					<h5 class="card-title" style="color: #383838">Walt Disney Pictures</h5>
		    					<div class="card-text">
		    						Directors: Lasse Hallstr&ouml;m, Joe Johnston
		    						<br>
									Writers: Ashleigh Powell (screen story by), Ashleigh Powell (screenplay by)
									<br>
									Stars: Mackenzie Foy, Keira Knightley, Morgan Freeman
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt5523010/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="m1" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('m1')">Book</div>
		    					</form>
		  					</div>
						</div>
		      			<div class="card my-4">
							<img class="card-img-top" src="images/Movies_2.jpg" height="350" alt="FantasticBeastsTheCrimesofGrindelwald"/>
							<div class="card-body">
			    				<h4 class="card-title">Fantastic Beasts: The Crimes of Grindelwald</h4>
			    				<h5 class="card-title" style="color: #383838">Warner Bros</h5>
			    				<div class="card-text">
									Director: David Yates
									<br>
									Writers: J.K. Rowling, J.K. Rowling (based upon characters created by)
									<br>
									Stars: Eddie Redmayne, Katherine Waterston, Dan Fogler 
			    				</div>
			    				<br>
			    				<a href="https://www.imdb.com/title/tt4123430/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
			    				<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="m2" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('m2')">Book</div>
		    					</form>
			  				</div>
						</div>
						<div class="card my-4">
							<img class="card-img-top" src="images/Movies_3.jpg" height="350" alt="Venom"/>
							<div class="card-body">
			    				<h4 class="card-title">Venom</h4>
		    					<h5 class="card-title" style="color: #383838">Marvel Entertainment</h5>
		    					<div class="card-text">
			    					Director: Ruben Fleischer
			    					<br>
									Writers: Jeff Pinkner (screenplay by), Scott Rosenberg (screenplay by)
									<br>
									Stars: Tom Hardy, Michelle Williams, Riz Ahmed
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt1270797/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="m3" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('m3')">Book</div>
		    					</form>
		  					</div>
						</div>
					</div>
	      		</div>
	      		<div class="carousel-item col-md-12">
	      			<div class="card-deck">
		        		<div class="card my-4">
							<img class="card-img-top" src="images/Movies_4.jpg" height="350" alt="TheEqualizer2"/>
							<div class="card-body">
		    					<h4 class="card-title">The Equalizer 2</h4>
		    					<h5 class="card-title" style="color: #383838">Columbia Pictures Corporation</h5>
		    					<div class="card-text">
		    						Director: Antoine Fuqua
									<br>
									Writers: Richard Wenk, Michael Sloan (based on the television series created by)
									<br>
									Stars: Denzel Washington, Pedro Pascal, Ashton Sanders
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt3766354/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="m4" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('m4')">Book</div>
		    					</form>
		  					</div>
						</div>
		      			<div class="card my-4">
							<img class="card-img-top" src="images/Movies_5.jpg" height="350" alt="MissionImpossibleFallout"/>
							<div class="card-body">
			    				<h4 class="card-title">Mission: Impossible - Fallout</h4>
		    					<h5 class="card-title" style="color: #383838">Paramount Pictures</h5>
		    					<div class="card-text">
			    					Director: Christopher McQuarrie
									<br>
									Writers: Christopher McQuarrie, Bruce Geller (based on the television series created by)
									<br>
									Stars: Tom Cruise, Henry Cavill, Ving Rhames
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt4912910/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="m5" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('m5')">Book</div>
		    					</form>
		  					</div>
						</div>
						<div class="card my-4">
							<img class="card-img-top" src="images/Movies_6.jpg" height="350" alt="TheNun"/>
							<div class="card-body">
			    				<h4 class="card-title">The Nun</h4>
		    					<h5 class="card-title" style="color: #383838">New Line Cinema, Atomic Monster Productions</h5>
		    					<div class="card-text">
			    					Director: Corin Hardy
			    					<br>
			    					Writers: Gary Dauberman (screenplay by), James Wan (story by)
			    					<br>
			    					Stars: Demi&aacute;n Bichir, Taissa Farmiga, Jonas Bloquet
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt5814060/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="m6" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('m6')">Book</div>
		    					</form>
		  					</div>
						</div>
					</div>
	      		</div>
	      		<div class="carousel-item col-md-12">
	      			<div class="card-deck">
		        		<div class="card my-4">
							<img class="card-img-top" src="images/Movies_7.jpg" height="350" alt="AntManandtheWasp"/>
							<div class="card-body">
		    					<h4 class="card-title">Ant-Man and the Wasp</h4>
		    					<h5 class="card-title" style="color: #383838">Marvel Studios</h5>
		    					<div class="card-text">
		    						Director: Peyton Reed
		    						<br>
		    						Writers: Chris McKenna, Erik Sommers
		    						<br>
		    						Stars: Paul Rudd, Evangeline Lilly, Michael Pe&ntilde;a
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt5095030/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="m7" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('m7')">Book</div>
		    					</form>
		  					</div>
						</div>
		      			<div class="card my-4">
							<img class="card-img-top" src="images/Movies_8.jpg" height="350" alt="RalphBreakstheInternet"/>
							<div class="card-body">
			    				<h4 class="card-title">Ralph Breaks the Internet</h4>
		    					<h5 class="card-title" style="color: #383838">Walt Disney</h5>
		    					<div class="card-text">
			    					Directors: Phil Johnston, Rich Moore
			    					<br>
			    					Writers: Phil Johnston (screenplay by), Pamela Ribon (screenplay by)
			    					<br>
			    					Stars: John C. Reilly, Sarah Silverman, Gal Gadot
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt5848272/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="m8" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('m8')">Book</div>
		    					</form>
		  					</div>
						</div>
						<div class="card my-4">
							<div class="card-header" style="background-color: limegreen; color: white;">
		        				'INCREDIBLE's COMBO
		        				<div style="float: right;">
		        					<i class="fas fa-percent"></i>
		        				</div>
		        			</div>
							<img class="card-img-top" src="images/Movies_9.jpg" height="350" alt="Incredibles"/>
							<div class="card-body">
			    				<h4 class="card-title">Incredibles 1 & 2</h4>
		    					<h5 class="card-title" style="color: #383838"> Walt Disney Pictures, Pixar Animation Studios</h5>
		    					<div class="card-text">
									Director: Brad Bird
									<br>
									Writer: Brad Bird
									<br>
									Stars: Craig T. Nelson, Holly Hunter, Sarah Vowell
		    					</div>
		    					<br>
		    					<a onclick="window.open('https://www.imdb.com/title/tt0317705/'); window.open('https://www.imdb.com/title/tt3606756/');" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="m9" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('m9')">Book</div>
		    					</form>
		  					</div>
						</div>
					</div>
	      		</div>
	      	</div>
	      	<!-- The carousel's controls customized as per requirement -->
	    	<a style="margin-left: -175px;" class="carousel-control-prev" href="#Movies" role="button" data-slide="prev">
		    	<span class="carousel-control-prev-icon" aria-hidden="true">
		   			<i style="font-size: 40px; color: black;" class="fas fa-arrow-circle-left">
	      			</i>
		    	</span>
		    	<span class="sr-only">Previous</span>
		    </a>
		    <a style="margin-right: -175px;" class="carousel-control-next" href="#Movies" role="button" data-slide="next">
 		    	<span class="carousel-control-next-icon" aria-hidden="true">
		  			<i style="font-size: 40px; color: black;" class="fas fa-arrow-circle-right">
		  			</i>
		  		</span>
		    	<span class="sr-only">Next</span>
		    </a>
	  	</div>
	  	<hr>
	  	<!-- The Featured TV Shows' slideshow is defined here -->
	  	<h1 class="text-center mb-3">FEATURED TV SHOWS</h1>
	  	<div id="TVshows" class="carousel slide" data-ride="carousel">
	    	<div class="carousel-inner row w-100 mx-auto">
	      		<div class="carousel-item col-md-12 active">
	      			<div class="card-deck">
		        		<div class="card my-4">
							<img class="card-img-top" src="images/TV_1.jpg" height="350" alt="Sherlock" />
							<div class="card-body">
		    					<h4 class="card-title">Sherlock</h4>
		    					<h5 class="card-title" style="color: #383838">Season 4 / BBC</h5>
		    					<div class="card-text">
		    						Creators: Mark Gatiss, Steven Moffat
		    						<br>
									Stars: Benedict Cumberbatch, Martin Freeman, Una Stubbs 
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt1475582/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="t1" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('t1')">Book</div>
		    					</form>
		  					</div>
						</div>
		      			<div class="card my-4">
							<img class="card-img-top" src="images/TV_2.jpg" height="350" alt="RickandMorty"/>
							<div class="card-body">
			    				<h4 class="card-title">Rick and Morty</h4>
			    				<h5 class="card-title" style="color: #383838">Season 3 / adult swim</h5>
			    				<div class="card-text">
									Creators: Dan Harmon, Justin Roiland
									<br>
									Stars: Justin Roiland, Chris Parnell, Spencer Grammer 
			    				</div>
			    				<br>
			    				<a href="https://www.imdb.com/title/tt2861424/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
			    				<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="t2" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('t2')">Book</div>
		    					</form>
			  				</div>
						</div>
						<div class="card my-4">
							<img class="card-img-top" src="images/TV_3.jpg" height="350" alt="StrangerThings"/>
							<div class="card-body">
			    				<h4 class="card-title">Stranger Things</h4>
		    					<h5 class="card-title" style="color: #383838">Season 2 / Netflix Originals</h5>
		    					<div class="card-text">
			    					Creators: Matt Duffer, Ross Duffer
			    					<br>
									Stars: Millie Bobby Brown, Finn Wolfhard, Winona Ryder
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt4574334/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="t3" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('t3')">Book</div>
		    					</form>
		  					</div>
						</div>
					</div>
	      		</div>
	      		<div class="carousel-item col-md-12">
	      			<div class="card-deck">
		        		<div class="card my-4">
							<img class="card-img-top" src="images/TV_4.jpg" height="350" alt="Mars"/>
							<div class="card-body">
		    					<h4 class="card-title">Mars</h4>
		    					<h5 class="card-title" style="color: #383838">Season 2 / National Geographic</h5>
		    					<div class="card-text">
		    						Creators: Andr&eacute; Bormanis, Mickey Fisher, Karen Janszen
		    						<br>
									Stars: Jihae, Alberto Ammann, Cl&eacute;mentine Poidatz 
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt4939064/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="t4" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('t4')">Book</div>
		    					</form>
		  					</div>
						</div>
		      			<div class="card my-4">
							<img class="card-img-top" src="images/TV_5.jpg" height="350" alt="SiliconValley"/>
							<div class="card-body">
			    				<h4 class="card-title">Silicon Valley</h4>
		    					<h5 class="card-title" style="color: #383838">Season 5 / HBO</h5>
		    					<div class="card-text">
			    					Creators: John Altschuler, Mike Judge, Dave Krinsky
			    					<br>
									Stars: Thomas Middleditch, T.J. Miller, Josh Brener
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt2575988/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="t5" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('t5')">Book</div>
		    					</form>
		  					</div>
						</div>
						<div class="card my-4">
							<img class="card-img-top" src="images/TV_6.jpg" height="350" alt="Daredevil"/>
							<div class="card-body">
			    				<h4 class="card-title">Daredevil</h4>
		    					<h5 class="card-title" style="color: #383838">Season 3 / Marvel Entertainment</h5>
		    					<div class="card-text">
			    					Creator: Drew Goddard
									<br>
									Stars: Charlie Cox, Vincent D'Onofrio, Deborah Ann Woll
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt3322312/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="t6" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('t6')">Book</div>
		    					</form>
		  					</div>
						</div>
					</div>
	      		</div>
	      		<div class="carousel-item col-md-12">
	      			<div class="card-deck">
		        		<div class="card my-4">
							<img class="card-img-top" src="images/TV_7.jpg" height="350" alt="BreakingBad"/>
							<div class="card-body">
		    					<h4 class="card-title">Breaking Bad</h4>
		    					<h5 class="card-title" style="color: #383838">Season 5 / Sony Pictures Television</h5>
		    					<div class="card-text">
		    						Creator: Vince Gilligan
									<br>
									Stars: Bryan Cranston, Aaron Paul, Anna Gunn 
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt0903747/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="t7" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('t7')">Book</div>
		    					</form>
		  					</div>
						</div>
		      			<div class="card my-4">
		        			<div class="card-header" style="background-color: limegreen; color: white;">
		        				ALL SEASONS COMBO
		        				<div style="float: right;">
		        					<i class="fas fa-percent"></i>
		        				</div>
		        			</div>
							<img class="card-img-top" src="images/TV_8.jpg" height="350" alt="Friends"/>
							<div class="card-body">
			    				<h4 class="card-title">Friends</h4>
		    					<h5 class="card-title" style="color: #383838">Seasons 1 - 10 / Warner Bros. Television</h5>
		    					<div class="card-text">
			    					Creators: David Crane, Marta Kauffman
									<br>
									Stars: Jennifer Aniston, Courteney Cox, Lisa Kudrow
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt0108778/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="t8" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('t8')">Book</div>
		    					</form>
		  					</div>
						</div>
						<div class="card my-4">
							<img class="card-img-top" src="images/TV_9.jpg" height="350" alt="TheFlash"/>
							<div class="card-body">
			    				<h4 class="card-title">The Flash</h4>
		    					<h5 class="card-title" style="color: #383838">Season 5 / DC Entertainment</h5>
		    					<div class="card-text">
									Creators: Greg Berlanti, Geoff Johns, Andrew Kreisberg
									<br>
									Stars: Grant Gustin, Candice Patton, Danielle Panabaker 
		    					</div>
		    					<br>
		    					<a href="https://www.imdb.com/title/tt3107288/" target="_blank" class="btn btn-outline-danger" style="float: left;">View Info</a>
		    					<form class="update" method="get" action="book.php">
		    						<input name="book" id="book" value="t9" hidden />
		    						<div class="btn btn-outline-success" style="float: right;" onclick="update('t9')">Book</div>
		    					</form>
		  					</div>
						</div>
					</div>
	      		</div>
	      	</div>
	    	<a style="margin-left: -175px;" class="carousel-control-prev" href="#TVshows" role="button" data-slide="prev">
		    	<span class="carousel-control-prev-icon" aria-hidden="true">
		   			<i style="font-size: 40px; color: black;" class="fas fa-arrow-circle-left">
	      			</i>
		    	</span>
		    	<span class="sr-only">Previous</span>
		    </a>
		    <a style="margin-right: -175px;" class="carousel-control-next" href="#TVshows" role="button" data-slide="next">
 		    	<span class="carousel-control-next-icon" aria-hidden="true">
		  			<i style="font-size: 40px; color: black;" class="fas fa-arrow-circle-right">
		  			</i>
		  		</span>
		    	<span class="sr-only">Next</span>
		    </a>
	  	</div>
	</div>
	<br>
	<br>
	<?php
		include 'footer.php';
	?>
</body>
</html>