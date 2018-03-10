<?php

//var_dump($_POST);

$severname="localhost";
$username="root";
$password="";
$database="food_ordering_system";

$conn=new mysqli($severname,$username,$password,$database);

if($conn->connect_error)
{
	die("connection failed :".$conn->connect_error);
}

$name =$_POST["name"];
$email =$_POST["email"];
$msg =$_POST["message"];



	$sql="INSERT INTO `public_messeges`(`public_id`, `public_name`, `public_email`, `public_msg`)
   VALUES ('','$name','$email','$msg')";

	if(mysqli_query($conn,$sql))
	{
		//echo "New record created successfully";
		header("Location:Contact.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);


			?>
