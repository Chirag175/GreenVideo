<?php

// Responsible for inserting the contents of the Contact Form into the designated database.

$con = mysqli_connect("localhost","root","","user_info");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "insert into contact_form(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')";

if(mysqli_query($con,$sql)) {
	echo "Successfully Submited!";
	header("refresh:1.5;url=greenvideo_INT.php");
}
else{
	echo "Failed to Submit! Please Try Again!";
	header("refresh:1.5;url=contact.php");
}

?>