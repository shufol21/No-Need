<?php include("header/header.php"); ?>
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>Top Products</p>
         <h2>Best Items</h2>
      </header>
   </div>
</section>

<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">
      <!--this is table for  all customer-->
      <div style="overflow:scroll;">
         <?php
            $sql = "SELECT art_id,art_name,art_price
            FROM art_info
            WHERE art_price>(SELECT AVG(art_price)
                                      FROM art_info)
                     "; 
                     
                     
                     
            $run = mysqli_query( $con, $sql );
            echo "<table class='divform'>
            <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            
            
           
            </tr>";
            while ( $result = mysqli_fetch_array( $run ) ) { // this is function for fetchinh the data as an array.
            	echo "<tr>
            	<td>$result[0]</td>
            <td>$result[1]</td>
            <td>$result[2]</td>
            
           

            	</tr>";
            }
            echo "</table>";
            mysqli_close( $con );
            ?>
      </div>
   </div>
</section>

<?php include( "../footer/footer.php" );?>