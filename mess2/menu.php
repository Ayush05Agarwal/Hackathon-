<?php

	include_once 'config.php';
    session_start();
    $_SESSION['ti']=0;
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: lightblue">

<div class="menuhd">
	<center><b>Today's Menu</b></center>
</div>

<div class="menucontent">
	<?php
    $sql="SELECT * FROM meal WHERE status=0";

	$result = mysqli_query($mysqli, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	if($resultCheck>0){
			
	
		while($row = mysqli_fetch_assoc($result)){


			echo "<form method='POST' action='#'>";

			
             $_SESSION['ti']=$row['time0'];

         }
     }
     $b=$_SESSION['ti'];
     if($b==0){
?>
	<div class="lunch">
			<center>Lunch</center>
			
			<img src="images/image1.jpg">
			<span>Rice</span>
			<hr>
			<img src="images/image1.jpg">
			<span>daal</span>
			<hr>
			<img src="images/image1.jpg">
			<span>tortila</span>
			<hr>
			<p>would you like to order this Menu?</p>
			<center>
				<button class="poll yes" name="yes1"><a href="payment.php">YES</a></button>
				<button class="poll" name="no1"><a href="index2.php">NO</a></button>
			</center>

	</div>
<?php }
else if($b==1){
	?>


	<div class="dinner">
			<center>Dinner</center>
			
			<img src="images/image1.jpg">
			<span>Rice</span>
			<hr>
			<img src="images/image1.jpg">
			<span>daal</span>
			<hr>
			<img src="images/image1.jpg">
			<span>tortila</span>
			<hr>
			<p>would you like to order this Menu?</p>
			<center>
				<button class="poll yes" action="payment.php" name="yes" method="POST">YES</button>
				
				<button class="poll" name="no"><a href="index2.php">NO</a></button>	</center>
	</div>
<?php }
?>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="index.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>

</body>
</html>
