<?php
session_start();
include_once("config.php");
 

?>


<!DOCTYPE html>
<html>
<head>
	<title>signin</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body style="background-image: url(images/log.jpg);background-size: cover;">
	<center>
		<div class="box">
		<h1>Sign Up <small>For new member.</small></h1>
<form method="POST" action="signup.php" >
	<input type="text" name="name" placeholder="name">
	<br>
	
	<input type="text" name="email" placeholder="email id">
	<br>
	<input type="tel" name="contactno" placeholder="mobile no">
	<br>
	<input type="text" name="address" placeholder="address">
	<br>
	<input type="text" name="password" placeholder="password">
	<br><br>
	<input type="submit" name="submit">
</form>
</div>
</center>
</body>
</html>

<?php
if (isset($_POST['submit'])) {

  $name = $_POST["name"];
  $contact = $_POST["contactno"];
  $add = $_POST["address"];
  $email = $_POST["email"];
  $password = $_POST["password"];
     
  
if (empty($name) || empty($contact) || empty($add) || empty($email) || empty($password)){
   $_SESSION['signup']=3;
 echo "INCOMPLETE INFORMATION";
 
 
}
    
else { 
            $sql = "SELECT * FROM mess_login WHERE email='$email';";
  $result=mysqli_query($mysqli, $sql);
   if(mysqli_num_rows($result)==0){
            $_SESSION['signup']=0;
  
  $sql = "INSERT INTO mess_login (name, contact, address, email, password) VALUES ('$name', '$contact', '$add', '$email', '$password');";
  mysqli_query($mysqli, $sql);
   header('Location: signup.php');
  
  exit();
  } 

     else{
                $_SESSION['signup']=2;
               header('Location: signup.php');
  }

}
         }





       if($_SESSION['signup']==0){
           echo "YOUR ACCOUNT IS SUCCESSFULLY CREATED ";
           echo "NOW YOU CAN LOGIN";
            }
      


        else if($_SESSION['signup']==2){
           echo "THIS EMAIL IS ALREADY USED . ";
           echo "  USE ANOTHER EMAIL";
            }
      

?>
