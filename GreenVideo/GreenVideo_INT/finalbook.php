<?php

// The last step of the booking process is handled by this document. If the user isn't logged in, then the user is redirected to the account.php page where either they can log in or register and then log in after which they would be again automatically redirected to the page they left from, the final stage of the booking process with the user chosen product already selected.

session_start();

$_SESSION['product'] = $_POST['product'];

if(!isset($_SESSION['email'])){
	echo "Please Login or SignUp first!";
	header("refresh:1;url=account.php");
}
else{

$em = $_SESSION['email'];

$con = mysqli_connect("localhost","root","","user_info");

$lookup = "select email, phone, add_1, add_2, city, state, zipcode from user_details_int where email='$em'";

$result = mysqli_query($con,$lookup);
$record = mysqli_fetch_assoc($result);

$product_id = $_POST['product'];
$booktype = $_POST['btype'];
$date = $_POST['date'];
$email = $record['email'];
$phone = $record['phone'];
$add_1 = $record['add_1'];
$add_2 = $record['add_2'];
$city = $record['city'];
$state = $record['state'];
$zipcode = $record['zipcode'];

$sql = "insert into order_list(product_id, booktype, date, email, phone, add_1, add_2, city, state, zipcode) values('$product_id', '$booktype', '$date','$email','$phone','$add_1','$add_2','$city','$state','$zipcode')";

if(mysqli_query($con,$sql)) {
	echo "Your request has been successfully submited!";
	header("refresh:1.5;url=greenvideo_int.php");
}
else{
	echo "Failed to submit your request! Please try again!";
	header("location: {$_SERVER['HTTP_REFERER']}");
}
}

?>