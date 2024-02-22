<?php include("header/header.php"); ?>
<?php
$cid=$_GET['id'];
$run_cust=mysqli_query($con,"select * from customer_info where cust_id=$cid");
//$cust_result=mysqli_fetch_array($run_cust);
?>
<section>
<div class="container divform">
	<h2 style="
    margin-top: 10px;
">Donation</h2>
	<form action="" method="post" name="f1">
		<div class="form-group">
			<label for="ci">Email:</label>
			<input type="text" class="form-control" id="ci" name="mail" placeholder ="Enter mail" required >
		</div>
		
		<div class="form-group">
                  <label for="pr">Donation(Tk.):</label>
                  <input type="text" class="form-control" id="pr" name="a3" placeholder="Enter Donation Amount" required>
               </div>
		<button type="submit" class="btn btn-primary" name="sub">Submit</button>
	</form>
</div>
</div>
</section>

<!--End this is form for customer registration-->
<?php
if ( isset( $_POST[ 'sub' ] ) ){
	$a12=$_POST['mail'];
	$a13=$_POST['a3'];
	
	$sql = "INSERT INTO donation (cust_email,amount) VALUES ('$a12', '$a13')"; // this is query for adding feedback by customer.
	if (mysqli_query($con, $sql)) {
    echo "<script>alert('Thanks for your Donation.\\n Thanks!');
	window.location.assign('../customer/')
	</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
	?>
	<?php include("../footer/footer.php"); ?> 