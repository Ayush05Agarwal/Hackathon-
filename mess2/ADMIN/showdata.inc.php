<?php

	include_once 'config.php';
	echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>DISH NAME</th> <th>PRICE</th></tr>";

	$sql = "SELECT * FROM menu ;";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
		while($row = mysqli_fetch_assoc($result)){
	     echo '<tr><td>'.$row['name'].'</td>';
	echo '<td>'.$row['price'].'</td></tr>';
	        
              



		}
	      echo "</table>";

	
}