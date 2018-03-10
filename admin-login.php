<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php

    //check for form submission

    if (isset($_POST['submit'])) {


      $errors = array();

      //check if the useremail or password has been enterthecard
        if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
          $errors[] = 'user email missing or invalied';
        }
        if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
            $errors[] = ' password missing or invalied';

        }

      // check if theire are any errors in the form

      if (empty($errors)) {


                      //save username and password into variebles

                      $email = mysqli_real_escape_string($connection, $_POST['email']);
                      $password = mysqli_real_escape_string($connection, $_POST['password']);


                      //prepare database jquery

                      $query = "SELECT * FROM users
                                  WHERE `user_email` = '{$email}'
                                  AND `user_password` = '{$password}'
                                  LIMIT 1";


                        $result_set = mysqli_query($connection, $query);

                        if ($result_set) {
                          //query succesfull

                          if (mysqli_num_rows($result_set) == 1) {

                            //valied user found
                            $user = mysqli_fetch_assoc($result_set);
                            $_SESSION['user_id'] = $user['user_id'];
                            $_SESSION['user_name'] = $user['user_name'];

                            //updating last last_login

                            $query = "UPDATE users SET last_login = NOW() ";
						                $query .= "WHERE id ={$_SESSION['user_id']} LIMIT 1";


                            $result_set = mysqli_query($connection, $query);

                          /*  if (!$result_set) {
                              die("Database Query Failed.");
                            }*/

                          //redirect to admin-index.phpinfo

                            header("Location: admin-index.php");

                          }else {
                            //user name and password invalied

                            $errors[] = 'invalied user name or password';

                          }

                        }else {
                          $errors[] = 'database query failed';
                        }
                    }
                }









 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NSBM Food ordering system</title>

    <link href="css/bootstrap.css" rel="stylesheet"/>

    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <link href="css/font-awesome-animation.css" rel="stylesheet"/>

    <link href="css/prettyPhoto.css" rel="stylesheet"/>

    <link href="css/style.css" rel="stylesheet" />

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    </head>



  <body>

<div class="container">

    <div class="row" style="padding-top:50px">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div id="home-section">

                <h3 style="padding-bottom:50px;">Admin login <small>National School of Bussines Managment Food Ordering System</small></h3>

            <form action="admin-login.php" method="post" class="form-horizontal">

                  <div class="form-group">

                        <?php

                          if (isset($errors) && !empty($errors)) {
                          echo ' <div class="alert alert-danger" role="alert">Your Email / Password is Invalid</div>';
                          }



                         ?>

                         <?php

                          if (isset($_GET['logout'])) {
                            echo ' <div class="alert alert-success" role="alert">You Have Successfully logged out from the system</div>';
                          }



                          ?>

                          <label for="inputuserid" class="col-sm-2 control-label">Email Address</label>
                      <div class="col-sm-10">
                      <input type="email" name="email" class="form-control"  placeholder="E mail">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control"  placeholder="Password">
                        </div>
                  </div>
                  <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">

                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="submit" class="btn btn-info">Sign in</button>
                      </div>
                  </div>
            </form>
      </div>
    </div>

  </div>
  <div id="hr" style="padding-top:50px">
  <hr>
  </div>
</div>


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


  </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="plugins/jquery-1.10.2.js"></script>

    <script src="plugins/bootstrap.min.js"></script>


    <script src="plugins/jquery.prettyPhoto.js"></script>

    <script src="js/custom.js"></script>

  </body>
</html>

<?php mysqli_close($connection); ?>
