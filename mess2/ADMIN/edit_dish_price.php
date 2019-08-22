<!DOCTYPE html>
<html>
<head>


</head>
<body align='center'>

<form action="editinfo.inc.php" method="POST">
	DISH NAME:
	<input type="text" name="name"><br><br>
	
	<button type="submit" name="submit"> SUBMIT </button>
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