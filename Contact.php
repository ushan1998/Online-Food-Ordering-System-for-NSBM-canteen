

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



    <!--CONTACT SECTION-->
    <section  id="services-sec">
        <div class="container">
            <div class="row ">
                <div class="text-center g-pad-bottom">
                   <div class="col-md-4 col-sm-4 alert-info">
                            <h4><i class="fa fa-laptop fa-2x" ></i>&nbsp;Our Vission </h4>
                            <p>

								Every great restaurant has a great mission statement. Mission statements, s
								and passion statements are essential for businesses of all kind -
								 and restaurants serve up some of the very best

                            </p>

                    </div>
                    <div class="col-md-4 col-sm-4 alert-success">
                            <h4><i class="fa fa-microphone fa-2x" ></i>&nbsp;Our Values</h4>
                            <p>
                              The most influential decisions you will make for your restaurant will happen during the start-up phases.
							  Before opening your restaurant startup, you need to determine your vision,
							  mission, culture, and values.
                            </p>

                    </div>

                    <div class="col-md-4 col-sm-4 alert-danger">
                            <h4><i class="fa fa-pencil fa-2x" ></i>&nbsp; Our Mission </h4>
                            <p>
                                Our Mission at Denny’s is to establish beneficial business relationships with diverse
								suppliers who share our commitment to customer service,
								quality and competitive pricing.
                            </p>

                    </div>
                </div>
                  </div>


        </div>
    </section>

    <section>
        <div class="container">

            <div class="row g-pad-bottom">
                <div class="col-md-6 ">
                    <h2>Contact Details </h2>

                    <p>
                         <strong> Address: </strong> 309 Dampe - Pitipana Rd,  Colombo  <br>
                <strong> Hotline: </strong> 0115 445 000 <br>
                <strong> E-mail : </strong> foods@nsbm.com</b>
                </p>
                    </p>

					<p>

					If you have any Request ?? Let me know
					</p>
                    <form action="public-msg.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <textarea name="message"  required="required" class="form-control" rows="3" placeholder="Message" ></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div id="map" style="height:400px;width:100%"></div>

                </div>
            </div>
        </div>
    </section>
    <!--END CONTACT SECTION-->





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
                    <a href="Contact.html">Contact us</a>

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

<!--script for creating google map-->

<script>
      function initMap() {
        var uluru = {lat: 6.820977399999999, lng: 80.0407895};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDKzLQ5jghYLRiHppkpfTjxLro6NDKihM&callback=initMap">

    </script>

<!--end of the  google map creation -->
    <script src="plugins/jquery-1.10.2.js"></script>

    <script src="plugins/bootstrap.min.js"></script>

    <script src="plugins/jquery.isotope.min.js"></script>

    <script src="plugins/jquery.prettyPhoto.js"></script>

    <script src="js/custom.js"></script>

</body>
</html>
