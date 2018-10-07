<?php

	$host 		= "localhost";
	$user 		= "root";
	$password 	= "";
	$database 	= "myfirstdb";

	$id 	=	"";
	$fname 	=	"";
	$lname	=	"";
	$age 	=	"";

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
		$posts[0] = $_POST['id'];
		$posts[1] = $_POST['fname'];
		$posts[2] = $_POST['lname'];
		$posts[3] = $_POST['age'];
		return $posts;
	}

	//Code for adding record

	if(isset($_POST['add']))
	{
		$data=getPosts();
		$add_Query = "INSERT INTO `personalinfor`(`id`, `fname`, `lname`, `age`) VALUES ('$data[0]','$data[1]','$data[2]',$data[3])";
		
		try
		{
			$add_Result = mysqli_query($connect, $add_Query);

			if($add_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					$result = "Added record succesfully";
				}
				else
				{
					$result = "Failed to add record";
				}
			}
		}
		catch (Exception $ex)
		{
			$result = "Error".$ex->getMessage();
		}
	}

	//Code for updating record

	if (isset($_POST['update']))
	{
		$data = getPosts();
		$update_Query = "UPDATE `personalinfor` SET `fname`='$data[1]',`lname`='$data[2]',`age`='$data[3]' WHERE `id`=$data[0]";

		try
		{
			$update_Result = mysqli_query($connect, $update_Query);

			if($update_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					$result = "Updated record successfully";
				}
				else
				{
					$result = "Failed to update record";
				}
			}
		}
		catch (Exception $ex)
		{
			$result = "Error".$ex->getMessage();
		}
	}

	//Code for deleting record

	if (isset($_POST['delete']))
	{
		$data = getPosts();
		$delete_Query = "DELETE FROM `personalinfor` WHERE `id`=$data[0]";

		try
		{
			$delete_Result = mysqli_query($connect, $delete_Query);

			if($delete_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					$result = "Deleted record successfully";
				}
				else
				{
					$result = "Failed to delete record";
				}
			}
		}
		catch (Exception $ex)
		{
			$result = "Error".$ex->getMessage();
		}
	}

	//Code for searching record

	if (isset($_POST['search']))
	{
		$data = getPosts();
		$search_Query = "SELECT * FROM personalinfor WHERE id = $data[0]";
		$search_Result = mysqli_query($connect, $search_Query);

		if($search_Result)
		{
			if(mysqli_num_rows($search_Result))
			{
				while($row = mysqli_fetch_array($search_Result))
				{
					$id 	= $row['id'];
					$fname 	= $row['fname'];
					$lname	= $row['lname'];
					$age 	= $row['age'];
				}
			}
			else
			{
				$result = "ID not found";
			}

		}
		else
		{
			$result = "Result error";
		}
	}
?>