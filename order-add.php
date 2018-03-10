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

$name =$_POST["ordername"];
$address =$_POST["orderaddress"];
$tell =$_POST["ordertell"];
$date =$_POST["orderdate"];
$payment =$_POST["paymentselect"];
$food =$_POST["foodselect"];
$qty =$_POST["foodqty"];



	$sql="INSERT INTO `hotline_orders`(`hotline_id`, `hotline_name`, `hotline_address`, `hotline_tell`, `hotline_date`, `hotline_payment_method`, `hotline_meal`, `online_qty`)
   VALUES ('','$name','$address','$tell','$date','$payment','$food','$qty')";

	if(mysqli_query($conn,$sql))
	{
		//echo "New record created successfully";
		header("Location:admin-addorders.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);


			?>
