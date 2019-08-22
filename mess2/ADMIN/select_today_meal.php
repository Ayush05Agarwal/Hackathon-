
<?php
   $_SESSION['meal_id']=0;
  
	include_once 'config.php';
	session_start();
    $insert = "UPDATE meal SET status=1;";
	mysqli_query($mysqli,$insert);
   $insert = "UPDATE menu SET status=0;";
	mysqli_query($mysqli,$insert);
   


	$sql = "SELECT * FROM menu WHERE status=0 && category='daal' ;";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
		echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>PULSES</th></tr>";

		while($row = mysqli_fetch_assoc($result)){
			echo "<form method='POST' action='#'>";

			echo "<tr><td>DISH NAME : ".$row['name']."<br><td></tr>";
			echo "<input type='number' name='time0' placeholder=lunch/dinner />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='proceed' /> PASS </button></td>";
   
          echo "</form>";
 		}
		echo "</table>";
		

	
}



$sql = "SELECT * FROM menu WHERE status=0 && category='roti' ;";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
		echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>CHAPATI</th></tr>";

		while($row = mysqli_fetch_assoc($result)){
			echo "<form method='POST' action='#'>";

			echo "<tr><td>DISH NAME : ".$row['name']."<br><td></tr>";
			echo "<input type='number' name='time0' />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='proceed' /> PASS </button></td>";
   
          echo "</form>";
 		}
		echo "</table>";
		

	
}

$sql = "SELECT * FROM menu WHERE status=0 && category='sabji' ;";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
		echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>VEGETABLES</th></tr>";

		while($row = mysqli_fetch_assoc($result)){
			echo "<form method='POST' action='#'>";

			echo "<tr><td>DISH NAME : ".$row['name']."<br><td></tr>";
			echo "<input type='number' name='time0' />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='proceed' /> PASS </button></td>";
   
          echo "</form>";
 		}
		echo "</table>";
		

	
}

$sql = "SELECT * FROM menu WHERE status=0 && category='sweets' ;";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
		echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>SWEETS</th></tr>";

		while($row = mysqli_fetch_assoc($result)){
			echo "<form method='POST' action='#'>";

			echo "<tr><td>DISH NAME : ".$row['name']."<br><td></tr>";
			echo "<input type='number' name='time0' />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='proceed' /> PASS </button></td>";
   
          echo "</form>";
 		}
		echo "</table>";
		

	
}

$sql = "SELECT * FROM menu WHERE status=0 && category='extras' ;";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	
 
	if($resultCheck>0){
		echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>EXTRAS</th></tr>";

		while($row = mysqli_fetch_assoc($result)){
			echo "<form method='POST' action='#'>";

			echo "<tr><td>DISH NAME : ".$row['name']."<br><td></tr>";
			echo "<input type='number' name='time0' />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='proceed' /> PASS </button></td>";
   
          echo "</form>";
 		}
		echo "</table>";
		

	
}
	
	


if((isset($_POST["type"]) && $_POST["type"]=='proceed')){ 
	  
      $time0=$_POST['time0'];
	$name = $_POST['name'];
    $menu_id = $_POST['menu_id'];
    $date0=date('y-m-d');
   
   $mi=$_SESSION['meal_id'];
       include_once 'config.php';
	$insert = "INSERT INTO meal (date0,time0) VALUES ('$date0','$time0');";
	mysqli_query($mysqli,$insert);
   
    $insert = "UPDATE menu SET status=1 WHERE name='$name';";
	mysqli_query($mysqli,$insert);

//   $insert = "INSERT INTO contains (meal_id,menu_id) VALUES ('$mi','$menu_id');";
//	mysqli_query($mysqli,$insert);
     
    
   
 header("Location: select_today_meal.php");
    }


                         
                          



?>

