<?php include("header/header.php");?> 
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>Supporters</p>
         <h2>Top customers</h2>
      </header>
   </div>
</section>

<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto"><?php
      $sql = "SELECT * 
      FROM donation 
      LEFT JOIN customer_info 
      ON donation.cust_email=customer_info.cust_email;"; // this is query for displaying all payment details
      $run = mysqli_query( $con, $sql );
      echo "<table class='container divform'>
      	<tr>
      	<th>Customer Id</th>
      
      <th>Amount</th>
      	</tr>";
      while ( $result = mysqli_fetch_array( $run ) ) {
      	echo "<tr>
      <td>$result[0]</td>
      <td>$result[1]</td>
     
      		</tr>";
      }
      echo "</table>";
      mysqli_close( $con );
      ?> </div>
</section>

<?php include( "../footer/footer.php" );?>