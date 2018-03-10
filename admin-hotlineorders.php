<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>

<?php


$hotline_orders ='';

//getting the list of the user

$query = "SELECT * FROM hotline_orders";
$users = mysqli_query($connection, $query);



if ($users) {

  while ($user = mysqli_fetch_assoc($users)) {

    $hotline_orders .= "<tr>";

        $hotline_orders .= "<td>{$user['hotline_name']}</td>";
        $hotline_orders .= "<td>{$user['hotline_address']}</td>";
        $hotline_orders .= "<td>{$user['hotline_tell']}</td>";
          $hotline_orders .= "<td>{$user['hotline_date']}</td>";
            $hotline_orders .= "<td>{$user['hotline_payment_method']}</td>";
              $hotline_orders .= "<td>{$user['hotline_meal']}</td>";
                $hotline_orders .= "<td>{$user['online_qty']}</td>";




    $hotline_orders .= "<tr>";
  }

}else {
  echo "database query failed";
}














 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin |  Dashboard</title>
    <link rel="shortcut icon" type="img/png" href="img/nsbm.png">

  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/font-awesome-animation.css" rel="stylesheet" />
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="main.css" rel="stylesheet">


      <style>


    #Clockdisplay{
      margin: 10px;
      color: black;
      font-weight: bold;


    }
   .navbar-inverse {
    background-color: #172027;
    border-color: #080808;

  }

.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #2f353a;
  }

  .btn-default {
    color: #fff;
    background-color: #2f353a;
    border-color: #ccc;
}
.page-header{

  background-color:  	#F8F8FF;
  margin-right: 55px;
}



      </style>





  </head>

  <body onload="renderTime();">


    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

            <li class="active"><a href="admin-index.html">Dashboard</a></li>
            <li><a href=""></a></li>

              <li style="padding-top:8px;"><button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-sm">Admin Details</button></li>
                <li><a href=""></a></li>


            <!--admin details modal start over here-->

                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="margin-top:10px;">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="admin-details">
                    <img src="img/user.png" alt="" height="100px" height="100px" style="padding-left:100px;padding-top:10px;">
                      <h3 style="margin:10px;">Welcome <small> <?php echo $_SESSION['user_name']; ?> </small></h3>


                  </div>

                </div>
              </div>
            </div>

            <!--end of the admin details modal-->



            <!--order managment drop down menu-->
            <li><div class="dropdown create" style="padding-top:7px;">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Manage Orders
              <span class="caret"></span>
              </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="admin-addorders.php">Add Orders</a></li>
                  <li><a href="admin-index.php">Online Orders</a></li>
                  <li><a href="admin-hotlineorders.php">Hotline Orders</a></li>


                </ul>
              </div></li>
              <!--end of the order managment drop down menu-->


          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><div class="dropdown create" style="padding-top:7px;padding-left:10px;">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Administration
              <span class="caret"></span>
              </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="admin-addadmin.php">Add a Admin</a></li>
                  <li><a href="admin-viewadmins.php">View Admins</a></li>


                </ul>
              </div></li>
            <li><a href="logout.php">Log out</a></li>

          </ul>
        </div>
      </div>
    </nav>

    <header id="header">

  </header>


<section id="main" style="margin-left:50px;padding-top:20px;">


    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
            <a href="" class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-user" aria-hidden="true" style="padding-right:5px;"></span>Dashboard

            </a>
            <a href="admin-index.php" class="list-group-item"><span class="glyphicon glyphicon-cutlery" aria-hidden="true" style="padding-right:5px;"></span>Orders</a>
            <a href="admin-msg.php" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true" style="margin:4px;"></span>Messeges</a>
            <a href="admin-menu.php" class="list-group-item"><span class="glyphicon glyphicon-folder-open" aria-hidden="true" style="padding-right:5px;"></span>Menu</a>
            <a href="admin-contacts.php" class="list-group-item"><span class="glyphicon glyphicon-earphone" aria-hidden="true" style="margin:4px;"></span>Contacts</a>

        </div>
        <div class="onlineusers">

          <div class="panel panel-default">
            <div class="panel-heading">
                  <h3 class="panel-title">Date & Time</h3>
            </div>
                <div class="panel-body">

                  <div id="Clockdisplay" style="padding-top:20px;">
                      </div>

                </div>

          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
                  <h3 class="panel-title">Calender</h3>
            </div>
                <div class="panel-body">

                    <iframe src="https://calendar.google.com/calendar/embed?title=nsbm-canteen&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ushanalwis81%40gmail.com&amp;color=%231B887A&amp;ctz=Asia%2FColombo" style="border-width:0" width="300" height="300" frameborder="0" scrolling="no"></iframe>

                </div>

          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="page-header">
              <h3>Hotline Customer Orders <small>National School of Bussines Managment Food Ordering System</small></h3>
        </div>
          <table class="table table-hover">
            <tr>
              <th>Name</th>
              <th>address</th>
              <th>Telephone</th>
              <th>Date</th>
              <th>Payement Type</th>
              <th>Meal</th>
              <th>QTY</th>
            </tr>

            <?php echo $hotline_orders; ?>
          </table>
      </div>
    </div>
    <hr>


  </div>

</section>




        <footer class="footer-distributed">

            <div class="footer-left">

               <img src="img/nsbm.png" alt="">

                <p class="footer-links">
                    <a href="#">Admin User Account</a>


                </p>

                <p class="footer-company-name">NSBM Foods &copy; 2018</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p>
                        <span>309 Dampe - Pitipana Rd, </span> Colombo</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>0115 445 000</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p>
                        <a href="mailto:support@company.com">foods@nsbm.com</a>
                    </p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>@ N S B M  Foods</span>
                    This site only for NBSM students to get their meals on time. this system handeled by NSBM Foods.
                </p>

                <div class="footer-icons">

                    <a href="https://www.facebook.com/">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/feed/">
                        <i class="fa fa-linkedin"></i>
                    </a>

                </div>

            </div>

        </footer>

<script type="text/javascript">

		function renderTime(){

	//Date

	var mydate = new Date();
	var year = mydate.getYear();


	if (year < 1000) {
		year +=1900
	}

	var day = mydate.getDay();
	var month = mydate.getMonth();
	var daym = mydate.getDate();
	var dayarray = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	var montharray = new Array("January","February","March","April","May","June","July","Augest","September","October","November","December");

	//Date section End

	//Time


	var currentTime = new Date();
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
	var s = currentTime.getSeconds();

		if (h == 24) {
			h =0;
		}else if (h > 12) {
			h = h - 0;
		}

		if (h < 10) {
			h = "0 " + h;

		}

		if (m < 10) {

			m = "0" + m;

		}

		if (s < 10) {
			s = "0" +s;

		}

		var myClock = document.getElementById("Clockdisplay");
		myClock.textContent = "" +dayarray[day]+" " +daym+ " " +montharray[month]+ " " +year+ " | " +h+ ":" +m+ ":" +s;
		myClock.innerText = "" +dayarray[day]+" " +daym+ " " +montharray[month]+ " " +year+ "  " +h+ ":" +m+ ":" +s;


		setTimeout("renderTime()", 1000);
}

renderTime();



	</script>








    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
