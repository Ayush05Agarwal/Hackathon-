<?php
session_start();
include_once("config.php");
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mess</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<div class="top">
	<div class="navigation">
		<span class="logo"><b>Mess</b></span>
				<!-- Mobile dropdown -->
                <span id="hamburgericon" class="hidden-lg" onclick="openNav()">&#9776;</span>
                <span class="hidden-lg" onclick="myFunction()" style="float: right;font-size: 20px;margin: 5px 5px;">&#128276;</span>
                

                <div id="mySidenav" class="sidenav">
                    <span href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</span>
                <br><br>
                    <a href="#top"><div class="sidenavls" onclick="closeNav();closeprofile();closehelp()">HOME</div></a>
                    <div class="sidenavls">ABOUT</div>
                    <div class="sidenavls">TODAY'S MENU</div>
                    <div class="sidenavls">CONTACT US</div>
                    <div class="sidenavls">HELP</div>
                </div>
                <!-------------------------->

                <!-- Desktop navigation -->
                <div class="navdesk hidden-xs ">
                     <span onclick="myFunction()">&#128276;</span>
                     <span>ABOUT</span>
                     <span>HELP</span>
                     <span>CONTACT US</span>
                </div>

                <!-------------------------->

                <div id="myDIV">
                    <center>Notifications</center>
                    <hr>
                </div>

    </div>
	<br>	
		<div class="caption">
			<center>
				<p>
					Nothing is better than getting home like food.
				</p>
			</center>
		<br>
		<?php if (empty($_SESSION['user'])){
     ?>

		<a href="menu.php"><button class="menubtn"><b>MENU</b></button></a>
		<a href="login.php"><button class="loginbtn"><b>LOGIN</b></button></a>
     <?php } 
else{

     ?>
     <a href="menu.php"><button class="menubtn"><b>MENU</b></button></a>
		<a href="login.php"><button class="loginbtn"><b>LOGOUT</b></button></a>
	<?php } 
  ?>
		</div>

</div>

<div class="plans">
	<center><h3>Plans and Pricing</h3></center>

	<div class="plan1">
		<div class="red">plan 1</div>
		<div class="black">Rs.1400|1 month</div>
		<p>1 Vegetable</p><hr>
		<p>4 Chapati</p><hr>
		<p>1 Bowl Rice</p><hr>
		<p>1 Bowl Daal</p><hr>
        	
        <?php





if (empty($_SESSION['user'])){
     header('Location: login.php');
}






$results = $mysqli->query("SELECT * FROM membership WHERE mem_id=2");

if($results){ 
    
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
                <div class="inside"></div>
                <div class="inside2">

    <form method="post" action="#">

    
     <div class="product-info">
    
    <input type="hidden" name="mem_id" value="{$obj->mem_id}" />
    <input type="hidden" name="no_of_meals" value="{$obj->no_of_meals}" />
    <input type="hidden" name="validity" value="{$obj->validity}" />
    <input type="hidden" name="type" value="add" />

    <div align="center"><button type="submit" name="type2" value="add" class="insidebt btn-danger"><a href="payment.php"> SUBSCRIBE </a></button></div>
      </form>

      

        </div>  

                </div>

EOT;
}
$products_item .= '</ul>';
echo $products_item;
}
?>
</div>
<?php


if (isset($_POST["type"]) && isset($_POST["type"])=="submit"){
    $valid=$_POST["validity"];
    $mem_id = $_POST["mem_id"];
    $user=$_SESSION['user'];
    $date0=DATE('y-m-d');
     $query = "INSERT INTO take (date0, mem_id, email_id) VALUES ('$date0' , '$mem_id', '$user');";
    $result= mysqli_query($mysqli, $query);
    
        header ('Location: index.php');
    
}


?>
  
	<div class="plan2">
		<div class="red">plan 2</div>
		<div class="black">Rs.2500|2 month</div>
		<p>1 Vegetable</p><hr>
		<p>4 Chapati</p><hr>
		<p>1 Bowl Rice</p><hr>
		<p>1 Bowl Daal</p><hr>
	


<?php




if (empty($_SESSION['user'])){
     header('Location: login.php');
}





$results = $mysqli->query("SELECT * FROM membership WHERE mem_id=3");

if($results){ 
    
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
                <div class="inside"></div>
                <div class="inside2">

    <form method="post" action="#">
    <div class="product-info">
    
    <input type="hidden" name="mem_id" value="{$obj->mem_id}" />
  
    <input type="hidden" name="validity" value="{$obj->validity}" />
    <input type="hidden" name="type" value="add" />

    <div align="center"><button type="submit" name="type2" value="add" class="insidebt btn-danger"><a href="payment2.php"> SUBSCRIBE </a></button></div>
      </form>

      

        </div>  

                </div>

EOT;
}
$products_item .= '</ul>';
echo $products_item;
}



if (isset($_POST["type2"]) && isset($_POST["type2"])=="submit"){
    $valid=$_POST["validity"];
    $mem_id = $_POST["mem_id"];
    $user=$_SESSION['user'];
    $date0=DATE('y-m-d');
     $query = "INSERT INTO take (date0, mem_id, email_id) VALUES ('$date0' , '$mem_id', '$user');";
    $result= mysqli_query($mysqli, $query);
    
        header ('Location: index.php');
    
}


?>
</div>

	<div class="plan3">
		<div class="red">plan 3</div>
		<div class="black">Rs.3500|3 month</div>
		<p>1 Vegetable</p><hr>
		<p>4 Chapati</p><hr>
		<p>1 Bowl Rice</p><hr>
		<p>1 Bowl Daal</p><hr>
	

<?php




if (empty($_SESSION['user'])){
     header('Location: login.php');
}





$results = $mysqli->query("SELECT * FROM membership WHERE mem_id=4");

if($results){ 
    
$products_item = '<ul class="products">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$products_item .= <<<EOT
     <div class="outer">
                <div class="inside"></div>
                <div class="inside2">

    <form method="post" action="#">
    <div class="product-info">
    
    <input type="hidden" name="mem_id" value="{$obj->mem_id}" />
  
    <input type="hidden" name="validity" value="{$obj->validity}" />
    <input type="hidden" name="type" value="add" />

    <div align="center"><button type="submit" name="type3" value="add" class="insidebt btn-danger"><a href="payment3.php"> SUBSCRIBE </a></button></div>
      </form>

      

        </div>  

                </div>

EOT;
}
$products_item .= '</ul>';
echo $products_item;
}



if (isset($_POST["type3"]) && isset($_POST["type3"])=="submit"){
    $valid=$_POST["validity"];
    $mem_id = $_POST["mem_id"];
    $user=$_SESSION['user'];
    $date0=DATE('y-m-d');
     $query = "INSERT INTO take (date0, mem_id, email_id) VALUES ('$date0' , '$mem_id', '$user');";
    $result= mysqli_query($mysqli, $query);
    
        header ('Location: index.php');
    
}


?>




</div>
</div>


<!-- FOOTER -->
<div class="section-footer">  
  <div id="down">
    <a href="">about us</a> | <a href="">help</a>
    <p>mess@gmail.com</p>
    <p>895658xxxx</p>
  </div>  
    <div id="sociallinks">
    <a href=""><img src="images/fb.png"></a>
    <a href=""> <img src="images/instagram.png"></a>
    <a href=""><img src="images/github.png"></a>
  </div>


  <div id="copyright">

<center><h5>Mess © All Rights Reserved</h5></center>
  </div>

</div>


  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="index.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>

</body>
</html>