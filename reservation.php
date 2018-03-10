<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NSBM food ordering system </title>
    <link rel="shortcut icon" type="img/png" href="img/nsbm.png">

    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <link href="css/font-awesome-animation.css" rel="stylesheet" />

    <link href="css/prettyPhoto.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet" />

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
   </head>
<body>

     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
         <h3 style="letter-spacing:2px;">NSBM FOOD ORDERING SYSTEM</h3>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="reservation.php">RESERVATION</a></li>
                      <li><a href="Gallery.php">GALLERY</a></li>
                    <li><a href="Contact.php">CONTACT US</a></li>
                      <li><a href="admin-login.php">LOG IN</a></li>


                </ul>
            </div>

        </div>
    </div>


     <!--END NAV SECTION -->
	 <hr>


    <div class="container">

        <div class="reservation-sec" style="padding-top:80px;">



        <div class="reservation-form">

        <h2>Billing Info</h2>
                  <form action="online-orders.php" method="POST">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Name :</label>
                      </div>
                      <input type="text" class="form-control" name="inputusername" placeholder="name" required>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Address :</label>
                          <input type="text" class="form-control" name="inputaddress" placeholder="address" required>
                      </div>

                      <div class="form-group">
                          <label for="exampleInputPassword1">Telephone no :</label>
                          <input type="number" class="form-control" name="inputtelnumber" placeholder="telephone number" required>
                      </div>

                     <h2>Event Details</h2>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Date & Time:</label>
                          <input type="datetime-local" class="form-control" name="exampleInputdate" required>
                      </div>

                      <label for="paymentmethods">Payment Method :</label>
                          <select class="form-control" name="paymentselect" required>
                              <option value="cash">Cash</option>
                              <option value="card">Credit/Debit Cards</option>

                          </select>

                          <label for="cardtype">Debit/Credit Card Type :</label>
                              <select class="form-control" name="cardtype" required>
                                  <option value="amex">American Express</option>
                                  <option value="visa">Visa</option>
                                  <option value="master card">Master Card</option>

                              </select>


                              <div class="enterthecard-number">
                                  <div class="form-group">
                                      <label for="cardnumber">Enter the card number :</label>
                                      <input type="number" class="form-control" name="cardnumber" required>
                                  </div>
                              </div>

                          <h5 style="padding-top:50px">Choose your meal :</h5>
                          <div class="choose-food">
                              <select class="form-control" name="foodselect" required>
                                <option value="Rice and Curry">Rice and Curry</option>
                                <option value="Rice and Chicken Curry">Rice and Chicken Curry</option>
                                <option value="Rice and Fish Curry">Rice and Fish Curry</option>
                                <option value="Rice and Egg Curry">Rice and Egg Curry</option>
                                <option value="String Hoppers">String Hoppers</option>
                                <option value="Egg Hopper">Egg Hopper</option>
                                <option value="Sugur Bun">Sugur Bun</option>
                                <option value="Egg Role">Egg Role</option>
                                <option value="Burgger">Burgger</option>
                                <option value="Noodles">Noodles</option>
                                <option value="pasta">pasta</option>
                                <option value="Roti">Roti</option>
                                <option value="Donut">Donut</option>
                                <option value="Sanwitch">Sanwitch</option>

                              </select>



                          </div>

                          <div class="enter-qty" style="padding-top:20px;">
                              <div class="form-group">
                                  <label for="qty">Enter the QTY</label>
                                  <input type="number" class="form-control" name="qty" maxlength="20" required>
                              </div>
                          </div>




                      <div class="submit-button" style="padding-top:100px;">
                      <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                  </form>

        </div>

    </div>

</div>






    <!--FOOTER SECTION -->
<footer class="footer-distributed">

    <div class="footer-left">

        <img src="img/nsbm.png" alt="">

        <p class="footer-links">
          			 <a href="index.php">Home</a>
                    ·
                    <a href="reservation.php">Resevation</a>
                    ·
                    <a href="Gallery.php">Gallery</a>
                    ·
                    <a href="Contact.php">Contact us</a>

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
            <span>@ N S B M Foods</span>
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
    <!-- END FOOTER SECTION -->


    <script src="plugins/jquery-1.10.2.js"></script>

    <script src="plugins/bootstrap.min.js"></script>

    <script src="plugins/jquery.isotope.min.js"></script>

    <script src="plugins/jquery.prettyPhoto.js"></script>

    <script src="js/custom.js"></script>

</body>
</html>
