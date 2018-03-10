<?php

var_dump($_POST);

$severname="localhost";
$username="root";
$password="";
$database="food_ordering_system";

$conn=new mysqli($severname,$username,$password,$database);

if($conn->connect_error)
{
	die("connection failed :".$conn->connect_error);
}

$name =$_POST["adminname"];
$email =$_POST["adminemail"];
$tell =$_POST["admintell"];
$password =$_POST["adminpassword"];



	$sql="INSERT INTO `users`(`user_id`, `user_name`, `user_email`, `user_tell`, `user_password`, `last_login`, `is_deleted`)
   VALUES ('','$name','$email','$tell','$password','','')";

	if(mysqli_query($conn,$sql))
	{
		//echo "New record created successfully";
		header("Location:admin-addadmin.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);


			?>
