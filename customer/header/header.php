<?php
include("../connection.php");
  session_start(); 

  $cid = $_SESSION[ "uid" ];

  ?>

<!doctype html>

<html lang="en">

  <head>

   <title>Customer - <?php echo $_SESSION["name"]; ?> - NOneed </title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../boots/css/bootstrap.css">


    <script src="../boots/js/bootstrap.js"></script>

    <link rel="stylesheet" href="../css/style.css">

	

	<link rel="stylesheet" href="../assets/css/main.css" />




<script src="../boots/js/jquery.js"></script>


			<script src="../assets/js/jquery.min.js"></script>

			<script src="../assets/js/jquery.scrollex.min.js"></script>

			<script src="../assets/js/skel.min.js"></script>

			<script src="../assets/js/util.js"></script>

			<script src="../assets/js/main.js"></script>



 </head>



    

<header>

<nav class="#header" >




			<header id="header" class="alt" >

				<div class="logo"><a href="index.php"> <span>NOneed </span></a></div>

			
 <a href="javascript:;" style="padding: 0px 0;color:#000;margin-right: 3em;">

                  <form class="navbar-form navbar-left" action="welcome.php" method="post">

                    <div class="input-group" >

                      <input list="browsers" name="proname" type="text" class="form-control" style="
    color: white; max-height: 35px;
" placeholder="   " required>

                      <datalist id="browsers">

                        <option value="Handmade">

                        <option value="Recycled">

                        <option value="Painting">

                        <option value="Ornaments">

                       

                      </datalist>

                      <div class="input-group-btn">

                      
                      <i class="glyphicon glyphicon-search"></i>

                      </button>

                      </div>

                    </div>

                  </form>

                </a>

   				</a> 
				<a href="#menu"><p class="custom-para">Menu</p></a>

			</header>




			<nav id="menu">

				<ul class="links">

					<li><a href="index.php">Home</a>

					</li>

          <li><a href="give_donation.php?id2=<?php echo $cid;?>">Donation</a>

					</li>

					<li><a href="cancel_booking.php?id2=<?php echo $cid;?>">Cancel Delivery</a>

					</li>

					<li><a href="add_feedback_by_cust.php?id=<?php echo $cid;?>">Feedback</a>

					</li>

					<li><a href="view_payment_cust.php?id=<?php echo $cid;?>">View Payment Detail</a>

          </li>
<li><a href="exhibitionevents.php">View Exhibition & Events
</a>

          </li>

					<li><a class="a button special" href="cust_logout.php?id=<?php echo $cid;?>">Logout</a>

					</li>

					

			</nav>

 

</nav>

</header>

  <body >