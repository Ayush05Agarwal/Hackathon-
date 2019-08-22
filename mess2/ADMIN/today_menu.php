
<?php

	include_once 'config.php';
	

	$sql = "SELECT * FROM menu WHERE status=1 && category='daal';";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
					echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>PULSES</th><tr>";
		while($row = mysqli_fetch_assoc($result)){


			echo "<form method='POST' action='#'>";

			echo "<tr><td>".$row['name']."<br><td></tr>";
			echo "<input type='hidden' name='time0' />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='delete' /> DELETE </button></td>";
   
          echo "</form>";
          
 		}
		echo "</table>";
		

	
}

$sql = "SELECT * FROM menu WHERE status=1 && category='sabji';";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
					echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>VEGETABLES</th></tr>";
		while($row = mysqli_fetch_assoc($result)){


			echo "<form method='POST' action='#'>";

			echo "<tr><td>".$row['name']."<br><td></tr>";
			echo "<input type='hidden' name='time0' />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='delete' /> DELETE </button></td>";
   
          echo "</form>";
          
 		}
 		echo "</table>";
		
		

	
}

$sql = "SELECT * FROM menu WHERE status=1 && category='sweets';";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
			echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>SWEETS</th></tr>";
		while($row = mysqli_fetch_assoc($result)){


			echo "<form method='POST' action='#'>";

			echo "<tr><td>".$row['name']."<br><td></tr>";
			echo "<input type='hidden' name='time0' />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='delete' /> DELETE </button></td>";
   
          echo "</form>";
          
 		}
		
		echo "</table>";

	
}


$sql = "SELECT * FROM menu WHERE status=1 && category='extras';";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
					echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>EXTRAS</th></tr>";
		while($row = mysqli_fetch_assoc($result)){


			echo "<form method='POST' action='#'>";

			echo "<tr><td>".$row['name']."<br><td></tr>";
			echo "<input type='hidden' name='time0' />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='delete' /> DELETE </button></td>";
   
          echo "</form>";
          
 		}
		echo "</table>";
		

	
}


$sql = "SELECT * FROM menu WHERE status=1 && category='roti';";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
					echo "<table border = '1' cellpadding='10'>";
	echo "<tr><th>CHAPATI</th></tr>";
		while($row = mysqli_fetch_assoc($result)){


			echo "<form method='POST' action='#'>";

			echo "<tr><td>".$row['name']."<br><td></tr>";
			echo "<input type='hidden' name='time0' />";
	    echo "<input type='hidden' value=".$row['name']." name='name' />";
	    echo "<input type='hidden' value=".$row['menu_id']." name='menu_id' />"; 
	    echo "<td><button type='submit' name='type' value='delete' /> DELETE </button></td>";
   
          echo "</form>";
          
 		}
		echo "</table>";
		

	
}







if(isset($_POST["type"]) && $_POST["type"]=='delete'){
	
	                 $rowtodelete = $_POST['menu_id'];
	                 $sql="UPDATE menu SET status=0 WHERE menu_id=".$rowtodelete.";";
                         mysqli_query($mysqli,$sql);
                         header("Location: today_menu.php");
                          }







