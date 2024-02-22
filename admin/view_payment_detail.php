<?php include("header/header.php");?> 
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>MANAGE</p>
         <h2>Payment Details</h2>
      </header>
   </div>
</section>

<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto"><?php
      $sql = "select cust_id,art_id,delivery_address,bart_price from booking_info"; // this is query for displaying all payment details
      $run = mysqli_query( $con, $sql );
      echo "<table class='container divform'>
      	<tr>
      	<th>Customer Id</th>
      <th>Productd Id</th>
      <th>Address </th>
      <th>Amount</th>
      	</tr>";
      while ( $result = mysqli_fetch_array( $run ) ) {
      	echo "<tr>
      <td>$result[0]</td>
      <td>$result[1]</td>
      <td>$result[2]</td>
      <td>$result[3]</td>
      		</tr>";
      }
      echo "</table>";
      mysqli_close( $con );
      ?> </div>
</section>

<?php include( "../footer/footer.php" );?>