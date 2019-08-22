
<?php
	include_once 'config.php';
    session_start();
   



    $user=$_SESSION['user'];
    
    
   
    $date0=DATE('y-m-d');
    $query = "INSERT INTO orders (date0, status, name) VALUES ('$date0' , 0, '$user');";
    $result= mysqli_query($mysqli, $query);
    
        header ('Location: index.php');

    ?>