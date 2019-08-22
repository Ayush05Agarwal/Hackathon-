<?php
if (isset($_POST["submit"])){
	include_once 'config.php';
	
   
    $price2=$_POST["price2"];
     $name=$_POST["name"];
    if (empty($price2)){
     	header('Location: editinfo.inc.php?changes=incomplete');
     	exit();
     	
    }
    
     else {
 	

	$sql = "UPDATE menu SET price='$price2' WHERE name='$name';"; 
	mysqli_query($mysqli, $sql);
	 
    header('Location: edit_dish_price.php?changes=complete');
	exit();
}


}