<?php

// Responsible for carrying out logging in functionalities. Looks up the registered details from the database to validate the user's entered credentials.

session_start();

$_SESSION['email'] = $_POST['email'];

$con = mysqli_connect("localhost","root","","user_info");

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "select fname,lname,email,pass from user_details_au where email='$email' and pass='$pass'";

$result = mysqli_query($con,$sql);
$record=mysqli_fetch_assoc($result);
$_SESSION['fname']=$record['fname'];
$_SESSION['lname']=$record['lname'];

if(mysqli_num_rows($result)>0){
	echo "You are successfully logged in!";
	if(isset($_SESSION['product'])) {
		$product = $_SESSION['product'];
		header("refresh:1.5;url=book.php?book=$product");
	}
	else
		header("refresh:1.5;url=greenvideo_au.php");
}
else{
	echo "You have entered incorrect credentials!";
	session_unset();
	session_destroy();
	header("refresh:2.5;url=account.php");
}

?>