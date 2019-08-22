<?php
session_start();
include_once("config.php");
$_SESSION['signup']=1;
unset ($_SESSION['user']);

?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body style="background-image: url(images/log.jpg);background-size: cover;">
	<center>

<div class="box">
	<h1>Sign In  <small>For existing member.</small></h1>
<form method="POST">
	<input type="text" name="user_name" placeholder="user name">
	<br>
	<input type="password" name="password" placeholder="password">
	<br><br>
	<button name="submit" type="submit" onclick="login()">Login</button>


	<br><br>
	<a href="signup.php">create new account</a>
	| <a href="">Forgot password</a>
</form>
</div>
</center>
</body>
</html>

<?php
if (isset($_POST["submit"])){
    $pass=$_POST["password"];
    $user = $_POST["user_name"];
     $query = "SELECT * FROM mess_login WHERE email='$user' && password='$pass';";
    $result= mysqli_query($mysqli, $query);
    if(mysqli_num_rows($result)>0){
        $_SESSION['user']=$user;
        

        header ('Location: index.php');
    }
    else {
         echo '<script>alert("Enter correct information.")</script>';
    }
}


?>
