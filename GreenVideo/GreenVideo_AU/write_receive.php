<?php

// Responsible for inserting the contents of the 'Write a Post' form into the designated database.
session_start();

date_default_timezone_set("Australia/Melbourne");	// Sets the default timezone as of Melbourne, Australia.
$time = date("h:i:sa");
$date = date("d/m/Y");

$con = mysqli_connect("localhost","root","","blog_data");

$email_adm = $_SESSION['email_admin'];
$time_date = $time." @ ".$date;
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "insert into blogposts(email,time_date,title,content) values('$email_adm','$time_date','$title','$content')";

if(mysqli_query($con,$sql)) {
	echo "Successfully Submited!";
	header("refresh:1.5;url=blog.php");
}
else{
	echo "Failed to Submit! Please Try Again!";
	header("refresh:1.5;url=adminwrite.php");
}

?>