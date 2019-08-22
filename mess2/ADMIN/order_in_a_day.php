<?php

	include_once 'config.php';
	echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>ORDER NO.</th> <th>CUSTOMER NAME</th></tr>";
	$total=0;
   $date0=DATE('y-m-d');
	$sql = "SELECT * FROM orders WHERE date0='$date0' ;";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
		while($row = mysqli_fetch_assoc($result)){
	     echo '<tr><td>'.$row['order_id'].'</td>';
	echo '<td>'.$row['name'].'</td></tr>';
	        
              $total+=1;



		}
	      echo "</table>";
          echo "TOTAL NO. OF CUSTOMERS=".$total;
	
}