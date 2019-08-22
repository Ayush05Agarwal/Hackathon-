<!DOCTYPE html>
<html>
<head>


</head>
<body align='center'>
<?php
    if (isset($_POST['submit'])) {
	include_once 'config.php';

	$name = $_POST["name"];
	

	$sql = "SELECT * FROM menu WHERE name='$name';";
	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck>0){
		while($row = mysqli_fetch_assoc($result)){
			
			echo "DISH PRICE : " .$row['price']."<br>";
            echo "<br>";
         
	 

}		
}	
}
?>


<form action="update.inc.php" method="POST">
	CHANGES TO BE APPLIED:<br><br>
	DISH PRICE:
	<input type="int" name="price2"><br><br> 

	
	<button type="submit" name="submit"> APPLY CHANGES </button>
	

</form>

<?php
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
if(strpos($fullUrl , "changes=incomplete")==true)
{  echo "INCOMPLETE CHANGES";
 exit();
}
?>
</body>
</html>
