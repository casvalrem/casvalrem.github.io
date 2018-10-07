<?php
session_start();

// initializing variables
$date = "";
$orders = "";
$amount = "";
$fullname = "";
$address = "";
$contact = "";
$altcontact = "";
$therapist = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'projectweb');

// REGISTER USER
if (isset($_POST['save'])) {
  // receive all input values from the form
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $orders = mysqli_real_escape_string($db, $_POST['orders']);
  $amount = mysqli_real_escape_string($db, $_POST['amount']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $altcontact = mysqli_real_escape_string($db, $_POST['altcontact']);
  $therapist = mysqli_real_escape_string($db, $_POST['therapist']);


	$query = "INSERT INTO transaction (date, orders, amount, address, contact, altcontact, therapist) 
			  VALUES('$date', '$orders', '$amount', $address, $contact, $altcontact, $therapist)";
	mysqli_query($db, $query);
	
  
}


?>