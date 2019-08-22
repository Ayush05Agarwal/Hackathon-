<?php

	include_once 'config.php';
    session_start();
   



    $user=$_SESSION['user'];
    
    
   
    $date0=DATE('y-m-d');
     $query = "INSERT INTO take (date0, mem_id, email_id, payment_status) VALUES ('$date0' , 3, '$user',0);";
    $result= mysqli_query($mysqli, $query);
    
        header ('Location: index.php');

    ?>
