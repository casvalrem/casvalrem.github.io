<?php


// initializing variables
$username = "";
$phone    = "";
$email = "";
$address ="";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'projectweb');

// REGISTER USER
if (isset($_POST['appt'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);

}
$query = "INSERT INTO orders (name, phone, email, address) 
          VALUES('$username', '$phone', '$email', '$address')";
    
  ?>