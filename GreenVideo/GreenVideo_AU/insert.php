<?php

// Responsible for carrying out signing up functionalities. Inserts the registration form details into the designated database.

// Used to establish connection between the PHP document and the MySQL database.
$con = mysqli_connect("localhost","root","","user_info");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$bdate = $_POST['bdate'];
$gender = $_POST['gender'];
$add_1 = $_POST['add_1'];
$add_2 = $_POST['add_2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$pass = $_POST['pass'];

$lookup = "select email from user_details_au where email='$email'";

$result = mysqli_query($con,$lookup);
$record = mysqli_fetch_assoc($result);

$ins = "insert into user_details_au(fname,lname,email,phone,bdate,gender,add_1,add_2,city,state,zipcode,pass) values('$fname','$lname','$email','$phone','$bdate','$gender','$add_1','$add_2','$city','$state','$zipcode','$pass')";

if(mysqli_num_rows($result)>0) {
	echo "Sorry! This account is already registered after the name : $fname $lname. Please proceed to login!";
	header("refresh:3;url=account.php");
}
else
if($pass != $_POST['cpass']) {
	echo "Sorry! The passwords didn't matched! Please Try Again!";
	header("refresh:3;url=account.php");
}
else
if(mysqli_query($con,$ins)) {
	echo "You are successfully registered!";
	header("refresh:1.5;url=account.php");
}
else {
	echo "Sorry! The registration process failed. Please Try Again!";
	header("refresh:3;url=account.php");
}

?>