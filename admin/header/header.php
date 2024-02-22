<?php
include("../connection.php");
session_start(); // Start the session
$a=$_SESSION["adminid"];
?>
<!doctype html>
<html lang="en" class="gr__localhost" style="
    margin-top: 67px;
    background-color: GREEN;
">
<head>
<title>Admin - <?php echo $_SESSION["admin"]; ?> - NOneed </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="../assets/css/main.css" />
<!-- jQuery library -->
<script src="../boots/js/jquery.js"></script>
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
<!-- Latest compiled JavaScript -->

<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

</head>


<header>
<nav class="#header">

  <!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php"> <span>NOneed</span></a></div>
				<a href="#menu"><p class="custom-para">Menu</p></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="view_booking_detail.php">View Bookings Details </a></li>
					<li><a href="view_payment_detail.php">View Payments Details </a></li>
					<li><a href="Payment.php">Prioritised Customers</a></li>
					<li><a href="add_product.php">Add Crafts</a></li>
					<li><a href="view_donation.php">View Donation</a></li>
					<li><a href="delete_modify_product.php">Modify Crafts</a></li>
					<li><a href="delete_customer_detail.php">Modify Customers </a></li>
					<li><a href="manage_feedback.php">Manage Feedbacks</a></li>
					<li><a href="add_exhibitionevents.php">Add Exhibition &amp; Events</a></li>
					<li><a href="manage_exhibitionevents.php">Modify Exhibition &amp; Events</a></li>
					<li><a href="donate_customer.php">Best Product List </a></li>
					<li><a class="a button special" href="admin_logout.php?id=<?php echo $a;?>">Log Out</a></li>
				</ul>
			</nav>
 
</nav>
</header>
<body>