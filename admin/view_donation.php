<?php include("header/header.php"); ?>
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>History</p>
         <h2>DONATION</h2>
      </header>
   </div>
</section>

<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">
      <?php
         $sql="select * from donation"; // this query for displaying all feedback 
         $run=mysqli_query($con,$sql);
         // this is table for feedback to all customer 
         echo "<table class='container divform'>
         <tr>
         <th>Email Id</th>
         <th>Amount</th>
         <th>Delete</th>
         
         
         </tr>";
         while($result=mysqli_fetch_array($run))
         {
         	echo "<tr>
         	<td>$result[0]</td>
         <td>$result[1]</td>
        
         <td><a class='button special-red' href='delete_feedback.php?id=$result[0]' class='btn btn-danger'>delete</a></td>
      
         	</tr>";
         }
         echo "</table>";
         ?>
   </div>
</section>

<?php include("../footer/footer.php"); ?>