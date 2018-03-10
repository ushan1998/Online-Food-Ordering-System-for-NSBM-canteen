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
	
$name =$_POST["inputusername"];
$address =$_POST["inputaddress"];
$tell =$_POST["inputtelnumber"];
$date =$_POST["exampleInputdate"];
$payment =$_POST["paymentselect"];
$cardtype =$_POST["cardtype"];
$cardno =$_POST["cardnumber"];
$food =$_POST["foodselect"];
$qty =$_POST["qty"];



	$sql="INSERT INTO `online_orders`(`online_id`, `online_name`, `online_address`, `online_tell`, `online_date`, `online_payement_method`, `online_card_type`, `online_card_number`, `online_meal`, `online_qty`)
   VALUES ('','$name','$address','$tell','$date','$payment','$cardtype','$cardno','$food','$qty')";

	if(mysqli_query($conn,$sql))
	{
		//echo "New record created successfully";
		header("Location:reservation.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			mysqli_close($conn);


			?>
