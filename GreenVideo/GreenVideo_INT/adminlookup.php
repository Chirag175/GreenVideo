<?php

// Responsible for carrying out logging in functionalities. Looks up the registered details from the database to validate the admin's entered credentials for the blog.

session_start();

$_SESSION['email_admin'] = $_POST['email_admin'];

$con = mysqli_connect("localhost","root","","blog_data");

$email = $_POST['email_admin'];
$pass = $_POST['pass_admin'];

$sql = "select name_admin,email_admin,pass_admin from admindata where email_admin='$email' and pass_admin='$pass'";

$result = mysqli_query($con,$sql);
$record=mysqli_fetch_assoc($result);
$_SESSION['name_admin']=$record['name_admin'];

if(mysqli_num_rows($result)>0){
	echo "You are successfully logged in!";
	header("refresh:1.5;url=blog.php");
}
else{
	echo "You have entered incorrect credentials!";
	session_unset();
	session_destroy();
	header("refresh:2.5;url=adminaccount.php");
}

?>