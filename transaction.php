<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "projectweb";

$date = "";
$orders = "";
$amount = "";
$fullname = "";
$address = "";
$contact = "";
$altcontact = "";
$therapist = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try
{
	$connect = mysqli_connect($host, $user, $password, $database);
}
catch (Exception $ex)
{
	$result = "Error";
}

function getPosts()
{
    $posts = array();
	$posts[0] = $_POST['date'];
	$posts[1] = $_POST['orders'];
	$posts[2] = $_POST['amount'];
	$posts[3] = $_POST['fullname'];
	$posts[4] = $_POST['address'];
	$posts[5] = $_POST['contact'];
	$posts[6] = $_POST['altcontact'];
	$posts[7] = $_POST['therapist'];
	
    return $posts;
}

//Code For Adding Record

if (isset($_POST['save']))
{
	$data = getPosts();
	$add_Query = "INSERT INTO `transaction` (`date`, `orders`, `amount`, `fullname`, `address`, `contact`, `altcontact`, `therapist`) VALUES ('" . $data[0] . "','" . $data[1] . "','" . $data[2] . "','" . $data[3] . "','" . $data[4] ."','" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "')"; 
	
    try
    {
		$add_Result = mysqli_query($connect, $add_Query);

		if($add_Result)
		{
			if(mysqli_affected_rows($connect) > 0)
			{
				$result = "Success!";
			}				
			else
			{
				$result = "Failed to added record";
			}
		}
	}
	catch (Exception $ex)
	{
		$result = "Error".$ex->getMessage();
	}
}